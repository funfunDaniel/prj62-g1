<div class="add-data-form">
    <div class="card card-top" style="width: 900px; ">
        <h3>ผลงานในรายวิชา</h3>
        <hr/>
        <form class="add-form" action="insert-cou-pro.php" method="POST" enctype="multipart/form-data" onsubmit="return confirm('คุณต้องการบันทึกข้อมูลหรือไม่ ?')">
            <label for="title">ชื่อเรื่อง</label>
            <input type="text" name="title" required autofocus>
            <br/>
            <br/>

            <label for="des">รายละเอียด</label>
            <textarea rows="4" cols="40" name="des" required autofocus></textarea>
            <br>
            <br>

            <label for="co">รายวิชา</label>
            <input type="text" name="co">
            <br/>
            <br/>

            <label for="o">เจ้าของผลงาน</label>
            <input type="text" name="o">
            <br/>
            <br/>

            <label for="sub">หัวข้อ</label>
            <input type="text" name="sub">
            <br/>
            <br/>

            <label for="lang">ภาษา</label>
            <input type="text" name="lang">
            <br/>
            <br/>
            
            <label for="type">ชนิด</label>
            <input type="text" name="type">
            <br>
            <br>

            <label for="url">ที่อยู่เว็บไซต์</label>
            <input type="text" name="url">
            <br/>
            <br/>

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