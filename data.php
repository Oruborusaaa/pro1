<?php
    require("connect.php");
    //add new data from to mysql
    if(isset($_POST['fullname'])){
        
        $fullname = $_POST['fullname'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];
        $birthday = $_POST['birthday'];

    $sql = "INSERT INTO employee(id , fullname, address, salary, birthday)
    VAlUES (null , '$fullname','$address','$salary','$birthday')";
    
    if (mysqli_query($conn,$sql)){
        echo "สำเร็จ";

    }else{
        echo "Error:".$sql."<br>".mysqli_error($conn);
    }
}
    //save edit data 

    if(isset($_POST['edit_form_id'])){
        
        $fullname = $_POST['edit_fullname'];
        $address = $_POST['edit_address'];
        $salary = $_POST['edit_salary'];
        $birthday = $_POST['edit_birthday'];
        $id = $_POST['edit_form_id'];
        $sql = "UPDATE employee SET fullname='$fullname',address='$address',
            salary = '$salary',birthday='$birthday' WHERE id= $id";
        
        if (mysqli_query($conn,$sql)){
            echo "";
            echo "<br><a href='index2.php'></a>";

        }else{
            echo "Error updating record".mysqli_error($conn);
        }
        
    }
       
        //delete data
     if(isset($_GET['delete_id'])){
        
        $id = $_GET['delete_id'];
        // sql to delete a record
    $sql = "DELETE FROM employee WHERE  id=$id";

    if (mysqli_query($conn,$sql)){
        echo "Record deleted successfully";
        echo "<br><a href='index2.php'></a>";

    } else{
        echo"Error dleting record:".mysqli_error($conn);
    }
    }


?>
<?php
    require("connect.php");
?>
<!DOCTYPE html>
<html lang="th">

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
    <form action="index2.php" method="post">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index2.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Tables -->
            <li class="nav-item active ">
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

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <br>
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1><br>
                        
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Succeed
                            </h6>
                        </div>
                                  </tfoot>
                                                
        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>A &copy; Your  2020</span>
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
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index2.php">Logout</a>
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