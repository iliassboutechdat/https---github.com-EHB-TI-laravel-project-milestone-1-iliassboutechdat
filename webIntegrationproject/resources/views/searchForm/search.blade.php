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
<header class="masthead" style="background-image: url('images/search.jpg') ">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
          <form action="/search/result" method="POST" role="search" class="navbar-search">
    {{ csrf_field() }}
    <div class="" id="searchForm">
        <input type="text" class="form-control search-query mb-3" name="q"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-light ml-2">
                <span class="glyphicon glyphicon-search">search</span>
            </button>
        </span>
    </div>
</form>
            <span class="subheading">Search for a user</span>
          </div>
        </div>
      </div>
    </div>
  </header>

 
</body>