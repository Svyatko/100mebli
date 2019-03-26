<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;
use App\Models\Field;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::get();


        return view('admin.categories.index', compact('categories'));
    }

    public function create() {
        $fields = Field::get();
        $categories = Category::where('parent_id', 0)->get();

        return view('admin.categories.create', compact('fields', 'categories'));
    }

    public function store(CategoryRequest $request) {
        Category::create(['title' => $request->title_uk, 'parent_id' => $request->parent_id]);

        $this->flashMessage($request, 'Категорію додано', 'success');

        return redirect()->back();
    }

    public function edit(Category $category) {
        $fields = Field::get();
        $fields_ids = $category->fieldsArray();

        return view('admin.categories.edit', compact('category', 'fields', 'fields_ids'));
    }

    public function update(Category $category, CategoryRequest $request) {
        $category->update(['title' => $request->title_uk]);

        $this->flashMessage($request, 'Категорію оновлено', 'success');

        return redirect()->back();
    }

    public function destroy(Category $category, Request $request) {
        $category->delete();

        $this->flashMessage($request, 'Категорію оновлено', 'warning');

        return redirect()->route('admin.categories.index');
    }
}
