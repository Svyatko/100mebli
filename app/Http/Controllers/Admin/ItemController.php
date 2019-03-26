<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ItemRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\Image;
use App\Models\Item;
use App\Services\StoreImageToDisk;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Category $category)
    {
        if ($category->id) {
            $items = $category->items;
            $title = "Список продуктів: $category->name";
        } else {
            $items = Item::get();
            $title = "Список продуктів";
        }


        return view('admin.items.index', compact('items', 'title'));
    }

    public function create(Request $request)
    {
        $colors = Color::get();
        $categories = Category::get();
        if ($request->get('category_id')) {
            $category = $categories->where('id', $request->get('category_id'))->first();
        }

        return view('admin.items.create', compact('items', 'categories', 'category', 'colors'));
    }

    public function store(ItemRequest $request)
    {
        Item::create(['name' => $request->title_uk, 'amount' => $request->amount, 'category_id' => $request->category_id]);

        $this->flashMessage($request, 'Продукцію додано', 'success');

        return redirect()->back();
    }

    public function edit(Item $item) {
        $images = $item->images;
        $colors = Color::get();
        $categories = Category::get();
        $fields = $item->fields;
        $category = $item->category;

        return view('admin.items.edit', compact('item', 'categories', 'fields', 'category', 'colors', 'images'));
    }

    public function update(ItemRequest $request, Item $item, StoreImageToDisk $service) {
        $item->update(['name' => $request->title_uk, 'amount' => $request->amount, 'category_id' => $request->category_id]);

        $this->flashMessage($request, 'Продукцію оновлено', 'success');

        return redirect()->back();
    }

    public function imageRemove($id, Request $request) {
        if($request->ajax()) {
            $image = Image::find($id);

            $image->delete();
        }
    }
}
