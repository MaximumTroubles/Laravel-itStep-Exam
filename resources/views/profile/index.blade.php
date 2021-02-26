@extends('layouts.app')

@section('content')
    <p>Личный кабинет</p>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @elseif(session('danger'))
    <div class="alert alert-danger">
        {{ session('danger') }}
    </div>
    @endif

    <div class="profile_wrap d-flex flex-column justify-content-center align-items-center text-center">
        <div class="profile_avatar rounded mb-5">
            <img src="{{ asset($data->avatar) }}" alt="{{ $data->name }}" class="rounded-circle">
        </div>
        <div class="profile_name">
            <p>Имя:</p>
            <b><p>{{ $data->name }}</p></b>
        </div>
        <div class="profile_email">
            <p>Email:</p>
            <b><p>{{ $data->email }}</p></b>
        </div>
        <div class="profile_phone">
            <p>Телефон:</p>
            <b><p>{{ $data->phone }}</p></b>
        </div>
        <div class="profile_button">
            <a href="{{ url('profile/user/'.$data->id.'/edit') }}">
                <button class="btn btn-primary">
                    <i class="fas fa-edit mr-2"></i>Редактировать профиль
                </button>
            </a>
        </div>
    </div>
@endsection
