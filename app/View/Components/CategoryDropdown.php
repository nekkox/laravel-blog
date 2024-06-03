<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryDropdown extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
       // $segment = request()->segment(2);
        //ddd($segment);
        //ddd(Category::firstWhere('slug', 'work'));
        $category = null;
        if(request()->is('categories/*')){
            $segment = request()->segment(2);
            $category = Category::firstWhere('slug',$segment);
        }

        return view('components.category-dropdown',
            ['categories' => Category::all()->load(['posts']),
                'currentCategory'=> Category::firstWhere('slug', request('category')),
                'current'=>$category

        ]);
    }
}
