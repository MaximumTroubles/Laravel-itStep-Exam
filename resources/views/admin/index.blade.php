@extends('layouts.app')

@section('content')
    <a href="{{ route('users.index') }}">
        <button class="btn btn-primary">Все пользователи</button>
    </a>
@endsection

