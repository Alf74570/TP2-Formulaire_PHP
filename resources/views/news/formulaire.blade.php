@extends('template')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Formulaire #2 News</h2>
        </div>
        <div class="panel-body">
            <form class="" action="/news" method="post">
                {{ csrf_field() }}
                <div class="form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="title">
                    {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('content') ? 'has-error' : '' !!}">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" class="form-control" rows="8" cols="80"></textarea>
                    {!! $errors->first('content', '<small class="help-block">:message</small>') !!}
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
