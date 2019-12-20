<div class="add-data-form">
    <div class="card card-top" style="width: 900px; ">
        <h3>วิจัยภายนอก</h3>
        <hr/>
        <form class="add-form" action="insert-ext-res.php" method="POST" enctype="multipart/form-data" onsubmit="return confirm('คุณต้องการบันทึกข้อมูลหรือไม่ ?')">
            <label for="title">ชื่อเรื่อง</label>
            <input type="text" name="title" required autofocus>
            <br>
            <br>

            <label for="des">รายละเอียด</label>
            <textarea rows="4" cols="40" name="des" required autofocus></textarea>
            <br>
            <br>

            <label for="author">ผู้แต่ง</label>
            <input type="text" name="author">
            <br>
            <br>

            <label for="publisher">สำนักพิมพ์</label>
            <input type="text" name="publisher">
            <br>
            <br>

            <label for="subject">หัวเรื่อง</label>
            <input type="text" name="subject">
            <br>
            <br>

            <label for="language">ภาษา</label>
            <input type="text" name="language">
            <br>
            <br>

            <label for="type">ชนิด</label>
            <input type="text" name="type">
            <br>
            <br>

            <label for="extent">ขนาด</label>
            <input type="text" name="extent">
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