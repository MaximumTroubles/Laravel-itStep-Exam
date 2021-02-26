@extends('layouts.app')

@section('content')
    {!! Form::model($user, ['url' => '/admin/users/'.$user->id , 'file' => true ,'method' => 'PUT']) !!}
        @include('admin.users._form')
    {!! Form::close() !!}
@endsection
