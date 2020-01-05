<!DOCTYPE html>
<?php 
    session_start();
?>
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
	 
	 <script type="text/javascript">
		function explain(value)
		{			
				if(document.getElementById("teacher").value == "ผศ. ดร. จิติมนต์ อั่งสกุล")
			{
				document.getElementById("name").value="ผศ. ดร. จิติมนต์ อั่งสกุล";
			}
				if(document.getElementById("teacher").value == "รศ. ดร. วีรพงษ์ พลนิกรกิจ")
			{
				document.getElementById("name").value="รศ. ดร. วีรพงษ์ พลนิกรกิจ";
			}
				if(document.getElementById("teacher").value == "รศ. ดร. ศิรปัฐช์ บุญครอง")
			{
				document.getElementById("name").value="รศ. ดร. ศิรปัฐช์ บุญครอง";
			}
				if(document.getElementById("teacher").value == "ผศ. ดร. สถิตย์โชค โพธิ์สอาด")
			{
				document.getElementById("name").value="ผศ. ดร. สถิตย์โชค โพธิ์สอาด";
			}
				if(document.getElementById("teacher").value == "ผศ. ดร. ธรา อั่งสกุล")
			{
				document.getElementById("name").value="ผศ. ดร. ธรา อั่งสกุล";
			}
				if(document.getElementById("teacher").value == "ผศ. ดร. ศุภกฤษฏิ์ นิวัฒนากูล")
			{
				document.getElementById("name").value="ผศ. ดร. ศุภกฤษฏิ์ นิวัฒนากูล";
			}
				if(document.getElementById("teacher").value == "ผศ. ดร. หนึ่งหทัย ขอผลกลาง")
			{
				document.getElementById("name").value="ผศ. ดร. หนึ่งหทัย ขอผลกลาง";
			}
				if(document.getElementById("teacher").value == "อ. ดร. พิชญสินี กิจวัฒนาถาวร")
			{
				document.getElementById("name").value="อ. ดร. พิชญสินี กิจวัฒนาถาวร";
			}
				if(document.getElementById("teacher").value == "อ. ดร. ธรรมศักดิ์ เธียรนิเวศน์")
			{
				document.getElementById("name").value="อ. ดร. ธรรมศักดิ์ เธียรนิเวศน์";
			}
				if(document.getElementById("teacher").value == "อ. ดร. สรชัย กมลลิ้มสกุล")
			{
				document.getElementById("name").value="อ. ดร. สรชัย กมลลิ้มสกุล";
			}
				if(document.getElementById("teacher").value == "อ. ดร. ฉัตรภัสร์ ฐิติอัคราวงศ์")
			{
				document.getElementById("name").value="อ. ดร. ฉัตรภัสร์ ฐิติอัคราวงศ์";
			}
				if(document.getElementById("teacher").value == "อ. ดร. ธวัชพงษ์ พิทักษ์")
			{
				document.getElementById("name").value="อ. ดร. ธวัชพงษ์ พิทักษ์";
			}
				if(document.getElementById("teacher").value == "อ. ดร. นิศาชล จำนงศรี")
			{
				document.getElementById("name").value="อ. ดร. นิศาชล จำนงศรี";
			}
				if(document.getElementById("teacher").value == "อ. ดร. นฤมล รักษาสุข")
			{
				document.getElementById("name").value="อ. ดร. นฤมล รักษาสุข";
			}
				if(document.getElementById("teacher").value == "อ. นรินทร ฉิมสุนทร")
			{
				document.getElementById("name").value="อ. นรินทร ฉิมสุนทร";
			}
				if(document.getElementById("teacher").value == "อ. พรอนันต์ เอี่ยมขจรชัย")
			{
				document.getElementById("name").value="อ. พรอนันต์ เอี่ยมขจรชัย";
			}
		}
</script>

</head>

</head>

<body style="background-color:#e5f6ff">

    <!-- Top -->
    <div class="w3-top">
        <?php include 'navbar.php';?>
    </div>
    <br/>

    <!-- Content -->
    <div class="row">

        <!-- Center Content -->
        <div class="show-table-data">
            <div class="card card-top">
                <center>
                    <div style="overflow-x:auto;">


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
$vemail = "no";


$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$conn->query("SET NAMES UTF8");

if($type == "graduation_projects"){

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
	$vemail ="";
    $vname = "insert-request-grad.php";

}else if($type == "course_projects"){

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
	$vemail ="";
    $vname = "insert-request-cou-pro.php";

}else if($type == "received_award_works"){

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
	$vemail ="";
    $vfile = $row["file_directory"];
    $vname = "insert-request-raw.php";

}else if($type == "innovative_works"){

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
    $vname = "insert-request-inw.php";
	$vemail ="";

}else if($type == "major_works"){

    $res_type = "ผลงานของกลุ่มวิชา/หลักสูตร";

    $sql = "SELECT * FROM major_works WHERE mw_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdate = $row["issued_date"];
    $vdes = $row["description"];
    $vmajor = $row["major"];
    $vsub = $row["subject"];
    $vlang = $row["language"];
    $vtype = $row["type"];
    $vfile = $row["file_directory"];
    $vurl = $row["url"];
    $vname = "insert-request-maj.php";
	$vemail ="";

}else if($type == "slide_for_thesis_drafting"){

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

}else if($type == "thesis_proposals"){

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

}else if($type == "slide_for_thesis_examination"){

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

}else if($type == "thesis"){

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

}else if($type == "research_articles"){

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

}else if($type == "external_researches"){

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

}else if($type == "scholarships"){

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

}else if($type == "activities"){

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
    $vname = "insert-request-act.php";
	$vemail ="";

}else if($type == "conference_course"){

    $res_type = "รายงานการประชุมวิชาการปรับปรุงหลักสูตร";

    $sql = "SELECT * FROM conference_course WHERE con_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdes = $row["description"];
    $vdate = $row["issued_date"];
    $vsub = $row["subject"];
    $vtype = $row["type"];
    $vfile = $row["file_directory"];
    $vname = "edit-met.php";

}else if($type == "conference_branch"){

    $res_type = "รายงานการประชุมของสาขาวิชา";

    $sql = "SELECT * FROM conference_branch WHERE con2_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdes = $row["description"];
    $vdate = $row["issued_date"];
    $vsub = $row["subject"];
    $vtype = $row["type"];
    $vfile = $row["file_directory"];
    $vname = "edit-met-conf.php";

}else if($type == "conference_other"){

    $res_type = "รายงานการประชุมอื่น ๆ";

    $sql = "SELECT * FROM conference_other WHERE con3_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdes = $row["description"];
    $vdate = $row["issued_date"];
    $vsub = $row["subject"];
    $vtype = $row["type"];
    $vfile = $row["file_directory"];
    $vname = "edit-met-other.php";

}else if($type == "document_forms"){

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

}else if($type == "minutes"){

    $res_type = "รายงานการประชุม";

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

}else if($type == "projects"){

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

}else if($type == "hall_of_frames_prf"){

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

}else if($type == "hall_of_frames_std"){

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
    $vname = "insert-request-hofs.php";
    $vemail ="";
}

?>

                                <hr/>
                                
                                <div style="width: 100%;border-style: solid;border-color: #fff;">
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
                        if($vemail != "no"){
                            echo '<tr>
                            <td width="10%">email:</td>
                            <td><input type="text" name="email" value="' . $vemail . '"></td>
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
                            <td>
								<select id="teacher" type="dropdown" name="teacher" onChange="explain(this)">
									<option value="">------------------------------- รายชื่ออาจารย์ -------------------------------</option>
									<option value="ผศ. ดร. จิติมนต์ อั่งสกุล">ผศ. ดร. จิติมนต์ อั่งสกุล (Jitimon Angskun)</option>
									<option value="รศ. ดร. วีรพงษ์ พลนิกรกิจ">รศ. ดร. วีรพงษ์ พลนิกรกิจ (Veerapong Polnikornkij)</option>
									<option value="รศ. ดร. ศิรปัฐช์ บุญครอง">รศ. ดร. ศิรปัฐช์ บุญครอง (Sirapat Boonkrong)</option>
									<option value="ผศ. ดร. สถิตย์โชค โพธิ์สอาด">ผศ. ดร. สถิตย์โชค โพธิ์สอาด (Satidchoke Phosaard)</option>
									<option value="ผศ. ดร. ธรา อั่งสกุล">ผศ. ดร. ธรา อั่งสกุล (Thara Angskun)</option>
									<option value="ผศ. ดร. ศุภกฤษฏิ์ นิวัฒนากูล">ผศ. ดร. ศุภกฤษฏิ์ นิวัฒนากูล (Suphakit Niwattanakul)</option>
									<option value="ผศ. ดร. หนึ่งหทัย ขอผลกลาง">ผศ. ดร. หนึ่งหทัย ขอผลกลาง (Neunghathai Khopolklang)</option>
									<option value="อ. ดร. พิชญสินี กิจวัฒนาถาวร">อ. ดร. พิชญสินี กิจวัฒนาถาวร (Phichayasini Kitwatthanathawon)</option>
									<option value="อ. ดร. ธรรมศักดิ์ เธียรนิเวศน์">อ. ดร. ธรรมศักดิ์ เธียรนิเวศน์ (Thammasak Thianniwet)</option>
									<option value="อ. ดร. สรชัย กมลลิ้มสกุล">อ. ดร. สรชัย กมลลิ้มสกุล (Sorachai Kamollimsakul)</option>
									<option value="อ. ดร. ฉัตรภัสร์ ฐิติอัคราวงศ์">อ. ดร. ฉัตรภัสร์ ฐิติอัคราวงศ์ (Chatphat Titiakarawongse)</option>
									<option value="อ. ดร. นิศาชล จำนงศรี">อ. ดร. นิศาชล จำนงศรี (Nisachol Chamnongsri)</option>
									<option value="อ. ดร. ธวัชพงษ์ พิทักษ์">อ. ดร. ธวัชพงษ์ พิทักษ์ (Thawatphong Phithak)</option>
									<option value="อ. ดร. นฤมล รักษาสุข">อ. ดร. นฤมล รักษาสุข (Narumol Ruksasuk)</option>
									<option value="อ. นรินทร ฉิมสุนทร">อ. นรินทร ฉิมสุนทร (Narintorn Chimsuntorn)</option>
									<option value="อ. พรอนันต์ เอี่ยมขจรชัย">อ. พรอนันต์ เอี่ยมขจรชัย (Porn-anant Iamkhajornchai)</option>
								</select> <a> กรุณาเลือก </a>
								<input id="name" type="text" readonly="" name="advisor" value="' . $vadv . '" />							
							</td>
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
                            <td width="10%">สาขาวิชาปริญญา:</td>
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
                        <button class="btn-save" style="background-color:gray;float:right;"><a href="view-Request-form.php">Back</a></button>
                    </td></tr>
                                    </table>
                    

                                    
                                </div>
                                <hr/>

                    </div>
                </center>
            </div>
        </div>
    </div>
    <?php $conn->close(); ?>

    <!-- Footer -->
    <footer id="footer">
        <?php include 'index-footer.php'; ?>
    </footer>
</body>

</html>