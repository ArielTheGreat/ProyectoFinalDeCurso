<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Youtube</title> 
    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/custom.css')}}">
    <style>
    .listaDropdown li{
        margin-top:0.5rem;
    }
    .buttonOptions{
        width:100%;
    }
    .text-yellow-rt{
  color:#f19101 !important;
  text-decoration: none;
}
.text-yellow-rt:hover{
  text-decoration: underline;
}
    </style>
</head>
<body>

        @include("layouts.navbar")

        @yield('content')

        @include("layouts.footer")
        <script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>