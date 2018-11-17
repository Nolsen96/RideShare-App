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
                        <a class="nav-link" href="../index.php">Home</a>
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


    <!-- side menu-->

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list"
                        href="#list-home" role="tab" aria-controls="Profile">Profile</a>
                    <a class="list-group-item list-group-item-action" id="list-request-list" data-toggle="list" href="#list-request"
                        role="tab" aria-controls="request">Request a ride</a>
                    <a class="list-group-item list-group-item-action" id="list-scheduled-rides-list" data-toggle="list"
                        href="#list-scheduled-rides" role="tab" aria-controls="scheduled-rides">View scheduled ride</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings"
                        role="tab" aria-controls="settings">Settings</a>
                    <a class="list-group-item list-group-item-action"  href="../index.php"
                        role="tab" >Logout</a>
                </div>
            </div>

            <div class="col-md-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">Personal
                        info</div>
                    <div class="tab-pane fade" id="list-request" role="tabpanel" aria-labelledby="list-request-list">request
                        form</div>
                    <div class="tab-pane fade" id="list-scheduled-rides" role="tabpanel" aria-labelledby="list-scheduled-rides-list">schdeuled
                        ride list, cancel ride button</div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">change
                        account info</div>
                </div>
            </div>

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