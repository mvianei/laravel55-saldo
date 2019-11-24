<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MoneyValidationFormRequest;
use App\Models\Balance;
use App\Models\Historic;
use App\User;
use Canducci\Cep\Contracts\ICep;
use Illuminate\Http\Request;

class BalanceController extends Controller
{

    private $totalPage = 10;

    public function index()
    {
        //debug
        //dd(auth()->user()->balance());
        //dd(auth()->user()->balance()->get());

        $balance = auth()->user()->balance;
        $amount = $balance ? $balance->amount : 0;

        return view('admin.balance.index', compact('amount'));
    }

    public function deposit()
    {
        return view('admin.balance.deposit');
    }

    public function pessoaStore(MoneyValidationFormRequest $request)
    {
        dd($request->all());
    }

    public function depositStore(MoneyValidationFormRequest $request)
    {
        $balance = auth()->user()->balance()->firstOrCreate([]);
        $response = $balance->deposit($request->value);

        if ($response['success']) {
            return redirect()->route('admin.balance')->with('success', $response['message']);
        }

        return redirect()
            ->back()
            ->with('error', $response['message']);
    }

    public function withdrawn()
    {
        return view('admin.balance.withdrawn');
    }

    public function withdrawnStore(MoneyValidationFormRequest $request)
    {
        //dd($request->all());
        $balance = auth()->user()->balance()->firstOrCreate([]);
        $response = $balance->withdrawn($request->value);

        if ($response['success']) {
            return redirect()->route('admin.balance')->with('success', $response['message']);
        }

        return redirect()
            ->back()
            ->with('error', $response['message']);
    }

    public function transfer()
    {
        return view('admin.balance.transfer');
    }

    public function confirmTransfer(Request $request, User $user)
    {
        if (!$sender = $user->getSender($request->sender)) {
            return redirect()
                ->back()
                ->with('error', 'Usuário não encontrado!');
        }

        if ($sender->id === auth()->user()->id) {
            return redirect()
                ->back()
                ->with('error', 'Não pode transferir para você mesmo!');
        }

        $balance = auth()->user()->balance;

        return view('admin.balance.transfer-confirm', compact('sender', 'balance'));
    }

    public function transferStore(MoneyValidationFormRequest $request, User $user)
    {
        //dd($request->all());
        //dd($user->find($request->sender_id));
        if (!$sender = $user->find($request->sender_id)) {
            return redirect()
                ->route('admin.transfer')
                ->with('success', 'Recebedor não encontrado!');
        }

        $balance = auth()->user()->balance()->firstOrCreate([]);
        $response = $balance->transfer($request->value, $sender);

        if ($response['success']) {
            return redirect()
                ->route('admin.balance')
                ->with('success', $response['message']);
        }

        return redirect()
            ->route('admin.balance')
            ->with('error', $response['message']);
    }

    public function historic(Historic $historic)
    {
        $historics = auth()->user()
            ->historics()
            ->with(['userSender'])
            ->paginate($this->totalPage);

        $types = $historic->type();

        return view('admin.balance.historics', compact('historics', 'types'));
    }

    public function cep()
    {
        return view('admin.balance.ceps');
    }

    public function searchCep(Request $request, Icep $c)
    {
        $m_cep = $request->cep;
        //dd($request->all());

        //$dataForm = $request->all();
        //$dataForm = $request->except('_token');

        //        $response = redirect()
        //          ->away('https://viacep.com.br/ws/91788116/json')
        //        ->header('Content-Type', 'application/json');
        $cep = $c->find($m_cep);
        $cepInfo = $cep->toJson();
        dd($cepInfo);

        //$historics = $historic->search($dataForm, $this->totalPage);

        return view('admin.balance.ceps');
    }

    public function searchHistoric(Request $request, Historic $historic)
    {
        //$dataForm = $request->all();
        $dataForm = $request->except('_token');

        $historics = $historic->search($dataForm, $this->totalPage);

        $types = $historic->type();

        //dd($historics);

        return view('admin.balance.historics', compact('historics', 'types', 'dataForm'));
    }

    public function pessoa(Request $request)
    {

        $tipo = $request->tipo;
        $cpfcnpj = '';
        if ($tipo == 'cliente') {
            $tipo_pessoa = 'Cliente';
        }
        if ($tipo == 'devedor') {
            $tipo_pessoa = 'Devedor';
        }

        $propostas = [
            0 => [
                'id' => 1,
                'validade' => '10/10/2019',
                'plano_max' => 10,
                'entrada_minima' => 100,
                'parcela_minima' => 50,
                'quitacao' => 900,
                'inclusao' => '2019-09-01 00:00:00',
                'responsavel' => 'Michelangelo',
            ],
            1 => [
                'id' => 2,
                'validade' => '10/11/2019',
                'plano_max' => 14,
                'entrada_minima' => 200,
                'parcela_minima' => 60,
                'quitacao' => 800,
                'inclusao' => '2019-11-01 00:00:00',
                'responsavel' => 'Michelangelo',
            ],
        ];

        $dividas = [
            0 =>
            [
                'vencimento' => '01/10/2010',
                'valor' => 200,
                'documento' => 'Fatura doida',
                'inclusao' => '02/11/2019 21:37:00',
                'responsavel' => 'Michelangelo',
            ],
            1 => [
                'vencimento' => '01/12/2010',
                'valor' => 55,
                'documento' => 'Protesto',
                'inclusao' => '02/12/2019 21:00:00',
                'responsavel' => 'Michelangelo',
            ],
            2 => [
                'vencimento' => '01/12/2010',
                'valor' => 55,
                'documento' => 'Protesto',
                'inclusao' => '02/12/2019 21:00:00',
                'responsavel' => 'Miguel',
            ],
        ];

        $enderecos = [
            0 =>
            [
                'cep' => '91788160',
                'logradouro' => 'Rua Irmão Firmino Biazus, 210',
                'bairro' => 'Aberta dos Morros',
                'complemento' => 'Casa',
                'localidade' => 'Porto Alegre',
                'uf' => 'RS',
                'tipo' => 'Comercial',
                'inclusao' => '24/11/2019 12:29:00',
                'responsavel' => 'Michelangelo',
            ],
            1 => [
                'cep' => '90000000',
                'logradouro' => 'Av. Jacuí, 638',
                'bairro' => 'Cristal',
                'complemento' => 'Apto. 410',
                'localidade' => 'Porto Alegre',
                'uf' => 'RS',
                'tipo' => 'Residencial',
                'inclusao' => '24/11/2019 12:29:00',
                'responsavel' => 'Michelangelo',
            ],
        ];

        $pessoa = 'F';
        //dd($dividas);
        return view('site.pessoa.pessoa', compact('tipo_pessoa', 'pessoa', 'cpfcnpj', 'tipo', 'dividas', 'propostas', 'enderecos'));
    }
}
