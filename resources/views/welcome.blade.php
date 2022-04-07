{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
   <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap5.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/css/login2.css') }}">
</head>
<body>

 
 
  
   <!-- login start -->
          
   
  <div class="container register">
    
  <div class="row">
    
  <div class="col-md-3 register-left">
  <img src="{{ asset('image/coatofarms.jpg') }}" alt="" />
  <h6>Republic of Namibia</h6>
  <h5> WELCOME TO THE MINISTRY OF INDUSTRIALIZATION AND TRADE</h5>
  </div>
  <div class="col-md-9 register-right">
  <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
  <li class="nav-item">
  <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" id="newuser-tab" data-toggle="tab" href="#newuser" role="tab" aria-controls="newuser" aria-selected="false">New User</a>
  </li>
  </ul>
  <div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
  <h3 class="register-heading">Login</h3>
  <div class="row register-form">
  <div class="col-md-12 profile_card">
      <form class="form-inline">
          <div class="form-group">
              <i class="fa fa-envelope-o"></i>
              <input type="text" class="form-control" name="username" placeholder="Enter user name *" value="" />
          </div>
          
          <div class="form-group">
                  <i class="fa fa-lock"></i>
              <input type="password" class="form-control" name="userpassword" placeholder="Enter Password *" value="" /><br>
          </div>
          <div class="float-right">
            <input type="submit" class="btn btn-primary" value="Register" />
            </div>
        </form>
  </div>
  </div>
  </div>
  <div class="tab-pane fade show" id="newuser" role="tabpanel" aria-labelledby="newuser-tab">
  <h3 class="register-heading">New User</h3>
  <div class="row register-form">
  <div class="col-md-6">
      <div class="form-group">
          <input type="text" class="form-control" placeholder="First Name *" value="" />
      </div>
      <div class="form-group">
          <input type="text" class="form-control" placeholder="Last Name *" value="" />
      </div>
      <div class="form-group">
          <input type="email" class="form-control" placeholder="Email *" value="" />
      </div>
      <div class="form-group">
          <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
      </div>
  
  </div>
  <div class="col-md-6">
      <div class="form-group">
          <input type="password" class="form-control" placeholder="Password *" value="" />
      </div>
      <div class="form-group">
          <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
      </div>
       <div class="float-right">
      <input type="submit" class="btn btn-primary" value="Register" />
      </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>


</body>
</html> --}}



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
 

    {{-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


   <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap5.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/css/hello.css') }}">
</head>

<body>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <!-- login start -->


    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                <h3>Welcome</h3>
                <p>You are 30 seconds away from earning your own money!</p>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" style="pointer-events: none;" id="login-tab" data-toggle="tab" href="#login" role="tab"
                            aria-controls="login" aria-selected="true">Login</a>
                    </li>
            
                    <li class="nav-item">
                        <a class="nav-link" id="newuser-tab" data-toggle="tab" href="#newuser" role="tab"
                            aria-controls="newuser" aria-selected="false">New User</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">

                        <h3 class="register-heading">Login</h3>
                        <div class="row register-form">
                            <div class="col-md-12 profile_card">
                                <form class="form-inline">
                                    <div class="form-group mb-2">
                                        <!-- <i class="far fa-envelope"></i> -->
                                        <input type="text" class="form-control" placeholder="Email" value="" />
                                    </div>

                                    <div class="form-group mx-sm-3 mb-2">
                                        <!-- <i class="fas fa-lock"></i> -->
                                        <input type="password" class="form-control" placeholder="Password *" value="" />
                                    </div>

                                    <button type="submit" class="btn btn-primary mb-2">Register</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="newuser" role="tabpanel" aria-labelledby="newuser-tab">
                        <h3 class="register-heading">New User</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" maxlength="10" minlength="10" class="form-control"
                                        placeholder="Phone *" value="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password *"
                                        value="" />
                                </div>
                                <div class="float-right">
                                    <input type="submit" class="btn btn-primary" value="Register" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script defer>        
        var login = document.querySelector('#login');
        var newuser = document.querySelector('#newuser');

        var logintab = document.querySelector('#login-tab');
        var newusertab = document.querySelector('#newuser-tab');

        logintab.addEventListener('click',(e)=>{
            logintab.style.pointerEvents = 'none';
            newusertab.style.pointerEvents = 'all';
            logintab.classList.toggle('active');
            newusertab.classList.toggle('active');

            login.classList.toggle('active');
            newuser.classList.toggle('active');
        })

        newusertab.addEventListener('click',(e)=>{
            newusertab.style.pointerEvents = 'none';
            logintab.style.pointerEvents = 'all';
            logintab.classList.toggle('active');
            newusertab.classList.toggle('active');
            login.classList.toggle('active');
            newuser.classList.toggle('active');
        })

    </script>
</body>

</html>