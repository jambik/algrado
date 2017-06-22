<div class="form-group">
    {!! Form::label('name', 'Название') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('short', 'Краткое описание') !!}
    {!! Form::textarea('short', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group input-html">
    {!! Form::label('text', 'Описание услуги') !!}
    {!! Form::textarea('text', null, ['class' => 'form-control']) !!}
</div>

@include('admin.partials._imageable')

<div class="form-group text-center">
    <button type="submit" class="btn btn-lg btn-primary"><i class="material-icons">check_circle</i> {{ $submitButtonText }}</button>
</div>

<div class="text-center">
    <a href="{{ route('admin.services.index') }}" class="btn btn-default">Отмена</a>
</div>

@section('head_scripts')
    <script src="/library/ckeditor/ckeditor.js"></script>
@endsection