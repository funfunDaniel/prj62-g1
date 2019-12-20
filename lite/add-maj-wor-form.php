<div class="add-data-form">
    <div class="card card-top" style="width: 900px; ">
        <h3>ผลงานของกลุ่มวิชาหรือหลักสูตร</h3>
        <hr/>
        <form class="add-form" action="insert-maj-wor.php" method="POST" enctype="multipart/form-data" onsubmit="return confirm('คุณต้องการบันทึกข้อมูลหรือไม่ ?')">
            <label for="title">ชื่อเรื่อง</label>
            <input type="text" name="title" required autofocus>
            <br>
            <br>

            <label for="des">รายละเอียด</label>
            <textarea rows="4" cols="40" name="des" required autofocus></textarea>
            <br> 
            <br>

            <label for="m">กลุ่มวิชา/หลักสูตร</label>
            <input type="text" name="m">
            <br>
            <br>

            <label for="su">เจ้าของผลงาน</label>
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

            <label for="url">ที่อยู่เว็บไซต์</label>
            <input type="text" name="url">
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