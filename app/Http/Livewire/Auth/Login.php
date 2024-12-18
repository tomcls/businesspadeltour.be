<?php

namespace App\Http\Livewire\Auth;

use App\Models\Newsletter;
use App\Models\User;
use App\Repositories\MailRepository;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $passwordConfirmation = '';
    public $lastname = '';
    public $firstname = '';

    public $email = '';
    public $phone = '';
    public $password = '';

    public $remember = false;
    public $tos = false;

    public $tab = 'login';
    public $lang;
    public $newsletter = true;
    public $message = '';
    public $captcha;
    public $captchaImage;
    public $passwordType = 'password';

    public $listeners = [
        'onWelcome' => 'welcome'
    ];

    protected function rules()
    {
        if ($this->tab == 'login') {
            return [
                'email' => 'required|email',
                'password' => 'required',
            ];
        } else {
            return [
                'lastname' => 'required',
                'firstname' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
                'captcha' => 'required|captcha'
            ];
        }
    }
    public function mount()
    {
        $this->lang = App::currentLocale();
        $this->captchaImage = captcha_img();
    }
    public function openTab($tabname)
    {
        $this->tab = $tabname;
    }
    public function changeType() {
        if($this->passwordType == 'password') {
            $this->passwordType = 'text';
        } else {
            $this->passwordType = 'password';
        }
    }
    public function register()
    {
        $this->validate();
        if (!$this->tos) {
            $this->notify(['message' => __('Vous devez accepter les conditions générales du site svp!'), 'type' => 'alert']);
            return;
        }


        $user = User::create([
            'lastname' => $this->lastname,
            'firstname' => $this->firstname,
            'email' => $this->email,
            'phone' => $this->phone,
            'lang' => $this->lang,
            'active' => 1,
            'password' => User::hashWithSalt($this->password, User::randomString(10)),
        ]);
        if ($this->newsletter) {
            Newsletter::create([
                'email' => $this->email,
                'lang' => $this->lang
            ]);
        }


        $mail = new MailRepository();

        $mail->welcome([
            'firstname' => $user->firstname,
            'lastname' => $user->lastname,
            'email' => $user->email,
            'lang' => $user->lang,
            'url' =>  route('auth.activate', ['userId' => $user->id, 'token' => md5($user->id)]),

        ]);
        auth()->login($user);
        $this->notify(['message' => __('Thanks for signing in and welcome on Business padel tour'), 'type' => 'success']);
        $this->message = __('Thanks for signing in and welcome on Business padel tour');
        $this->emit('onWelcome');
    }
    public function welcome()
    {
        sleep(5);
        return redirect()->intended('/');
    }
    public function reloadCaptcha()
    {
        $this->captchaImage = captcha_img();
    }
    public function login()
    {
        //User::checkPasswordHash($d['password'], $user['password'])
        $credentials = $this->validate();
        if(auth()->attempt($credentials, $this->remember)) {
            $user = auth()->user();
            if($user->isAdmin) {
                return redirect()->route('admin.invoices');
            }
            return redirect()->route('me.profile');
        } else {
          return  $this->addError('email', trans('auth.failed'));
        }
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('layouts.auth');
    }
}
