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
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
        <link rel="stylesheet" href="./css/stylesheet1.css">
        <link rel="stylesheet" href="./css/stylesheet2.css">
        
        <!-- <script src="./js/jquery-3.4.1.js"></script> -->
        <!-- <script src="showAll.js"></script> -->
        <!-- <link rel=“stylesheet” href=“https://use.fontawesome.com/releases/v5.5.0/css/all.css” integrity=“sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU” crossorigin=“anonymous”>l="stylesheet" /> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <!-- <script src="sweetalert2.min.js"></script> -->
        <!-- <link rel="stylesheet" href="sweetalert2.min.css"> -->

        <!-- <script src="http://code.jquery.com/jquery-latest.min.js"></script> -->
        <?php  include('header.php') ?>
        <?php  include('bootstrapCND.php') ?>
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
                                        <!-- <form name="add-act-Form" id="add-act-Form" action="check-prof-add-activity.php" method="POST" enctype="multipart/form-data">
                                            
                                        </form> -->
                                        <div class="container">
                                            <div style="margin-bottom: 5px;">
                                                <button type="button" id="add" name="add" class="btn btn-success btn-xs" data-toggle="modal" data-target="#skill_dialog">Add</button>                                                
                                            </div>
                                            <script>
                                                $(document).ready(function(){
                                                    var count = 0;

                                                    $("#add").click(function(){
                                                        // console.log('test');
                                                        // console.log($('#item-skill').text());
                                                        $('#skill').val('1');
                                                        $('#weight').val('');
                                                        $('#error_weight').text('');
                                                        $('#weight').css('border-color', '');
                                                        $('#save').text('Save');
                                                    });

                                                    $("#save").click(function(){
                                                        
                                                        // console.log("test")
                                                        // console.log($('#item-skill').text());
                                                        var skill = '';
                                                        var error_weight = '';
                                                        var weight = '';
                                                        if($("#weight").val() == '')
                                                        {
                                                            error_weight = 'กรุณากรอกน้ำหนัก';
                                                            $("#error_weight").text(error_weight);
                                                            $("#weight").css('border-color', '#cc000');
                                                            weight = '';
                                                            
                                                        }
                                                        else
                                                        {
                                                            error_weight = '';
                                                            $("#error_weight").text(error_weight);
                                                            $("#weight").css('border-color', '');
                                                            weight = $('#weight').val();
                                                            skill = $('#skill option:selected').text();
                                                            skill_value = $('#skill').val();

                                                        }
                                                        if(error_weight != '')
                                                        {
                                                            return false;
                                                        }
                                                        else
                                                        {
                                                            if($("#save").text() == "Save")
                                                            {
                                                                count = count + 1;
                                                                output = '<tr id="row_'+count+'">';
                                                                output += '<td>'+skill+'<input type="hidden" id="hidden_skill[]" name="hidden_skill[]" id="skill'+count+'" class="skill" value="'+skill_value+'"/></td>';
                                                                
                                                                output += '<td>'+weight+'<input type="hidden" name="hidden_weight[]" id="weight'+count+'" class="weight" value="'+weight+'"/></td>';
                                                                
                                                                output += '<td><button type="button" name="view_detail" class="btn btn-warning btn-xs view_detail" id="'+count+'">View</button></td>';
                                                                output += '<td><button type="button" name="remove_detail" class="btn btn-danger btn-xs remove_detail" id="'+count+'">Remove</button></td>';
                                                                
                                                                output += '</tr>';
                                                                $('#weight_data').append(output);
                                                                // $('#skill_dialog').modal('toggle');
                                                                
                                                            }
                                                            else
                                                            {
                                                                var row_id = $('#hidden_row_id').val();
                                                                output = '<td>'+skill+'<input type="hidden" id="hidden_skill[]" name="hidden_skill[]" id="skill'+row_id+'" class="skill" value="'+skill_value+'"/></td>';
                                                                
                                                                output += '<td>'+weight+'<input type="hidden" name="hidden_weight[]" id="weight'+row_id+'" value="'+weight+'"/></td>';
                                                                
                                                                output += '<td><button type="button" name="view_detail" class="btn btn-warning btn-xs view_detail" id="'+row_id+'">View</button></td>';
                                                                output += '<td><button type="button" name="remove_detail" class="btn btn-danger btn-xs remove_detail" id="'+row_id+'">Remove</button></td>';
                                                                
                                                                $('#row_'+row_id+'').html(output);
                                                            }
                                                        }
                                                    });

                                                    $(document).on('click', '.view_detail', function(){
                                                        var row_id = $(this).attr("id");
                                                        var skill_row = $('#skill'+row_id+'').val();
                                                        // console.log(skill_row);
                                                        var weight_row = $('#weight'+row_id+'').val();
                                                        
                                                        $('#skill option:selected').text(skill_row);
                                                        $('#weight').val(weight_row);
                                                        $('#save').text('Edit');
                                                        $('#hidden_row_id').val(row_id);
                                                        $('#skill_dialog').modal('toggle');
                                                    });

                                                    $(document).on('click', '.remove_detail', function(){
                                                        var row_id = $(this).attr("id");
                                                        if(confirm("คุณยืนยันที่จะลบข้อมูลหรือไม่?"))
                                                        {
                                                            $('#row_'+row_id+'').remove();
                                                        }
                                                        else
                                                        {
                                                            return false;
                                                        }
                                                    });

                                                    $('#weight_skill_form').on('submit', function(event){
                                                        // console.log("submit")
                                                        event.preventDefault();
                                                        // console.log($('#weight_skill_form').serialize());
                                                        var count_data = 0;
                                                        $('.skill').each(function(){
                                                            count_data = count_data + 1;
                                                        });
                                                        // console.log(count_data)
                                                        if(count_data > 0)
                                                        {
                                                            var form_data = $('#weight_skill_form').serialize();
                                                            $.ajax({
                                                                url: './MySQL/professor/weight-skill.php',
                                                                method: 'POST',
                                                                data: form_data,
                                                                // dataType: 'JSON';
                                                                success: function(data)
                                                                {
                                                                    console.log(data);
                                                                    alert("บันทึกข้อมูลสำเร็จ");
                                                                }
                                                            });
                                                        }
                                                        else
                                                        {
                                                            // $('#action_alert').html('<p>กรุณาเพิ่มทักษะ อย่างน้อย 1 ทักษะ</p>');
                                                            alert('กรุณาเพิ่มทักษะ อย่างน้อย 1 ทักษะ');
                                                        }



                                                    });


                                                });
                                            </script>
                                            <br />
                                            <!-- <form method="post" id="weight_skill_form" action="MySQL/professor/weight-skill.php"> -->
                                            <form method="post" id="weight_skill_form" >
                                                <div class="table-responsive">
                                                <?php 
                                                if(isset($_GET['actid'])){
                                                    echo '<script>console.log('.$_GET['actid'].')</script>';
                                                    echo '<input type="hidden" name="hidden_actid" value='.$_GET['actid'].'/>';
                                                }
                                                
                                                ?>
                                                <!-- <input type="hidden" name="hidden_actid" value=""/> -->
                                                    <table class="table table-striped table-bordered" id="weight_data">
                                                        <tr>
                                                            <th>ชื่อทักษะ</th>
                                                            <th>น้ำหนัก(ร้อยละ)</th>
                                                            <th>แก้ไข</th>
                                                            <th>ลบ</th>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div>
                                                    <input type="submit" name="insert" id="insert" class="btn btn-primary" value="บันทึกข้อมูล">
                                                </div>
                                            </form>
                                            <br />
                                        </div>

                                        <!-- The Modal -->
<div class="modal fade" id="skill_dialog">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="form-group">
                                                <label>เลือกทักษะ<label>
                                                <?php
                                                include 'config.php';
                                                $sql = "SELECT * FROM `resume_skill`";
                                                $result = mysqli_query($conn,$sql);
                                                if (mysqli_num_rows($result) > 0)
                                                {
                                                    echo '<select class="form-control" id="skill" name="skill">';
                                                    while($row = mysqli_fetch_array($result))
                                                    {
                                                        echo '<option id="item-skill" value="'.$row['id'].'">'.$row['name'].'</option>';
                                                    }
                                                    echo '</select>';
                                                }
                                                else
                                                {
                                                    echo '<select class="form-control" id="skill" name="skill"> 
                                                            <option value="no-dep">ไม่มีทักษะ</option>
                                                          </select>';
                                                }
                                                ?>                                                
                                            </div>
                                            <div class="form-group">
                                                <label>กรอกน้ำหนัก(ร้อยละ)<label>
                                                <input class="form-control" id="weight" name="weight"></input>
                                                <span id="error_weight" class="text-danger"></span>                                      
                                            </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <input type="hidden" name="row_id" value="hidden_row_id" id="hidden_row_id"></input>                                   
                                                <button type="button" name="save" id="save" class="btn btn-info">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

                                        
                                        <div id="action_alert" title="Action">

                                        </div>
                                            

                                                
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
        <?php include('footer.php')?>
        <?php include('import-javascript.php')?>
        <script src="js/index.js"></script>
    </body>
</html>