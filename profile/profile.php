<?php
session_start();
require '../pages/_init.php';

if (empty($_SESSION['session_email'])) {
  // Redirect to the login page or display an error message
  header("Location:../pages/login.php"); // Change 'login.php' to your actual login page
  exit;
}
$profile_email = $_SESSION['session_email'];

// Prepare and execute a query to retrieve user data
$query = "SELECT * FROM user WHERE email = '$profile_email'"; // Change 'users' to your actual table name
$result = mysqli_query($conn, $query);

// Check if the query was successful
if (!$result) {
  die("Query failed: " . mysqli_error($conn));
}

// Fetch user data
if (mysqli_num_rows($result) > 0) {
  $userData = mysqli_fetch_assoc($result);
  // Access user data using $userData['column_name']
}

// Close the database connection



?>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="profile.css">
</head>

<body>
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">

        <font color="white">User profile</font>


      </div>
    </nav>
    <!-- Header -->
    <div style="min-height: 600px; background-image: url(https://www.simplilearn.com/ice9/free_resources_article_thumb/friend_class_in_cpp.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
    </div>
    <!-- Page content -->
    <div class="container-fluid ">
      <div class="row">
        <div class="col">
          <div class="col">

            <div class="card card-profile shadow">
              <div class="row justify-content-center">
                <div class="col-lg-3 order-lg-2">
                  <div class="card-profile-image">
                    <a href="#">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVEuMlrmqT6UmxF0qgT3gmx48r3RTiLKPkz5olxld2JF9ZeSiPJCUa22-jjpiFNdLDn6o&usqp=CAU" class="rounded-circle">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                <div class="d-flex justify-content-between">
                  <a href="#" class="btn btn-sm btn-default float-right">Message</a>
                  <a href="#" class="btn btn-sm btn-info mr-4">Save</a>
                </div>
              </div>
              <div class="card-body pt-0 pt-md-4">
                <div class="row">
                  <div class="col">
                    <div class="card-profile-stats d-flex justify-content-center mt-md-5">

                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <h3>
                    Jessica Jones<span class="font-weight-light">, 27</span>
                  </h3>

                  <div class="h5 mt-4">
                    <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                  </div>
                  <div>
                    <i class="ni education_hat mr-2"></i>University of Computer Science
                  </div>
                  <hr class="my-4">
                  <h3 class="mb-0">Personal Details</h3><br>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="<?php echo $userData['username']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" value="<?php echo $userData['email']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">State</label>
                        <input type="text" id="input-state" class="form-control form-control-alternative" placeholder="City" value="<?php echo $userData['state']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country">Gender</label>
                        <input type="text" id="input-Gender" class="form-control form-control-alternative" placeholder="Country" value="<?php echo $userData['gender']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Qualification</label>
                        <input type="text" id="input-qualification" class="form-control form-control-alternative" value="<?php echo $userData['qualifications']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Linkdin Profile URL</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" value="<?php echo $userData['website']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Domain</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" value="<?php echo $userData['domain']; ?>">
                      </div>
                    </div>
                    <div class="pl-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-email">About Me</label>
                        <textarea rows="4" class="form-control form-control-alternative" value="" style="height: 100px; width: 1090px; resize: none;"><?php echo $userData['description']; ?></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><br>
      </div>
    </div>
  </div>
  <div class="container-fluid d-flex align-items-center">
    <h6><br><br><br></h6>
  </div>
  </div>

</body>

</html>