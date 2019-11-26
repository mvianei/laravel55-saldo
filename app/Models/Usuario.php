<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Usuario extends Model
{
    public $timestamps = false;
    protected $fillable = ['type', 'amount', 'total_before', 'total_after', 'user_id_transaction', 'date'];

    public function type($type = null)
    {
        $types = [
            'I' => 'Entrada',
            'O' => 'Saída',
            'T' => 'Transferência',
        ];

        if (!$type) {
            return $types;
        }

        if ($this->user_id_transaction != null && $type == 'I') {
            return 'Recebido';
        }

        return $types[$type];
    }

    public function scopeUserAuth($query)
    {
        return $query->where('user_id', auth()->user()->id);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userSender()
    {
        return $this->belongsTo(User::class, 'user_id_transaction');
    }

    public function getDateAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

    public function search(array $data, $totalPage)
    {
        $usuarios = $this->where(function ($query) use ($data) {
            if (isset($data['id'])) {
                $query->where('id', $data['id']);
            }

            if (isset($data['name'])) {
                $query->where('name', $data['name']);
            }

            if (isset($data['email'])) {
                $query->where('email', $data['email']);
            }

            if (isset($data['type'])) {
                $query->where('type', $data['type']);
            }

        }) //->toSql();
        //dd($usuarios);
        //->where('user_id', auth()->user()->id)
            ->UserAuth()
            ->with(['userSender'])
            ->paginate($totalPage);
        return $usuarios;
    }
}
