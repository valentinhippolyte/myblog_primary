@extends('base')
@section('content')
    <h1 class="display-3 text-center">Articles</h1>

    @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
    @endif

    <div class="articles row justify-content-center">
        @foreach($articles as $article)
        <div class="col-md-6">
            <div class="card my-3">
                <div class="card-body">
                    <div class="card-title">
                        <h5>{{ $article->title }}</h5>
                        <p class="card-text">{{ $article->subtitle }}</p>
                        <a href="{{ route('article', $article->slug) }}"><button type="button" class="btn btn-dark"><i class="fas fa-eye"></i></button></a>
                        @if(Auth::user())
                        <a href="{{ route('article-edit', $article->slug) }}"><button type="button" class="btn btn-primary"><i class="fas fa-pen"></i></button></a>
                        <a href="{{ route('article-delete', $article->slug) }}"><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-5">
        {{ $articles->links('vendor.pagination.custom') }}
    </div>
@endsection