<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileFormRequest;

class UserController extends Controller
{
    public function profile()
    {
        return view('site.profile.profile'); //bootstrap 4
    }

    public function pessoa()
    {
        return view('site.pessoa.pessoa'); //bootstrap 4
    }

    public function profileMaterial()
    {
        return view('site.profile.profile_material');
    }

    public function profileMaterialize()
    {
        return view('site.profile.profile_materialize');
    }

    public function profileMdbootstrap()
    {
        return view('site.profile.profile_mdbootstrap');
    }

    public function profileFramework7()
    {
        return view('site.profile.profile_framework7');
    }

    public function profileMDC()
    {
        return view('site.profile.profile_mdc');
    }

    public function profileUpdate(UpdateProfileFormRequest $request)
    {
        //dd($request->all());
        $user = auth()->user();

        $data = $request->all();

        if ($data['password'] != null)
            $data['password'] = bcrypt($data['password']);
        //else
        //para retirar o campo do update
        //unset($data['password']);

        $data['image'] = $user->image;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            //if ($user->image)
            //  $name = $user->image;
            //else
            $name = $user->id;

            $extenstion = $request->image->extension();
            $nameFile = "{$name}.{$extenstion}";

            $data['image'] = $nameFile;
            //dd($nameFile);
            $upload = $request->image->storeAs('users', $nameFile);

            if (!$upload)
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer o upload da imagem');
        }

        $update = auth()->user()->update($data);

        if ($update)
            return redirect()->route('profile')->with('success', 'Sucesso ao atualizar');

        return redirect()
            ->back()
            ->with('error', 'Falha ao atualizar');
    }
}
