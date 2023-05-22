<!--เชื่อมต่อกับฐานข้อมูล require("..") -->
<?php
    require("connect.php");
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <!-- ส่วนของการเชื่อมต่อไฟล์ต่างๆ -->
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

<body>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            
            <!-- Nav Item - Tables -->
                <li class="nav-item active">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Home</span></a>
            </li>
            
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="register.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Register</span></a>
            </li>

            

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="index2.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Table</span></a>
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

                

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <br>
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1><br>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Employee</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <a href="add_from.php"></a>
                                <a href="add_from.php"></a>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>                                          
                                            <th>Address</th>
                                            <th>salary</th>
                                            <th>Birthday</th>
                                            <th>แก้ไข</th>
                                            <th>ลบ</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>                                          
                                            <th>Address</th>
                                            <th>salary</th>
                                            <th>Birthday</th>
                                            <th>แก้ไข</th>
                                            <th>ลบ</th>
                                            
                                        </tr>
                                    </tfoot>
            <!--Data php Table -->                      
            <?php
            $sql = "SELECT * FROM employee ";
            $result = mysqli_query($conn,$sql);
            $i = 1;
            if(mysqli_num_rows($result)> 0){
            //สามารใส่ var_dump(*ตัวแปล*) เพื่อแสดงข้อมูลที่มีการใส่เข้ามา
            //ส่วนของการประกาศตัวแปร ต่างๆ ในช้อง Table 
                while($row = mysqli_fetch_assoc($result)){
                    echo"<tr>";
                        
                        echo"<td>".$i."</td>";
                        
                        echo"<td>".$row['fullname']."</td>";
                        
                        echo"<td>".$row['address']."</td>";
                        
                        echo"<td style ='text-align:right;'>".number_format($row['salary']). "</td>";
                        
                        echo"<td>".$row['birthday']."</td>";
                        
                        echo"<td><a href='edit_form2.php?id=".$row['id']."'>แก้ไข</a></td>";
                        
                        echo"<td><a href='data.php?delete_id=".$row['id']."'
                        
                        onclick='return confirm(\"คุณต้องการลบข้อมูลหรือไม่\")'>ลบ</a>
                        
                        </td>";

                    "</tr>";
                    $i++;
                }
                } else {
                echo "EMPTY DATA";
                }
            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>
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
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="register.php">Logout</a>
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

</body>

</html>