<?php

namespace App\Controllers;

use App\Models\User;
use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function store()
    {
        $validated = $this->validate([
            'email' => 'required|valid_email',
            'password' => 'required',
        ],
        [
            'email' => [
                'required' => 'O email é obrigatório!',
                'valid_email' => 'O email precisa ser válido!'
            ],
            'password'=> [
                'required' => 'A senha é obrigatória!'
            ]
        ]);

        if(!$validated){
            return redirect()->route('login')->with('errors', $this->validator->getErrors());
        }

        $userModel = new User();
    $user = $userModel->where('email', $this->request->getPost('email'))->first();

    if ($user && password_verify($this->request->getPost('password'), $user->password)) {
        //login correto
        return redirect()->to('dashboard');
    } else {
        //falha login
        return redirect()->route('login')->with('error', 'Credenciais inválidas');
    }
    }

    public function Cadastro()
    {
        return view('cadastro');
    }


}
