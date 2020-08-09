@extends('main')

@section('content')

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Home Page</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg" href="/ad/create" role="button">Post New Ad</a></p>
        </div>
    </div>

    <div class="container">

        <!-- Example row of columns -->
        <div class="row">

            @foreach($posts as $key => $post)

                <div class="col-md-5">
                    <h2 >  {{$post->title}}</h2>
                    <span class="badge badge-secondary"> ${{ $post->price }}</span> &nbsp;
                    <span> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-date-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM0 5h16v9a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5zm9.336 7.79c-1.11 0-1.656-.767-1.703-1.407h.683c.043.37.387.82 1.051.82.844 0 1.301-.848 1.305-2.164h-.027c-.153.414-.637.79-1.383.79-.852 0-1.676-.61-1.676-1.77 0-1.137.871-1.809 1.797-1.809 1.172 0 1.953.734 1.953 2.668 0 1.805-.742 2.871-2 2.871zm.066-2.544c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2zm-2.957-2.89v5.332H5.77v-4.61h-.012c-.29.156-.883.52-1.258.777V8.16a12.6 12.6 0 0 1 1.313-.805h.632z"/>
                        </svg> {{ date('M j, Y H:i', strtotime($post->created_at)) }}</span>
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
