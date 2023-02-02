@extends('base')
@section('content')
    <!DOCTYPE html>


<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>MY BLOG</b></h1>
  <p>Welcome to the article of <span class="w3-tag">unknown</span></p>
</header>

<!-- Grid -->
<div class="w-row">

<!-- Blog entries -->
<div class="w3-col 18 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <div class="w3-container">
      <h3><b>{{$article->title}}</b></h3>
      <h5>{{ $article->subtitle }}, <span class="w3-opacity">{{ $article->created_at }}</span></h5>
    </div>

    <div class="w3-container">
      <p>{{ $article->content }}</p>
      <div class="w3-row">
      </div>
    </div>
    @if(Auth::user())
      <a href="{{ route('article-edit', $article->slug) }}"><button type="button" class="btn btn-primary"><i class="fas fa-pen"></i></button></a>
      <a href="{{ route('article-delete', $article->slug) }}"><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
    @endif
  </div>
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

@endsection