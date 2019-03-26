@extends('layouts.admin', ['header' => 'Дадати продукцію'])

@section('content')
    <form>
        <div class="form-group">
            <label for="category_id" class="form-label form-label--required">Категорія</label>
            <select id="category_id" class="form-control" name="category_id">
                <option disabled selected>Виберіть категорію</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                            @if(request()->get('category_id') == $category->id) selected @endif>{{ $category->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button class="btn btn-outline-primary">Вибрати</button>
        </div>
    </form>

    @if(request()->get('category_id'))
        <form action="{{ route('admin.items.store', ['category_id' => request()->get('category_id')]) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="files" class="form-label form-label--required">Оберіть фото</label>
                <input type="file" id="files" name="files[]" multiple>
                @if($errors->has('files'))
                    <div class="alert alert-danger mt-3">
                        {{ $errors->first('files') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-10">
                        <label for="colors" class="form-label form-label--required">Кольори</label>
                        <select id="colors" name="colors[]" class="form-select js-select2-fields" multiple
                                style="width: 100%">
                            <option>Виберіть RAL-кольори</option>
                            @foreach($colors as $color)
                                <option value="{{ $color->id }}"
                                        @if(old('colors') && in_array($color->id, old('colors'))) selected @endif>{{ $color->RAL }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('colors'))
                            <div class="alert alert-danger mt-3">
                                {{ $errors->first('colors') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-md-2">
                        <label for="amount" class="form-label form-label--required">Кількість, шт</label>
                        <input type="number" id="amount" class="form-control" name="amount" value="{{ old('amount') }}">
                        @if($errors->has('amount'))
                            <div class="alert alert-danger mt-3">
                                {{ $errors->first('amount') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            @foreach($category->fields as $field)
                <div class="form-group">
                    <label class="form-label form-label--required">{{ $field->name }}</label>
                    <div class="row">
                        <div class="col-md-12">
                            @foreach($field->values as $value)
                                <label class="btn btn-default">{{ $value }}
                                    <input type="checkbox" name="field_{{$field->id}}[]" value="{{ $value }}" @if(old("field_$field->id") && in_array($value, old("field_$field->id"))) checked @endif>
                                </label>
                            @endforeach
                            @if($errors->has("field_$field->id"))
                                <div class="alert alert-danger mt-3">
                                    {{ $errors->first("field_$field->id") }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach


            <div class="form-group">

                <div class="row">
                    @include('admin.includes.pills')

                    <div class="col-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-uk" role="tabpanel"
                                 aria-labelledby="v-pills-home-tab">
                                <div class="form-group">
                                    <label for="title_uk" class="form-label form-label--required">Назва
                                        продукції</label>
                                    <input id="title_uk" class="form-control" name="title_uk"
                                           value="{{ old('title_uk') }}">
                                    @if($errors->has('title_uk'))
                                        <div class="alert alert-danger mt-3">
                                            {{ $errors->first('title_uk') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="characteristic_uk" class="form-label form-label--required">Характеристика</label>
                                    <textarea id="characteristic_uk" name="characteristic_uk" class="form-control"
                                              rows="4">{{ old('characteristic_uk') }}</textarea>
                                    @if($errors->has('characteristic_uk'))
                                        <div class="alert alert-danger mt-3">
                                            {{ $errors->first('characteristic_uk') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="description_uk" class="form-label form-label--required">Опис</label>
                                    <textarea id="description_uk" name="description_uk" class="form-control"
                                              rows="6">{{ old('description_uk') }}</textarea>
                                    @if($errors->has('description_uk'))
                                        <div class="alert alert-danger mt-3">
                                            {{ $errors->first('description_uk') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-ru" role="tabpanel"
                                 aria-labelledby="v-pills-ru-tab">
                                <div class="form-group">
                                    <label for="title_ru">Назва продукції</label>
                                    <input id="title_ru" class="form-control" name="title_ru"
                                           value="{{ old('title_ru') }}">
                                    @if($errors->has('title_ru'))
                                        <div class="alert alert-danger mt-3">
                                            {{ $errors->first('title_ru') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="characteristic_ru" class="form-label form-label--required">Характеристика</label>
                                    <textarea id="characteristic_ru" name="characteristic_ru" class="form-control"
                                              rows="4">{{ old('characteristic_ru') }}</textarea>
                                    @if($errors->has('characteristic_ru'))
                                        <div class="alert alert-danger mt-3">
                                            {{ $errors->first('characteristic_ru') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="description_ru" class="form-label form-label--required">Опис</label>
                                    <textarea id="description_ru" name="description_ru" class="form-control"
                                              rows="6">{{ old('description_ru') }}</textarea>
                                    @if($errors->has('description_ru'))
                                        <div class="alert alert-danger mt-3">
                                            {{ $errors->first('description_ru') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-en" role="tabpanel"
                                 aria-labelledby="v-pills-en-tab">
                                <div class="form-group">
                                    <label for="title_en">Назва продукції</label>
                                    <input id="title_en" class="form-control" name="title_en"
                                           value="{{ old('title_en') }}">
                                    @if($errors->has('title_en'))
                                        <div class="alert alert-danger mt-3">
                                            {{ $errors->first('title_en') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="characteristic_en" class="form-label form-label--required">Характеристика</label>
                                    <textarea id="characteristic_en" name="characteristic_en" class="form-control"
                                              rows="4">{{ old('characteristic_en') }}</textarea>
                                    @if($errors->has('characteristic_en'))
                                        <div class="alert alert-danger mt-3">
                                            {{ $errors->first('characteristic_en') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="description_en" class="form-label form-label--required">Опис</label>
                                    <textarea id="description_en" name="description_en" class="form-control"
                                              rows="6">{{ old('description_en') }}</textarea>
                                    @if($errors->has('description_en'))
                                        <div class="alert alert-danger mt-3">
                                            {{ $errors->first('description_en') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif
@endsection