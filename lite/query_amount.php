<?php

    include 'config.php';    

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("SET NAMES UTF8");
    
    //โครงงานจบการศึกษา
    $sql = "SELECT COUNT(gp_id) AS 'gp' FROM graduation_projects WHERE status!='รอตรวจสอบ' and status!='ไม่ผ่าน' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $gp = $row["gp"];

    //ผลงานในรายวิชา
    $sql = "SELECT COUNT(cp_id) AS 'cp' FROM course_projects WHERE status!='รอตรวจสอบ' and status!='ไม่ผ่าน' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $cp = $row["cp"];

    //ผลงานที่ได้รับรางวัล
    $sql = "SELECT COUNT(raw_id) AS 'raw' FROM received_award_works WHERE status!='รอตรวจสอบ' and status!='ไม่ผ่าน' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $raw = $row["raw"];

    //ผลงานวัตกรรมเพื่อสังคม
    $sql = "SELECT COUNT(inw_id) AS 'inw' FROM innovative_works WHERE status!='รอตรวจสอบ' and status!='ไม่ผ่าน' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $inw = $row["inw"];

    //ผลงานของกลุ่มวิชาหรือหลักสูตร
    $sql = "SELECT COUNT(mw_id) AS 'mw' FROM major_works WHERE status!='รอตรวจสอบ' and status!='ไม่ผ่าน' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $mw = $row["mw"];

    //สไลด์สอบโครงร่างวิทยานิพนธ์
    $sql = "SELECT COUNT(std_id) AS 'std' FROM slide_for_thesis_drafting";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $std = $row["std"];

    //โครงร่างวิทยานิพนธ์
    $sql = "SELECT COUNT(tp_id) AS 'tp' FROM thesis_proposals";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $tp = $row["tp"];

    //สไลด์สอบสำหรับสอบวิทยานิพนธ์
    $sql = "SELECT COUNT(ste_id) AS 'ste' FROM  slide_for_thesis_examination";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $ste = $row["ste"];

    //วิทยานิพนธ์
    $sql = "SELECT COUNT(tes_id) AS 'tes' FROM  thesis";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $tes = $row["tes"];

    //บทความวิจัย
    $sql = "SELECT COUNT(ra_id) AS 'ra' FROM  research_articles";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $ra = $row["ra"];

    //วิจัยภายนอก
    $sql = "SELECT COUNT(er_id) AS 'er' FROM  external_researches";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $er = $row["er"];
    
    //ทุนวิจัยหรือทุนการศึกษา
    $sql = "SELECT COUNT(sc_id) AS 'sc' FROM  scholarships";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $sc = $row["sc"];
    
    //กิจกรรม
    $sql = "SELECT COUNT(act_id) AS 'act' FROM  activities WHERE status!='รอตรวจสอบ' and status!='ไม่ผ่าน' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $act = $row["act"];

    //แบบฟอร์มเอกสารบัณฑิตศึกษา
    $sql = "SELECT COUNT(df_id) AS 'df' FROM  document_forms";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $df = $row["df"];
	
	//แบบฟอร์มเอกสารหนังสือขอเก็บข้อมูล
    $sql = "SELECT COUNT(df2_id) AS 'df2' FROM  document_forms2";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $df2 = $row["df2"];
	
	//แบบฟอร์มเอกสารหนังสือแต่งตั้งผู้เชียวชาญ
    $sql = "SELECT COUNT(df3_id) AS 'df3' FROM  document_forms3";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $df3 = $row["df3"];
	
	//แบบฟอร์มเอกสารใบรายงานความก้าวหน้า
    $sql = "SELECT COUNT(df4_id) AS 'df4' FROM  document_forms4";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $df4 = $row["df4"];
	
	//แบบฟอร์มเอกสารTemplate วิทยานิพนธ์
    $sql = "SELECT COUNT(df5_id) AS 'df5' FROM  document_forms5";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $df5 = $row["df5"];

    //รายงานการประชุม
    $sql = "SELECT COUNT(min_id) AS 'min' FROM  minutes";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $min = $row["min"];

	$sql = "SELECT COUNT(met_id) AS 'met' FROM  met";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $met = $row["met"];
	
	$sql = "SELECT COUNT(oth_id) AS 'oth' FROM  other";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $oth = $row["oth"];

    //โครงการ
    $sql = "SELECT COUNT(p_id) AS 'p' FROM projects";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $p = $row["p"];

    //รางวัลเกียรติยศนักศึกษา
    $sql = "SELECT COUNT(hofs_id) AS 'hofs' FROM hall_of_frames_std WHERE status!='รอตรวจสอบ' and status!='ไม่ผ่าน' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $hofs = $row["hofs"];

    //รางวัลเกียรติยศอาจารย์
    $sql = "SELECT COUNT(hofp_id) AS 'hofp' FROM hall_of_frames_prf";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $hofp = $row["hofp"];

    $all_std = $gp + $mw + $raw + $inw + $cp + $std + $tp + $ste + $tes + $ra + $er + $sc;
	$all_meet = $min + $met + $oth;
	$all_df = $df + $df2 + $df3 + $df4 + $df5;
    $all_hof = $hofp + $hofs;
    $all = $all_hof + $all_std + $act + $all_df + $min + $p;
    
    $conn->close();

?>