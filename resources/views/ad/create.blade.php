@extends('main')

@section('content')

    <br >
    <br >
    <br >
    <br >

    <div class="container">
        <div class="col-md-10 col-md-offset-1">

            <h3>Post New Ad</h3>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <p>Errors:</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="/ad">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter ad title">
                </div>
                <div class="form-group">
                    <label for="price">Price (USD)</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="Enter ad price">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="5"></textarea>
                </div>

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                {{ csrf_field() }}

                <button type="submit" class="btn btn-primary">Post Ad</button>
            </form>

        </div>
    </div>

@stop
