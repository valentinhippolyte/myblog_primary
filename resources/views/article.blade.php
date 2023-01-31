@extends('base')
@section('content')
    <!DOCTYPE html>


<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>MY BLOG</b></h1>
  <p>Welcome to the blog of <span class="w3-tag">unknown</span></p>
</header>

<!-- Grid -->
<div class="w-row">

<!-- Blog entries -->
<div class="w3-col 18 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <img src="https://cdn.pixabay.com/photo/2012/08/27/14/19/mountains-55067_1280.png" alt="Nature" style="width:100%">
    <div class="w3-container">
      <h3><b>{{$article->title}}</b></h3>
      <h5>{{ $article->subtitle }}, <span class="w3-opacity">{{ $article->created_at }}</span></h5>
    </div>

    <div class="w3-container">
      <p>{{ $article->content }}</p>
      <div class="w3-row">
      </div>
    </div>
  </div>
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

@endsection