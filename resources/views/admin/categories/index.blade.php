@extends('layouts.admin', ['header' => 'Список категорій'])

@section('content')
    <div>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary m-0">Додати категорію</a>
    </div>
    <div class="mt-3">
        @if(count($categories) > 0)
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Назва категорій</th>
                    <th scope="col" class="text-center">Поля</th>
                    <th scope="col">Додано</th>
                    <th scope="col" class="text-center">Дії</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $category->title }}</td>
                        <td class="text-center">
                            @foreach($category->fields as $field)
                                <span class="btn btn-default">{{ $field->title }}</span>
                            @endforeach
                        </td>
                        <td>{{ $category->created_at->format('d/m/Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-primary">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="javascript:;" class="btn btn-danger" onclick="$('#category-{{$category->id}}').submit()">
                                    <i class="fas fa-times"></i>
                                </a>
                                <form id="category-{{$category->id}}" action="{{ route('admin.categories.destroy', $category->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else

            <h2>Категорій не знайдено</h2>
        @endif
    </div>
@endsection