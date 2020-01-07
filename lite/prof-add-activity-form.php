<?php 
    session_start();
?>
<html lang="en">
    <head>
        <style>
             label {
                font-size:14px;
            }
        </style>
        <title>
            เพิ่มกิจกรรม | กิจกรรมนักศึกษา
        </title>
            <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="./css/stylesheet1.css">
        <link rel="stylesheet" href="./css/stylesheet2.css">
        
        <!-- <script src="./js/jquery-3.4.1.js"></script> -->
        <script src="showAll.js"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <!-- <script src="sweetalert2.min.js"></script> -->
        <!-- <link rel="stylesheet" href="sweetalert2.min.css"> -->

        <!-- <script src="http://code.jquery.com/jquery-latest.min.js"></script> -->
        <?php  include('header.php') ?>
    </head>

    <body class="fix-header fix-sidebar card-no-border logo-center">
        <!-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div> -->
        <?php  include('navbar.php') ?>

        <div class="card-block">
            <div class="row">   
            </div>  
                <div class="row">  
                    <div class="col-lg-3 col-xlg-3 col-md-5"> 
                        <div class="card">
                            <img class="card-img-top" src="../images/cloud.jpg" alt="Card image cap">
                            <div class="card-body little-logo text-center">
                                <!-- Left Menu Bar--> 
                                <div class="pro-img"><img src="../images/logo-header.gif" alt="user"></div>
                                    <h3 class="m-b-0">สำนักวิชาเทคโนโลยีสังคม</h3>
                                    <?php include 'index-left-bar.php';?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-7">
                            <div class="card">
                                <div class="show-table-data">
                                    <!-- <div class="card card-top">
                                    Hello
                                    </div> -->
                                    <!-- <div class="card-body"> -->
                                        <!-- <div class="alert alert-primary" role="alert"> -->
                                            <h3>เพิ่มกิจกรรม | กิจกรรมนักศึกษา</h3>
                                        <!-- </div> -->
                                        <form name="add-act-Form" id="add-act-Form" action="check-prof-add-activity.php" method="POST" enctype="multipart/form-data">
                                            <table class="table table-borderless" style="margin-top:5%">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width:20%">
                                                                    <label for="activity-type">ประเภทกิจกรรม</label>
                                                                </td>
                                                                <td>
                                                                    <!-- <select name="acttype" class="selectborder" id="sel1">
                                                                        <option value="none">----- เลือกประเภทกิจกรรม -----</option>
                                                                        <option value="university">มหาวิทยาลัย</option>
                                                                        <option value="school">สำนักวิชา</option>
                                                                        <option value="other">หน่วยงานภายนอก</option>
                                                                    </select> -->
                                                                    <?php 
                                                                include 'config.php';
                                                                $sql = "SELECT * FROM `department`";
                                                                $result = mysqli_query($conn,$sql);
                                                                if (mysqli_num_rows($result) > 0){
                                                                    echo '
                                                                    <div id="dep-list">

                                                                        <select class="form-control " name="acttype" style="width: 100%;height: 40px;margin-top: 5px;margin-bottom: 5px; border-color:#2E9AFE;"> ';
                                                                        while($row = mysqli_fetch_array($result)){
                                                                            echo '<option value="'.$row['id'].'">'.$row['department'].'</option>';
                                                                        }
                                                                        echo '</select>
                                                                    </div>
                                                                    ';
                                                                }else{
                                                                    echo '
                                                                    <div id="dep-list">

                                                                        <select class="form-control " name="dep-list" style="width: 100%;height: 40px;margin-top: 5px;margin-bottom: 5px; border-color:#2E9AFE;"> 
                                                                        <option value="no-dep">ไม่มีหน่วยงาน</option></select>
                                                                    </div>
                                                                    ';
                                                                }
                                                                ?>
                                                                </td>
                                                            </tr>
                                                        <tr>
                                                            <td>
                                                                <label for="actname">ชื่อกิจกรรม</label>
                                                            </td>
                                                            <td>
                                                                <input name="actname" type="text" class="form-control" id="usr">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            <label for="date">วันที่จัดกิจกรรม</label>
                                                            </td>
                                                            <td>
                                                                <input name="actdate" type="date" name="bday" >
                                                            </td>
                                                        </tr>

                                                        
                                                        
                                                        
                                                        <tr>
                                                            <td>
                                                                <label for="comment">รายละเอียด</label>
                                                            </td>
                                                            <td>
                                                                <textarea name="actdetail" class="textareaborder" rows="8" id="comment"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label for="comment">ไฟล์ที่เกี่ยวข้อง(ถ้ามี)</label>
                                                            </td>
                                                            <td>
                                                                <div class="custom-file">
                                                                    <input type="file" class="form-control" name="actfile" d="customFile" >
                                                                    <!-- <input type="file" name="actfile" class="custom-file-input" id="customFile">
                                                                    <label class="custom-file-label" for="customFile">Choose file</label> -->
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label for="comment">รูปภาพ(ถ้ามี)</label>
                                                            </td>
                                                            <td>
                                                                <div class="custom-file">
                                                                    <input type="file" name="actpic" class="form-control" id="customFile" accept="image/*">
                                                                    <!-- <input type="file" name="actpic" accept="image/*" class="custom-file-input" id="customFile">
                                                                    <label class="custom-file-label" for="customFile">Choose file</label> -->
                                                                </div>                                                    
                                                            </td>
                                                            <script>
                                                                // Add the following code if you want the name of the file appear on select
                                                                $(".custom-file-input").on("change", function() {
                                                                    var fileName = $(this).val().split("\\").pop();
                                                                    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                                                                });
                                                            </script>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            
                                                            <td>
                                                                <button type="submit" class="btn btn-info" style = "width:40%; float: right" id="btnSave">เพิ่มทักษะ</button>                                          
                                                                <button type="reset" class="btn btn-warning" style = "width:40%;" id="btnRemove">ล้างข้อมูล</button>                                          
                                                            </td>

                                                        </tr>

                                                        
                                                        
                                                    </tbody>
                                                </table>
                                            </form>
                                            

                                                <!-- </div> -->
                                                <div class="modal fade" id="myModal">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">เพิ่มน้ำหนักทักษะ</h4>
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <!-- Modal body --> 
                                                            <form id="data-form" name="data-form">               
                                                            <div class="modal-body">
                                                                <div id="weight-skill-form">
                                                                    <table class="table table-bordered" id="weight-table">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>ชื่อทักษะ</th>
                                                                            <th>น้ำหนัก(ร้อยละ)</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody id="weight-skill-table"></tbody>
                                                                    </table>
                                                                    <small>ทุกทักษะรวมกันได้ ร้อยละ 100</small>
                                                                </div>
                                                                <!-- <div class="form-group">
                                                                <label for="dep">หน่วยงาน:</label>
                                                                <input type="text" class="form-control" id="dep" name="dep">
                                                                </div>
                                                                <div class="form-group">
                                                                <label for="aff">ต้นสังกัด:</label>
                                                                <input type="text" class="form-control" id="aff" name="aff">
                                                                </div>     -->
                                                            </div>
                                                            </form>
                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-info" id="btnUpdateWeight">บันทึกข้อมูล</button>
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">ปิดหน้าต่าง</button>
                                                                <!-- <script>
                                                                    $("#btnUpdateWeight").click(function(){
                                                                        console.log("btnUpdateWeight clicked!!")
                                                                        var item_skill = [];
                                                                        var item_weight = [];

                                                                        $('.item_skill').each(function(){
                                                                            item_skill.push($('.item_skill').text());
                                                                        });
                                                                        $('.item_weight').each(function(){
                                                                            item_weight.push($('.item_weight').text());
                                                                        });
                                                                        $.ajax({
                                                                            url:"./MySQL/professor/weight-skill.php",
                                                                            method: "POST",
                                                                            data: {item_skill:item_skill, item_weight:item_weight},
                                                                            success: function(data)
                                                                            {
                                                                                console.log(data)
                                                                            }
                                                                        });
                                                                    });
                                                                </script> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
        <?php include('footer.php')?>
        <?php include('import-javascript.php')?>
        <script src="js/index.js">
        </script>
    </body>
</html>