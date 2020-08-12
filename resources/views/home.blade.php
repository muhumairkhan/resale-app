@extends('main')

@section('content')

    <style>
        #profile-data-edit-form {
            display: none;
        }
    </style>

    <br >
    <br >

    <div class="container">
        <h6 class="section-title h1">Dashboard</h6>
        <div class="row">
            <div class="col-md-12 ">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-lines-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm2 9a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                            Profile
                        </a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-signpost-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 1.414V4h2V1.414a1 1 0 0 0-2 0zM1 5a1 1 0 0 1 1-1h10.532a1 1 0 0 1 .768.36l1.933 2.32a.5.5 0 0 1 0 .64L13.3 9.64a1 1 0 0 1-.768.36H2a1 1 0 0 1-1-1V5zm6 5h2v6H7v-6z"/>
                            </svg>
                            Ad Posted
                        </a>
                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                        <table class="table" id="profile-data-table">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ Auth::user()->name }}</td>
                                <td>{{ Auth::user()->email }}</td>
                                <td>{{ Auth::user()->phone }}</td>
                                <td>{{ Auth::user()->address }}</td>
                            </tr>
                            <tr>
                                <td><button type="button" id="edit-profile-data" class="btn btn-info">Edit Profile</button></td>
                            </tr>
                            </tbody>
                        </table>

                        <div id="profile-data-edit-form">

                            <h3>Edit Profile Data</h3>

                            <br >

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

                            <form method="POST" action="/user/update">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" id="name" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{ Auth::user()->phone }}" id="phone" placeholder="Enter phone">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" name="address" value="{{ Auth::user()->address }}" id="address" placeholder="Enter address">
                                </div>

                                <input type="hidden" name="id" value="{{ Auth::user()->id }}">

                                {{ csrf_field() }}

                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <button type="button" id="cancel-profile-edit" class="btn btn-danger">Cancel</button>
                            </form>

                        </div>

                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                        @if (count($posts)>0)
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col" style="width: 10%">Title</th>
                                    <th scope="col" style="width: 10%">Price</th>
                                    <th scope="col" style="width: 45%">Description</th>
                                    <th scope="col" style="width: 15%">Created At</th>
                                    <th scope="col" style="width: 20%">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                        @foreach($posts as $key => $post)

                                                <tr>
                                                    <td>{{$post->title}}</td>
                                                    <td>${{ $post->price }}</td>
                                                    <td>{{ substr($post->description, 0, 50) }}</td>
                                                    <td>{{ date('M j, Y H:i', strtotime($post->created_at)) }}</td>
                                                    <td>
                                                        <a class="btn btn-secondary" href="/ad/{{ $post->id }}" role="button">View</a>
                                                        <a href="/ad/{{ $post->id }}/edit"><button type="button" class="btn btn-info">Edit</button></a>
                                                        <a href="/ad/{{ $post->id }}/destroy"><button type="button" class="btn btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>

                                        @endforeach

                                    </tbody>
                            </table>

                        @else

                            <div class="text-center">
                                <h3>No ads posted.</h3>
                                <a class="btn btn-primary btn-lg" href="/ad/create" role="button">Post New Ad</a>
                            </div>

                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
