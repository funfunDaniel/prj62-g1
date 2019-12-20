<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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

</head>

<body class="fix-header fix-sidebar card-no-border logo-center">

    <div class="preloader">
      <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>


    <?php  include('navbar-login.php') ?>

    <div class="card-block">
    <div class="row">      
    </div>

        <div class="row">
          <div class="col-lg-3 col-xlg-3 col-md-5">
            <div class="card">
              <img class="card-img-top" src="../images/cloud.jpg" alt="Card image cap">
                <div class="card-body little-logo text-center">                  
                    <div class="pro-img"><img src="../images/logo-header.gif" alt="user"></div>
                      <h3 class="m-b-0">สำนักวิชาเทคโนโลยีสังคม</h3> 
					  
			<!-- Left Menu Bar-->        
            <?php include 'index-left-bar.php';?>
			
                </div>
            </div>
          </div>
		  
		  <div class="col-lg-9 col-md-7">
            <div class="card">
              <div class="card-block">


                        <?php

include 'config.php';

$type = $_REQUEST["table"];
$id = $_REQUEST["id"];
$cid = $_REQUEST["cid"];

$vtitle = "no";
$vdes = "no";
$vdate = "no";
$vsub = "no";
$vtype = "no";
$vfile = "no";
$vcourse = "no";
$vlang = "no";
$vurl = "no";
$vpub = "no";
$vauthor = "no";
$vextent = "no";
$vowner = "no";
$vadv = "no";
$vbranch = "no";
$vprostart = "no";
$vprolead = "no";
$vbudget = "no";
$vprotype = "no";
$vrecdate = "no";
$vunit = "no";
$vscholar = "no";
$vprogram = "no";
$vdegree = "no";
$vdegreelev = "no";
$vdegreedes = "no";
$vmajor = "no";
$vname = "no";

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$conn->query("SET NAMES UTF8");

if($type == "โครงงานจบการศึกษา"){

    $res_type = "โครงงานจบการศึกษา";

    $sql = "SELECT * FROM graduation_projects WHERE gp_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdate = $row["issued_date"];
    $vdes = $row["description"];
    $vowner = $row["owner"];
    $vadv = $row["advisor"];
    $vsub = $row["subject"];
    $vtype = $row["type"];
    $vfile = $row["file_directory"];
    $vurl = $row["url"];
    $vname = "edit-grad-pro.php";

}else if($type == "ผลงานในรายวิชา"){

    $res_type = "ผลงานในรายวิชา";

    $sql = "SELECT * FROM course_projects WHERE cp_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdate = $row["issued_date"];
    $vdes = $row["description"];
    $vcourse = $row["course"];
    $vowner = $row["owner"];
    $vsub = $row["subject"];
    $vtype = $row["type"];
    $vlang = $row["language"];
    $vfile = $row["file_directory"];
    $vurl = $row["url"];
    $vname = "edit-cou-pro.php";

}else if($type == "ผลงานที่ได้รับรางวัล"){

    $res_type = "ผลงานที่ได้รับรางวัล";

    $sql = "SELECT * FROM received_award_works WHERE raw_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdate = $row["issued_date"];
    $vdes = $row["description"];
    $vrecdate = $row["received_date"];
    $vunit = $row["unit"];
    $vowner = $row["owner"];
    $vsub = $row["subject"];
    $vtype = $row["type"];
    $vfile = $row["file_directory"];
    $vname = "edit-raw.php";

}else if($type == "ผลงานนวัตกรรม"){

    $res_type = "ผลงานนวัตกรรม";

    $sql = "SELECT * FROM innovative_works WHERE inw_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdate = $row["issued_date"];
    $vdes = $row["description"];
    $vowner = $row["owner"];
    $vadv = $row["advisor"];
    $vsub = $row["subject"];
    $vtype = $row["type"];
    $vfile = $row["file_directory"];
    $vurl = $row["url"];
    $vname = "edit-inw.php";

}else if($type == "ผลงานของกลุ่มวิชา/หลักสูตร"){

    $res_type = "ผลงานของกลุ่มวิชา/หลักสูตร";

    $sql = "SELECT * FROM major_works WHERE mw_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdate = $row["issued_date"];
    $vdes = $row["description"];
    $vmajor = $row["major"];
    $vsu = $row["subject"];
    $vlang = $row["language"];
    $vtype = $row["type"];
    $vfile = $row["file_directory"];
    $vurl = $row["url"];
    $vname = "edit-maj.php";

}else if($type == "สไลด์สอบโครงร่างวิทยานิพนธ์"){

    $res_type = "สไลด์สอบโครงร่างวิทยานิพนธ์";
    
    $sql = "SELECT * FROM slide_for_thesis_drafting WHERE std_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdate = $row["issued_date"];
    $vdes = $row["description"];
    $vauthor = $row["author"];
    $vsub = $row["subject"];
    $vlang = $row["language"];
    $vextent = $row["extent"];
    $vtype = $row["type"];
    $vfile = $row["file_directory"];
    $vname = "edit-std.php";

}else if($type == "โครงร่างวิทยานิพนธ์"){

    $res_type = "โครงร่างวิทยานิพนธ์";

    $sql = "SELECT * FROM thesis_proposals WHERE tp_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdate = $row["issued_date"];
    $vdes = $row["description"];
    $vpub = $row["publisher"];
    $vauthor = $row["author"];
    $vsub = $row["subject"];
    $vlang = $row["language"];
    $vextent = $row["extent"];
    $vtype = $row["type"];
    $vfile = $row["file_directory"];
    $vname = "edit-the-pro.php";

}else if($type == "สไลด์สำหรับสอบวิทยานิพนธ์"){

    $res_type = "สไลด์สำหรับสอบวิทยานิพนธ์";

    $sql = "SELECT * FROM slide_for_thesis_examination WHERE ste_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdate = $row["issued_date"];
    $vdes = $row["description"];
    $vauthor = $row["author"];
    $vsub = $row["subject"];
    $vlang = $row["language"];
    $vextent = $row["extent"];
    $vtype = $row["type"];
    $vfile = $row["file_directory"];
    $vname = "edit-ste.php";

}else if($type == "วิทยานิพนธ์"){

    $res_type = "วิทยานิพนธ์";

    $sql = "SELECT * FROM thesis WHERE tes_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdate = $row["issued_date"];
    $vdes = $row["description"];
    $vauthor = $row["author"];
    $vpub = $row["publisher"];
    $vsub = $row["subject"];
    $vdegree = $row["degree_name"];
    $vdegreelev = $row["degree_level"];
    $vdegreedes = $row["degree_descripline"];
    $vlang = $row["language"];
    $vtype = $row["type"];
    $vextent = $row["extent"];
    $vfile = $row["file_directory"];
    $vname = "edit-the.php";

}else if($type == "บทความวิจัย"){

    $res_type = "บทความวิจัย";

    $sql = "SELECT * FROM research_articles WHERE ra_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdes = $row["description"];
    $vdate = $row["issued_date"];
    $vauthor = $row["author"];
    $vpub = $row["publisher"];
    $vsub = $row["subject"];
    $vlang = $row["language"];
    $vtype = $row["type"];
    $vextent = $row["extent"];
    $vfile = $row["file_directory"];
    $vname = "edit-res-art.php";

}else if($type == "วิจัยภายนอก"){

    $res_type = "วิจัยภายนอก";

    $sql = "SELECT * FROM external_researches WHERE er_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdes = $row["description"];
    $vdate = $row["issued_date"];
    $vauthor = $row["author"];
    $vpub = $row["publisher"];
    $vsub = $row["subject"];
    $vlang = $row["language"];
    $vtype = $row["type"];
    $vextent = $row["extent"];
    $vfile = $row["file_directory"];
    $vname = "edit-ext-res.php";

}else if($type == "ทุนวิจัย/ทุนการศึกษา"){

    $res_type = "ทุนวิจัย/ทุนการศึกษา";
    
    $sql = "SELECT * FROM scholarships WHERE sc_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdes = $row["description"];
    $vdate = $row["issued_date"];
    $vscholar = $row["scholar"];
    $vadv = $row["advisor"];
    $vbudget = $row["budget"];
    $vprogram = $row["program"];
    $vdegree = $row["degree"];
    $vtype = $row["type"];
    $vname = "edit-scho.php";

}else if($type == "กิจกรรม"){

    $res_type = "กิจกรรม";

    $sql = "SELECT * FROM activities WHERE act_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdes = $row["description"];
    $vdate = $row["issued_date"];
    $vsub = $row["subject"];
    $vtype = $row["type"];
    $vfile = $row["file_directory"];
    $vname = "edit-act.php";

}else if($type == "แบบฟอร์มเอกสาร"){

    $res_type = "แบบฟอร์มเอกสาร";

    $sql = "SELECT * FROM document_forms WHERE df_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdes = $row["description"];
    $vdate = $row["issued_date"];
    $vpub = $row["publisher"];
    $vsub = $row["subject"];
    $vtype = $row["type"];
    $vlang = $row["language"];
    $vfile = $row["file_directory"];
    $vname = "edit-doc.php";

}else if($type == "หนังสือขอเก็บข้อมูล"){

    $res_type = "หนังสือขอเก็บข้อมูล";

    $sql = "SELECT * FROM document_forms2 WHERE df2_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdes = $row["description"];
    $vdate = $row["issued_date"];
    $vpub = $row["publisher"];
    $vsub = $row["subject"];
    $vtype = $row["type"];
    $vlang = $row["language"];
    $vfile = $row["file_directory"];
    $vname = "edit-doc2.php";
	
}else if($type == "หนังสือแต่งตั้งผู้เชียวชาญ"){

    $res_type = "หนังสือแต่งตั้งผู้เชียวชาญ";

    $sql = "SELECT * FROM document_forms3 WHERE df3_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdes = $row["description"];
    $vdate = $row["issued_date"];
    $vpub = $row["publisher"];
    $vsub = $row["subject"];
    $vtype = $row["type"];
    $vlang = $row["language"];
    $vfile = $row["file_directory"];
    $vname = "edit-doc3.php";
	
}else if($type == "ใบรายงานความก้าวหน้า"){

    $res_type = "ใบรายงานความก้าวหน้า";

    $sql = "SELECT * FROM document_forms4 WHERE df4_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdes = $row["description"];
    $vdate = $row["issued_date"];
    $vpub = $row["publisher"];
    $vsub = $row["subject"];
    $vtype = $row["type"];
    $vlang = $row["language"];
    $vfile = $row["file_directory"];
    $vname = "edit-doc4.php";
	
}else if($type == "Template วิทยานิพนธ์"){

    $res_type = "Template วิทยานิพนธ์";

    $sql = "SELECT * FROM document_forms5 WHERE df5_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdes = $row["description"];
    $vdate = $row["issued_date"];
    $vpub = $row["publisher"];
    $vsub = $row["subject"];
    $vtype = $row["type"];
    $vlang = $row["language"];
    $vfile = $row["file_directory"];
    $vname = "edit-doc5.php";
	
}else if($type == "รายงานการประชุมวิชาการปรับปรุงหลักสูตร"){

    $res_type = "รายงานการประชุมวิชาการปรับปรุงหลักสูตร";

    $sql = "SELECT * FROM minutes WHERE min_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdes = $row["description"];
    $vdate = $row["issued_date"];
    $vsub = $row["subject"];
    $vtype = $row["type"];
    $vfile = $row["file_directory"];
    $vname = "edit-min.php";
    $vname = "edit-min.php";
	
}else if($type == "รายงานการประชุมของสาขาวิชา"){

    $res_type = "รายงานการประชุมของสาขาวิชา";

    $sql = "SELECT * FROM met WHERE met_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdes = $row["description"];
    $vdate = $row["issued_date"];
    $vsub = $row["subject"];
    $vtype = $row["type"];
    $vfile = $row["file_directory"];
    $vname = "edit-met.php";
    $vname = "edit-met.php";
	
}else if($type == "รายงานการประชุมอื่น"){

    $res_type = "รายงานการประชุมอื่น";

    $sql = "SELECT * FROM other WHERE oth_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdes = $row["description"];
    $vdate = $row["issued_date"];
    $vsub = $row["subject"];
    $vtype = $row["type"];
    $vfile = $row["file_directory"];
    $vname = "edit-oth.php";
    $vname = "edit-oth.php";

}else if($type == "โครงการ"){

    $res_type = "โครงการ";
    
    $sql = "SELECT * FROM projects WHERE p_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdes = $row["description"];
    $vdate = $row["issued_date"];
    $vprostart = $row["project_start_date"];
    $vprolead = $row["project_leader"];
    $vbudget = $row["budget"];
    $vunit = $row["unit"];
    $vprotype = $row["project_type"];
    $vsub = $row["subject"];
    $vtype = $row["type"];
    $vfile = $row["file_directory"];
    $vname = "edit-proj.php";

}else if($type == "รางวัลเกียรติยศอาจารย์"){

    $res_type = "รางวัลเกียรติยศอาจารย์";

    $sql = "SELECT * FROM hall_of_frames_prf WHERE hofp_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdes = $row["description"];
    $vdate = $row["issued_date"];
    $vbranch = $row["branch"];
    $vsub = $row["subject"];
    $vtype = $row["type"];
    $vfile = $row["file_directory"];
    $vname = "edit-hofp.php";

}else if($type == "รางวัลเกียรติยศนักศึกษา"){

    $res_type = "รางวัลเกียรติยศนักศึกษา";
    
    $sql = "SELECT * FROM hall_of_frames_std WHERE hofs_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdes = $row["description"];
    $vdate = $row["issued_date"];
    $vbranch = $row["branch"];
    $vsub = $row["subject"];
    $vtype = $row["type"];
    $vfile = $row["file_directory"];
    $vname = "edit-hofs.php";

}

?>

                  <h2 class="card-title">แก้ไขข้อมูล</h2>
 
    <hr/><br/>
                                
                                <div style="width: 150%; border-style: solid;border-color: #fff;">
                                <form class="add-form" action="<?php echo $vname; ?>" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id" id="id" value="<?php echo $id ?>" />
                                    <input type="hidden" name="cid" id="cid" value="<?php echo $cid ?>" />
									
                                    <table style="width: 100%; padding: 15px;" class="w3-table-all w3-hoverable">
                                        <?php
                        if($vtitle != "no"){
                            echo '<tr>
                            <td width="20%">ชื่อเรื่อง:</td>
                            <td><input type="text" name="title" required autofocus value="' . $vtitle . '"></td>
                        </tr>';
                        }

                        if($vdes != "no"){
                            echo '<tr>
                            <td width="10%">คำอธิบาย:</td>
                            <td><textarea rows="4" cols="40" name="des" required autofocus>' . $vdes . '</textarea></td>
                        </tr>';   
                        }

                        if($vdate != "no"){
                            echo '<tr>
                            <td width="10%">วันที่เผยแพร่:</td>
                            <td><input type="date" name="date" value="' . $vdate . '"></td>
                        </tr>';   
                        }

                        if($vprostart != "no"){
                            echo '<tr>
                            <td width="10%">วันที่เริ่มโครงการ:</td>
                            <td><input type="date" name="prostartdate" value="' . $vprostart . '"></td>
                        </tr>';   
                        }

                        if($vrecdate != "no"){
                            echo '<tr>
                            <td width="10%">วันที่ได้รับรางวัล:</td>
                            <td><input type="date" name="recdate" value="' . $vrecdate . '"></td>
                        </tr>';   
                        }

                        if($vunit != "no"){
                            echo '<tr>
                            <td width="10%">หน่วยงาน/สำนักงาน:</td>
                            <td><input type="text" name="unit" value="' . $vunit . '"></td>
                        </tr>';   
                        }

                        if($vpub != "no"){
                            echo '<tr>
                            <td width="10%">สำนักพิมพ์:</td>
                            <td><input type="text" name="pub" value="' . $vpub . '"></td>
                        </tr>';   
                        }

                        if($vmajor != "no"){
                            echo '<tr>
                            <td width="10%">หลักกสูตร:</td>
                            <td><input type="text" name="major" value="' . $vmajor . '"></td>
                        </tr>';   
                        }

                        if($vowner != "no"){
                            echo '<tr>
                            <td width="10%">เจ้าของผลงาน:</td>
                            <td><input type="text" name="owner" value="' . $vowner . '"></td>
                        </tr>';   
                        }

                        if($vprolead != "no"){
                            echo '<tr>
                            <td width="10%">หัวหน้าโครงการ:</td>
                            <td><input type="text" name="proleader"  value="' . $vprolead . '"></td>
                        </tr>';   
                        }

                        if($vscholar != "no"){
                            echo '<tr>
                            <td width="10%">ผู้ได้รับทุน:</td>
                            <td><input type="text" name="scholar" value="' . $vscholar . '"></td>
                        </tr>';   
                        }

                        if($vauthor != "no"){
                            echo '<tr>
                            <td width="10%">ผู้แต่ง:</td>
                            <td><input type="text" name="author" value="' . $vauthor . '"></td>
                        </tr>';   
                        }

                        if($vadv != "no"){
                            echo '<tr>
                            <td width="10%">ที่ปรึกษา:</td>
                            <td><input type="text" name="advisor" value="' . $vadv . '"></td>
                        </tr>';   
                        }

                        if($vdegree != "no"){
                            echo '<tr>
                            <td width="10%">ชื่อปริญญา:</td>
                            <td><input type="text" name="degree" value="' . $vdegree . '"></td>
                        </tr>';   
                        }

                        if($vprogram != "no"){
                            echo '<tr>
                            <td width="10%">หลักสูตร:</td>
                            <td><input type="text" name="program" value="' . $vprogram . '"</td>
                        </tr>';   
                        }

                        if($vbudget != "no"){
                            echo '<tr>
                            <td width="10%">งบประมาณ:</td>
                            <td><input type="text" name="budget" value="' . $vbudget . '"></td>
                        </tr>';   
                        }

                        if($vdegreedes != "no"){
                            echo '<tr>
                            <td width="10%">สาขาิชาปริญญา:</td>
                            <td><input type="text" name="degreedes" value="' . $vdegreedes . '"></td>
                        </tr>';   
                        }
                        
                        if($vdegreelev != "no"){
                            echo '<tr>
                            <td width="10%">ระดับปริญญา:</td>
                            <td><input type="text" name="degreelevel" value="' . $vdegreelev . '"></td>
                        </tr>';   
                        }

                        if($vsub != "no"){
                            echo '<tr>
                            <td width="10%">หัวเรื่่อง:</td>
                            <td><input type="text" name="subject" value="' . $vsub . '"></td>
                        </tr>';   
                        }

                        if($vprotype != "no"){
                            echo '<tr>
                            <td width="10%">ประเภทโครงการ:</td>
                            <td><input type="text" name="protype" value="' . $vprotype . '"></td>
                        </tr>';   
                        }

                        if($vtype != "no"){
                            echo '<tr>
                            <td width="10%">ประเภท:</td>
                            <td><input type="text" name="type" value="' . $vtype . '">
                            </td>
                        </tr>';   
                        }

                        if($vlang != "no"){
                            echo '<tr>
                            <td width="10%">ภาษา:</td>
                            <td><input type="text" name="lang" value="' . $vlang . '"></td>
                        </tr>';   
                        }

                        if($vextent != "no"){
                            echo '<tr>
                            <td width="10%">ขนาด:</td>
                            <td><input type="text" name="extent" value="' . $vextent . '"></td>
                        </tr>';   
                        }

                        if($vurl != "no"){
                            echo '<tr>
                            <td width="10%">ที่อยู่เว็บไซต์:</td>
                            <td>
                            <input type="text" name="url" value="' . $vurl . '"></a>
                            </td>
                        </tr>';   
                        }

                        if($vfile != "no"){
                            echo '<tr>
                            <td width="10%">ไฟล์:</td>
                            <td>
                                <input type="file" name="file" id="file" value="'. $vfile .'" multiple>
                            </td>
                        </tr>';   
                        }
                
                    ?>
                    <tr><td></td><td>
                        <input type="submit" value="Save" class="btn-save" />
                        <input type="reset" value="Clear" class="btn-clear" /></form>
                        <button class="btn-save" style="background-color:silver;float:right;"><a href="record-manage.php">Back</a></button>
                    </td></tr>
                                    </table>
                    

                                    
                                </div>
								<br/>
                                <hr/>

                    </div>
                </center>
            </div>
        </div>
    </div>
    <?php $conn->close(); ?>
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

    <!-- Footer -->
    <footer id="footer">
        <?php include 'index-footer.php'; ?>
    </footer>
</body>

</html>