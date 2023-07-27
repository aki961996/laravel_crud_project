<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css
    " rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Main Content -->
    <div class="container-fluid">
        <div class="row main-content bg-success text-center">
            <div class="col-md-4 text-center company__info">
                <span class="company__logo">
                    <h2><span class="fa fa-android"></span></h2>
                </span>
                <h4 class="company_title">Your Company Logo</h4>
            </div>
            <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
                <div class="container-fluid">
                    <div class="row">
                        <h2>Log In</h2>
                        @if(session()->has('message'))<h4 class="text-danger"> {{ session()->get('message') }}</h4>@endif
                    </div>
                    
                    <div class="row">
                        <form action="{{ route('do.login')}}" method="post" class="form-group">
                            @csrf
                            <div class="row">
                                <input type="text" name="email" id="email" class="form__input">
                            </div>
                            <div class="row">
                                <!-- <span class="fa fa-lock"></span> -->
                                <input type="password" name="password" id="password" class="form__input" >
                            </div>
                            <div class="row">
                                <input type="checkbox" name="remember_token" id="remember_token" class="">
                                <label for="remember_token">Remember Me!</label>
                            </div>
                            <div class="row">
                                <input type="submit" value="Submit" class="btn">
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <p>Don't have an account? <a href="">Register Here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="container-fluid text-center footer">
        Coded with &hearts; by <a href="https://bit.ly/yinkaenoch">Yinka.</a></p>
    </div>
</body>

</html>