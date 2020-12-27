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


<header class="masthead" style="background-image: url('/storage/avatars/{{ $user->id }}/{{$user->avatar}}') ">
<div class="container">

    <div class="row">
        <div class="col-3 p-5">
            <img id="profilepicture" src='/storage/avatars/{{ $user->id }}/{{$user->avatar}}'
                class="rounded-circle mt-4" style="width:140px;height:150px;">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{$user->username}}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>0</strong> Posts</div>
                <div class="pr-5"><strong>0</strong> Followers</div>
                <div class="pr-5"><strong>1</strong> Following</div>
            </div>
            <div class="pt-4">
                <img src="\svg\calendar.svg" style="max-height: 40px;">
                {{$user->birthday}}</div>
            <div>
                <img src="\svg\bio.svg" style="max-height: 40px;">
                {{$user->bio}}</div>
            <div class="pb-2">
                <img src="\svg\search.svg" style="max-height: 40px;">
                <a href="#">{{$user->link}}</a></div>
                <button type="button" class="btn btn-info mb-2" href="{{ route('profile.edit') }}" >Change profile settings</button>
        </div>
    </div>
    </header>
</div>

<div class="container d-flex mt-5  ml-5 postContent mb-2 ">
    <div class="post col-4">
        <p class="post-text pb-1">Ma nouvelle voiture ah chien!</p><br>
        <img src="https://www.autocar.co.uk/sites/autocar.co.uk/files/styles/gallery_slide/public/images/car-reviews/first-drives/legacy/1-mercedes-amg-gt63-fourdoor-coupe-2019-uk-fd-hero-front.jpg?itok=ouf9g20f"
            class="w-100">
    </div>
    <div class="post col-4">
        <p class="post-text pb-1">Oujda ma ville</p><br>
        <img src="https://media.istockphoto.com/photos/oujda-city-and-mosque-picture-id491669482?k=6&m=491669482&s=612x612&w=0&h=4Q8_HKrFD-IkIiBnLaVUXhXYEFb94TIUdXbQz-eHDGY="
            class="w-100">
    </div>
    <div class="post col-4">
        <p class="post-text pb-1">Tommy Shelby</p><br>
        <img src="https://thumbor.pijper.io/nZuED_wKBRY-uSIx0r8sUpf8D70=/1290x726/top/https://cdn.pijper.io/2019/11/Nuki2KdfLv1572601453.jpeg"
            class="w-100">
    </div>
</div>
<!-- Footer -->
<footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; TweetoGram 2020</p>
        </div>
      </div>
    </div>
  </footer>
</div>

@endsection
