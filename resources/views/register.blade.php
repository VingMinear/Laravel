<html>

<head>
  <title>Register</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="register.css" rel="stylesheet" type="text/css">
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

</head>

<body class="">
  <div class="register-photo">
    <div class="form-container">
      <form method="post" action="{{url('register/save')}}">
        @csrf
        <h2 class="text-center"><strong>Create</strong> an account.</h2>
        <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
        <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
        <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)"></div>
        <div class="form-group">
          <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
        </div>
        <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Sign Up</button></div><a href="#" class="already">You already have an account? Login here.</a>
      </form>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>