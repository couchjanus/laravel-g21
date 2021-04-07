<?php

namespace App\Http\Livewire\Admin;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Category;

class CategoriesTable extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 10;
    public $sortField = 'id';
    public $sortAsc = true;
    public $selected = [];

    public function deleteCategories(){
        Category::destroy($this->selected);
    }
    public function render()
    {
        return view('livewire.admin.categories-table', [
            'categories' => Category::search($this->search)
            ->orderBy($this->sortField, $this->sortAsc ? 'asc':'desc')
            ->paginate($this->perPage)]);
    }
}
