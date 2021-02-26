@extends('layouts.app')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
@endsection
@section('content')

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @elseif(session('danger'))
    <div class="alert alert-danger">
        {{ session('danger') }}
    </div>
    @endif

    <table class="hover cell-border" id="dataTable">
        <thead>
            <tr>
                <td>#</td>
                <td>Фото</td>
                <td>Имя</td>
                <td>Мыло</td>
                <td>Статус</td>
                <td>Редактирование</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{asset("$user->avatar")}}" width="100" alt=""></td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->ban->name}}</td>
                    {{-- <td>{{ $user->roles }}</td> --}}
                    <td>
                        <a href="{{ url('/admin/users/'.$user->id.'/edit') }}">
                            <button class="btn btn-primary">
                                <i class="fas fa-edit"></i>
                            </button>
                        </a>

                        <form action="{{ url('/admin/users'.$user->id) }}" method="DELETE" class="d-inline">
                            <button class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection
@section('js')

    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable();
        } );
    </script>
@endsection
