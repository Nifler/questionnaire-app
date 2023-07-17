<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Questionnaire</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
</head>
<body id="page-top">
@include('header')
<div class="container question-container">
    <div class="row justify-content-around">
        <div class="col-12"><h2>{{$poll->title}}</h2></div>
        <div class="col-12"><h4>{{$poll->description}}</h4></div>
    </div>
    <div class="row justify-content-around">
        <p>Дякуємо за ваші відповіді.</p>
    </div>
</div>
@include('footer')
<script src="{{asset('js/jquery-3.7.0.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/question.js')}}"></script>
</body>
</html>
