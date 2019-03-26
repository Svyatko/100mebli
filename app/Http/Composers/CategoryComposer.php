<?php

namespace App\Http\Composers;

use App\Repositories\CategoryRepository;
use Illuminate\Support\Facades\View;

class CategoryComposer {
    /**
     * The user repository implementation.
     *
     * @var CategoryRepository
     */
    protected $categories;

    /**
     * Create a new profile composer.
     *
     * @param  CategoryRepository $categories
     * @return void
     */
    public function __construct(CategoryRepository $categories)
    {
        // Dependencies automatically resolved by service container...
        $this->categories = $categories;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose($view)
    {
        $view->with('categories', $this->categories->all());
    }
}