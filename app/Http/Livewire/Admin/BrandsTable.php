<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Brand;

class BrandsTable extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 10;
    public $sortField = 'id';
    public $sortAsc = true;
    public $selected = [];

    public function deleteBrands(){
        Brand::destroy($this->selected);
    }

    public function render()
    {
        return view('livewire.admin.brands-table', [
            'brands' => Brand::search($this->search)
            ->orderBy($this->sortField, $this->sortAsc ? 'asc':'desc')
            ->paginate($this->perPage),
        ]);
    }
}
