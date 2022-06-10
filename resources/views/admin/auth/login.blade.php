<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css">

   
    <title>Admin | Login </title>
</head>
<body>

<div class="container">
    <br><br>
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
            <br>
                <div class="col-lg-12 login-key">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN LOGIN
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form id="admin_login" action="{{ route('admin.login') }}" method="POST">
                        @csrf
                            <div class="form-group">
                                <label class="form-control-label">EMAIL</label>
                                <input type="email" name="email" class="form-control {{ $errors->has('email')?'is-invalid':'' }}" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" name="password" class="form-control {{ $errors->has('password')?'is-invalid':'' }}" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>   
                                    </span>
                                @endif
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-7 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

        <script>
            $("#admin_login").validate({
                errorClass: 'invalid-feedback animated fadeInDown',
                errorElement: 'div',
                rules: {
                    email: {
                        required: true,
                    },
                    password: {
                        required: true,
                    },
                },
                messages: {
                    email: {
                        required: "The email field is required.",
                    },
                    password: {
                        required: "The password field is required.",
                    },
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).parents("div.form-control").addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).parents(".error").removeClass(errorClass).addClass(validClass);
                }
            });
        </script>

</body>
</html>