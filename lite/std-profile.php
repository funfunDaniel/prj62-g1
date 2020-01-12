<?php 
    session_start();
?>
<html lang="en">
    <head>
        <title>
            ข้อมูลนักศึกษา
        </title>
            <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="./css/stylesheet1.css">
        <link rel="stylesheet" href="./css/stylesheet2.css">
        
        <script src="showAll.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <?php  include('header.php') ?>
        <style>
        td{
            font-size:14px;
        }
        </style>
    </head>

    <body class="fix-header fix-sidebar card-no-border logo-center">
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
                                    
                                    <div class="card-body">
                                        <div class="card-top" style="width: 100%; height: 100%; ">
                                            <h3>ข้อมูลนักศึกษา</h3><hr/>
                                        </div>

                                        <div class="container table-responsive">  
                                            <button type="button" class="btn btn-info edit-data" id="<?php echo $_SESSION['id'];?>"><i class="material-icons">edit</i></button>  
                                            <table class="table table-borderless">
                                                
                                                <tbody>
                                                <tr>
                                                    <td style="height:50px; width: 30%;"  id="image">
                                                        <div id="imghtml"></div>
                                                    </td>
                                                    
                                                    <td>
                                                        <table>
                                                            <tr>                                                   
                                                                <td style="width: 30%;">รหัสนักศึกษา</td>
                                                                <td id="stdid" style="width: 40%;"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>ชื่อ - นามสกุล</td>
                                                                <td id="name"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>ชื่อ - นามสกุล(ภาษาอังกฤษ)</td>
                                                                <td id="name_en"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>ที่อยู่</td>
                                                                <td id="address"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>หมายเลขโทรศัพท์</td>
                                                                <td id="tel"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>อีเมล์</td>
                                                                <td id="email"></td>
                                                            </tr>                                                      
                                                        </table>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>


                                        <!-- The Modal -->
                                        <div class="modal fade" id="myModal">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">แก้ไขข้อมูลส่วนตัว</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                        
                                        <div class="modal-body">
                                            <form name="frmprofile" id="frmprofile" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="usr">รหัสนักศึกษา:</label>
                                                    <input type="text" class="form-control" id="id" name="id">
                                                </div>                                
                                                <div class="form-group">
                                                    <label for="usr">ชื่อ:</label>
                                                    <input type="text" class="form-control" id="fname" name="fname">
                                                </div>                                
                                                <div class="form-group">
                                                    <label for="usr">นามสกุล:</label>
                                                    <input type="text" class="form-control" id="lname" name="lname">
                                                </div>
                                                <div class="form-group">
                                                    <label for="usr">Firstname <small style="color: red">(กรอกเป็นภาษาอังกฤษเท่านั้น)</small> :</label>
                                                    <input type="text" class="form-control" id="fname_en" name="fname_en" title="English character only">
                                                    
                                                </div>                                
                                                <div class="form-group">
                                                    <label for="usr">Lastname <small style="color: red">(กรอกเป็นภาษาอังกฤษเท่านั้น)</small> :</label>
                                                    <input type="text" class="form-control" id="lname_en" name="lname_en" title="English character only">
                                                </div>                               
                                                <div class="form-group">
                                                    <label for="usr">ที่อยู่ <small style="color: red">(กรอกเป็นภาษาอังกฤษเท่านั้น)</small> :</label>
                                                    <input type="text" class="form-control" id="addr" name="addr" title="English character only">
                                                </div>                                
                                                <div class="form-group">
                                                    <label for="usr">หมายเลขโทรศัพท์:</label>
                                                    <input type="text" class="form-control" id="phone" name="phone">
                                                </div>                                
                                                <div class="form-group">
                                                    <label for="usr">อีเมล์:</label>
                                                    <input type="text" class="form-control" id="mail" name="mail">
                                                </div> 
                                                <div class="custom-file form-group">
                                                    <label for="comment">รูปภาพ(ถ้ามี)</label>
                                                    <input type="file" class="form-control" id="inputfile" accept="image/*" style="width:467px;" id="actpic" name="actpic">
                                                </div>                           
                                            </form>
                                        </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-info" id="btnUpdate">บันทึกข้อมูล</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">ปิดหน้าต่าง</button>
                                            </div>

                                            </div>
                                        </div>
                                        </div>
                                    <!-- end class="card-body" -->
                                    </div>
                                    
                               
                            </div>
                            <div class="card">
                                <table class="table table-hover"  id="data-table2" style="font-size: 19px;">
                                                <tr class="table-info">                                                                                                   
                                                    <td style="width:50px;">
                                                        #
                                                    </td>
                                                    <td style="width:200px;">
                                                        วันที่จัดกิจกรรม
                                                    </td>
                                                    <td>
                                                        ชื่อกิจกรรม
                                                    </td>
                                                    <td>
                                                        หน่วยงาน
                                                    </td>
                                                    <td>
                                                        สังกัด
                                                    </td>
                                                </tr>
                                                    <tbody id="tbd">
                                                    </tbody>
               
                                </table>
                               
                            </div>
                        </div>

                    </div>
                </div>
        </div>
        <script>
         $(document).ready(function(){
            $.ajax({
                url: './MySQL/student/get-json-resume.php',
                type: 'get',
                dataType: 'JSON',
                success: function(resp){
                   
                    var len = resp.length;
                for(var i=0; i<len; i++){
                    var actid = resp[i].actid;
                    var actdate = resp[i].actdate;
                    var actname = resp[i].actname;
                    var depid = resp[i].depid;
                    var depname = resp[i].depname;
                    var affiliation = resp[i].affiliation;


                   
                    var tr_str = "<tr>" +
                    "<td  style='color:black;'>" + (i+1) + "</td> " +
                    "<td  style='color:black;'>" + actdate + "</td> " +
                    "<td  style='color:black;width:500px;'>" + actname + "</td> " +
                    "<td  style='color:black;width:500px;'>" + depname + "</td> " +
                    "<td  style='color:black;width:500px;'>" + affiliation + "</td> " +
                    "</tr>";
                    $("#tbd").append(tr_str);
                }
                    }

                
            });
        });
        $(document).ready(function(){
            getStudentData();
            function getStudentData(){
            $.ajax({
                url: './MySQL/student/get-json-profile.php',
                type: 'get',
                dataType: 'JSON',
                success: function(resp){
                    var id = resp.std_id;
                    var name = resp.firstname + " " + resp.lastname;
                    var name_en = resp.firstname_EN + " " + resp.lastname_EN;
                    var address = resp.address;
                    var telephone = resp.telephone;
                    var email = resp.email;
                    var image = resp.image;

                    document.getElementById("stdid").innerHTML= id;
                    document.getElementById("name").innerHTML= name;
                    document.getElementById("name_en").innerHTML= name_en;
                    document.getElementById("address").innerHTML= address;
                    document.getElementById("tel").innerHTML= telephone;
                    document.getElementById("email").innerHTML= email;

                    (image === '') ? 
                    $("#imghtml").html('<img src="../import-files/user-img/priest.png" style="width: 180px;"/>')
                    :
                    $("#imghtml").html('<img src="../import-files/user-img/' + image + '" style="width: 180px;"/>');

                }
            });
            }

            $(document).on('click', '.edit-data', function(){
                $.ajax({
                url: './MySQL/student/get-json-profile.php',
                type: 'get',
                dataType: 'JSON',
                success: function(resp){
                    $("#id").val(resp.std_id);
                    $("#fname").val(resp.firstname );
                    $("#lname").val(resp.lastname);
                    $("#fname_en").val(resp.firstname_EN);
                    $("#lname_en").val(resp.lastname_EN);
                    $("#addr").val(resp.address);
                    $("#phone").val(resp.telephone);
                    $("#mail").val(resp.email);
                    $("#myModal").modal('show');
                    
                }


                });
            });

            $("#btnUpdate").click(function(){
                $.ajax({
                    type: "POST",
                    url: "./MySQL/student/edit-profile.php",
                    enctype: 'multipart/form-data',
                    data: new FormData($("#frmprofile")[0]),
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: 'json',
                    success: function(res){
                        if(res.status = 1){
                            alert('แก้ไขข้อมูลสำเร็จ')
                            getStudentData();
                            $('#myModal').modal('hide');
                        }else{
                            alert('แก้ไขข้อมูลไม่สำเร็จ กรุณาลองใหม่')
                        }
                    }
                });

            })

        });

        $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
        </script>
        <?php include('footer.php')?>
        <?php include('import-javascript.php')?>
        <script src="js/index.js"></script>
    </body>
</html>