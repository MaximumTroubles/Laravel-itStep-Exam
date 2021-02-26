@extends('layouts.app')

@section('content')
    {!! Form::model($user ,['url' => '/profile/user/'.$user->id, 'files'=>true, 'method' => 'put']) !!}

        @if (isset($user->avatar))
        <div class="avatar">
            <img src="{{  asset($user->avatar) }}" alt="">
        </div>
        <div class="form-group">
           {!! Form::label('imgUpload', 'Сменить аватар:', ) !!}
           {!! Form::file('imgUpload', ['class'=>'form-control']) !!}
        </div>
        @else
        <div class="form-group">
            {!! Form::label('imgUpload', 'Установить аватар:', ) !!}
            {!! Form::file('imgUpload', ['class'=>'form-control']) !!}
         </div>
        @endif

        <div class="form-group">
            {!! Form::label('name', 'Ваше имя:' ) !!}
            {!! Form::text('name', null, ['class'=>'form-control' . ($errors->has('name') ? ' is-invalid' : '')]) !!}
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('email', 'E-mail :' ) !!}
            {!! Form::tel('email', null, ['class'=>'form-control' . ($errors->has('email') ? ' is-invalid' : '')]) !!}
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('phone', 'Номер телефона:' ) !!}
            {!! Form::tel('phone', null, ['class'=>'form-control' . ($errors->has('phone') ? ' is-invalid' : '')]) !!}
            @error('phone')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-primary">Сменить данные</button>
    {!! Form::close() !!}
@endsection
