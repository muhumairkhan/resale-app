@extends('main')

@section('content')

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Home Page</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class="container">

        <!-- Example row of columns -->
        <div class="row">

            @foreach($posts as $key => $post)

                <div class="col-md-5">
                    <h2 >{{$post->title}}</h2>
                    <span class="badge badge-secondary"> ${{ $post->price }}</span> &nbsp;
                    <span>{{ date('M j, Y H:i', strtotime($post->created_at)) }}</span>
                    <p></p>
                    <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">
                    <p></p>
                    <p>{{ substr($post->description, 0, 150) }}</p>
                    <p><a class="btn btn-secondary" href="/ad/{{ $post->id }}" role="button">View details &raquo;</a></p>
                </div>

                <br >

            @endforeach
        </div>

        <hr>

    </div> <!-- /container -->

@stop
