@extends('layouts.admin', ['header' => 'Оновити категорію'])

@section('content')
    <div class="container">
        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            @if(count($errors->all()) > 0)
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <div class="row">
                <div class="col-md-12">
                    <label for="parent_id" class="form-label form-label--required">Виберіть батьківську
                        категорію</label>
                    <select id="parent_id" class="form-control" name="parent_id" style="width: 100%">
                        <option value="0">Батьківська категорія</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                @include('admin.includes.pills')

                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-uk" role="tabpanel"
                             aria-labelledby="v-pills-home-tab">
                            <div class="form-group">
                                <label for="title_uk" class="form-label form-label--required">Назва категорії</label>
                                <input id="title_uk" class="form-control" name="title_uk" value="{{ $category->translate('uk')->name }}">
                            </div>
                            <div class="form-group">
                                <label for="seo_keys_uk" class="form-label">Ключові слова</label>
                                <select id="seo_keys_uk" class="form-control js-keywords select2-hidden-accessible"
                                        name="seo_keys_uk[]" multiple data-select2-id="seo_keys_uk" style="width: 100%">
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="seo_description_uk" class="form-label">Сео опис</label>
                                <textarea id="seo_description_uk" class="form-control" rows="6"
                                          name="seo_description_uk">{{ $category->translate('uk')->seo_description }}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-ru" role="tabpanel"
                             aria-labelledby="v-pills-ru-tab">
                            <div class="form-group">
                                <label for="title_ru" class="form-label form-label--required">Назва категорії</label>
                                <input id="title_ru" class="form-control" name="title_ru" value="{{ $category->translate('ru')->name }}">
                            </div>
                            <div class="form-group">
                                <label for="seo_keys_ru" class="form-label">Ключові слова</label>
                                <select id="seo_keys_ru" class="form-control js-keywords select2-hidden-accessible"
                                        name="seo_keys_ru[]" multiple data-select2-id="seo_keys_ru" style="width: 100%">
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="seo_description_ru" class="form-label">Сео опис</label>
                                <textarea id="seo_description_ru" class="form-control" rows="6"
                                          name="seo_description_ru">{{ old('seo_description_ru') }}</textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-en" role="tabpanel"
                             aria-labelledby="v-pills-en-tab">
                            <div class="form-group">
                                <label for="title_en" class="form-label form-label--required">Назва категорії</label>
                                <input id="title_en" class="form-control" name="title_en" value="{{ $category->translate('en')->name }}">
                            </div>
                            <div class="form-group">
                                <label for="seo_keys_en" class="form-label">Ключові слова</label>
                                <select id="seo_keys_en" class="form-control js-keywords select2-hidden-accessible"
                                        name="seo_keys_en[]" multiple style="width: 100%">
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="seo_description_en" class="form-label">Сео опис</label>
                                <textarea id="seo_description_en" class="form-control" rows="6"
                                          name="seo_description_en">{{ old('seo_description_en') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group"></div>
                    <div class="form-group">
                        <label for="fields" class="form-label form-label--required">Поля</label>
                        <select id="fields" name="fields[]" class="form-select js-select2-fields" multiple
                                style="width: 100%">
                            <option>Виберіть поля</option>
                            @foreach($fields as $field)
                                <option value="{{ $field->id }}" @if($fields_ids->contains($field->id)) selected @endif>{{ $field->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection