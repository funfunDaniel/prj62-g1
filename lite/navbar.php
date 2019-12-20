<header class="topbar">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <nav class="navbar top-navbar navbar-toggleable-md navbar-light " >
<div class="navbar-header ">

  <span class="hidden-md-up"><img src="../images/logo-bird.png" width="45px"></span>
        <a class="navbar-brand" href="index-it.php">
          <span class="hidden-xs-down"><img src="../images/it-logo.png" width="350px">		  
		  </span>
		</a>
		
</div>
        <div class="navbar-collapse">
            <ul class="navbar-nav ">
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
            </ul>
        </div>
    </nav>
</header>

		<aside class="left-sidebar text-center">
            <div class="scroll-sidebar ">
                <nav class="sidebar-nav active">
                    <ul id="sidebarnav" >
                        <li>
                            <a href="index-it.php" aria-expanded="false"><i class="material-icons">house</i><span class="hide-menu">หน้าหลัก</span></a>
                            <!-- <a href="index-it.php" aria-expanded="false"><i class="mdi mdi-airplay"></i><span class="hide-menu">หน้าหลัก</span></a> -->
                        </li>
						
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="material-icons">filter_list</i><span class="hide-menu">ผลงานของนักศึกษา</span></a>
                            <!-- <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-book-open-page-variant"></i><span class="hide-menu">ผลงานของนักศึกษา</span></a> -->
                            <ul aria-expanded="true" class="collapse">
                                <li><a href="port-bachelor-it.php">ระดับปริญญาตรี</a></li>
                                <li><a href="port-graduate-it.php">ระดับบัณฑิตศึกษา</a></li>
                            </ul>
                        </li>
						
                        <li >
                            <a  href="personal.php" aria-expanded="false"><i class="material-icons">people_alt</i><span class="hide-menu">คณาจารย์และบุคลากร</span></a>
                            <!-- <a  href="personal.php" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">คณาจารย์และบุคลากร</span></a> -->
                        </li>

                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="material-icons">folder_special</i><span class="hide-menu">ผลงาน</span></a>
                            <!-- <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-trophy"></i><span class="hide-menu">ผลงาน</span></a> -->
                            <ul aria-expanded="true" class="collapse">
                                <li><a href="portfolio-it.php">ผลงานของสาขาวิชา</a></li>
                                <li><a href="portfolio-techer.php">ผลงานของคณาจารย์</a></li>
                            </ul>
                        </li>
						
                        <li>
                            <!-- <a href="activity.php" aria-expanded="false"><i class="mdi mdi-camera"></i><span class="hide-menu">กิจกรรม</span></a> -->
                            <a href="activity.php" aria-expanded="false"><i class="material-icons">emoji_people</i><span class="hide-menu">กิจกรรม</span></a>
                        </li>
						
						<li>
							<!-- <a  href="career.php" aria-expanded="false"><i class="mdi mdi-camera"></i><span class="hide-menu">แนะนำอาชีพ</span></a> -->
							<a  href="career.php" aria-expanded="false"><i class="material-icons">forum</i><span class="hide-menu">แนะนำอาชีพ</span></a>
						</li>
                    
					
		<?php
            if(isset($_SESSION["username"]) && $_SESSION["position"] == "professor"){
                echo "
					<br/>
                    <li><a href=\"add-data-form.php\" class=\"w3-bar-item w3-button\">
                    <font style=\"font-size:14px\">เพิ่มข้อมูล</font></a>
                    <ul>
					    <li><a href=\"prof-add-activity-form.php\" > กิจกรรมนักศึกษา </a></li>
                    </ul> 
                    </li>
					<li><a href=\"record-manage.php\" class=\"w3-bar-item w3-button\"><font style=\"font-size:14px\">ระเบียนคลังข้อมูล</font></a></li>
					<li><a href=\"#\" class=\"w3-bar-item w3-button\"><font style=\"font-size:14px\">คำร้องขอ</font></a>
						<ul>
							<li><a href=\"prof-Request-activity.php\" > กิจกรรมนักศึกษา </a></li>
							<li><a href=\"Request-data-grad.php\" > คำร้องขอเพิ่มโครงงาน </a></li>
							<li><a href=\"Request-data-inw.php\" > คำร้องขอเพิ่มนวัฒกรรม </a></li>
							<li><a href=\"Request-data-other.php\" > คำร้องอื่นๆ </a></li>
						</ul> 
					</li>
					<li><a href=\"#\" class=\"w3-bar-item w3-button\"><font style=\"font-size:14px\">รายงานการประเมิน</font></a>
						<ul>
							<li><a href=\"report1.php\" > รายงานรางวัลเกียติยศ </a></li>
							<li><a href=\"report2.php\"  > รายงานประเภทผลงานทั้งหมด </a></li>
							<li><a href=\"report3.php\" > รายงานคำขอเพิ่มผลงาน </a></li>
							<li><a href=\"report4.php\" > รายงานการอนุมัติผลงาน </a></li>
							<li><a href=\"report5.php\" > รายงานจำนวนในที่ปรึกษา </a></li>
						</ul>
					</li>
					<li><a class=\"w3-bar-item w3-button\"><font style=\"font-size:14px\"> | | </font></a></li>
					<li><a href=\"#\" class=\"w3-bar-item w3-button\"><font style=\"font-size:14px;color:blue;\">[ " . $_SESSION["username"] . " ]</font></a></li>
					<li><a href=\"check-logout.php\" class=\"w3-bar-item w3-button\"><font style=\"font-size:14px\">Logout</font></a></li>
					
				";
				
            }elseif(isset($_SESSION["username"]) && $_SESSION["position"] == "student"){
                echo "
                <br/>
                <li><a href=\"add-data-form.php\" class=\"w3-bar-item w3-button\">
                <font style=\"font-size:14px\">คำขอ</font></a>
                <ul>
                    <li><a href=\"std-add-activity-form.php\" > เข้าร่วมกิจกรรม </a></li>
                </ul> 
                </li>
                <li>
                    <a href=\"#\" class=\"w3-bar-item w3-button\">
                    <font style=\"font-size:14px\">ตรวจสอบคำขอ</font></a>
                </li>
                <li>
                    <a href=\"#\" class=\"w3-bar-item w3-button\">
                    <font style=\"font-size:14px\">คลังผลงาน</font></a>
                    <ul>
							<li><a href=\"std-my-portfolio.php\" > ผลงานของฉัน </a></li>
							<li><a href=\"resume-form.php\" > resume </a></li>
						</ul>
                </li>
                
                <li><a class=\"w3-bar-item w3-button\"><font style=\"font-size:14px\"> | | </font></a></li>
                <li><a href=\"std-profile.php\" class=\"w3-bar-item w3-button\"><font style=\"font-size:14px;color:blue;\">[ " . $_SESSION["username"] . " ]</font></a></li>
                <li><a href=\"check-logout.php\" class=\"w3-bar-item w3-button\"><font style=\"font-size:14px\">Logout</font></a></li>
                
            ";            
        }elseif(isset($_SESSION["username"]) && $_SESSION["position"] == "employee"){
            echo "
            <br/>
            <li><a href=\"#\" class=\"w3-bar-item w3-button\">
            <font style=\"font-size:14px\">เพิ่มผลการเรียน</font></a>
            </li>
            
            <li><a class=\"w3-bar-item w3-button\"><font style=\"font-size:14px\"> | | </font></a></li>
            <li><a href=\"#\" class=\"w3-bar-item w3-button\"><font style=\"font-size:14px;color:blue;\">[ " . $_SESSION["username"] . " ]</font></a></li>
            <li><a href=\"check-logout.php\" class=\"w3-bar-item w3-button\"><font style=\"font-size:14px\">Logout</font></a></li>
            
        ";            

            }
            
            else{
                echo "
					&nbsp;&nbsp;&nbsp;&nbsp; | <li>
						 	<a  href=\"login.php\" aria-expanded=\"false\"><i class=\"mdi mdi-camera\"></i><font style=\"font-size:16px;color:blue; \"><span class=\"hide-menu\">เข้าสู่ระบบ</span></font></a>
						</li> &nbsp;&nbsp;&nbsp; |
				";
            }

        

        ?>
		</ul>
		
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
		
