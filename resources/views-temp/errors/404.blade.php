@extends('templates.app')

@section('title')
404 Not Found
@endsection

@section('content')
<div class="container">
    <div class="col-md-4 col-md-offset-4" style="margin-top: 20px; margin-bottom: 100px;">
        <h2>404 Not Found</h2>
        <p>
            The page you were looking for wasn't found.
        </p>
        <p>
            <a href="/">Home Page</a>
        </p>
    </div>
</div>

@endsection
