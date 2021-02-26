@extends('layouts.app')
@section('content')
        @if (Auth::check() && Auth::user()->ban_id == 2)
            <div class="alert alert-danger">
                Вы забенены!
            </div>
        @endif
@endsection
