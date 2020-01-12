<?php 
    session_start();
?>
<html lang="en">
    <head>
        <title>
            ระเบียนคลังข้อมูล | กิจกรรมนักศึกษา
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
        <?php  include('bootstrapCND.php') ?>
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
                                        <h3>ระเบียนคลังข้อมูล | กิจกรรมนักศึกษา</h3><hr/>
                                        </div>

                                  
                                        <div class="table-responsive">
                                        </br>
                                        <table class="table table-hover" id="data-table">
                                        <thead>
                                            <tr class="table-info">
                                            <!-- <th scope="col">Select</th> -->
                                            <th scope="col">#</th>
                                            <th scope="col">วันที่เพิ่มข้อมูล</th>
                                            <th scope="col">ชื่อกิจกรรม</th>
                                            <th scope="col">วันที่จัดกิจกรรม</th>
                                            <th scope="col">รายชื่อผู้เข้าร่วม</th>
                                            <th scope="col">รายละเอียด</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        </tbody>                                        
                                        </table>
                                        </div>
                                        
                                        <!-- The Modal -->
                                        <div class="modal fade" id="detailModal">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">รายละเอียด</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                ชื่อกิจกรรม : <label id="modal_actname"></label><br />
                                                วันที่จัดกิจกรรม : <label id="modal_actdate"></label><br />
                                                หน่วยงาน : <label id="modal_dep"></label><br />
                                                สังกัด : <label id="modal_aff"></label><br />
                                                ไฟล์ที่เกี่ยวข้อง : <span id="modal_file"></span><br />
                                                รูปภาพ : <div id="modal_image"></div><br />
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>

                                            </div>
                                        </div>
                                        </div> 

                                        <!-- The Modal -->
                                        <div class="modal fade" id="stdListModal">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">รายละเอียด</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                            <div class="table-responsive">
                                                </br>
                                                <table class="table table-hover" id="list-table">
                                                <thead>
                                                    <tr class="table-info">
                                                    <!-- <th scope="col">Select</th> -->
                                                    <th scope="col">#</th>
                                                    <th scope="col">รหัสนักศึกษา</th>
                                                    <th scope="col">ชื่อ</th>
                                                    <th scope="col">นามสกุล</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>                                        
                                            </table>
                                                </div>                              
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>

                                            </div>
                                        </div>
                                        </div> 


                                    <!-- end class="card-body" -->
                                    </div> 
                               
                            </div>
                        </div>

                    </div>
                </div>
        </div>
        <script>
        var act_resp;
        $(document).ready(function(){
        $.ajax({
            url: './MySQL/professor/get-json-all-activity.php',
            type: 'get',
            dataType: 'JSON',
            success: function(response){
                act_resp = response;
                console.log(act_resp)
                var len = response.length;
                for(var i=0; i<len; i++){
                    var actid = response[i].actid;
                    var actname = response[i].actname;
                    var actdate = response[i].actdate;
                    var timestamp = response[i].timestamp;
                    var file = response[i].file;
                    var detail = response[i].detail;
                    var image = response[i].image;

                    var tr_str = "<tr>" +
                        "<td align='center'>" + (i+1) + "</td>" +
                        "<td align='center'>" + timestamp + "</td>" +
                        "<td align='center'>" + actname + "</td>" +
                        "<td align='center'>" + actdate + "</td>" +
                        "<td align='center'><button type='button' class='btn btn-outline-light text-primary btn-sm view_list' id='"+actid+"' data-toggle='modal' data-target='#stdListModal'><i class='material-icons'>account_circle</i></button></td>" +
                        "<td align='center'><button type='button' class='btn btn-outline-light text-primary btn-sm view_detail' id='"+i+"' data-toggle='modal' data-target='#detailModal'><i class='material-icons'>find_in_page</i></button></td>" +
                        "</tr>";

                    $("#data-table tbody").append(tr_str);
                }

            }
        });

        $(document).on('click', '.view_detail', function(){
            var id = $(this).attr("id");
            console.log(act_resp[id].image);
            $('#modal_actname').text(act_resp[id].actname);
            $('#modal_actdate').text(act_resp[id].actdate);
            $('#modal_dep').text(act_resp[id].dep);
            $('#modal_aff').text(act_resp[id].aff);
            document.getElementById('modal_file').innerHTML = '<a href="../import-files/files/'+ act_resp[id].file +'" target="_blank">'+ act_resp[id].file +'</a>';
            document.getElementById('modal_image').innerHTML = '<img src="../import-files/images/'+act_resp[id].image+'" >';
        })
        
        $(document).on('click', '.view_list', function(){
            var act_id = $(this).attr("id");
            getStdList(act_id);
        });
        function getStdList(value){
                $.ajax({
                url: './MySQL/professor/get-std-each-activity.php',
                type: 'post',
                data: {actid: value},
                dataType: 'JSON',
                success: function(resp){
                    var len = resp.length;
                    $("#list-table tbody").html('');
                    for(var i=0; i<len; i++){
                        var stdid = resp[i].stdid;
                        var firstname = resp[i].firstname;
                        var lastname = resp[i].lastname;

                        var tr_str = "<tr>" +
                            "<td align='center'>" + (i+1) + "</td>" +
                            "<td align='center'>" + stdid + "</td>" +
                            "<td align='center'>" + firstname + "</td>" +
                            "<td align='center'>" + lastname + "</td>" +
                            "</tr>";
                        $("#list-table tbody").append(tr_str);
                    }

                }
            });
            // END func
            }

        
    });
        </script>


        <?php include('footer.php')?>
        <?php include('import-javascript.php')?>
        <script src="js/index.js"></script>
    </body>
</html>