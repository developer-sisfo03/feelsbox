<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>


</head>
<body>
<div class="parent">
      <div class="container">
        <div class="left">
            <!-- <div class="header">
                 <h1>Feelsbox | Mental Health</h1>
            </div> -->
          <img src="img/foto-login.svg" alt="" srcset="" class="responsive" />
        </div>
        <div class="right">
          <h1>Login</h1>
          <p>Please enter your username and password to continue</p>
          {{-- show with success --}}
          @if(session('error'))
              <div class="alert alert-danger" role="alert">
                  {{ session('error') }}
              </div>
          @endif
          <form class="text-center login" action="/login" method="post">
            @csrf
            <div class="input-icons">
              <i class="fa fa-user icon"></i>
              <input
                class="no-outline"
                type="text"
                name="email"
                placeholder="Username"
                require
              />
            </div>
            <br />

            <div class="input-icons">
              <i class="fa fa-key icon"> </i>
              <input
                type="password"
                class="no-outline"
                name="password"
                placeholder=" Password"
                require
              />
            </div>


          <!-- <input type="checkbox" name="" id=""> -->
          <div class="desktop">
            <button class="submit" name="submit" type="submit">
              <h3>Login</h3>
            </button>
            <div class="ask">
                <div class="rememmber">
                    <label>
                        <input type="checkbox" name="" id="">
                        <span class="checkbox"></span>
                    </label>
                    <h5>Remember me</h5>
                </div>
                <h5>
                Don't have an account?
                <span class="sign">
                  <a href="/register"> Sign Up</a>
                </span>
                </h5>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom">
        <button class="submit" name="submit" type="submit">
          <h3>Login</h3>
        </button>
        <h5>
          Don't have an account?<span class="sign"
            ><a href="/">Sign Up</a></span
          >
        </h5>
      </div>
      </form>
    </div>
    <script type="text/javascript" src="js/login.js"></script>
</body>
</html>
</body>
</html>