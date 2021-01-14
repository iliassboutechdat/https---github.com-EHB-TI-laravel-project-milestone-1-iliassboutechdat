@extends('layouts.app')

@section('content')

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
        type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<header class="masthead mt-2" style="background-image: url('images/faqWallpaper.jpg') ">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>FAQ</h1>
            <span class="subheading">TweetoGram</span>
          </div>
        </div>
      </div>
    </div>
  </header>

<div class="container py-3">
@if(auth()->check())
 @if(Auth::user()->get(array('users.admin')) == "1")
<div class="container">

            <form method="POST" action="{{ route('faqs.store')}}">
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
        @endif
@endif
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="accordion" id="faqExample">
            @foreach($faqs as $faq)
                <div class="card">
                    <div class="card-header p-2" id="heading{{$faq->id}}">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$faq->id}}" aria-expanded="true" aria-controls="collapseOne">
                              Q: {{$faq->title}}?
                            </button>
                          </h5>
                    </div>

                    <div id="collapse{{$faq->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#faqExample">
                        <div class="card-body">
                            <b>Answer:</b> {{$faq->content}}
                        </div>
                    </div>
                </div>
            @endforeach    

        </div>
    </div>
    <!--/row-->
</div>

@endsection