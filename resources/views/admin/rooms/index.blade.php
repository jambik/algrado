@extends('admin.layouts.full')

@section('title', 'Администрирование - Номера')

@section('content')
    <h2 class="text-center">Номера</h2>

    <p><a href="{{ route('admin.rooms.create') }}" class="btn btn-success"><i class="material-icons">add_circle</i> Добавить</a></p>

    @if ($items->count())
        <table id="table_items" class="table table-stripped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Фото</th>
                    <th>Название</th>
                    <th>Вместимость</th>
                    <th>Данные</th>
                    <th>Заголовок</th>
                    {{--<th>Цена</th>--}}
                    {{--<th>Описание</th>--}}
                    {{--<th>Примечание</th>--}}
                    <th data-orderable="false" class="btn-collumn"></th>
                    <th data-orderable="false" class="btn-collumn"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>@if ($item->image)<img src='/images/small/{{ $item->img_url.$item->image }}' alt='' />@endif</td>
                        <td>{{ $item->name }}</td>
                        <td>{!! $item->capacity !!}</td>
                        <td>{{ $item->spec }}</td>
                        <td>{{ $item->description }}</td>
                        {{--<td>{!! $item->price !!}</td>--}}
                        {{--<td>{!! $item->text !!}</td>--}}
                        {{--<td>{!! $item->note !!}</td>--}}
                        <td><a href="{{ route('admin.rooms.edit', $item->id) }}" class="btn btn-primary btn-small"><i class="material-icons">edit</i></a></td>
                        <td><button onclick="confirmDelete(this, '{{ $item->id }}', '{{ route('admin.rooms.destroy', $item->id) }}')" class="btn btn-danger btn-small"><i class="material-icons">delete</i></button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="no-items"></div>
    @endif
@endsection
