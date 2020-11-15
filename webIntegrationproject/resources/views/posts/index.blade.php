@extends('layouts.app')

@section('content')




        <div class="container">
            <form method="POST" action="{{ route('posts.store')}}">
                @csrf
                <div class="form-group card-header">What's happening?
                <label for="title"></label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" rows="1"  value="{{ old('title') }}" required autofocus placeholder="Title..."></textarea>
                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                    <label for="content"></label>
                    <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="content" rows="3"  value="{{ old('content') }}" ></textarea>
                    @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <br>
                    <button type="submit" class="btn btn-primary">Post</button>
                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                </div>
                
            </form>
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{_('Tweetograms')}}</div>
                    <div class="card-body">
                        @foreach($posts as $post)
                        <div>
                            <h2 class="post_title">{{$post->title}}</h2><br>
                            <h4 class="post_content float-right">{{$post->content}}</h4><br>
                            <h6 class="post_author">Posted by &#64{{$post->author->username}}</h5>
                                <p class="post_date"><i>at {{$post->created_at}}<i>
                                            <p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </div>
</div>

@endsection
