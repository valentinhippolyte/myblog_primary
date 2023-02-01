@extends('base')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>

<div class="article uper">
    <div class="article-header">
        Add an article
    </div>

    <div class="article-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif

        <form action="{{ route('articlestore') }}">
            . @csrf
            @method("POST")
            <div class="form-group">
                <label for="title">Article title:</label>
                <input type="text" class="form-control" name="title" />
            </div>

            <div class="form-group">
                <label for="subtitle">Subtitle :</label>
                <input type="text" class="form-control" name="subtitle" />
            </div>

            <div class="form-group">
                <label for="content">Content :</label>
                <input type="text" class="form-control" name="content" />
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
@endsection