<?php

    $id = $_REQUEST["id"];

    include 'config.php';

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
                
    $conn->query("SET NAMES UTF8");

    $sql = "SELECT * FROM collections WHERE cid =" . $id;

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $res_id = $row["res_id"];
        $res_type1 = $row["res_type"];

        if($res_type1 == "กิจกรรม"){
			$res_type = "activities";
            $val = "act_id";
			
        }elseif($res_type1 == "ผลงานในรายวิชา"){
			$res_type = "course_projects";
            $val = "cp_id";
			
        }elseif($res_type1 == "แบบฟอร์มเอกสาร"){
			$res_type = "document_forms";
            $val = "df_id";
			
		}elseif($res_type1 == "หนังสือขอเก็บข้อมูล"){
			$res_type = "document_forms2";
            $val = "df2_id";
			
		}elseif($res_type1 == "หนังสือแต่งตั้งผู้เชียวชาญ"){
			$res_type = "document_forms3";
            $val = "df3_id";
			
		}elseif($res_type1 == "ใบรายงานความก้าวหน้า"){
			$res_type = "document_forms4";
            $val = "df4_id";
			
		}elseif($res_type1 == "Template วิทยานิพนธ์"){
			$res_type = "document_forms5";
            $val = "df5_id";
			
        }elseif($res_type1 == "วิจัยภายนอก"){
			$res_type = "external_researches";
            $val = "er_id";
			
        }elseif($res_type1 == "โครงงานจบการศึกษา"){
			$res_type = "graduation_projects";
            $val = "gp_id";
			
        }elseif($res_type1 == "รางวัลเกียรติยศอาจารย์"){
			$res_type = "hall_of_frames_prf";
            $val = "hofp_id";
			
        }elseif($res_type1 == "รางวัลเกียรติยศนักศึกษา"){
			$res_type = "hall_of_frames_std";
            $val = "hofs_id";
			
        }elseif($res_type1 == "ผลงานนวัตกรรม"){
			$res_type = "innovative_works";
            $val = "inw_id";
			
        }elseif($res_type1 == "ผลงานของกลุ่มวิชา/หลักสูตร"){
			$res_type = "major_works";
            $val = "mw_id";
			
        }elseif($res_type1 == "รายงานการประชุมวิชาการปรับปรุงหลักสูตร"){
			$res_type = "minutes";
            $val = "min_id";
			
		}elseif($res_type1 == "รายงานการประชุมของสาขาวิชา"){
			$res_type = "met";
            $val = "met_id";
			
		}elseif($res_type1 == "รายงานการประชุมอื่น"){
			$res_type = "other";
            $val = "oth_id";
			
        }elseif($res_type1 == "โครงการ"){
			$res_type = "projects";
            $val = "p_id";
			
        }elseif($res_type1 == "ผลงานที่ได้รับรางวัล"){
			$res_type = "received_award_works";
            $val = "raw_id";
			
        }elseif($res_type1 == "บทความวิจัย"){
			$res_type = "research_articles";
            $val = "ra_id";
			
        }elseif($res_type1 == "ทุนวิจัย/ทุนการศึกษา"){
			$res_type = "scholarships";
            $val = "sc_id";
			
        }elseif($res_type1 == "สไลด์สอบโครงร่างวิทยานิพนธ์"){
			$res_type = "slide_for_thesis_drafting";
            $val = "std_id";
			
        }elseif($res_type1 == "สไลด์สำหรับสอบวิทยานิพนธ์"){
			$res_type = "slide_for_thesis_examination";
            $val = "ste_id";
			
        }elseif($res_type1 == "วิทยานิพนธ์"){
			$res_type = "thesis";
            $val = "tes_id";
			
        }elseif($res_type1 == "โครงร่างวิทยานิพนธ์"){
			$res_type = "thesis_proposals";
            $val = "tp_id";
        }  
        
        $sqlSel = "SELECT * FROM " . $res_type . " WHERE " . $val . "'=" . $res_id . "' AND COLUMN_NAME = 'file_directory'";
        $resultSel = mysqli_query($conn,$sqlSel);
        if ($resultSel->num_rows > 0) {
            $row = mysqli_fetch_assoc($resultSel);
            $file = $row["file_directory"];
            unlink($file);
        }

        $sqlDelRes = "DELETE FROM " . $res_type . " WHERE " . $val . "=" . $res_id;
        if (mysqli_query($conn, $sqlDelRes)) {
            $sqlDelCol = "DELETE FROM collections WHERE cid=" . $id;
            if (mysqli_query($conn, $sqlDelCol)) {
                header('Location:record-manage.php');
            } else {
                echo "Error deleting record: " . mysqli_error($conn);
            }
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
        
    }


?>