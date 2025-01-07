<?php
include('./services/auth/auth.php'); // Cek login
include('./db/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages User Data -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
                    aria-expanded="true" aria-controls="collapseUser">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Data Management</span>
                </a>
                <div id="collapseUser" class="collapse" aria-labelledby="headingUser" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data:</h6>
                        <a class="collapse-item" href="userData.php">Data User</a>
                        <a class="collapse-item" href="classData.php">Data Kelas</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="userData.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data User</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="classData.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Kelas</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DISPLAY DATA    -->
                    <!-- Users Table -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Users Table</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <button class='btn btn-primary btn-md mb-3 addUserBtn'>Add New User</button>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th> <!-- Kolom Nomor -->
                                            <th>User ID</th>
                                            <th>Role</th>
                                            <th>Nama</th>
                                            <th>e-Mail</th>
                                            <th>Telp</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $result = $conn->query("SELECT id, role, name, email, phone, gender, address, dob FROM users WHERE deleted_at IS NULL");
                                        $no = 1; // Inisialisasi nomor urut
                                        while ($row = $result->fetch_assoc()) {

                                            $convertedGender = $row['gender'] == 'Male' ? 'Laki-laki' : 'Perempuan'; // Convert gender to readable format
                                            $convertedDob = date('d-m-Y', strtotime($row['dob'])); // Convert date of birth to readable format

                                            echo "<tr>
                                                        <td>{$no}</td> <!--Menampilkan nomor urut-->
                                                        <td>{$row['id']}</td>
                                                        <td>{$row['role']}</td>
                                                        <td>{$row['name']}</td>
                                                        <td>{$row['email']}</td>
                                                        <td>{$row['phone']}</td>
                                                        <td>{$convertedGender}</td>
                                                        <td>{$row['address']}</td>
                                                        <td>{$convertedDob}</td>
                                                        <td>
                                                            <!--<a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>-->
                                                            <button class='btn btn-warning btn-sm editUserBtn' 
                                                                data-id='{$row['id']}' 
                                                                data-role='{$row['role']}' 
                                                                data-name='{$row['name']}' 
                                                                data-email='{$row['email']}' 
                                                                data-phone='{$row['phone']}'
                                                                data-gender='{$row['gender']}' 
                                                                data-address='{$row['address']}'
                                                                data-dob='{$row['dob']}' 
                                                                >Edit</button>

                                                            <a href='./services/delete/user.delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
                                                        </td>
                                                    </tr>";
                                            $no++; // Increment nomor urut
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Teachers Table -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Teachers Table</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <button class='btn btn-primary btn-md mb-3 addTeacherBtn'>Add New Teacher</button>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th> <!-- Kolom Nomor -->
                                            <th>User ID</th>
                                            <th>ID Guru</th>
                                            <th>Nama</th>
                                            <th>Spesialisasi</th>
                                            <th>e-Mail</th>
                                            <th>Telp</th>
                                            <th>Alamat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $result = $conn->query("SELECT teachers.id, teachers.teacher_id, teachers.specialization, users.name, users.email, users.address, users.phone
                                                                FROM teachers 
                                                                INNER JOIN users 
                                                                ON users.id = teachers.id 
                                                                WHERE teachers.deleted_at IS NULL AND users.deleted_at IS NULL;");
                                        $no = 1; // Inisialisasi nomor urut
                                        while ($row = $result->fetch_assoc()) {

                                            echo "<tr>
                                                        <td>{$no}</td> <!--Menampilkan nomor urut-->
                                                        <td>{$row['id']}</td>
                                                        <td>{$row['teacher_id']}</td>
                                                        <td>{$row['name']}</td>
                                                        <td>{$row['specialization']}</td>
                                                        <td>{$row['email']}</td>
                                                        <td>{$row['phone']}</td>
                                                        <td>{$row['address']}</td>
                                                        <td>
                                                            <!--<a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>-->
                                                            <button class='btn btn-warning btn-sm editTeacherBtn'
                                                                data-id='{$row['id']}'
                                                                data-teacher-id='{$row['teacher_id']}' 
                                                                data-specialization='{$row['specialization']}'
                                                                >Edit</button>

                                                            <a href='./services/delete/teacher.delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
                                                        </td>
                                                    </tr>";
                                            $no++; // Increment nomor urut
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Students Table -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Students Table</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <button class='btn btn-primary btn-md mb-3 addStudentBtn'>Add New Student</button>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th> <!-- Kolom Nomor -->
                                            <th>User ID</th>
                                            <th>NISN / ID Siswa</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>e-Mail</th>
                                            <th>Telp</th>
                                            <th>Alamat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $result = $conn->query("SELECT students.id, students.student_id, students.class_id, classes.name as class_name, users.name, users.email, users.address, users.phone
                                                                FROM students
                                                                inner join classes
                                                                on students.class_id = classes.id
                                                                INNER JOIN users
                                                                ON students.id = users.id
                                                                WHERE students.deleted_at IS NULL AND users.deleted_at IS NULL;");
                                        $no = 1; // Inisialisasi nomor urut
                                        while ($row = $result->fetch_assoc()) {

                                            echo "<tr>
                                                        <td>{$no}</td> <!--Menampilkan nomor urut-->
                                                        <td>{$row['id']}</td>
                                                        <td>{$row['student_id']}</td>
                                                        <td>{$row['name']}</td>
                                                        <td>{$row['class_name']}</td>
                                                        <td>{$row['email']}</td>
                                                        <td>{$row['phone']}</td>
                                                        <td>{$row['address']}</td>
                                                        <td>
                                                            <!--<a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>-->
                                                            <button class='btn btn-warning btn-sm editStudentBtn'
                                                                data-id='{$row['id']}'
                                                                data-student-id='{$row['student_id']}'
                                                                data-class-id='{$row['class_id']}'
                                                                >Edit</button>

                                                            <a href='./services/delete/student.delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
                                                        </td>
                                                    </tr>";
                                            $no++; // Increment nomor urut
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- ADD MODALS -->
                    <!-- Modal for Add User -->
                    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form id="addForm" method="POST" action="./services/create/user.create.php">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addModalLabel">Add User</h5>
                                        <button type="button" class="btn-close closeUserModalBtn" aria-label="Close">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="id" id="addId">
                                        <div class="mb-3">
                                            <label for="addRole" class="form-label">Role : </label>
                                            <select name="role" class="form-control" id="addRole">
                                                <option value="Admin">Admin</option>
                                                <option value="Teacher">Teacher</option>
                                                <option value="Student">Student</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="addName" class="form-label">Name : </label>
                                            <input type="text" class="form-control" id="addName" name="name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="addEmail" class="form-label">Email : </label>
                                            <input type="email" class="form-control" id="addEmail" name="email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="addPassword" class="form-label">Password : </label>
                                            <input type="password" class="form-control" id="addPassword" name="password" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="addPhone" class="form-label">Nomor Telepon : </label>
                                            <input type="text" inputmode="numeric" class="form-control" id="addPhone" name="phone" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="gender" class="form-label">Jenis Kelamin:</label>
                                            <select name="gender" class="form-control" id="gender">
                                                <option value="Male">Laki-laki</option>
                                                <option value="Female">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="addAddress" class="form-label">Alamat : </label>
                                            <input type="text" class="form-control" id="addAddress" name="address" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="addDateOfBirth" class="form-label">Tanggal Lahir : </label>
                                            <input type="date" class="form-control" id="addDateOfBirth" name="dateOfBirth" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary closeUserModalBtn">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Add Teacher -->
                    <div class="modal fade" id="addTeacherModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form id="addForm" method="POST" action="./services/create/teacher.create.php">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addModalLabel">Add Guru</h5>
                                        <button type="button" class="btn-close closeTeacherModalBtn" aria-label="Close">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="id" id="addId">
                                        <div class="mb-3">
                                            <label for="addUserId" class="form-label">User ID : </label>
                                            <input type="text" inputmode="numeric" class="form-control" id="addUserId" name="user_id" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="addTeacherId" class="form-label">ID Guru : </label>
                                            <input type="text" inputmode="numeric" class="form-control" id="addTeacherId" name="teacher_id" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="addSpecialization" class="form-label">Spesialisasi : </label>
                                            <input type="text" class="form-control" id="addSpecialization" name="specialization" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary closeTeacherModalBtn">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Add Student -->
                    <div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form id="addForm" method="POST" action="./services/create/student.create.php">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addModalLabel">Add Student</h5>
                                        <button type="button" class="btn-close closeStudentModalBtn" aria-label="Close">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="id" id="addId">
                                        <div class="mb-3">
                                            <label for="addUserId" class="form-label">User ID : </label>
                                            <input type="text" inputmode="numeric" class="form-control" id="addUserId" name="user_id" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="addStudentId" class="form-label">ID Siswa / NISN : </label>
                                            <input type="text" inputmode="numeric" class="form-control" id="addStudentId" name="student_id" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="addClassId" class="form-label">ID Kelas : </label>
                                            <input type="text" inputmode="numeric" class="form-control" id="addClassId" name="class_id" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary closeStudentModalBtn">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- EDIT MODALS -->
                    <!-- Modal for Edit User -->
                    <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form id="editForm" method="POST" action="./services/update/user.update.php">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit User</h5>
                                        <button type="button" class="btn-close closeUserModalBtn" aria-label="Close">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="id" id="userId">
                                        <div class="mb-3">
                                            <label for="editRole" class="form-label">Role : </label>
                                            <select name="role" class="form-control" id="editRole">
                                                <option value="Admin">Admin</option>
                                                <option value="Teacher">Teacher</option>
                                                <option value="Student">Student</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editName" class="form-label">Name : </label>
                                            <input type="text" class="form-control" id="editName" name="name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editEmail" class="form-label">Email : </label>
                                            <input type="email" class="form-control" id="editEmail" name="email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editPhone" class="form-label">Nomor Telepon : </label>
                                            <input type="text" inputmode="numeric" class="form-control" id="editPhone" name="phone" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editGender" class="form-label">Jenis Kelamin:</label>
                                            <select name="gender" class="form-control" id="editGender">
                                                <option value="Male">Laki-laki</option>
                                                <option value="Female">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editAddress" class="form-label">Alamat : </label>
                                            <input type="text" class="form-control" id="editAddress" name="address" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editDateOfBirth" class="form-label">Tanggal Lahir : </label>
                                            <input type="date" class="form-control" id="editDateOfBirth" name="dateOfBirth" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary closeUserModalBtn">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Edit Teacher -->
                    <div class="modal fade" id="editTeacherModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form id="editForm" method="POST" action="./services/update/teacher.update.php">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Teacher</h5>
                                        <button type="button" class="btn-close closeTeacherModalBtn" aria-label="Close">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="id" id="teacherId">
                                        <div class="mb-3">
                                            <label for="editTeacherId" class="form-label">ID Guru : </label>
                                            <input type="text" inputmode="numeric" class="form-control" id="editTeacherId" name="teacher_id" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editSpecialization" class="form-label">Spesialisasi : </label>
                                            <input type="text" class="form-control" id="editSpecialization" name="specialization" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary closeTeacherModalBtn">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Edit Student -->
                    <div class="modal fade" id="editStudentModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form id="editForm" method="POST" action="./services/update/student.update.php">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Student</h5>
                                        <button type="button" class="btn-close closeStudentModalBtn" aria-label="Close">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="id" id="studentId">
                                        <div class="mb-3">
                                            <label for="editStudentId" class="form-label">ID Siswa / NISN : </label>
                                            <input type="text" inputmode="numeric" class="form-control" id="editStudentId" name="student_id" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editClassId" class="form-label">ID Kelas : </label>
                                            <input type="text" class="form-control" id="editClassId" name="class_id" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary closeStudentModalBtn">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondar" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <script>
        $(document).ready(function() {
            $('#userTable').DataTable();

            // Populate modal with user data for user
            $('.editUserBtn').on('click', function() {
                const id = $(this).data('id');
                const role = $(this).data('role');
                const name = $(this).data('name');
                const email = $(this).data('email');
                const phoneNumber = $(this).data('phone');
                const gender = $(this).data('gender');
                const address = $(this).data('address');
                const dateOfBirth = $(this).data('dob');

                // Populate the modal fields with existing user data
                $('#userId').val(id);
                $('#editRole').val(role);
                $('#editName').val(name);
                $('#editEmail').val(email);
                $('#editPhone').val(phoneNumber);
                $('#editGender').val(gender);
                $('#editAddress').val(address);
                $('#editDateOfBirth').val(dateOfBirth);

                // Show the modal
                $('#editUserModal').modal('show');
            });

            // Close modal
            $('.closeUserModalBtn').on('click', function() {
                $('#editUserModal').modal('hide');
            });

            // Populate modal with user data for teacher
            $('.editTeacherBtn').on('click', function() {
                const id = $(this).data('id');
                const teacherId = $(this).data('teacher-id');
                const specialization = $(this).data('specialization');

                console.log("id: " + id);
                // Populate the modal fields with existing user data
                $('#teacherId').val(id);
                $('#editTeacherId').val(teacherId);
                $('#editSpecialization').val(specialization);

                // Show the modal
                $('#editTeacherModal').modal('show');
            });

            // Close modal
            $('.closeTeacherModalBtn').on('click', function() {
                $('#editTeacherModal').modal('hide');
            });

            // Populate modal with user data for student
            $('.editStudentBtn').on('click', function() {
                const id = $(this).data('id');
                const studentId = $(this).data('student-id');
                const classId = $(this).data('class-id');

                // Populate the modal fields with existing user data
                $('#studentId').val(id);
                $('#editStudentId').val(studentId);
                $('#editClassId').val(classId);

                // Show the modal
                $('#editStudentModal').modal('show');
            });

            // Close modal
            $('.closeStudentModalBtn').on('click', function() {
                $('#editStudentModal').modal('hide');
            });

            // Open modal for adding new user
            $('.addUserBtn').on('click', function() {
                $('#addUserModal').modal('show');
            });

            $('.addTeacherBtn').on('click', function() {
                $('#addTeacherModal').modal('show');
            });

            $('.addStudentBtn').on('click', function() {
                $('#addStudentModal').modal('show');
            });

            // Close add modal
            $('.closeUserModalBtn').on('click', function() {
                $('#addUserModal').modal('hide');
            });

            $('.closeTeacherModalBtn').on('click', function() {
                $('#addTeacherModal').modal('hide');
            });

            $('.closeStudentModalBtn').on('click', function() {
                $('#addStudentModal').modal('hide');
            });
        });
    </script>
</body>

</html>