<?php

namespace App\Http\Livewire\Testimonial;

use App\Http\Traits\ToastNotification;
use App\Models\Testimonials;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class TestimonialComponent extends Component
{
    use WithFileUploads, ToastNotification;

    // Boolean
    public $table_list = true;
    public $create = false;
    public $edit = false;

    // Input
    public $title;
    public $name;
    public $designation;
    public $img_url;

    // Utility
    public $delete_id;
    public $editUpdateItem;
    public $search = '';

    public function saveNewItem()
    {
        $storeDataValidate = $this->validate([
            'title'=>'required',
            'name'=>'required',
            'designation'=>'required',
            'img_url'=>'required',
        ]);

        try {
            if ($this->img_url) {
                $storeDataValidate['img_url'] = $this->img_url->store('testimonials', 'public');
            }
            $storeDataValidate['uuid'] = Str::uuid();
            $storeSuccess = Testimonials::create($storeDataValidate);
            if($storeSuccess){
                $this->reset();
                $this->create = false;
                $this->table_list = true;
                $this->success('Testimonial has been created successfully ');
            }else{
                $this->error('Testimonial has been created Fail! ');
            }
        } catch (\Exception $e) {
            $this->error($e->getMessage());
        }
    }

    public function updateSingleItem($id)
    {
        $updateDataValidate = $this->validate([
            'title'         =>'required',
            'name'          =>'required',
            'designation'   =>'required',
        ]);

        try {
            if ($this->img_url) {
                Storage::disk('public')->delete($this->editUpdateItem['img_url']);
                $updateDataValidate['img_url'] = $this->img_url->store('testimonials', 'public');
            }
            $updateData = Testimonials::find($id);
            $updateSuccess = $updateData->update($updateDataValidate);
            if($updateSuccess){
                $this->reset();
                $this->create = false;
                $this->table_list = true;
                $this->success('Testimonial has been updated successfully ');
            }else{
                $this->error('Testimonial has been update Fail! ');
            }
        } catch (\Exception $e) {
            $this->error($e->getMessage());
        }
    }

    public function createItem()
    {
        $this->reset();
        $this->create = true;
        $this->table_list = false;
    }
    public function editItem(Testimonials $testimonials)
    {
        $this->create       = false;
        $this->edit         = true;
        $this->table_list   = false;
        $this->editUpdateItem = $testimonials->toArray();
        $this->title        = $this->editUpdateItem['title'];
        $this->name         = $this->editUpdateItem['name'];
        $this->designation  = $this->editUpdateItem['designation'];
    }
    public function backItem(){
        $this->reset();
        $this->create = false;
        $this->edit = false;
        $this->table_list = true;
    }

    public function render()
    {
        $testimonials = Testimonials::where('title', 'like', '%'.$this->search.'%')->orderBy('created_at', 'desc')->paginate(10);
        return view('livewire.testimonial.testimonial-component', ['testimonials' => $testimonials] );
    }
}
