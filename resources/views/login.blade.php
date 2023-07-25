@extends('base')

@section('content')
    <section class="page-section">
        <div class="container login">
            <div class="row">
                <h2>Login</h2>{{$userId}}
                <p id="error-message" class="error-message"></p>
            </div>
            <form class="login-form">
                <div class="form-outline mb-4">
                    <input type="email" id="email" class="form-control" />
                    <label class="form-label" for="email">Email address <span class="error-message"></span></label>
                </div>
                <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control" />
                    <label class="form-label" for="password">Password <span class="error-message"></span></label>
                </div>
                <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>
            </form>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{asset('js/login.js')}}"></script>
@endsection