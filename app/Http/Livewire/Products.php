<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Products as ProductModel;
use Illuminate\Support\Facades\Storage;

class Products extends Component
{
    use WithFileUploads;

    public $name, $image, $price;


    public function render()
    {
        $products = ProductModel::orderBy('created_at', 'DESC')->get();
        return view('livewire.products', [
            'products'=>$products
        ]);
    }

    public function store() {
        $this->validate([
            'name'=>'required',
            'image'=>'image|max:2048|required',
            'price'=>'required',
        ]);

        $imageName = md5($this->image.microtime().'.'.$this->image->extension());

        Storage::putFileAs(
            'public/image',
            $this->image,
            $imageName
        );

        ProductModel::create([
            'name'=>$this->name,
            'image'=>$imageName,
            'price'=>$this->price
        ]);

        session()->flash('info', 'product created Successfully!');

        $this->name='';
        $this->image='';
        $this->price='';
        
    }

}
