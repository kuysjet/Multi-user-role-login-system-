<?php

    session_start();

    if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
        require_once 'header.php';
?>

        <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark bg-dark">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.html" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Help
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
        <a class="dropdown-item" href="#">FAQ</a>
        <a class="dropdown-item" href="#">Support</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Contact</a>
      </div>
    </li>
  </ul>

  <!-- SEARCH FORM -->
  <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-comments"></i>
        <span class="badge badge-danger navbar-badge">3</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                Brad Diesel
                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">Call me whenever you can...</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                John Pierce
                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">I got your message bro</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                Nora Silvester
                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">The subject goes here</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
      </div>
    </li>
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">15</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-header">15 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i> 4 new messages
          <span class="float-right text-muted text-sm">3 mins</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-users mr-2"></i> 8 friend requests
          <span class="float-right text-muted text-sm">12 hours</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-file mr-2"></i> 3 new reports
          <span class="float-right text-muted text-sm">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
          class="fas fa-th-large"></i></a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="img/lte.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="img/faculty.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active mb-3">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Faculty Page
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link active mb-3 bg-success">
                <i class="far fa-circle nav-icon"></i>
                <p>Documents</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link mb-3 bg-warning">
                <i class="far fa-circle nav-icon"></i>
                <p>Settings</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="logout.php" class="nav-link mb-3 bg-danger">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Logout
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  </div>
  <!-- /.sidebar -->
</aside>

<div class="container p-4">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 text-center">Hi, <b class="text-primary"><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to your dashboard.</h1>
      </div>
        <div class="mt-3 ">
            <div class="m-auto">
                <!-- Add New Button trigger modal -->
                <button type="button" class="btn btn-success my-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add New Data
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content bg-light">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add your data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="insertData.php" class="record" method="post">
                            <div class="modal-body">
                                <ul class="nav nav-tabs justify-content-center mb-4">
                                    <li class="nav-item">
                                        <a class="nav-link text-dark active" aria-current="page" href="#">Main form</a>
                                    </li>
                                </ul>
                                <div class="form-floating mb-3">
                                    <input type="text" name="fn" class="form-control" id="first-name" placeholder="Your First Name" autofocus>
                                    <label for="first-name" class="form-label">First Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="ln" class="form-control" id="last-name" placeholder="Your Last Name">
                                    <label for="last-name" class="form-label">Last Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="d" class="form-control form-control-lg" id="department" placeholder="Department">
                                    <label for="exampleFormControlTextarea1" class="form-label">Department</label>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-success" type="submit">Add</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!--      Data table      -->
                
                <table id="myTable" class="display table text-center table-success">
                  <thead>
                  <tr class="fw-bolder">
                      <th class="text-center">#</th>
                      <th class="text-center">First Name</th>
                      <th class="text-center">Last Name</th>
                      <th class="text-center">Department</th>
                      <th class="text-center">Action/s</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                      require_once 'conn.php';
                      $no =  1 ;
                      $data = mysqli_query($conn, "SELECT * FROM student_list");
                      while($row = mysqli_fetch_array($data)){ ?>
                      <tr class="text-center text-darker">
                          <td><?= $no; ?></td>
                          <td><?= $row['firstname']; ?></td>
                          <td><?= $row['lastname']; ?></td>
                          <td><?= $row['department']; ?></td>
                          <td>
                              <a type="button" id="delete" class="btn btn-danger " href="deleteData.php?id=<?= $row['id']?>">Delete</a>
                              <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editData<?= $row['id']?>">Edit</a>
                          </td>
                      </tr>
                      <!-- Modal -->
                      <div class="modal fade" id="editData<?= $row['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="staticBackdropLabel">Update <?= $row['firstname']?>'s data</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="updateData.php" method="post">
                                <div class="modal-body">
                                  <div class="form-floating mb-3">
                                    <input type="hidden" name="id" value="<?= $row['id']?>">
                                      <input type="text" name="fn" class="form-control" value="<?= $row['firstname']?>" placeholder="Your First Name">
                                      <label for="first-name" class="form-label">New First Name</label>
                                  </div>
                                  <div class="form-floating mb-3">
                                      <input type="text" name="ln" class="form-control" value="<?= $row['lastname']; ?>" id="floatingPassword" placeholder="Your Last Name">
                                      <label for="floatingPassword">New Last Name</label>
                                  </div>
                                  <div class="form-floating mb-3">
                                      <input name="d" class="form-control form-control-lg" value="<?= $row['department']; ?>" type="text" placeholder="Department">
                                      <label for="exampleFormControlTextarea1" class="form-label">New Department</label>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-success" type="submit">Update</button>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <?php $no++; } ?>
                  </tbody>
                </table>
                </div>
            </div>
        </div>
    </main>
  </div>
</div>


<?php

}
else {
    header('Location: index.php');
    exit();
}
?>