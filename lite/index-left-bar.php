<?php include 'query_amount.php'; ?>



<!-- Search Form -->
<form name="searchForm" action="index-search.php" method="POST">
    <button class="searchBtn" type="submit" name="searchBtn" style="float: right">
        <i class="fa fa-search"></i>
    </button>
    <div style="overflow: hidden; padding-right: 5px;">
        <input list="search" class="searchBox" name="searchString" onkeyup="showAll(this.value)" style="width: 110%;" placeholder="ค้นหา..." />
        <datalist id="search">
		</datalist>
    </div>​
  
</form>

<!-- Sidebar -->
<div class="w3-light-grey w3-bar-block menu-border">
    <p class="menu-header">ประเภททรัพยากร</p>

    <!-- เมนูผลงานนักศึกษา -->
    <p class="w3-bar-item w3-button">
        <i class="fa fa-angle-right" aria-hidden="true"></i> ผลงานนักศึกษา
        <font style="font-size: 10px">(<?php echo $all_std ?>)</font>
    </p>
    <div class="menu-panel">
        <!-- ระดับปริญญาตรี -->
        <p class="menu-header-list" align="left">
            <i class="fa fa-ul" aria-hidden="true"></i><br><b>&nbsp;&nbsp;&nbsp;&nbsp; ระดับปริญญาตรี</b></p>
        <a href="index-it.php?view=gp" class="w3-bar-item w3-button">
            <i class="fa fa-angle-double-right fa-ul" aria-hidden="true"></i> โครงงานจบการศึกษา
            <font style="font-size: 10px">(<?php echo $gp ?>)</font>
        </a>
        <a href="index-it.php?view=cp" class="w3-bar-item w3-button">
            <i class="fa fa-angle-double-right fa-ul" aria-hidden="true"></i> ผลงานในรายวิชา
            <font style="font-size: 10px">(<?php echo $cp ?>)</font>
        </a>
        <a href="index-it.php?view=raw" class="w3-bar-item w3-button">
            <i class="fa fa-angle-double-right fa-ul" aria-hidden="true"></i> ผลงานที่ได้รับรางวัล
            <font style="font-size: 10px">(<?php echo $raw ?>)</font>
        </a>
        <a href="index-it.php?view=inw" class="w3-bar-item w3-button">
            <i class="fa fa-angle-double-right fa-ul" aria-hidden="true"></i> ผลงานนวัตกรรม
            <font style="font-size: 10px">(<?php echo $inw ?>)</font>
        </a>
        <a href="index-it.php?view=mj" class="w3-bar-item w3-button">
            <i class="fa fa-angle-double-right fa-ul" aria-hidden="true"></i> ผลงานของหลักสูตร
            <font style="font-size: 10px">(<?php echo $mw ?>)</font>
        </a>
		<br>
        <!-- ระดับบัณฑิตศึกษา -->
        <p class="menu-header-list" align="left">
            <i class="fa fa-ul" aria-hidden="true"></i><br><b>&nbsp;&nbsp;&nbsp;&nbsp; ระดับบัณทิตศึกษา</b></p>
        <a href="index-it.php?view=std" class="w3-bar-item w3-button">
            <i class="fa fa-angle-double-right fa-ul" aria-hidden="true"></i> สไลด์โครงร่างวิทยานิพนธ์
            <font style="font-size: 10px">(<?php echo $std ?>)</font>
        </a>
        <a href="index-it.php?view=tp" class="w3-bar-item w3-button">
            <i class="fa fa-angle-double-right fa-ul" aria-hidden="true"></i> โครงร่างวิทยานิพนธ์
            <font style="font-size: 10px">(<?php echo $tp ?>)</font>
        </a>
        <a href="index-it.php?view=ste" class="w3-bar-item w3-button">
            <i class="fa fa-angle-double-right fa-ul" aria-hidden="true"></i> สไลด์สำหรับสอบวิทยานิพนธ์
            <font style="font-size: 10px">(<?php echo $ste ?>)</font>
        </a>
        <a href="index-it.php?view=the" class="w3-bar-item w3-button">
            <i class="fa fa-angle-double-right fa-ul" aria-hidden="true"></i> วิทยานิพนธ์
            <font style="font-size: 10px">(<?php echo $tes ?>)</font>
        </a>
        <a href="index-it.php?view=ra" class="w3-bar-item w3-button">
            <i class="fa fa-angle-double-right fa-ul" aria-hidden="true"></i> บทความวิจัย
            <font style="font-size: 10px">(<?php echo $ra ?>)</font>
        </a>
        <a href="index-it.php?view=er" class="w3-bar-item w3-button">
            <i class="fa fa-angle-double-right fa-ul" aria-hidden="true"></i> วิจัยภายนอก
            <font style="font-size: 10px">(<?php echo $er ?>)</font>
        </a>
        <a href="index-it.php?view=sc" class="w3-bar-item w3-button">
            <i class="fa fa-angle-double-right fa-ul" aria-hidden="true"></i> ทุนวิจัย/ทุนการศึกษา
            <font style="font-size: 10px">(<?php echo $sc ?>)</font>
        </a>
    </div>

    <!-- เมนูกิจกรรม -->
    <a href="index-it.php?view=act" class="w3-bar-item w3-button">
        <i class="fa fa-angle-right" aria-hidden="true"></i> กิจกรรม
		<font style="font-size: 10px">(<?php echo $act ?>)</font>
    </a>

    <!-- เมนูแบบฟอร์มเอกสาร -->
	
    <p class="w3-bar-item w3-button">
        <i class="fa fa-angle-right" aria-hidden="true"></i> แบบฟอร์มเอกสาร
        <font style="font-size: 10px">(<?php echo $all_df ?>)</font>
    </p>
		 <div class="menu-panel">
			<a href="index-it.php?view=df" class="w3-bar-item w3-button">
			<i class="fa fa-angle-right" aria-hidden="true" style="opacity: 0;"></i> • บัณฑิตศึกษา
			<font style="font-size: 10px">(<?php echo $df ?>)</font>
			</a>
			
			<a href="index-it.php?view=df2" class="w3-bar-item w3-button">
			<i class="fa fa-angle-right" aria-hidden="true" style="opacity: 0;"></i> • หนังสือขอเก็บข้อมูล
			<font style="font-size: 10px">(<?php echo $df2 ?>)</font>
			</a>
			
			<a href="index-it.php?view=df3" class="w3-bar-item w3-button">
			<i class="fa fa-angle-right" aria-hidden="true" style="opacity: 0;"></i> • หนังสือแต่งตั้งผู้เชียวชาญ
			<font style="font-size: 10px">(<?php echo $df3 ?>)</font>
			</a>
			
			<a href="index-it.php?view=df4" class="w3-bar-item w3-button">
			<i class="fa fa-angle-right" aria-hidden="true" style="opacity: 0;"></i> • ใบรายงานความก้าวหน้า
			<font style="font-size: 10px">(<?php echo $df4 ?>)</font>
			</a>
			
			<a href="index-it.php?view=df5" class="w3-bar-item w3-button">
			<i class="fa fa-angle-right" aria-hidden="true" style="opacity: 0;"></i> • Template วิทยานิพนธ์
			<font style="font-size: 10px">(<?php echo $df5 ?>)</font>
			</a>
		 </div>
    <!-- เมนูรายงานการประชุม -->
    <p class="w3-bar-item w3-button">
            <i class="fa fa-angle-right" aria-hidden="true"></i>  รายงานการประชุม
			 <font style="font-size: 10px">(<?php echo $all_meet ?>)</font>
            </p>
        <div class="menu-panel">
             <a href="index-it.php?view=min" class="w3-bar-item w3-button">
                <i class="fa fa-angle-right" aria-hidden="true" style="opacity: 0;"></i> • การประชุมคณะทํางานปรับปรุงหลักสูตร 
				<font style="font-size: 10px">(<?php echo $min ?>)</font>
            </a>
            <a href="index-it.php?view=met" class="w3-bar-item w3-button">
                <i class="fa fa-angle-right" aria-hidden="true" style="opacity: 0;"></i> • รายงานประชุมของสาขาวิชา 
				<font style="font-size: 10px">(<?php echo $met ?>)</font>
            </a>
			<a href="index-it.php?view=oth" class="w3-bar-item w3-button">
                <i class="fa fa-angle-right" aria-hidden="true" style="opacity: 0;"></i> • รายงานประชุมอื่น ๆ 
				<font style="font-size: 10px">(<?php echo $oth ?>)</font>
            </a>
        </div>

    <!-- เมนูโครงการ -->
    <a href="index-it.php?view=pro" class="w3-bar-item w3-button">
        <i class="fa fa-angle-right" aria-hidden="true"></i> โครงการ
        <font style="font-size: 10px">(<?php echo $p ?>)</font>
    </a>

    <!-- เมนูรางวัลเกียรติยศ -->
    <p class="w3-bar-item w3-button">
        <i class="fa fa-angle-right" aria-hidden="true"></i> รางวัลเกียรติยศ
        <font style="font-size: 10px">(<?php echo $all_hof ?>)</font>
    </p>
    <div class="menu-panel">
        <a href="index-it.php?view=hofs" class="w3-bar-item w3-button">
            <i class="fa fa-angle-double-right fa-ul" aria-hidden="true"></i> นักศึกษา
            <font style="font-size: 10px">(<?php echo $hofs ?>)</font>
        </a>
        <a href="index-it.php?view=hofp" class="w3-bar-item w3-button">
            <i class="fa fa-angle-double-right fa-ul" aria-hidden="true"></i> อาจารย์
            <font style="font-size: 10px">(<?php echo $hofp ?>)</font>
        </a>
    </div>
</div>
<br/>

<div class="w3-light-grey w3-bar-block menu-border">
    <p class="menu-header">เว็บไซต์ที่เกี่ยวข้อง</p>

    <a href="http://www.sut.ac.th/2012/index.php" target="_blank" class="w3-bar-item w3-button">
        <img src="images/sut-logo.jpg" width="100%" title="SUT Website" />
    </a>
    <a href="http://soctech.sut.ac.th/it/webitsut2015/index.php" target="_blank" class="w3-bar-item w3-button">
        <img src="images/it-logo.jpg" width="100%" title="IT SUT Website" />
    </a>
	<a href="https://www.messenger.com/t/1098531706992524" target="_blank" class="w3-bar-item w3-button">
        <img src="images/chatchat.png" width="100%" title="IT Chat Helper" />
    </a>
    <br/>
</div>
<br/>

<div class="w3-light-grey w3-bar-block menu-border">
    <p class="menu-header">คำขอต่างๆ</p>
	
    <a href="index-it.php?view=ww" class="w3-bar-item w3-button">
            <i class="fa fa-angle-right" aria-hidden="true" style="opacity: 0;"></i> แบบฟอร์มขอเพิ่มผลงาน
             <font style="font-size: 10px"></font>
        </a>
		 <a href="profile-data-form.php" class="w3-bar-item w3-button">
                <i class="fa fa-angle-right" aria-hidden="true" style="opacity: 0;"></i> ขอประวัติข้อมูลผลงาน
            </a>
			 <a href="index-it.php?view=wwww" class="w3-bar-item w3-button">
                <i class="fa fa-angle-right" aria-hidden="true" style="opacity: 0;"></i> ตรวจสอบคำขอผลงาน
				<font style="font-size: 10px"></font>
            </a>
    <br/>
</div>
<br/>



<script>
        var acc = document.getElementsByClassName("w3-button");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
</script>