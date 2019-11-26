<?php

Route::group(
    ['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'],
    function () {
        Route::get('cep', 'BalanceController@cep')->name('balance.ceps');
        Route::any('cep-search', 'BalanceController@searchCep')->name('cep.search');

        Route::get('historic', 'BalanceController@historic')->name('balance.historics');
        Route::any('historic-search', 'BalanceController@searchHistoric')->name('historic.search');

        Route::post('transfer', 'BalanceController@transferStore')->name('transfer.store');
        Route::post('confirm-transfer', 'BalanceController@confirmTransfer')->name('confirm.transfer');
        Route::get('transfer', 'BalanceController@transfer')->name('balance.transfer');

        Route::post('withdrawn', 'BalanceController@withdrawnStore')->name('withdrawn.store');
        Route::get('withdrawn', 'BalanceController@withdrawn')->name('balance.withdrawn');

        Route::post('deposit', 'BalanceController@depositStore')->name('deposit.store');
        Route::get('deposit', 'BalanceController@deposit')->name('balance.deposit');

        // Route::get('pessoa/{tipo?}', 'BalanceController@pessoa')->name('balance.pessoa');
        Route::post('pessoa', 'BalanceController@pessoaStore')->name('pessoa.store');

        Route::get('balance', 'BalanceController@index')->name('admin.balance');
        Route::get('/', 'AdminController@index')->name('admin.home');

        Route::get('pessoa/{tipo}', 'BalanceController@pessoa')->name('balance.pessoa')->middleware('auth');
    }
);
Route::post('atualizar-perfil', 'Admin\UserController@profileUpdate')->name('profile.update')->middleware('auth');
Route::get('meu-perfil', 'Admin\UserController@profile')->name('profile')->middleware('auth');
Route::get('meu-perfil_material', 'Admin\UserController@profileMaterial')->name('profile_material')->middleware('auth');
Route::get('meu-perfil_materialize', 'Admin\UserController@profileMaterialize')->name('profile_materialize')->middleware('auth');
Route::get('meu-perfil_mdbootstrap', 'Admin\UserController@profileMdbootstrap')->name('profile_mdbootstrap')->middleware('auth');
Route::get('meu-perfil_framework7', 'Admin\UserController@profileFramework7')->name('profile_framework7')->middleware('auth');
Route::get('meu-perfil_mdc', 'Admin\UserController@profileMDC')->name('profile_mdc')->middleware('auth');

Route::get('/', 'Site\SiteController@index')->name('home');
/* Route::get("cep_teste", function (Canducci\Cep\Contracts\ICep $c) {
$cep = $c->find('91788116');
$cepInfo = $cep->toJson();
dd($cepInfo);
}); */

Route::get(
    'ajax', function () {
        return view('message');
    }
);
Route::post('/getmsg', 'AjaxController@index');

Auth::routes();
