<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class Photos2024 extends Component
{
    public $images = [
        "liege" => ["name_nl"=>"liege","name_fr"=>"liege","from"=> 1, "to"=> 102, 'slug'=> 'liege'],
        "toursandtaxi" => ["name_nl"=>"toursandtaxi","name_fr"=>"toursandtaxi","from"=> 103, "to"=> 267, 'slug'=> 'toursandtaxi'],
        "waterloo" => ["name_nl"=>"waterloo","name_fr"=>"waterloo","from"=> 268, "to"=> 442, 'slug'=> 'waterloo'],
        "anvers" => ["name_nl"=>"anvers","name_fr"=>"anvers","from"=> 443, "to"=> 584, 'slug'=> 'anvers'],
    ];
    public $currentImage;
    public $showEditModal = false;
    public $tab = 'liege'; // liege
    //public $queryString = ['slug'];
    public $slug = 'liege';

    public function mount(Request $request, $slug = null)
    {
        $this->tab = $slug;
        $this->slug = $this->tab;
        foreach ($this->images as $key => $img) {
            if($key == $this->slug) {
                $this->currentImage = $img;
            }
        }
    } 
    public function updatedTab($name,$value) {
         $this->slug = $name ;
        foreach ($this->images as $key => $img) {
            if($key == $this->tab) {
                $this->currentImage = $img;
            }
        }
        redirect(route('photos2024',['locale'=>'fr','slug'=>$this->slug]));
    }
    public function render()
    {
        return view('livewire.photos2024')->layout('components.layouts.base');
    }
}
