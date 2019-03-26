@extends('layouts.admin', ['header' => $title])

@section('content')
    <div>
        <a href="{{ route('admin.items.create') }}" class="btn btn-primary m-0">Додати продукцію</a>
    </div>
    <div class="mt-3">
        @if(count($items) > 0)
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Назва поля</th>
                    <th scope="col" class="text-center">Категорія</th>
                    <th scope="col" class="text-center">Кількість на складі, шт</th>
                    <th scope="col">Додано</th>
                    <th scope="col" class="text-center">Дії</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->name }}</td>
                        <td class="text-center">
                            {{ $item->category->title }}
                        </td>
                        <td class="text-center">
                            {{ $item->amount }}
                        </td>
                        <td >{{ $item->created_at->format('d/m/Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{ route('admin.items.edit', $item->id) }}" class="btn btn-primary">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="javascript:;" class="btn btn-danger"
                                   onclick="$('#item-{{$item->id}}').submit()">
                                    <i class="fas fa-times"></i>
                                </a>
                                <form id="item-{{$item->id}}" action="{{ route('admin.items.destroy', $item->id) }}"
                                      method="post">
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
            <h2>Меблів не знайдено</h2>
        @endif
    </div>
@endsection