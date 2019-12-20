<?php include 'query_amount.php'; ?>
<br/>

<!-- Sidebar -->
<div class="w3-light-grey w3-bar-block menu-border">
    <p class="menu-header">เมนูผลงานที่ต้องการขอ Profile</p>

    <!-- เมนูผลงานนักศึกษา -->
    
        
		<!-- เมนูขอโปรไฟล์ผลงานต่าง ๆ-->
        <a href="prof-grad-pro-form.php" class="w3-bar-item w3-button">
            <i class="fa fa-angle-double-right fa-ul" aria-hidden="true"></i> โครงงานจบการศึกษา
        </a>
        <a href="prof-cou-pro-form.php" class="w3-bar-item w3-button">
            <i class="fa fa-angle-double-right fa-ul" aria-hidden="true"></i> ผลงานในรายวิชา
        </a>
        <a href="prof-rec-aw-wor-form.php" class="w3-bar-item w3-button">
            <i class="fa fa-angle-double-right fa-ul" aria-hidden="true"></i> ผลงานที่ได้รับรางวัล
        </a>
        <a href="prof-ino-wor-form.php" class="w3-bar-item w3-button">
            <i class="fa fa-angle-double-right fa-ul" aria-hidden="true"></i> ผลงานนวัตกรรม
        </a>
        <a href="prof-maj-wor-form.php" class="w3-bar-item w3-button">
            <i class="fa fa-angle-double-right fa-ul" aria-hidden="true"></i> ผลงานของหลักสูตร
        </a>
		
		<!-- เมนูโปรไฟล์รางวัลเกียรติยศ -->
		<a href="prof-hofs-form.php" class="w3-bar-item w3-button">
            <i class="fa fa-angle-double-right fa-ul" aria-hidden="true"></i> รางวัลเกียรติยศนักศึกษา
        </a>
		<br/>

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