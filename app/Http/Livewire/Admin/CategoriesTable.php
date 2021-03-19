<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class CategoriesTable extends Component
{
    public function render()
    {
        return view('livewire.admin.categories-table', ['categories'=>\DB::table('categories')->get()]);
    }
}
