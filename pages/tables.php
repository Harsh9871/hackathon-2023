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
          <a href="tables.php" class="sidebar-nav-link active">
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
              <font color="blue">Accepted Profiles</font>
            </h1>

            <?php
            require './_init.php';

            // Fetch data from the admin table
            $selectAdminQuery = "SELECT `username`, `email`, `qualifications`, `state`, `resume`, `domain`, `srno`, `age`, `gender`, `website`, `description` FROM `admin`";
            $adminResult = mysqli_query($conn, $selectAdminQuery);

            // Check if there are any results
            if (mysqli_num_rows($adminResult) > 0) {
              echo '
    <table class="table table-actions table-striped table-hover mb-0" data-table>
        <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Qualifications</th>
                <th scope="col">State</th>
                <th scope="col">Resume</th>
                <th scope="col">Domain</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Website</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>';

              // Output data of each row
              while ($row = mysqli_fetch_assoc($adminResult)) {
                echo '
        <tr>
            <td>' . $row["username"] . '</td>
            <td>' . $row["email"] . '</td>
            <td>' . $row["qualifications"] . '</td>
            <td>' . $row["state"] . '</td>
            <td>' . $row["resume"] . '</td>
            <td>' . $row["domain"] . '</td>
            <td>' . $row["age"] . '</td>
            <td>' . $row["gender"] . '</td>
            <td>' . $row["website"] . '</td>
            <td>' . $row["description"] . '</td>
            
        </tr>';
              }

              echo '
        </tbody>
    </table>';
            } else {
              // echo "No records found in the admin table.";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>

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

  <!-- If you prefer vanilla JS these are the only required scripts -->
  <!-- script src="../dist/js/vendor.js"></script>
    <script src="../dist/js/adminx.vanilla.js"></script-->
</body>

</html>