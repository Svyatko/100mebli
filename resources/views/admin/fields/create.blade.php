@extends('layouts.admin', ['header' => 'Додати поле'])

@section('content')
    <div class="container">
        <form action="{{ route('admin.fields.store') }}" method="POST">
            @csrf

            @if(count($errors->all()) > 0)
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <div class="row">
                <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-uk-tab" data-toggle="pill" href="#v-pills-uk"
                           role="tab" aria-controls="v-pills-uk" aria-selected="true">Українська</a>

                        <a class="nav-link" id="v-pills-ru-tab" data-toggle="pill" href="#v-pills-ru"
                           role="tab" aria-controls="v-pills-ru" aria-selected="false">Русский</a>

                        <a class="nav-link" id="v-pills-en-tab" data-toggle="pill" href="#v-pills-en"
                           role="tab" aria-controls="v-pills-en" aria-selected="false">English</a>
                    </div>
                    <div class="form-group"></div>
                    <div class="form-group">
                        <button class="btn btn-primary">Додати</button>
                    </div>
                </div>

                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-uk" role="tabpanel"
                             aria-labelledby="v-pills-home-tab">
                            <div class="form-group">
                                <label for="title_uk">Назва поля</label>
                                <input id="title_uk" class="form-control" name="title_uk" value="{{ old('title_uk') }}">
                            </div>
                            <div class="form-group field__repeater">
                                <div class="js-put-values">
                                    @if(old('values.uk'))
                                        @foreach(old('values.uk') as $value)
                                            <div class="form-group">
                                                <div class="input-group mb-1">
                                                    <input class="form-control" name="values[uk][]" value="{{ $value }}">
                                                    <span class="js-remove-value">
                                                    <a href="javascript:;" class="btn btn-danger">
                                                        <i class="fas fa-times"></i>
                                                    </a>
                                                </span>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div>
                                    <span class="p-1 field__repeater-plus js-add-value" data-lang="uk">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-ru" role="tabpanel"
                             aria-labelledby="v-pills-ru-tab">
                            <div class="form-group">
                                <label for="title_ru">Назва поля</label>
                                <input id="title_ru" class="form-control" name="title_ru" value="{{ old('title_ru') }}">
                            </div>
                            <div class="form-group field__repeater">
                                <div class="js-put-values">
                                    @if(old('values.ru'))
                                        @foreach(old('values.ru') as $value)
                                            <div class="form-group">
                                                <div class="input-group mb-1">
                                                    <input class="form-control" name="values[ru][]" value="{{ $value }}">
                                                    <span class="js-remove-value">
                                                    <a href="javascript:;" class="btn btn-danger">
                                                        <i class="fas fa-times"></i>
                                                    </a>
                                                </span>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div>
                                    <span class="p-1 field__repeater-plus js-add-value" data-lang="ru">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-en" role="tabpanel"
                             aria-labelledby="v-pills-en-tab">
                            <div class="form-group">
                                <label for="title_en">Назва поля</label>
                                <input id="title_en" class="form-control" name="title_en" value="{{ old('title_en') }}">
                            </div>
                            <div class="form-group field__repeater">
                                <div class="js-put-values">
                                    @if(old('values.en'))
                                        @foreach(old('values.en') as $value)
                                            <div class="form-group">
                                                <div class="input-group mb-1">
                                                    <input class="form-control" name="values[en][]" value="{{ $value }}">
                                                    <span class="js-remove-value">
                                                    <a href="javascript:;" class="btn btn-danger">
                                                        <i class="fas fa-times"></i>
                                                    </a>
                                                </span>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div>
                                    <span class="p-1 field__repeater-plus js-add-value" data-lang="en">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection