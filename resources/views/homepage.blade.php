<!--@extends('layouts.app')-->
 <!-- @section('content')--> 
  <!--<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">-->
  <!-- resources/views/events/index.blade.php -->
  <head>
    <!-- Other head elements -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Add these links in the <head> section of your HTML -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Your existing HTML code -->

<!-- Bootstrap JavaScript and Popper.js files -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</head>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!--
  <div class="card-header d-flex justify-content-between align-items-center">
    <div>
        {{ __('Dashboard') }}
    </div>

    <div class="user-info">
        <span>Welcome, {{ Auth::user()->name }}</span>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>
-->
<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/dashboard') }}">{{ __('HOME') }}</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
    <a class="nav-link" href="#news-section">News</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#events-section">Events</a>
</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--
<div class="row justify-content-center">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <span class="nav-link">Welcome, {{ Auth::user()->name }}</span>
                    <span class="nav-link">  {{ __('You are logged in!') }}</span>
                </div>
            </div>
-->
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-target="#demo" data-slide-to="0" class="active"></button>
    <button type="button" data-target="#demo" data-slide-to="1"></button>
    <button type="button" data-target="#demo" data-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="{{ asset('assets/img/n1.jpeg') }}" alt="Los Angeles" class="d-block w-50 mx-auto">
    </div>
    <div class="carousel-item">
        <img src="{{ asset('assets/img/n2.jpg') }}" alt="Chicago" class="d-block w-50 mx-auto">
    </div>
    <div class="carousel-item">
        <img src="{{ asset('assets/img/n3.jpeg') }}" alt="New York" class="d-block w-50 mx-auto">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-target="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<style>
    .carousel-control-prev,
    .carousel-control-next {
        font-size: 1rem; /* Adjust the font size to your preference */
        width: 50px; /* Adjust the width to your preference */
        height: 50px; /* Adjust the height to your preference */
        top: 50%; /* Center vertically */
        transform: translateY(-50%); /* Center vertically */
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-size: 50px 50px; /* Adjust the background size to your preference */
    }
</style>


<!-- Your existing content goes here -->


   

<div id="events-section" class="table-with-bg">
<div class="table-with-bg1">
      <div class="table-responsive">
      <h1 class="text-white">EVENTS</h1>
      <table style="border: 3px solid black;" class="table">
    <thead>
        <tr>
            <th style="border: 3px solid black;">NO.</th>
            <th style="border: 3px solid black;">NAME</th>
            <th style="border: 3px solid black;">DESCRIPTION</th>
            <th style="border: 3px solid black;">ORGANISER</th>
            <th style="border: 3px solid black;">VENUE</th>
            <th style="border: 3px solid black;">DATE</th>
            <!-- Add similar styles to other header cells -->
        </tr>
    </thead>
    <tbody>
        @foreach ($event as $data)
        <tr>
            <td style="border: 3px solid black;">{{ $data->id }}</td>
            <td style="border: 3px solid black;">{{ $data->title }}</td>
            <td style="border: 3px solid black;">{{ $data->description }}</td>
            <td style="border: 3px solid black;">{{ $data->organiser }}</td>
            <td style="border: 3px solid black;">{{ $data->venue }}</td>
            <td style="border: 3px solid black;">{{ $data->date }}</td>
            <!-- Add similar styles to other data cells -->
        </tr>
        @endforeach
    </tbody>
</table>

        <!--
      <table style="border: 3px solid black;" class="table">
      <h1 class="text-white">EVENTS</h1>
          <thead class="font-weight-bold" style="border: 3px solid black;" class="table">
            <th>NO.</th>
            <th>NAME</th>
            <th>DESCRIPTION</th>
            <th>ORGANISER</th>
            <th>VENUE</th>
            <th>DATE</th>
            {{-- <th>EDIT</th>
            <th>DELETE</th> --}}
          </thead>
          <tbody style="border: 3px solid black;" class="table">
            @foreach ($event as $data)
            <tr style="border: 3px solid black;" class="table">
            <td style="border: 1px solid black;>{{$data->id}}</td>
            <td class="py-2">{{$data->title}}</td>
            <td class="py-2">{{$data->description}}</td>
            <td class="py-2">{{$data->organiser}}</td>
            <td class="py-2">{{$data->venue}}</td>
            <td class="py-2">{{$data->date}}</td>
              <td>
              @if ($data->mainPicture)
           <img src="{{ asset('storage/app/images/' . $data->mainPicture->filename) }}" alt="Main Picture">

             <img style="height: 110px; width: 110px;" src="{{ asset('storage/app/images/' . $data->mainPicture->filename) }}" alt="Main Picture">


              @else
              <p>No main picture available.</p>
              @endif
              </td>
              {{-- <td>
                <a href="#" class="btn btn-success">EDIT</a>
              </td>
              <td>
                <a href="#" class="btn btn-danger">DELETE</a>
              </td> --}}
            </tr>
            @endforeach
            
            {{-- @if (Auth::user()->usertype=="warden")
                <h1>hey warden</h1>
            @endif
            --}}
          </tbody>
        </table>
            </div>-->
       <!-- 
        @foreach ($news as $item)
            <h3>{{$item->title}}</h3>
            <h4>{{$item->content}}</h4>
            <h4>{{$item->occurance}}</h4>
        @endforeach
            
        <div class="news-item">
    <h3>{{ $item->title }}</h3>
    <h4>{{ $item->content }}</h4>
    <h4>{{ $item->occurance }}</h4>
</div>-->
            </div>
      

            <div id="news-section" class="table-with-bg1">
<div class="table-with-bg1">
<h1 class="mt-4 mb-4 text-white">News</h1>

<div class="marquee-container">
    <div class="marquee-content">
        @foreach ($news as $item)
            <div class="news-item">
                <h3 class="text-white">{{ $item->title }}</h3>
                <p class="text-white">{{ $item->content }}</p>
                <p class="text-white">{{ $item->occurance }}</p>
            </div>
        @endforeach
    </div>
</div>


      </div>
    </div>
            </div>
    <h1></h1>
  @endsection