<!doctype html>
<html lang="en">
    <head>
        <title>Simple CRUD Application</title>
        <link rel="shortcut icon" href="{{url('/')}}/fav.svg" type="image/x-icon">
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link  href="{{url('/')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
              <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                  <img src="{{url('/')}}/fav.svg" width="50" alt="">
                </a>
              </div>
        
              <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0" style="background-color: #e3f2fd;">
                <li><a href="{{route('index')}}" class=" px-2 btn btn-primary"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="{{route('member.view')}}" class="nav-link px-2">View</a></li>
                <li><a href="{{route('member.register')}}" class="nav-link px-2">Register</a></li>
              </ul>
        
              {{-- <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2">Login</button>
              </div> --}}
            </header>
          </div>