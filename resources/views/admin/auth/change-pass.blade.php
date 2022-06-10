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

   
    <title>Admin | change Password </title>
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
                    Admin Change Password
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form class=" " action="{{ route('admin.update-password') }}" method="post">
                        @csrf
                        @method('PATCH')
                            <div class="form-group">
                                <label class="form-control-label">Old Password</label>
                                <input type="password" name="old_pass" class="form-control " placeholder="Enter old password" required>
                                
                            </div>
                            <div class="form-group">
                            <label class="form-control-label">New Password</label>
                            <div>
                                <input type="password" name="new_pass" id="new_pass" class="form-control" required  placeholder="Enter new password"/>
                            </div>
                            <div class="m-t-10">
                                <input type="password" name="new_pass_confirmation" class="form-control" required
                                        data-parsley-equalto="#new_pass"
                                        placeholder="Re-Type Password"/>
                            </div>
                        </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-8 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary">Update</button>
                                    
                                    <a href="javascript:history.back()" class="btn btn-outline-primary">Back</a>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>

        

</body>
</html>