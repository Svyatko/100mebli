<?php

namespace App\Repositories;


use App\Models\Category;

class  CategoryRepository {
    // model property on class instances
    protected $category;

    // Constructor to bind model to repo
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    // Get all instances of model
    public function all()
    {
        return $this->category->all();
    }
}