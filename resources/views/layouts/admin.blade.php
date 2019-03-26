<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}}</title>
    <link rel="stylesheet" href="{{ asset('css/admin/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/compiled.min.css') }}">
</head>
<body>
<div id="app" class="d-flex flex-wrap">
    <div class="sidenav">
        <div class="sidenav__label">Меню</div>
        <a href="{{ route('admin.dashboard') }}" class="sidenav__item">
            <span><i class="fas fa-tools"></i> Панель приладів</span>
        </a>
        <div class="sidenav__label">Налаштування</div>
        <a href="{{ route('admin.fields.index') }}" class="sidenav__item">
            <span><i class="fas fa-list"></i> Поля</span>
        </a>
        <a href="{{ route('admin.categories.index') }}" class="sidenav__item">
            <span><i class="far fa-list-alt"></i> Категорії</span>
        </a>

        <a href="{{ route('admin.items.index') }}" class="sidenav__item">
            <span><i class="fas fa-couch"></i> Меблі</span>
        </a>
        <ul class="sidenav__subitem-list">
            @foreach($categories as $category)
                <a href="{{ route('admin.items.index', $category) }}" class="sidenav__subitem">
                    <span>{{ $category->name }}</span>
                </a>
            @endforeach
        </ul>
    </div>
    <div class="content">
        <main class="p-4">
            @if(Session::has('message'))
                <div class="mb-5">
                    <div class="alert alert-{{ Session::get('message-type', 'info') }}">
                        {{ Session::get('message') }}
                    </div>
                </div>
            @endif
            <h1>{{ $header  }}</h1>
            @yield('content')
        </main>
    </div>
</div>
<script src="{{ asset('js/admin/vendor.min.js') }}"></script>
<script src="{{ asset('js/admin/app.min.js') }}"></script>
</body>

</html>