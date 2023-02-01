@extends('base')

@section('content')
<body class="text-center">
    <div class="align-middle">
        <main role="main" class="inner cover">
            <h1 class="cover-heading">Welcome to my blog.</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="lead">
            <a href="{{ route('articles') }}" class="btn btn-lg btn-secondary">see articles</a>
            </p>
        </main>
    </div>
</body>
@endsection