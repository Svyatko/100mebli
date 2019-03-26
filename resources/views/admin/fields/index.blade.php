@extends('layouts.admin', ['header' => 'Список полів'])

@section('content')
    <div>
        <a href="{{ route('admin.fields.create') }}" class="btn btn-primary m-0">Додати поле</a>
    </div>
    <div class="mt-3">
        @if(count($fields) > 0)
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Назва поля</th>
                    <th scope="col" class="text-center">Категорії</th>
                    <th scope="col">Додано</th>
                    <th scope="col" class="text-center">Дії</th>
                </tr>
                </thead>
                <tbody>
                @foreach($fields as $field)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $field->title }}</td>
                        <td class="text-center">
                            @foreach($field->categories as $category)
                                <span class="btn btn-default">{{ $category->title }}</span>
                            @endforeach
                        </td>
                        <td>{{ $field->created_at->format('d/m/Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{ route('admin.fields.edit', $field->id) }}" class="btn btn-primary">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="javascript:;" class="btn btn-danger" onclick="$('#field-{{$field->id}}').submit()">
                                    <i class="fas fa-times"></i>
                                </a>
                                <form id="field-{{$field->id}}" action="{{ route('admin.fields.destroy', $field->id) }}" method="post">
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

            <h2>Полів не знайдено</h2>
        @endif
    </div>
@endsection