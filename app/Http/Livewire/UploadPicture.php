<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;

use Livewire\Component;

class UploadPicture extends Component
{
    use WithFileUploads;
    public $pictures = [];

    public function save(){
        // dd($this->picture);
        $this->validate([
            'pictures.*' => 'image|max:1024',
        ]);
        foreach($this->pictures as $picture){
            $picture->store('products', 'public');
        }
        // dd($pic);
    }
    public function render()
    {
        return view('livewire.upload-picture');
    }
}
