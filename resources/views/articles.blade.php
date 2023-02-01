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
                        <a href="{{ route('article', $article->slug) }}" class="btn btn-dark">Read more
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="{{ route('article-edit', $article->id) }}" class="btn btn-blue">Edit
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="{{ route('article-delete', $article->id) }}" class="btn btn-blue">Delete
                            <i class="fas fa-arrow-right"></i>
                        </a>
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