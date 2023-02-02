@extends('base')

@section('content')
    <div class="section_welcome">
        <main role="main" class="align-baseline">
            <h1 class="cover-heading">Welcome to my blog !</h1>
            <p class="lead">
                You will find all the latest articles here. <br>
                If you wish to create, modify or delete an article, you just have to login or register. <br>
                Have fun !
            </p>
            <p class="lead">
            <a href="{{ route('articles') }}" class="btn btn-lg btn-secondary">see articles</a>
            </p>
        </main>
    </div>
@endsection