<?php

namespace App\View\Components\Web;

use Illuminate\View\Component;

class Aside extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $categories;

    public function __construct()
    {
        $this->categories = $this->activeCategories();
    }

    private function activeCategories(){
        return \DB::table('categories')->where('status', '>', 0)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.web.aside');
    }
}
