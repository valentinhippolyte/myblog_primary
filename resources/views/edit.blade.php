@extends('base')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Edit article
  </div>

  <div class="card-body">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form action="{{ route('article-update', $article->slug ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="title">Title :</label>
              <input type="text" class="form-control" name="title" value="{{ $article->title }}"/>
          </div>

          <div class="form-group">
              <label for="subtitle">subtitle :</label>
              <input type="text" class="form-control" name="subtitle" value="{{ $article->subtitle }}"/>
          </div>

          <div class="form-group">
              <label for="content">Content :</label>
              <input type="text" class="form-control" name="content" value="{{ $article->content }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection