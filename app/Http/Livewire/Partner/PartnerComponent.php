<?php

namespace App\Http\Livewire\Partner;

use App\Http\Traits\ToastNotification;
use App\Models\Partner;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class PartnerComponent extends Component
{
    use WithFileUploads, ToastNotification;

    // Boolean
    public $table_list = true;
    public $create = false;
    public $edit = false;

    // Input
    public $name;
    public $img_url;

    // Utility
    public $delete_id;
    public $editUpdateItem;
    public $search = '';
    protected $listeners = ['deleteConfirm' => 'deleteProduct'];

    public function saveNewItem()
    {
        $storeDataValidate = $this->validate([
            'img_url'=>'required',
        ]);

        try {
            if ($this->img_url) {
                $storeDataValidate['img_url'] = $this->img_url->store('partners', 'public');
            }
            $storeDataValidate['uuid'] = Str::uuid();
            $storeDataValidate['name'] = $this->name;
            $storeSuccess = Partner::create($storeDataValidate);
            if($storeSuccess){
                $this->reset();
                $this->create = false;
                $this->table_list = true;
                $this->success('Partner has been created successfully ');
            }else{
                $this->error('Partner has been created Fail! ');
            }
        } catch (\Exception $e) {
            $this->error($e->getMessage());
        }
    }

    public function updateSingleItem($id)
    {
        $updateDataValidate = $this->validate([
            'name' => 'nullable'
        ]);

        try {
            if ($this->img_url) {
                Storage::disk('public')->delete($this->editUpdateItem['img_url']);
                $updateDataValidate['img_url'] = $this->img_url->store('partners', 'public');
            }
            $updateData = Partner::find($id);
            $storeDataValidate['name'] = $this->name;
            $updateSuccess = $updateData->update($updateDataValidate);
            if($updateSuccess){
                $this->reset();
                $this->create = false;
                $this->table_list = true;
                $this->success('Partner has been updated successfully ');
            }else{
                $this->error('Partner has been update Fail! ');
            }
        } catch (\Exception $e) {
            $this->error($e->getMessage());
        }
    }
    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('delete-item');

    }
    public function deleteProduct()
    {
        try {
            $deleteItem = Partner::find($this->delete_id);
            Storage::disk('public')->delete($deleteItem->img_url);
            $deleted = $deleteItem->delete();
            if($deleted){
                $this->success('Partner has been Deleted Successfully');
            }else{
                $this->error('Partner has been Deleted Fail!');
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
    public function editItem(Partner $partner)
    {
        $this->create       = false;
        $this->edit         = true;
        $this->table_list   = false;
        $this->editUpdateItem = $partner->toArray();
        $this->name        = $this->editUpdateItem['name'];
    }
    public function backItem(){
        $this->reset();
        $this->create = false;
        $this->edit = false;
        $this->table_list = true;
    }

    public function render()
    {
        $partners = Partner::orderBy('created_at', 'desc')->paginate(10);
        return view('livewire.partner.partner-component', ['partners' => $partners] );
    }
}
