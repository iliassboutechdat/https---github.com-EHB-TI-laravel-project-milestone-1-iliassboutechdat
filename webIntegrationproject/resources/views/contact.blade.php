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
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
  <!-- Navigation -->
  
  <header class="masthead" style="background-image: url('images/contactwallpaper.jpg') ">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Contact Us</h1>
            <span class="subheading">TweetoGram</span>
          </div>
        </div>
      </div>
    </div>
  </header>


<div class="row-no-margin" id="contactus">
<div class="overlay"></div>
<div class="container mt-5" >
    <div class="row" style="height:550px;">
      <div class="col-md-6 maps" >
         <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Quai%20de%20l'Industrie%20170,%201070%20Anderlecht+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col-md-6">
      @if (session('success'))
      <div class="alert alert-primary" role="alert">
      {{Session::get('success')}}
        </div>
        @endif
        @if (session('failure'))
      <div class="alert alert-danger" role="alert">
      {{Session::get('failure')}}
        </div>
        @endif
      
        <h2 class="text-uppercase mt-3 font-weight-bold text-white">CONTACT FORM</h2>
        @if(Session::has('message_sent'))
                            <div class="alert alert-success" role="alert">
                            {{Session::get('message_sent')}}
                        @endif
        <form method="POST" action="{{route('contact.send')}}" enctype="multipart/form-data">
        @csrf
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
              <label for="name"></label>
                <input type="text" class="form-control mt-2" name="name" placeholder="Name" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="topic"></label>
                <input type="text" class="form-control mt-2" name="topic" placeholder="Topic" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="email"></label>
                <input type="email" class="form-control mt-2" name="email" placeholder="Email" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="phone"></label>
                <input type="number" class="form-control mt-2" name="phone" placeholder="Phonenumber" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
              <label for="content"></label>
                <textarea class="form-control" name="content" id="messageContentArea" placeholder="Insert message" rows="3" required></textarea>
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-light" type="submit">Send</button>
            </div>
          </div>
        </form>
        <div class="text-white">
        <h2 class="text-uppercase mt-4 font-weight-bold">Where to find us?</h2>

        <i class="fas fa-phone mt-3"></i> <a href="tel:+">(+32) 25233737</a><br>
        <i class="fas fa-globe mt-3"></i> Quai de l'Industrie 170, 1070 Anderlecht<br>
        <div class="my-4">
        <!--<a href=""><i class="fab fa-facebook fa-3x pr-4"></i></a>
        <a href=""><i class="fab fa-linkedin fa-3x"></i></a>-->
        </div>
        </div>
      </div>
    </div>
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

</body>
@endsection