<!-- <?php
        // jtitle jdescription submit
        // session_start();
        // require './_init.php';
        // session_start();
        // if (isset($_POST['addjob'])){
        //     $jobtitle = $_POST['jtitle'];
        //     $jobdescription = $_POST['jdescription'];
        //     $sql = "INSERT INTO `jobs` ( `jtitle`, `description`) VALUES ('$jobtitle', '$jobdescription')";
        //     $result = mysqli_query($conn , $sql);
        //     header("Location: ./dash_index.html");
        //     exit();

        // }

        ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>GIL Recruitment Portal | </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="../assets/css/adminx.css" media="screen" />
</head>

<body>
    <div class="adminx-container">
        <!-- Header -->
        <nav class="navbar navbar-expand justify-content-between fixed-top">
            <a class="navbar-brand mb-0 h1 d-none d-md-block" href="dash_index.html">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjCWhrUCcu09JANQiaOla8fvL3cHmyo_tjPQ&usqp=CAU" class="navbar-brand-image d-inline-block align-top mr-2" alt="">
                GIL
            </a>

            <form class="form-inline form-quicksearch d-none d-md-block mx-auto">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-icon">
                            <i data-feather="search"></i>
                        </div>
                    </div>
                    <input type="text" class="form-control" id="search" placeholder="Type to search...">
                </div>
            </form>

            <div class="d-flex flex-1 d-block d-md-none">
                <a href="#" class="sidebar-toggle ml-3">
                    <i data-feather="menu"></i>
                </a>
            </div>

            <ul class="navbar-nav d-flex justify-content-end mr-2">
                <!-- Notificatoins -->
                <li class="nav-item dropdown d-flex align-items-center mr-2">
                    <a class="nav-link nav-link-notifications" id="dropdownNotifications" data-toggle="dropdown" href="#">
                        <i class="oi oi-bell display-inline-block align-middle"></i>
                        <span class="nav-link-notification-number">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-notifications" aria-labelledby="dropdownNotifications">
                        <div class="notifications-header d-flex justify-content-between align-items-center">
                            <span class="notifications-header-title">
                                Notifications
                            </span>
                            <a href="#" class="d-flex"><small>Mark all as read</small></a>
                        </div>

                        <div class="list-group">


                            <a href="#" class="list-group-item list-group-item-action">
                                <p class="mb-1"><br />1,000 new members today</p>
                                <small>3 days ago</small>
                            </a>

                            <a href="#" class="list-group-item list-group-item-action">
                                <p class="mb-1 text-danger"><strong>System error detected</strong></p>
                                <small>3 days ago</small>
                            </a>

                            <a href="#" class="list-group-item list-group-item-action">
                                <p class="mb-1">Your task <strong>Profile Revi</strong> is due today.</p>
                                <small>4 days ago</small>
                            </a>
                        </div>

                        <div class="notifications-footer text-center">
                            <a href="#"><small>View all notifications</small></a>
                        </div>
                    </div>
                </li>
                <!-- Notifications -->
                <li class="nav-item dropdown">
                    <a class="nav-link avatar-with-name" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
                        <img src="https://static.vecteezy.com/system/resources/previews/020/765/399/non_2x/default-profile-account-unknown-icon-black-silhouette-free-vector.jpg" class="d-inline-block align-top" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">My Tasks</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="logout.php">Sign out</a>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- expand-hover push -->
        <!-- Sidebar -->
        <div class="adminx-sidebar expand-hover push">
            <ul class="sidebar-nav">
                <li class="sidebar-nav-item">
                    <a href="dash_index.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-icon">
                            <i data-feather="home"></i>
                        </span>
                        <span class="sidebar-nav-name">
                            Active Jobs
                        </span>
                        <span class="sidebar-nav-end">

                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a href="tables.php" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr">
                            A
                        </span>
                        <span class="sidebar-nav-name">
                            Accepted Profiles
                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a href="tables_data.php" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr">
                            P
                        </span>
                        <span class="sidebar-nav-name">
                            Pending Profiles
                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a href="create.php" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr">
                            C
                        </span>
                        <span class="sidebar-nav-name">
                            Create An Admin
                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a href="job.php" class="sidebar-nav-link active">
                        <span class="sidebar-nav-abbr">
                            C
                        </span>
                        <span class="sidebar-nav-name">
                            Create a job
                        </span>
                    </a>
                </li>


            </ul>
            </li>
            </ul>
        </div><!-- Sidebar End -->

        <!-- Main Content -->
        <div class="adminx-content">
            <div class="adminx-main-content">
                <div class="container-fluid">
                    <div class="untree_co-hero inner-page overlay">
                        <div class="untree_co-hero inner-page overlay">
                            <div class="container">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-12">
                                        <div class="row justify-content-center ">
                                            <div class="col-lg-6 text-center ">
                                                <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">
                                                    <font color="blue">CREATE A JOB</font>
                                                </h1>

                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- /.row -->
                            </div> <!-- /.container -->

                        </div> <!-- /.untree_co-hero -->




                        <div class="untree_co-section">
                            <div class="container">

                                <div class="row mb-5 justify-content-center">
                                    <div class="col-lg-5 mx-auto order-1" data-aos="fade-up" data-aos-delay="200">
                                        <form action="" method="post" class="form-box">
                                            <div class="row">
                                                <div class="col-12 mt-3">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <input type="text" class="form-control" placeholder="Job Title" name="jtitle" maxlength="500" required>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <input type="text" class="form-control" placeholder="Expected Salary" name="jtitle" maxlength="500" required>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <input type="text" class="form-control" placeholder="Profile Skills" name="jtitle" maxlength="500" required>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <input type="text" class="form-control" placeholder="Mode of Job" name="jtitle" maxlength="500" required>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <input type="text" class="form-control" placeholder="Working Time" name="jtitle" maxlength="500" required>
                                            </div>
                                                <div class="col-12 mb-3">
                                                    <h6>Contract</h6>
                                                    <input type="file" accept="image/*" capture="camera" class="form-control" placeholder="Upload your image here" name="profilePhoto" required>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <textarea name="jdescription" class="form-control" id="" placeholder="Describe Job here" cols="30" rows="5" style="resize: none;"></textarea>
                                                    <!-- <input type="textarea" class="form-control" placeholder="Job Description" name="jdescription" maxlength="5000" required> -->
                                                </div>

                                                <div class="col-12">
                                                    <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><button type="submit" class="btn btn-primary" name="addjob">
                                                            Create </button></p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                            </div>
                        </div> <!-- /.untree_co-hero -->








                        <!-- If you prefer jQuery these are the required scripts -->
                        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
                        <script src="../assets/js/vendor.js"></script>
                        <script src="../assets/js/adminx.js"></script>

                        <!-- If you prefer vanilla JS these are the only required scripts -->
                        <!-- script src="../dist/js/vendor.js"></script>
    <script src="../dist/js/adminx.vanilla.js"></script-->
</body>

</html>