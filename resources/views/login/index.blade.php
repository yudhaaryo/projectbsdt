<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.partials.header')

@stack('before-style')
@include('layouts.partials.style')
@stack('after-style')
<link rel="stylesheet" href="/css/style.css">


</head>

<body id="page-top" class="0verflow-hidden">
    <div id="content-wrapper" class="d-flex flex-row">
        <div class="container-fluid">

        <div id="content">

            <main class="form-signin w-100 m-auto">
                <form>
                  <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                  <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                  <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>

                  <div class="checkbox mb-3">
                    <label>
                      <input type="checkbox" value="remember-me"> Remember me
                    </label>
                  </div>
                  <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                  <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
                </form>
              </main>

        </div>
        </div>
    </div>


@include('layouts.partials.script')



</body>

</html>

