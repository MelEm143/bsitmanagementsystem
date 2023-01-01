@extends('layout\layout')
@section('content')
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!--Image-->
                    <img src="img/IT-Logo Transparent.png" alt="cspc-background">
                    <div class="text">
                        <p>Bachelor of Science <i>Information Technology</i></p>
                    </div>
                </div>
                <form action="" class="col-md-6 right" method="POST">
                    <div class="input-box">
                        <header>LogIn Account</header>
                        <div class="input-field">
                            <input type="text" class="input" id="email" required autocomplete="off">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="password" required>
                            <label for="email">Password</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="submit" id="password" value="Sign In">
                        </div>
                        <div class="signin">
                            <span>Don't have an account yet? <a href="/create">Register here</a></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection