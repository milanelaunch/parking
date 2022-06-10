@include('layouts.master')
<body class="dark-edition">
  <div class="wrapper ">
  @include('layouts.sidebar')

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">User Details</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>

        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">       
        <div class="ajax-msg"></div>

        <div class="container-fluid">
        <div class="row">
                <div class="row col-sm-6">
                    <label  for="">First Name</label>
                    <input  type="text" value="{{$user->first_name}}" style="background-color:#3C4858; color:#AAAAAA" class="inputadd" readonly><br>
                </div>
                <div class="row m-auto col-sm-6">
                    <label  for="">Last Name</label>
                    <input  type="text" value="{{$user->last_name}}" style="background-color:#3C4858; color:#AAAAAA" class="inputadd" readonly><br>
                </div>
            </div><br>
            <div class="row">
                <div class="row col-sm-6">
                    <label  for="">Email Address</label>
                    <input  type="text" value="{{$user->email}}" style="background-color:#3C4858; color:#AAAAAA" class="inputadd" readonly><br>
                </div>
                <div class="row m-auto col-sm-6">
                    <label  for="">Mobile No</label>
                    <input  type="text" value="{{$user->mobile_no}}" style="background-color:#3C4858; color:#AAAAAA" class="inputadd" readonly><br>
                </div>
            </div><br>
            <div class="row row m-auto col-sm-6">
                    <label  for="">Profile Image</label>&nbsp;
                    <img src="{{$user->image}}" width=300px height=300px style="margin:40px;   object-fit: cover;" alt="Profile"> 
            </div>
            <div class="form-group">
                        <div>
                        <a style="color:white;" href="javascript:history.back()"><button type="submit" class="btn btn-primary waves-effect waves-light">Back</button></a>   
                        </div>
                    </div>
        @include('layouts.footer')