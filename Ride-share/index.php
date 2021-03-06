<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ride-share</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" media="screen" href="../assets/style.css" />
    <script src="main.js"></script>
</head>

<body>
    <!-- NAV BAR-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="http://placehold.it/150x50?text=Logo" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar10">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar10">
                <ul class="navbar-nav nav-fill w-100">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- -->

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="text-center">
                    <form class="form-signin">
                        <h5 class="h5 mb-3 font-weight-normal">Already have an account?</h5>
                        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required=""
                            autofocus="">
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">

                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

                    </form>
                </div>
            </div>

            <div class="col-md-8">
                <form>
                    <h1 class="h3 mb-3 font-weight-normal text-center">Create an account</h1>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputFirstName">First name:</label>
                            <input type="text" class="form-control" id="inputFirstName">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputLastName">Last name</label>
                            <input type="text" class="form-control" id="inputLastName">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="12th St. Bixby">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputAddress">Telephone</label>
                            <input type="text" class="form-control" id="inputTelephone" placeholder="218 760 1111">
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" id="inputCity" placeholder="Longville">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <input type="text" class="form-control" id="inputState" placeholder="MN">

                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" id="inputZip" placeholder="56602">
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">Create Account</button>
                </form>
                <div>

                </div>
            </div>
        </div>
    </div>

    <!--footer class="mt-5 mb-0 bg-dark">
        <p class="pb-5 pt-4 text-muted text-center text-light">Ride Share App © 2017-2018</p>
    </footer-->



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous">
        </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous">
        </script>
</body>

</html>