<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Navbar extends Component
{
    public $user_name;
    public $showModal = false;
    public $showModalEdit = false;
    public $username;
    public $password;
    public $password_confirm;
    public $errorUsername;
    public $errorPassword;
    public $saveSuccess = false;
    public $userLevel = '';

    public function editProfile()
    {
        $this->showModalEdit = true;

        $user = User::find(session()->get('user_id'));
        $this->username = $user->name;
        $this->saveSuccess = false;
    }

    public function updateProfile()
    {
        if ($this->username == '') {
            $this->addError('username', 'กรุณากรอก Username');
            return;
        }

        if ($this->password != $this->password_confirm) {
            $this->addError('password_confirm', 'รหัสผ่านไม่ตรงกัน');
            return;
        }

        $user = User::find(session()->get('user_id'));
        $user->name = $this->username;
        $user->password = $this->password ?? $user->password;
        $user->save();

        // $this->showModalEdit = false;
        $this->saveSuccess = true;

        // clear error
        // $this->clearErrors();
    }

    public function mount()
    {
        $this->user_name = session()->get('user_name');
        $this->userLevel = session()->get('user_level');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
