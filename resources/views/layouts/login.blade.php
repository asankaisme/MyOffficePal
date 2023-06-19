<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap -->
    <link href={{ asset('template/vendors/bootstrap/dist/css/bootstrap.min.css') }} rel="stylesheet">
    <!-- Font Awesome -->
    <link href={{ asset('template/vendors/font-awesome/css/font-awesome.min.css') }} rel="stylesheet">
    <!-- NProgress -->
    <link href={{ asset('template/vendors/nprogress/nprogress.css') }} rel="stylesheet">
    <!-- Animate.css -->
    <link href={{ asset('template/vendors/animate.css/animate.min.css') }} rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href={{ asset('template/build/css/custom.min.css') }} rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <h1>My Office Pal</h1>
              <div>
                <input type="email" id="email" name="email" class="form-control" placeholder="Your email" value="{{ old('email') }}" required autocomplete="email" autofocus />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required autocomplete="current-password" />
              </div>
              <div>
                {{-- <a class="btn btn-default submit" href="index.html">Log in</a> --}}
                <button type="submit" class="btn btn-default submit">Sign In</button>
                {{-- <a class="reset_pass" href="#">Lost your password?</a> --}}
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <div>
                  <p>©2023 All Rights Reserved. | Information Technology Department | Central Bank of Sri Lanka</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>
