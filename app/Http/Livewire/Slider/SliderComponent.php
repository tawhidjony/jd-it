<?php

namespace App\Http\Livewire\Slider;

use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class SliderComponent extends Component
{
    use WithFileUploads;

    public $slider_list = true;
    public $create = false;
    public $edit = false;
    public $editSlider = [];
    public $title;
    public $img_url;
    public $delete_id;
    public $editUpdateItem;
    public $search = '';
    protected $listeners = ['deleteConfirm' => 'deleteProduct'];

    public function saveSlider()
    {
        $sliderValidate = $this->validate([
            'title'=>'required',
            'img_url'=>'required',
        ]);

        if ($this->img_url) {
			$sliderValidate['img_url'] = $this->img_url->store('sliders', 'public');
        }
        $sliderValidate['uuid'] = Str::uuid();
        Slider::create($sliderValidate);
        $this->reset();
        $this->create = false;
        $this->slider_list = true;
    }
    public function updateSlider($id)
    {
        $sliderValidate = $this->validate([
            'title'=>'required',
        ]);

        if ($this->img_url) {
            Storage::disk('public')->delete($this->editUpdateItem['img_url']);
			$sliderValidate['img_url'] = $this->img_url->store('sliders', 'public');
        }
        $updateData = Slider::find($id);
        $updateData->update($sliderValidate);
        $this->reset();
        $this->create = false;
        $this->slider_list = true;
    }

    public function createItem()
    {
        $this->create = true;
        $this->slider_list = false;
    }
    public function editItem(Slider $slider)
    {
        $this->create = false;
        $this->edit = true;
        $this->slider_list = false;
        $this->editUpdateItem = $slider->toArray();
        $this->title = $this->editUpdateItem['title'];
    }
    public function backItem(){
        $this->reset();
        $this->create = false;
        $this->edit = false;
        $this->slider_list = true;
    }
    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('delete-item');

    }
    public function deleteProduct()
    {
        $sliderItem = Slider::find($this->delete_id);
        Storage::disk('public')->delete($sliderItem->img_url);
        $sliderItem->delete();
    }
    public function render()
    {
        $slider = Slider::where('title', 'like', '%'.$this->search.'%')->orderBy('created_at', 'desc')->paginate(10);
        return view('livewire.slider.slider-component', ['sliders' => $slider]);
    }
}
