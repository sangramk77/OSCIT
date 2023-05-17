<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <!-- include libraries(jQuery, bootstrap) -->
    <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <!-- include summernote css/js-->
    <link href="public/css/summernote.css" rel="stylesheet">
    <script src="/js/plugins/summernote-bs4.js"></script>

   <style type="text/css">
        body{
            margin: 0;
            font-size: 1.1rem;
            font-weight: 500;
            line-height: 2;
            color: black;
            text-align: left;
            background-color:#f5f8fa;
            font-family: serif;
        }
        .page-item .page-link {
          z-index: 1;          
          color:white ;          
          background-color:lightgray;          
          border-color: white;          
        }
        .page-item-active:hover{
            background-color:black;          
            border-color: black;         
        }
        .card-header{
            text:white;
            background:#31a2c4;
            line-height: 2;
        }
        .card-body{
            text:white ;
            background:#f0efea;
            line-height: 2;
        }
        .side-nav-title{
            color: gray;           
        }
        .navbar-laravel
        {
            box-shadow: 0 2px 4px rgba(0,0,0,.04);font-family: serif;
        }
        .navbar-brand , .nav-link, .my-form, .login-form
        {
           font-family: serif;
        }
        .my-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;font-family: serif;
        }
        .my-form .row
        {
            margin-left: 0;
            margin-right: 0;font-family: serif;
        }
        .login-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
            font-family: serif;
        }
        .login-form .row
        {
            margin-left: 0;
            margin-right: 0;
            font-family: serif;
        }
        a:link    { text-decoration: none;font-family: serif;}
        .side-nav-link{ color: white; text-decoration: none;font-family: serif;}
        a:visited {color: white; text-decoration: none;font-family: serif;}
        a:hover   { color: white;text-decoration: none;font-family: serif;}
        a:active  {color: white; text-decoration: none;font-family: serif;}
    </style>
</head>
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel" style="background: #bdc3c7;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <div class="container" >
        <a class="navbar-brand" href="/"><i class="fa fa-user-secret pr-1"></i>Welcome {{auth()->user()->name}}!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
   
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>