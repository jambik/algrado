@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'Бронирование номера',
        'level' => 'h1',
    ])

    @include('beautymail::templates.sunny.contentStart')

    <hr />
    <p><strong>Персональные данные:</strong></p>
    <p>Имя: {{ $input['name'] }}</p>
    <p>Город: {{ $input['city'] }}</p>
    <p>Телефон: {{ $input['phone'] }}</p>
    <p>Email: {{ $input['email'] }}</p>
    <div>&nbsp;</div>
    <p><strong>Данные для бронирования:</strong></p>
    <p>Количество ночей: {{ $input['days'] }}</p>
    <p>Дата заезда: {{ $input['date'] }}</p>
    <p>Количество взрослых: {{ $input['adults'] }}</p>
    <p>Количество младенцев: {{ $input['infants'] }}</p>
    <p>Количество детей : {{ $input['kids'] }}</p>
    <p>Дополнительная информация: {{ $input['message'] }}</p>

    @include('beautymail::templates.sunny.contentEnd')

@endsection