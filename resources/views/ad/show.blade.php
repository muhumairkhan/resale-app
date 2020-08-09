@extends('main')

@section('content')

    <br >
    <br >
    <br >
    <br >

    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Title -->
                <h1 class="mt-4">{{ $post->title }}</h1>

                <hr>

                <!-- Date/Time -->
                <p>  <span class="badge badge-secondary">Posted</span> {{ $post->created_at }}</p>
                <p> <span class="badge badge-secondary">Price</span> ${{ $post->price }} </p>
                <hr>

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

                <hr>

                <p>{{ $post->description }}</p>

{{--                <!-- Comments Form -->--}}
{{--                <div class="card my-4">--}}
{{--                    <h5 class="card-header">Leave a Comment:</h5>--}}
{{--                    <div class="card-body">--}}
{{--                        <form>--}}
{{--                            <div class="form-group">--}}
{{--                                <textarea class="form-control" rows="3"></textarea>--}}
{{--                            </div>--}}
{{--                            <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Single Comment -->--}}
{{--                <div class="media mb-4">--}}
{{--                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">--}}
{{--                    <div class="media-body">--}}
{{--                        <h5 class="mt-0">Commenter Name</h5>--}}
{{--                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Comment with nested comments -->--}}
{{--                <div class="media mb-4">--}}
{{--                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">--}}
{{--                    <div class="media-body">--}}
{{--                        <h5 class="mt-0">Commenter Name</h5>--}}
{{--                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.--}}

{{--                        <div class="media mt-4">--}}
{{--                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">--}}
{{--                            <div class="media-body">--}}
{{--                                <h5 class="mt-0">Commenter Name</h5>--}}
{{--                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="media mt-4">--}}
{{--                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">--}}
{{--                            <div class="media-body">--}}
{{--                                <h5 class="mt-0">Commenter Name</h5>--}}
{{--                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Seller Details</h5>
                    <div class="card-body">
                        <p>Name: {{ $user->name }} </p>
                        <p>Phone: {{ $user->phone }} </p>
                        <p>Address: {{ $user->address }} </p>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>

@stop
