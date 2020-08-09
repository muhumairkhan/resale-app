@extends('main')

@section('content')

    <br >
    <br >
    <br >
    <br >

    <div class="container">
        <div class="col-md-10 col-md-offset-1">

            <h3>Post New Ad</h3>

            <form method="post" action="/ad">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter ad title">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="Enter ad price">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="5"></textarea>
                </div>

                {{ csrf_field() }}

                <button type="submit" class="btn btn-primary">Post Ad</button>
            </form>

        </div>
    </div>

@stop
