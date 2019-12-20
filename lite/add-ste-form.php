<div class="add-data-form">
    <div class="card card-top" style="width: 900px; ">
        <h3>สไลด์สำหรับสอบวิทยานิพนธ์</h3>
        <hr/>
        <form class="add-form" action="insert-ste.php" method="POST" enctype="multipart/form-data" onsubmit="return confirm('คุณต้องการบันทึกข้อมูลหรือไม่ ?')">
            <label for="title">ชื่อเรื่อง</label>
            <input type="text" name="title" required autofocus>
            <br>
            <br>

            <label for="des">รายละเอียด</label>
            <textarea rows="4" cols="40" name="des" required autofocus></textarea>
            <br>
            <br>

            <label for="a">ผู้แต่ง</label>
            <input type="text" name="a">
            <br>
            <br>

            <label for="su">หัวเรื่อง</label>
            <input type="text" name="su">
            <br>
            <br>

            <label for="lg">ภาษา</label>
            <input type="text" name="lg">
            <br>
            <br>

            <label for="type">ชนิด</label>
            <input type="text" name="type">
            <br>
            <br>

            <label for="ex">ขนาด</label>
            <input type="text" name="ex">
            <br>
            <br>

            <label for="file">เพิ่มไฟล์</label>
            <input type="file" name="file" multiple>
            <br>
            <br>

            <input type="submit" value="Save" class="btn-save" />
            <input type="reset" value="Clear" class="btn-clear" />
            <hr/>
    </div>
</div>