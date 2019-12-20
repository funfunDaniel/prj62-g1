<div class="add-data-form">
    <div class="card card-top" style="width: 900px; ">
        <h3>ผลงานที่ได้รับรางวัล</h3>
        <hr/>
        <form class="add-form" action="insert-rec-aw-wor.php" method="POST" enctype="multipart/form-data" onsubmit="return confirm('คุณต้องการบันทึกข้อมูลหรือไม่ ?')">
            <label for="title">ชื่อเรื่อง</label>
            <input type="text" name="title" required autofocus>
            <br>
            <br>

            <label for="des">รายละเอียด</label>
            <textarea rows="4" cols="40" name="des" required autofocus></textarea>
            <br>
            <br>

            <label for="rec_date">วันที่ได้รับรางวัล</label><br/>
            <input type="date" name="rec_date" class="aaa">
            <br>
            <br>

            <label for="owner">ผู้ได้รับรางวัล</label>
            <input type="text" name="owner">
            <br>
            <br>
            
            <label for="unit">หน่วยงาน/สำนัก</label>
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
        </form>
        <hr/>
    </div>
</div>