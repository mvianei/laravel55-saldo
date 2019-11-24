<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\User;

class Balance extends Model
{
    //
    public $timestamps = false;

    public function deposit(float $value): array
    {
        //dd($value);
        //dd($this->amount);

        DB::beginTransaction();

        $totalBefore = $this->amount ? $this->amount : 0;
        $this->amount += number_format($value, 2, '.', '');
        $deposit = $this->save();

        $historic = auth()->user()->historics()->create([
            'type' => 'I',
            'amount' => $value,
            'total_before' => $totalBefore,
            'total_after' => $this->amount,
            'date' => date('Ymd'),
        ]);

        if ($deposit && $historic) {

            DB::commit();

            return [
                'success' => true,
                'message' => 'Recarga efetuada com sucesso!'
            ];
        } else {

            DB::rollback();

            return [
                'success' => false,
                'message' => 'Falha na inclusão'
            ];
        }
    }

    public function withdrawn(float $value): array
    {
        //dd($value);
        //dd($this->amount);

        if ($this->amount < $value) {
            return [
                'success' => false,
                'message' => 'Saldo insuficiente',
            ];
        }


        DB::beginTransaction();

        $totalBefore = $this->amount ? $this->amount : 0;
        $this->amount -= number_format($value, 2, '.', '');
        $withdrawn = $this->save();

        $historic = auth()->user()->historics()->create(
            [
                'type' => 'O',
                'amount' => $value,
                'total_before' => $totalBefore,
                'total_after' => $this->amount,
                'date' => date('Ymd'),
            ]
        );

        if ($withdrawn && $historic) {

            DB::commit();

            return [
                'success' => true,
                'message' => 'Saque efetuado com sucesso!'
            ];
        } else {

            DB::rollback();

            return [
                'success' => false,
                'message' => 'Falha na inclusão'
            ];
        }
    }
    public function transfer(float $value, User $sender): array
    {
        //dd($value);
        //dd($this->amount);

        if ($this->amount < $value) {
            return [
                'success' => false,
                'message' => 'Saldo insuficiente',
            ];
        }

        DB::beginTransaction();

        // Atualiza o próprio saldo

        $totalBefore = $this->amount ? $this->amount : 0;
        $this->amount -= number_format($value, 2, '.', '');
        $transfer = $this->save();

        $historic = auth()->user()->historics()->create(
            [
                'type' => 'T',
                'amount' => $value,
                'total_before' => $totalBefore,
                'total_after' => $this->amount,
                'date' => date('Ymd'),
                'user_id_transaction' => $sender->id
            ]
        );

        // Atualiza o saldo do recebedor
        $senderBalance = $sender->balance()->firstOrCreate([]);
        $totalBeforeSender = $senderBalance->amount ? $senderBalance->amount : 0;
        $senderBalance->amount += number_format($value, 2, '.', '');
        $transferSender = $senderBalance->save();

        $historicSender = $sender->historics()->create(
            [
                'type' => 'I',
                'amount' => $value,
                'total_before' => $totalBeforeSender,
                'total_after' => $senderBalance->amount,
                'date' => date('Ymd'),
                'user_id_transaction' => auth()->user()->id,
            ]
        );

        if ($transfer && $historic && $transferSender && $historicSender) {

            DB::commit();

            return [
                'success' => true,
                'message' => 'Transferência efetuada com sucesso!'
            ];
        }

        DB::rollback();

        return [
            'success' => false,
            'message' => 'Falha na transferência!'
        ];
    }
}
