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
        <link rel="stylesheet" href="./css/stylesheet1.css">
        <link rel="stylesheet" href="./css/stylesheet2.css">

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
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

                                <div class="show-table-data">
                                            <h3>เพิ่มกิจกรรม | กิจกรรมนักศึกษา</h3>
                                        <div class="container">
                                            <div style="margin-bottom: 5px;">
                                                <button type="button" id="add" name="add" class="btn btn-success btn-xs" data-toggle="modal" data-target="#skill_dialog" style="float: right;">เพิ่มทักษะ</button>                                                
                                            </div>
                                        <br/>
                                            <script>
                                                $(document).ready(function(){
                                                    var count = 0;
                                                    $("#add").click(function(){
                                                        $('#skill').val('1');
                                                        $('#weight').css('border-color', '');
                                                        $('#save').text('Save');
                                                    });
                                                    $("#save").click(function(){
                                                        var skill = '';
                                                            skill = $('#skill option:selected').text();
                                                            skill_value = $('#skill').val();
                                                                count = count + 1;
                                                                output = '<tr id="row_'+count+'">';
                                                                output += '<td>'+skill+'<input type="hidden" id="hidden_skill[]" name="hidden_skill[]" id="skill'+count+'" class="skill" value="'+skill_value+'"/></td>';
                                                                output += '<td><button type="button" name="remove_detail" class="btn btn-danger btn-xs remove_detail" id="'+count+'">Remove</button></td>';
                                                                
                                                                output += '</tr>';
                                                                $('#weight_data').append(output);
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
                                                        event.preventDefault();
                                                        var count_data = 0;
                                                        $('.skill').each(function(){
                                                            count_data = count_data + 1;
                                                        });
                                                        if(count_data > 0)
                                                        {
                                                            var form_data = $('#weight_skill_form').serialize();
                                                            $.ajax({
                                                                url: './MySQL/professor/weight-skill.php',
                                                                method: 'POST',
                                                                data: form_data,
                                                                success: function(data)
                                                                {
                                                                    alert("การเพิ่มกิจกรรมเสร็จสมบูรณ์");
                                                                    window.location.href='index-it-Student.php';
                                                                },
                                                                error: function(data){
                                                                    alert("การเพิ่มกิจกรรมไม่สำเร็จ กรุณาตรวจสอบข้อมูลอีกครั้ง");
                                                                }
                                                            });
                                                        }
                                                        else
                                                        {
                                                            alert('กรุณาเพิ่มทักษะ อย่างน้อย 1 ทักษะ');
                                                        }
                                                    });
                                                });
                                            </script>
                                            <br />
                                            <form method="post" id="weight_skill_form" >
                                                <div class="table-responsive">
                                                <?php 
                                                if(isset($_GET['actid'])){
                                                    echo '<script>console.log('.$_GET['actid'].')</script>';
                                                    echo '<input type="hidden" name="hidden_actid" value='.$_GET['actid'].'>';
                                                }
                                                
                                                ?>
                                                    <table class="table table-striped table-bordered" id="weight_data">
                                                        <tr>
                                                            <th>ชื่อทักษะ</th>
                                                            <th>ลบ</th>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <br/>
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
                                                <h4 class="modal-title">เพิ่มทักษะ</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                            <div class="form-group">
                                            <table>
                                                <tr>
                                                    <td style="width:100px;">
                                                        <label>เลือกทักษะ<label>
                                                    </td>
                                                    <td>
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
                                                    </td>
                                                    </tr>
                                                </table>                             
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