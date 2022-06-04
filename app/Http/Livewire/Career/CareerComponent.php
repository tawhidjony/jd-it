<?php

namespace App\Http\Livewire\Career;

use App\Models\Career;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Str;

class CareerComponent extends Component
{
    // Boolean
    public $table_list = true;
    public $create = false;
    public $edit = false;

    // Input
    public $title;
    public $experience;
    public $deadline;
    public $job_description;

    // Utility
    public $delete_id;
    public $editUpdateItem;

    public function saveNewItem()
    {
        $storeDataValidate = $this->validate([
            'title'=>'required',
            'experience'=>'required',
            'deadline'=>'required',
            'job_description'=>'required',
        ]);

        try {
            $storeDataValidate['uuid'] = Str::uuid();
            $storeSuccess = Career::create($storeDataValidate);
            if($storeSuccess){
                $this->reset();
                $this->create = false;
                $this->table_list = true;
                $this->success('Career has been created successfully ');
            }else{
                $this->error('Career has been created Fail! ');
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
                $updateDataValidate['img_url'] = $this->img_url->store('Careers', 'public');
            }
            $updateData = Career::find($id);
            $updateSuccess = $updateData->update($updateDataValidate);
            if($updateSuccess){
                $this->reset();
                $this->create = false;
                $this->table_list = true;
                $this->success('Career has been updated successfully ');
            }else{
                $this->error('Career has been update Fail! ');
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

    public function editItem(Career $career)
    {
        $this->create       = false;
        $this->edit         = true;
        $this->table_list   = false;
        $this->editUpdateItem = $career->toArray();
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
        $careers = Career::orderBy('created_at', 'desc')->paginate(10);
        return view('livewire.career.career-component',['careers' => $careers]);
    }

}
