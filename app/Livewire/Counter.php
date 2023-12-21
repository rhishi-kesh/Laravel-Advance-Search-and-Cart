<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count;
    public $price;
    public $quentity;
    public $name;
    public function mount($product)

    {

        $this->price = $product->price;
        $this->quentity = $product->quentity;
        $this->name = $product->name;

    }
    public function render()
    {
        return view('livewire.counter');
    }
    public function increment(){
        $this->count++;
    }
}
