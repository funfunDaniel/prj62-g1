<div class="add-data-form">
    <div class="card card-top" style="width: 900px; ">
        <h3>โครงการ</h3>
        <hr/>
        <form class="add-form" action="insert-pro.php" method="POST" enctype="multipart/form-data" onsubmit="return confirm('คุณต้องการบันทึกข้อมูลหรือไม่ ?')">
            <label for="title">ชื่อเรื่อง</label>
            <input type="text" name="title" required autofocus>
            <br>
            <br>

            <label for="des">รายละเอียด</label>
            <textarea rows="4" cols="40" name="des" required autofocus></textarea>
            <br>
            <br>

            <label for="ptype">ชนิดของโครงการ</label>
            <input type="text" name="ptype">
            <br>
            <br>
            
            <label for="date">วันที่เริ่มโครงการ</label>
            <input type="date" name="starday">
            <br>
            <br>

            <label for="leader">หัวหน้าโครงการ</label>
            <input type="text" name="leader">
            <br>
            <br>

            <label for="budget">งบประมาณ</label>
            <input type="text" name="budget">
            <br>
            <br>

            <label for="unit">สำนัก/หน่วยงาน</label>
            <input type="text" name="unit">
            <br>
            <br>

            <label for="subject">หัวเรื่อง</label>
            <input type="text" name="subject">
            <br>
            <br>

            <label for="type">ชนิด</label>
            <input type="text" name="type">
            <br>
            <br>

            <label for="file">เลือกไฟล์</label>
            <input type="file" name="file" multiple>
            <br>
            <br>

            <input type="submit" value="Save" class="btn-save" />
            <input type="reset" value="Clear" class="btn-clear" />
            <hr/>
    </div>
</div>