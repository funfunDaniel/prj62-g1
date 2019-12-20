<?php

include 'config.php';

$type = $_REQUEST["det"];
$id = $_REQUEST["id"];

$vtitle = null;
$vdes = null;
$vdate = null;
$vsub = null;
$vtype = null;
$vfile = null;
$vcourse = null;
$vlang = null;
$vurl = null;
$vpub = null;
$vauthor = null;
$vextent = null;
$vowner = null;
$vadv = null;
$vbranch = null;
$vprostart = null;
$vprolead = null;
$vbudget = null;
$vprotype = null;
$vrecdate = null;
$vunit = null;
$vscholar = null;
$vprogram = null;
$vdegree = null;
$vdegreelev = null;
$vdegreedes = null;
$vmajor = null;

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$conn->query("SET NAMES UTF8");

if($type == "gp"){

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

}else if($type == "cp"){

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

}else if($type == "raw"){

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

}else if($type == "inw"){

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

}else if($type == "mw"){

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

}else if($type == "std"){

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

}else if($type == "tp"){

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

}else if($type == "ste"){

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

}else if($type == "the"){

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

}else if($type == "ra"){

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

}else if($type == "er"){

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

}else if($type == "sc"){

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

}else if($type == "act"){

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

}else if($type == "df"){

    $res_type = "แบบฟอร์มเอกสารบัณฑิตศึกษา";

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
	
}else if($type == "df2"){

    $res_type = "แบบฟอร์มเอกสารหนังสือขอเก็บข้อมูล";

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
	
}else if($type == "df3"){

    $res_type = "แบบฟอร์มเอกสารหนังสือแต่งตั้งผู้เชียวชาญ";

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

}else if($type == "df4"){

    $res_type = "แบบฟอร์มเอกสารใบรายงานความก้าวหน้า";

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

}else if($type == "df5"){

    $res_type = "แบบฟอร์มเอกสาร Template วิทยานิพนธ์";

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

}else if($type == "min"){

    $res_type = "รายงานประชุมคณะทํางานปรับปรุงหลักสูตร ";

    $sql = "SELECT * FROM minutes WHERE min_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdes = $row["description"];
    $vdate = $row["issued_date"];
    $vsub = $row["subject"];
    $vtype = $row["type"];
    $vfile = $row["file_directory"];

}else if($type == "met"){

    $res_type = "รายงานประชุมของสาขาวิชา";

    $sql = "SELECT * FROM met WHERE met_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdes = $row["description"];
    $vdate = $row["issued_date"];
    $vsub = $row["subject"];
    $vtype = $row["type"];
    $vfile = $row["file_directory"];
	
}else if($type == "oth"){

    $res_type = "รายงานประชุมอื่น ๆ ";

    $sql = "SELECT * FROM other WHERE oth_id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $vtitle = $row["title"];
    $vdes = $row["description"];
    $vdate = $row["issued_date"];
    $vsub = $row["subject"];
    $vtype = $row["type"];
    $vfile = $row["file_directory"];

}else if($type == "pro"){

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

}else if($type == "hofp"){

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

}else if($type == "hofs"){

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

}

?>
           
           <!-- Content -->
            <div class="card card-top">
                <p style="font-size:10px;">
                    <i class="fa fa-home"></i>
                    <a href="index-it.php">หน้าแรก</a> / 
                    <a href="index-it.php?view=<?php echo $type ?>"><?php echo $res_type ?></a> / 
                    <?php echo $vtitle ?>
                </p>
                <hr/>
                <h4><b><?php echo $vtitle; ?></b></h4>
                <div style="border-style: solid;border-color: #F0E68C;">
                <table style="width: 100%; padding: 15px;" class="w3-table-all w3-hoverable">
                    <?php
                        if($vtitle != null){
                            echo '<tr>
                            <td width="20%">ชื่อเรื่อง:</td>
                            <td>' . $vtitle . '</td>
                        </tr>';
                        }

                        if($vdes != null){
                            echo '<tr>
                            <td width="10%">คำอธิบาย:</td>
                            <td>' . $vdes . '</td>
                        </tr>';   
                        }

                        if($vdate != null){
                            echo '<tr>
                            <td width="10%">วันที่เผยแพร่:</td>
                            <td>' . $vdate . '</td>
                        </tr>';   
                        }

                        if($vprostart != null){
                            echo '<tr>
                            <td width="10%">วันที่เริ่มโครงการ:</td>
                            <td>' . $vprostart . '</td>
                        </tr>';   
                        }

                        if($vrecdate != null){
                            echo '<tr>
                            <td width="10%">วันที่ได้รับรางวัล:</td>
                            <td>' . $vrecdate . '</td>
                        </tr>';   
                        }

                        if($vunit != null){
                            echo '<tr>
                            <td width="10%">หน่วยงาน/สำนักงาน:</td>
                            <td>' . $vunit . '</td>
                        </tr>';   
                        }

                        if($vpub != null){
                            echo '<tr>
                            <td width="10%">สำนักพิมพ์:</td>
                            <td>' . $vpub . '</td>
                        </tr>';   
                        }

                        if($vmajor != null){
                            echo '<tr>
                            <td width="10%">หลักกสูตร:</td>
                            <td>' . $vmajor . '</td>
                        </tr>';   
                        }

                        if($vowner != null){
                            echo '<tr>
                            <td width="10%">เจ้าของผลงาน:</td>
                            <td>' . $vowner . '</td>
                        </tr>';   
                        }

                        if($vprolead != null){
                            echo '<tr>
                            <td width="10%">หัวหน้าโครงการ:</td>
                            <td>' . $vprolead . '</td>
                        </tr>';   
                        }

                        if($vscholar != null){
                            echo '<tr>
                            <td width="10%">ผู้ได้รับทุน:</td>
                            <td>' . $vscholar . '</td>
                        </tr>';   
                        }

                        if($vauthor != null){
                            echo '<tr>
                            <td width="10%">ผู้แต่ง:</td>
                            <td>' . $vauthor . '</td>
                        </tr>';   
                        }

                        if($vadv != null){
                            echo '<tr>
                            <td width="10%">ที่ปรึกษา:</td>
                            <td>' . $vadv . '</td>
                        </tr>';   
                        }

                        if($vdegree != null){
                            echo '<tr>
                            <td width="10%">ชื่อปริญญา:</td>
                            <td>' . $vdegree . '</td>
                        </tr>';   
                        }

                        if($vprogram != null){
                            echo '<tr>
                            <td width="10%">หลักสูตร:</td>
                            <td>' . $vprogram . '</td>
                        </tr>';   
                        }

                        if($vbudget != null){
                            echo '<tr>
                            <td width="10%">งบประมาณ:</td>
                            <td>' . $vbudget . '</td>
                        </tr>';   
                        }

                        if($vdegreedes != null){
                            echo '<tr>
                            <td width="10%">สาขาิชาปริญญา:</td>
                            <td>' . $vdegreedes . '</td>
                        </tr>';   
                        }
                        
                        if($vdegreelev != null){
                            echo '<tr>
                            <td width="10%">ระดับปริญญา:</td>
                            <td>' . $vdegreelev . '</td>
                        </tr>';   
                        }

                        if($vsub != null){
                            echo '<tr>
                            <td width="10%">หัวเรื่่อง:</td>
                            <td>' . $vsub . '</td>
                        </tr>';   
                        }

                        if($vprotype != null){
                            echo '<tr>
                            <td width="10%">ประเภทโครงการ:</td>
                            <td>' . $vprotype . '</td>
                        </tr>';   
                        }

                        if($vtype != null){
                            echo '<tr>
                            <td width="10%">ประเภท:</td>
                            <td>' . $vtype . '</td>
                        </tr>';   
                        }

                        if($vlang != null){
                            echo '<tr>
                            <td width="10%">ภาษา:</td>
                            <td>' . $vlang . '</td>
                        </tr>';   
                        }

                        if($vextent != null){
                            echo '<tr>
                            <td width="10%">ขนาด:</td>
                            <td>' . $vextent . '</td>
                        </tr>';   
                        }

                        if($vurl != null){
                            echo '<tr>
                            <td width="10%">ที่อยู่เว็บไซต์:</td>
                            <td>
                                <a href="' . $vurl . '" target="_blank">' . $vurl . '</a>
                            </td>
                        </tr>';   
                        }

                        if($vfile != null){
                            echo '<tr>
                            <td width="10%">ไฟล์:</td>
                            <td>
                                <a href="' . $vfile . '" target="_blank">' . $vtitle . '</a>
                            </td>
                        </tr>';   
                        }
                
                    ?>
                </table>
            </div><br/>
            </div>
