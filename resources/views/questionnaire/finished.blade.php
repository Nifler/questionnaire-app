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
        <p>Thank you for your answers!</p>
        <p id="email-msg">We need your email ONLY to send the survey results and thank-you files about career development.
            We don't like spamming, too, so your email is safe.</p>
        <div style="color: red" id="error"></div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <button id="send" class="btn btn-primary">Submit</button>
    </div>
</div>
@include('footer')
<script src="{{asset('js/jquery-3.7.0.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/finished.js')}}"></script>
</body>
</html>
