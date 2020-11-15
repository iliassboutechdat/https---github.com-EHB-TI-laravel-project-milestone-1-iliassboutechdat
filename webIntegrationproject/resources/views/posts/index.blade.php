@extends('layouts.app')

@section('content')

<body>
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Profile</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
            @endif
        </div>
        @endif

        <div class="container">
            <form action="{{route('post.create')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">What's happening?</label>
                    <textarea class="form-control" id="" rows="3"></textarea>

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
        </div>
<br>
            <div class="row justify-content-center mt-2">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{_('Tweetograms')}}</div>
                        <div class="card-body">
                        @foreach($posts as $post)
                        <div>
                          <h2 class="post_title">{{$post->title}}</h2>
                          <h4 class="post_content">{{$post->content}}</h4>
                          <h5 class="post_author">Posted by "@"{{$post->author->username}}</h5>
                          <p class="post_date"><i>{{$post->created_at}}<i><p>
                        </div>
                        @endforeach
                        </div>
                    </div>
                </div>

</body>
@endsection
