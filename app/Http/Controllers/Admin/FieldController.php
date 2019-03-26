<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FieldRequest;
use App\Models\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function index() {
        $fields = Field::orderBy('created_at', 'DESC')->get();

        return view('admin.fields.index', compact('fields'));
    }

    public function create() {
        return view('admin.fields.create');
    }

    public function store(FieldRequest $request) {
        Field::create(['title' => $request->title_uk]);

        $this->flashMessage($request, 'Поле додано', 'success');

        return redirect()->route('admin.fields.index');
    }

    public function edit(Field $field) {
        return view('admin.fields.edit', compact('field'));
    }

    public function update(Field $field, FieldRequest $request) {
        $field->update(['title' => $request->title_uk]);

        $this->flashMessage($request, 'Поле оновлено', 'success');

        return redirect()->route('admin.fields.index');
    }

    public function destroy(Request $request, Field $field) {
        $field->delete();

        $this->flashMessage($request, 'Поле видалено', 'success');

        return redirect()->route('admin.fields.index');
    }
}
