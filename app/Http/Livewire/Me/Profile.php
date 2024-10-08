<?php

namespace App\Http\Livewire\Me;

use App\Models\Company;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    public User $user;
    public $upload;
    public $withVat = false;
    public $password = '';
    public $changePassword = false;
    public $passwordConfirmation = '';

    private $layout = 'layouts.me';

    // protected $rules = [
    //     'user.firstname' => 'max:140',
    //     'user.lastname' => 'max:140',
    //     'user.email' => 'email',
    //     'user.phone' => 'nullable',
    //     'user.code' => 'nullable',
    //     'user.lang' => 'nullable',
    //     'user.avatar' => 'nullable',
    //     'upload' => 'nullable|image|max:300',
    // ];
    public function rules()
    {
        if ($this->changePassword) {
            return [
                'user.firstname' => 'required|min:2|max:140',
                'user.lastname' => 'required|max:140',
                'user.email' => 'required|email',
                'user.phone' => 'sometimes',
                'user.lang' => 'required',
                'user.avatar' => 'nullable',
                'password' => 'required|min:6|same:passwordConfirmation'
            ];
        } else {
            return [
                'user.firstname' => 'required|min:2|max:140',
                'user.lastname' => 'required|min:2|max:140',
                'user.email' => 'required|email',
                'user.phone' => 'sometimes',
                'user.lang' => 'required',
                'user.avatar' => 'nullable',
                'upload' => 'nullable|image|max:300',
            ];
        }
    }

    public function mount()
    {
        $this->user = auth()->user();
       
        if ($this->user->company) {
            $this->withVat = true;
        } 
    }

    public function save()
    {
        $this->validate();

       
        if ($this->changePassword) {
            $this->user->password = User::hashWithSalt($this->password, User::randomString(10));
            $this->notify(['message' => 'Password well updated', 'type' => 'success']);
        }

        $this->user->save();

        $this->upload && $this->user->update([
            'avatar' => $this->upload->store('/', 'avatars'),
        ]);

        $this->notify(['message' => __('User well saved'), 'type' => 'success']);
        if ($this->withVat) {
            $this->emit('saveCompany');
        }
    }
    public function render()
    {
        return view('livewire.me.profile')->layout($this->layout);
    }
}
