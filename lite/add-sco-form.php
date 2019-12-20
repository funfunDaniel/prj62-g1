<div class="add-data-form">
    <div class="card card-top" style="width: 900px; ">
        <h3>ทุนวิจัย/ทุนการศึกษา</h3>
        <hr/>
        <form class="add-form" action="insert-sco.php" method="POST" enctype="multipart/form-data" onsubmit="return confirm('คุณต้องการบันทึกข้อมูลหรือไม่ ?')">
            <label for="title">ชื่อเรื่อง</label>
            <input type="text" name="title" required autofocus>
            <br>
            <br>

            <label for="des">รายละเอียด</label>
            <textarea rows="4" cols="40" name="des" required autofocus></textarea>
            <br>
            <br>

            <label for="scholar">ผู้รับทุน</label>
            <input type="text" name="scholar">
            <br>
            <br>

            <label for="advisor">ที่ปรึกษา</label>
            <input type="text" name="advisor">
            <br>
            <br>

            <label for="budget">งบประมาณ</label>
            <input type="text" name="budget">
            <br>
            <br>

            <label for="program">สาขาวิชา</label>
            <input type="text" name="program">
            <br>
            <br>

            <label for="degree">ชื่อปริญญา</label>
            <input type="text" name="degree">
            <br>
            <br>

            <label for="type">ชนิด</label>
            <input type="text" name="type">
            <br>
            <br>
            
            <input type="submit" value="Save" class="btn-save" />
            <input type="reset" value="Clear" class="btn-clear" />
            <hr/>
    </div>
</div>