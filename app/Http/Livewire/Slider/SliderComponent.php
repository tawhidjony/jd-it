<?php

namespace App\Http\Livewire\Slider;

use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class SliderComponent extends Component
{
    use WithFileUploads;

    public $slider_list = true;
    public $create = false;
    public $title;
    public $img_url;

    public function saveSlider()
    {
        $sliderValidate= $this->validate([
            'title'=>'required',
            'img_url'=>'required',
        ]);

        Slider::create([
            'uuid'          => Str::uuid(),
            'title'          => $sliderValidate['title'],
            'img_url'         => $this->img_url->store('slider')
        ]);

        // $this->success('Slider has been created successfully.');
        // $this->resetFields();
        $this->create = false;
        $this->slider_list = true;
    }
    public function createItem()
    {
        $this->create = true;
        $this->slider_list = false;
    }
    public function editItem()
    {
        $this->create = false;
        $this->slider_list = false;
    }

    public function render()
    {
        $slider = Slider::paginate(10);
        return view('livewire.slider.slider-component', ['sliders' => $slider]);
    }
}
