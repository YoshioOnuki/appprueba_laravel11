<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.auth')]
#[Title('Login - Gestion de Tareas')]
class Login extends Component
{
    #[Validate('required|email')]
    public $correo;
    #[Validate('required')]
    public $contrasenia;

    public function login()
    {
        $this->validate();


        $this->dispatch(
            'toast-basico',
            mensaje: 'Las credenciales son incorrectas',
            type: 'error'
        );

        //$this->addError('correo', 'Las credenciales no coinciden con nuestros registros.');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
