<?php

namespace App\Http\Livewire\Portfolio;

use App\Http\Traits\ToastNotification;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class PortfolioComponent extends Component
{
    use WithFileUploads, ToastNotification;
    public $table_list = true;
    public $create = false;
    public $edit = false;
    public $editSlider = [];
    public $name;
    public $img_url;
    public $delete_id;
    public $editUpdateItem;
    public $search = '';

    public function saveNewItem()
    {
        $storeDataValidate = $this->validate([
            'name'=>'required',
            'img_url'=>'required',
        ]);

        if ($this->img_url) {
			$storeDataValidate['img_url'] = $this->img_url->store('portfolios', 'public');
        }
        $storeDataValidate['uuid'] = Str::uuid();
        Portfolio::create($storeDataValidate);
        $this->reset();
        $this->create = false;
        $this->table_list = true;
        $this->error('Portfolio has been created successfully ');
    }
    public function updateSingleItem($id)
    {

        $this->warning('Portfolio has been created successfully ');
        $updateDataValidate = $this->validate([
            'name'=>'required',
        ]);

        if ($this->img_url) {
            Storage::disk('public')->delete($this->editUpdateItem['img_url']);
			$updateDataValidate['img_url'] = $this->img_url->store('portfolios', 'public');
        }
        $updateData = Portfolio::find($id);
        $updateData->update($updateDataValidate);
        $this->reset();
        $this->create = false;
        $this->table_list = true;
    }

    public function createItem()
    {
        $this->reset();
        $this->create = true;
        $this->table_list = false;
    }
    public function editItem(Portfolio $portfolio)
    {
        $this->create = false;
        $this->edit = true;
        $this->table_list = false;
        $this->editUpdateItem = $portfolio->toArray();
        $this->name = $this->editUpdateItem['name'];
    }
    public function backItem(){
        $this->reset();
        $this->create = false;
        $this->edit = false;
        $this->table_list = true;
    }

    public function render()
    {
        $portfolios = Portfolio::where('name', 'like', '%'.$this->search.'%')->orderBy('created_at', 'desc')->paginate(10);
        return view('livewire.portfolio.portfolio-component',['portfolios'=>$portfolios]);
    }
}
