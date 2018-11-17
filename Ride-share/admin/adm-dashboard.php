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
    <!-- TOP NAV BAR-->
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


    <!-- Side nav-->

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-drivers-list" data-toggle="list"
                        href="#list-drivers" role="tab" aria-controls="Profile">Drivers</a>
                    <a class="list-group-item list-group-item-action" id="list-customers-list" data-toggle="list" href="#list-customers"
                        role="tab" aria-controls="request">Customers</a>
                    <a class="list-group-item list-group-item-action" id="list-rides-list" data-toggle="list" href="#list-rides"
                        role="tab" aria-controls="settings">Rides</a>
                    <a class="list-group-item list-group-item-action"  role="tab" href="../index.php"
                        >Logout</a>
                </div>
            </div>

            <div class="col-md-9">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-drivers" role="tabpanel" aria-labelledby="list-home-list">
                        <!-- Drivers nav-->
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-view-tab" data-toggle="pill" href="#pills-view"
                                            role="tab" aria-controls="pills-view" aria-selected="true">View all drivers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-new-tab" data-toggle="pill" href="#pills-new"
                                            role="tab" aria-controls="pills-new" aria-selected="false">Add new driver</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-edit-tab" data-toggle="pill" href="#pills-edit"
                                            role="tab" aria-controls="pills-edit" aria-selected="false">Edit driver
                                            details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-remove-tab" data-toggle="pill" href="#pills-remove"
                                            role="tab" aria-controls="pills-remove" aria-selected="false">Remove driver
                                            details</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <!-- view driver-->
                                    <div class="tab-pane fade show active" id="pills-view" role="tabpanel"
                                        aria-labelledby="pills-view-tab">View table here</div>

                                    <div class="tab-pane fade" id="pills-new" role="tabpanel" aria-labelledby="pills-new-tab">
                                        <!-- Add driver form-->
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputFirstName-d">First Name</label>
                                                    <input type="text" class="form-control" id="inputFirstName-d">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputLastName-d">Last Name</label>
                                                    <input type="text" class="form-control" id="inputLastName-d">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputAddress-d">Address</label>
                                                    <input type="text" class="form-control" id="inputAddress-d">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputDOB-d">DOB</label>
                                                    <input type="text" class="form-control" id="inputDOB-d" placeholder="1994-12-12">
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputTelephone-d">Telephone</label>
                                                    <input type="text" class="form-control" id="inputTelephone-d">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputEmail-d">Email address</label>
                                                    <input type="text" class="form-control" id="inputEmail-d">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputEmer-d">Emergency Contact</label>
                                                    <input type="text" class="form-control" id="inputEmer-d">
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Add</button>
                                        </form>
                                    </div>
                                    <!---edit driver form-->
                                    <div class="tab-pane fade" id="pills-edit" role="tabpanel" aria-labelledby="pills-edit-tab">
                                        <form>
                                            <div class="form-group">
                                                <select class="custom-select">
                                                    <option selected>Select Driver</option>
                                                    <option value="1">Steve</option>
                                                    <option value="2">Harry</option>
                                                    <option value="3">Tia</option>
                                                </select>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputFirstName-edit-d">First Name</label>
                                                    <input type="text" class="form-control" id="inputFirstName-edit-d">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputLastName-edit-d">Last Name</label>
                                                    <input type="text" class="form-control" id="inputLastName-edit-d">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputAddress-edit-d">Address</label>
                                                    <input type="text" class="form-control" id="inputAddress-edit-d">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputDOB-edit-d">DOB</label>
                                                    <input type="text" class="form-control" id="inputDOB-edit-d"
                                                        placeholder="1994-12-12">
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputTelephone-edit-d">Telephone</label>
                                                    <input type="text" class="form-control" id="inputTelephone-edit-d">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputEmail-edit-d">Email address</label>
                                                    <input type="text" class="form-control" id="inputEmail-edit-d">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputEmer-edit-d">Emergency Contact</label>
                                                    <input type="text" class="form-control" id="inputEmer-edit-d">
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </form>
                                    </div>
                                    <!---remoove driver form-->
                                    <div class="tab-pane fade" id="pills-remove" role="tabpanel" aria-labelledby="pills-remove-tab">
                                        ****Or maybe implement search bar for ID/Name based selection instead of drop down<br>
                                        <form>
                                            <div class="form-group">
                                                <select class="custom-select">
                                                    <option selected>Select Driver</option>
                                                    <option value="1">Steve</option>
                                                    <option value="2">Harry</option>
                                                    <option value="3">Tia</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Remove</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-customers" role="tabpanel" aria-labelledby="list-request-list">
                        <!-- customers nav b-->
                        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-view-tab-b" data-toggle="pill" href="#pills-view-b"
                                    role="tab" aria-controls="pills-view-b" aria-selected="true">View all customers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-new-tab-b" data-toggle="pill" href="#pills-new-b" role="tab"
                                    aria-controls="pills-new-b" aria-selected="false">Add new customer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-edit-tab-b" data-toggle="pill" href="#pills-edit-b" role="tab"
                                    aria-controls="pills-edit-b" aria-selected="false">Edit customer details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-remove-tab-b" data-toggle="pill" href="#pills-remove-b"
                                    role="tab" aria-controls="pills-remove-b" aria-selected="false">Remove customer
                                    details</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <!---custmers view all table-->
                            <div class="tab-pane fade show active" id="pills-view-b" role="tabpanel" aria-labelledby="pills-view-tab-b">View</div>
                            <!---customer add new form-->
                            <div class="tab-pane fade" id="pills-new-b" role="tabpanel" aria-labelledby="pills-new-tab-b">

                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputFirstName-add-c">First Name</label>
                                            <input type="text" class="form-control" id="inputFirstName-add-c">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputLastName-add-c">Last Name</label>
                                            <input type="text" class="form-control" id="inputLastName-add-c">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress-add-c">Address</label>
                                            <input type="text" class="form-control" id="inputAddress-add-c">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputDOB-add-c">DOB</label>
                                            <input type="text" class="form-control" id="inputDOB-add-c" placeholder="1994/12/12">
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="inputTelephone-add-c">Telephone</label>
                                            <input type="text" class="form-control" id="inputTelephone-add-c">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail-add-c">Email address</label>
                                            <input type="text" class="form-control" id="inputEmail-add-c">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputEmer-add-c">Emergency Contact</label>
                                            <input type="text" class="form-control" id="inputEmer-add-c">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Add</button>
                                </form>
                            </div>
                            <!---cutomers edit form-->
                            <div class="tab-pane fade" id="pills-edit-b" role="tabpanel" aria-labelledby="pills-edit-tab-b">
                                <form>
                                    <div class="form-group">
                                        <select class="custom-select">
                                            <option selected>Select Customer</option>
                                            <option value="1">Steve</option>
                                            <option value="2">Harry</option>
                                            <option value="3">Tia</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="inputFirstName-edit-c">First Name</label>
                                            <input type="text" class="form-control" id="inputFirstName-edit-c">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputLastName-edit-c">Last Name</label>
                                            <input type="text" class="form-control" id="inputLastName-edit-c">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress-edit-c">Address</label>
                                            <input type="text" class="form-control" id="inputAddress-edit-c">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputDOB-edit-c">DOB</label>
                                            <input type="text" class="form-control" id="inputDOB-edit-c" placeholder="1994-12-12">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="inputTelephone-edit-c">Telephone</label>
                                            <input type="text" class="form-control" id="inputTelephone-edit-c">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail-edit-c">Email address</label>
                                            <input type="text" class="form-control" id="inputEmail-edit-c">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputEmer-edit-c">Emergency Contact</label>
                                            <input type="text" class="form-control" id="inputEmer-edit-c">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                            <!----customers remove form-->
                            <div class="tab-pane fade" id="pills-remove-b" role="tabpanel" aria-labelledby="pills-remove-tab-b">
                                <form>
                                    <div class="form-group">
                                        <select class="custom-select">
                                            <option selected>Select Customer</option>
                                            <option value="1">Steve</option>
                                            <option value="2">Harry</option>
                                            <option value="3">Tia</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Remove</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-rides" role="tabpanel" aria-labelledby="list-scheduled-rides-list">
                        <!-- rides nav-->

                        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-view-tab-c" data-toggle="pill" href="#pills-view-c"
                                    role="tab" aria-controls="pills-view-c" aria-selected="true">View all rides</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-new-tab-c" data-toggle="pill" href="#pills-new-c" role="tab"
                                    aria-controls="pills-new-c" aria-selected="false">Add new ride</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-edit-tab-c" data-toggle="pill" href="#pills-edit-c" role="tab"
                                    aria-controls="pills-edit-c" aria-selected="false">Edit ride details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-remove-tab-c" data-toggle="pill" href="#pills-remove-c"
                                    role="tab" aria-controls="pills-remove-c" aria-selected="false">Remove a ride</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <!--rides view all -->
                            <div class="tab-pane fade show active" id="pills-view-c" role="tabpanel" aria-labelledby="pills-view-tab-c">View</div>
                            <!---add new ride form-->
                            <div class="tab-pane fade" id="pills-new-c" role="tabpanel" aria-labelledby="pills-new-tab-c">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputFirstName-add-ride">Customer First Name</label>
                                            <input type="text" class="form-control" id="inputFirstName-add-ride">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputLastName-add-ride">Customer Last Name</label>
                                            <input type="text" class="form-control" id="inputLastName-add-ride">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPickUp-address-add-ride">Pick up address</label>
                                            <input type="text" class="form-control" id="inputPickUp-address-add-ride">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputDestination-add-ride">Destination address</label>
                                            <input type="text" class="form-control" id="inputDestination-add-ride"
                                                placeholder="1994/12/12">
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="inputDate-add-ride">Date</label>
                                            <input type="date" class="form-control" id="inputDate-add-ride">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputTime-add-ride">Time</label>
                                            <input type="text" class="form-control" id="inputTime-add-ride">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputEmer-add-ride">Emergency Contact</label>
                                            <input type="text" class="form-control" id="inputEmer-add-ride">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Add</button>
                                </form>
                            </div>
                            <!--edit ride details form-->
                            <div class="tab-pane fade" id="pills-edit-c" role="tabpanel" aria-labelledby="pills-edit-tab-c">
                                <form>
                                    <div class="form-group">
                                        <select class="custom-select">
                                            <option selected>Select customer's ride</option>
                                            <option value="1">Steve</option>
                                            <option value="2">Harry</option>
                                            <option value="3">Tia</option>
                                        </select>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputFirstName-edit-ride">Customer First Name</label>
                                            <input type="text" class="form-control" id="inputFirstName-edit-ride">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputLastName-edit-ride">Customer Last Name</label>
                                            <input type="text" class="form-control" id="inputLastName-edit-ride">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPickUp-address-edit-ride">Pick up address</label>
                                            <input type="text" class="form-control" id="inputPickUp-address-edit-ride">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputDestination-edit-ride">Destination address</label>
                                            <input type="text" class="form-control" id="inputDestination-edit-ride"
                                                placeholder="1994/12/12">
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="inputDate-edit-ride">Date</label>
                                            <input type="date" class="form-control" id="inputDate-edit-ride">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputTime-edit-ride">Time</label>
                                            <input type="text" class="form-control" id="inputTime-edit-ride">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputEmer-edit-ride">Emergency Contact</label>
                                            <input type="text" class="form-control" id="inputEmer-edit-ride">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Add</button>
                                </form>
                            </div>
                            <!---remove a ride -->
                            <div class="tab-pane fade" id="pills-remove-c" role="tabpanel" aria-labelledby="pills-remove-tab-c">
                               table of rides (w/ remove button)
                            </div>
                        </div>
                    </div>
                </div>
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