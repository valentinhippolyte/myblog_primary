@extends('base')
@section('content')
        <h1 class="display-3 text-center">Users</h1>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                </tr>
            </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
        @endforeach
    </tbody>
    </table>
    <div class="d-flex justify-content-center mt-5">
        {{ $users->links('vendor.pagination.custom') }}
    </div>
@endsection
