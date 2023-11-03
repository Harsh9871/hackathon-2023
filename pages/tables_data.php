<?php
session_start();
require './_init.php';
if (isset($_GET['accept'])) {
  // echo "Hello World";
  $id = $_GET['accept'];
  
  // $accept = true;
  $sql = "SELECT `username`, `email`,`qualifications`,`state`,`domain`,`id`,`gender`,`website`,`description` FROM `user` WHERE `id` = '$id'";
  $userResult = mysqli_query($conn, $sql);
  $userData = mysqli_fetch_assoc($userResult);
  if ($userData) {
    $username = $userData['username'];
    $email = $userData['email'];
    $qualifications = $userData['qualifications'];
    $state = $userData['state'];
    $resume = $userData['resume'];
    $domain = $userData['domain'];
    $gender = $userData['gender'];
    $website = $userData['website'];
    $description = $userData['description'];
    
    // Insert data into the 'admin' table
    $semail = '';
    // $semail =  $_SESSION['session_email'];
    $updatereview = "UPDATE `user` SET `review` = 'reviewed' WHERE `email` = '$email'";
    $updatedreview = mysqli_query($conn, $updatereview);
    $insertAdminQuery = "INSERT INTO `admin` (`username`, `email`, `qualifications`, `state`, `domain`, `id`, `gender`, `website`, `description`) VALUES ('$username', '$email', '$qualifications', '$state', '$domain', '$id',  '$gender', '$website', '$description')";
    $insertResult = mysqli_query($conn, $insertAdminQuery);
   
  }
}

if (isset($_GET['delete'])) {
  echo "Hello";
  $id = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `user` WHERE `id` = $id";
  $result = mysqli_query($conn, $sql);
}
?>
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
          <a href="tables_data.php" class="sidebar-nav-link active">
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
          <a href="job.php" class="sidebar-nav-link">
            <span class="sidebar-nav-abbr">
              C
            </span>
            <span class="sidebar-nav-name">
              Create A Job
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
          <!-- BreadCrumb -->
          <div class="pb-3">
            <h1 align="center">
              <font color="blue">Pending Jobs</font>
            </h1>
          </div>

          <div class="row">
            <div class="col">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="card mb-grid">
                <div class="table-responsive-md">
                  <table class="table table-actions table-striped table-hover mb-0" data-table>
                    <!-- ... (your table headers) ... -->
                    <!-- 
                        
                      -->
                    <tbody>
                      <?php
                      // Fetch data from database and display rows
                      $sql = 'SELECT `id`, `email`, `username`, `description` FROM `user` where review = "unreviewed"  ';
                      $result = mysqli_query($conn, $sql);

                      while ($row = mysqli_fetch_assoc($result)) {
                        global $email;
                        $id = $row['id'];
                        $username = $row['username'];
                        $email = $row['email'];
                        $description = $row['description'];
                        echo '
                                <tr>
                                <tr>
                                <th scope="row">
                                  <label class="custom-control custom-checkbox m-0 p-0">
                                    <input type="checkbox" class="custom-control-input table-select-row">
                                    <span class="custom-control-indicator"></span>
                                  </label>
                                </th>
                                <td>' . $id . '</td>
                                <td>' . $email . '</td>
                                <td>' . $username . '</td>
                                <td>' . $description . '</td>
                                <td>
                                    <td>
                                        <a href="../profile/profile.html" class="btn btn-sm btn-primary">View Profile</a>
                                        <a href="?accept=' . $id . '" class="btn btn-sm btn-success">Accept</a>
                                        <a href="?delete=' . $id . '" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>';
                      }
                      ?>
                    </tbody>
                  </table>

                  <?php
                  // require './_init.php';



                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- // Main Content -->
  </div>

  <!-- If you prefer jQuery these are the required scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script src="../assets/js/vendor.js"></script>
  <script src="../assets/js/adminx.js"></script>

  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
      var table = $('[data-table]').DataTable({
        "columns": [
          null,
          null,
          null,
          null,
          null,
          {
            "orderable": false
          }
        ]
      });

      /* $('.form-control-search').keyup(function(){
        table.search($(this).val()).draw() ;
      }); */
    });
  </script>
  <!-- If you prefer vanilla JS these are the only required scripts -->
  <!-- script src="../dist/js/vendor.js"></script>
      <script src="../dist/js/adminx.vanilla.js"></script-->
</body>

</html>