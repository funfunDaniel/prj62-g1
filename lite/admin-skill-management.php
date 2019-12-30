<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php  include('bootstrapCND.php') ?>
    <title>Activity Management</title>
    <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  
  <body id="page-top">
  <div id="fix-header">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  <a class="navbar-brand mr-1" href="admin-index.php">Admin System</a>

  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
  </button>


  <!-- Navbar Search -->
  <!-- <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-primary" type="button">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form> -->

  <!-- Navbar -->
  <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
    <!-- <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bell fa-fw"></i>
        <span class="badge badge-danger">9+</span>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </li>
    <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-envelope fa-fw"></i>
        <span class="badge badge-danger">7</span>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </li> -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle fa-fw"></i> Admin
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <!-- <a class="dropdown-item" href="#">Settings</a>
        <a class="dropdown-item" href="#">Activity Log</a> -->
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
      </div>
    </li>
  </ul>

</nav>
</div>

<div id="wrapper">

  <!-- Sidebar -->
  <ul class="sidebar navbar-nav">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <i class="fas fa-star"></i>
        <span>Activity</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <a class="dropdown-item" href="admin-activity-management.php">หน่วยงาน</a>
        <a class="dropdown-item" href="#">ทักษะ</a>
      </div>
    </li>
  </ul>

  
  <div id="content-wrapper">

    <div class="container-fluid" style="position: absolute;width:86%">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
          <li class="breadcrumb-item"><span>Activity management</span></li>
        </ol>

        <!-- Card content-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-building"></i>
            ทักษะที่เกี่ยวข้อง
          </div>
          <div class="card-body">
            <div class="table-responsive">
            <button type="button" class="btn btn-info add-skill"><i class="fas fa-plus"></i> เพิ่มทักษะ</button> 
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>ชื่อทักษะ</th>
                    </tr>
                    </thead>
                    <tbody id="skill-table">
                    </tbody>
                </table>
            </div>
          </div>
        </div>


    </div>
    <!-- /.container-fluid -->

    <!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">เพิ่มทักษะ</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body --> 
            <form id="data-form" name="data-form">               
              <div class="modal-body">
                <div class="form-group">
                  <label for="dep">ทักษะ:</label>
                  <input type="text" class="form-control" id="skill" name="skill">
                </div>
                <!-- <div class="form-group">
                  <label for="aff">ต้นสังกัด:</label>
                  <input type="text" class="form-control" id="aff" name="aff">
                </div>     -->
              </div>
            </form>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-info" id="btnUpdate">บันทึกข้อมูล</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">ปิดหน้าต่าง</button>
            </div>
        </div>
    </div>
</div>
    <!-- Sticky Footer -->
    <!-- <footer class="sticky-footer" style="position: fixed;">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright © Your Website 2019</span>
        </div>
      </div>
    </footer> -->

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <a class="btn btn-primary" href="admin-logout.php">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>
<script src="js/functions.js">
  // $(document).ready(function(){
  //     console.log("Test");
  //     getDepartmentData();

  // });
    // $(document).ready(function(){
    //   console.log("Test");
    //   getDepartmentData();

    //         $(document).on('click', '.add-department', function(){
    //           $("#myModal").modal('show');
    //         });

    //         $(document).on('click', '#btnUpdate', function(){
    //           addDepartment()
    //         });
    //     });
</script>
<script>
    $(document).ready(function(){
      getSkillData();
            $(document).on('click', '.add-skill', function(){
              $("#myModal").modal('show');
            });

            $(document).on('click', '#btnUpdate', function(){
              addSkill()
            });
        });
</script>

</body>
</html>