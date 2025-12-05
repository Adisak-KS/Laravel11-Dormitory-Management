<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Signin extends Component
{
    public $email;
    public $password;
    public $errorEmail;
    public $errorPassword;
    public $error = null;


    public function signin()
    {
        $this->errorEmail = null;
        $this->errorPassword = null;
        $this->error = null;

        $validator = Validator::make([
            'email' => $this->email,
            'password' => $this->password,
        ], [
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'กรุณากรอกอีเมล',
            'password.required' => 'กรุณากรอกรหัสผ่าน',
        ]);

        if ($validator->fails()) {
            $this->errorEmail = $validator->errors()->first('email');
            $this->errorPassword = $validator->errors()->first('password');
        } else {
            $user = User::where('email', $this->email)->first();


            if ($user && Hash::check($this->password, $user->password)) {
                session()->put('user_id', $user->id);
                session()->put('user_name', $user->name);
                session()->put('user_level', $user->level);

                if($user->level == 'admin'){
                    $this->redirect('/dashboard');
                }else{
                    $this->redirect('/customer');
                   
                }
                
            }else{
                $this->error = 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง';
            }
        }
    }

    public function render()
    {
        return view('livewire.signin');
    }
}
