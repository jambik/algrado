<div class="form-group">
    {!! Form::label('name', 'Название') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('spec', 'Данные') !!}
    {!! Form::text('spec', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Заголовок') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group input-html">
    {!! Form::label('capacity', 'Вместимость') !!}
    {!! Form::textarea('capacity', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group input-html">
    {!! Form::label('price', 'Цена') !!}
    {!! Form::textarea('price', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group input-html">
    {!! Form::label('text', 'Описание') !!}
    {!! Form::textarea('text', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group input-html">
    {!! Form::label('note', 'Примечание') !!}
    {!! Form::textarea('note', null, ['class' => 'form-control']) !!}
</div>

@include('admin.partials._imageable')

<div class="form-group text-center">
    <button type="submit" class="btn btn-lg btn-primary"><i class="material-icons">check_circle</i> {{ $submitButtonText }}</button>
</div>

<div class="text-center">
    <a href="{{ route('admin.rooms.index') }}" class="btn btn-default">Отмена</a>
</div>

@section('head_scripts')
    <script src="/library/ckeditor/ckeditor.js"></script>
@endsection