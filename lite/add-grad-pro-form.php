<script type="text/javascript">
		function explain(value)
		{			
				if(document.getElementById("teacher").value == "ผศ. ดร. จิติมนต์ อั่งสกุล")
			{
				document.getElementById("name").value="ผศ. ดร. จิติมนต์ อั่งสกุล";
			}
				if(document.getElementById("teacher").value == "รศ. ดร. วีรพงษ์ พลนิกรกิจ")
			{
				document.getElementById("name").value="รศ. ดร. วีรพงษ์ พลนิกรกิจ";
			}
				if(document.getElementById("teacher").value == "รศ. ดร. ศิรปัฐช์ บุญครอง")
			{
				document.getElementById("name").value="รศ. ดร. ศิรปัฐช์ บุญครอง";
			}
				if(document.getElementById("teacher").value == "ผศ. ดร. สถิตย์โชค โพธิ์สอาด")
			{
				document.getElementById("name").value="ผศ. ดร. สถิตย์โชค โพธิ์สอาด";
			}
				if(document.getElementById("teacher").value == "ผศ. ดร. ธรา อั่งสกุล")
			{
				document.getElementById("name").value="ผศ. ดร. ธรา อั่งสกุล";
			}
				if(document.getElementById("teacher").value == "ผศ. ดร. ศุภกฤษฏิ์ นิวัฒนากูล")
			{
				document.getElementById("name").value="ผศ. ดร. ศุภกฤษฏิ์ นิวัฒนากูล";
			}
				if(document.getElementById("teacher").value == "ผศ. ดร. หนึ่งหทัย ขอผลกลาง")
			{
				document.getElementById("name").value="ผศ. ดร. หนึ่งหทัย ขอผลกลาง";
			}
				if(document.getElementById("teacher").value == "อ. ดร. พิชญสินี กิจวัฒนาถาวร")
			{
				document.getElementById("name").value="อ. ดร. พิชญสินี กิจวัฒนาถาวร";
			}
				if(document.getElementById("teacher").value == "อ. ดร. ธรรมศักดิ์ เธียรนิเวศน์")
			{
				document.getElementById("name").value="อ. ดร. ธรรมศักดิ์ เธียรนิเวศน์";
			}
				if(document.getElementById("teacher").value == "อ. ดร. สรชัย กมลลิ้มสกุล")
			{
				document.getElementById("name").value="อ. ดร. สรชัย กมลลิ้มสกุล";
			}
				if(document.getElementById("teacher").value == "อ. ดร. ฉัตรภัสร์ ฐิติอัคราวงศ์")
			{
				document.getElementById("name").value="อ. ดร. ฉัตรภัสร์ ฐิติอัคราวงศ์";
			}
				if(document.getElementById("teacher").value == "อ. ดร. ธวัชพงษ์ พิทักษ์")
			{
				document.getElementById("name").value="อ. ดร. ธวัชพงษ์ พิทักษ์";
			}
				if(document.getElementById("teacher").value == "อ. ดร. นิศาชล จำนงศรี")
			{
				document.getElementById("name").value="อ. ดร. นิศาชล จำนงศรี";
			}
				if(document.getElementById("teacher").value == "อ. ดร. นฤมล รักษาสุข")
			{
				document.getElementById("name").value="อ. ดร. นฤมล รักษาสุข";
			}
				if(document.getElementById("teacher").value == "อ. นรินทร ฉิมสุนทร")
			{
				document.getElementById("name").value="อ. นรินทร ฉิมสุนทร";
			}
				if(document.getElementById("teacher").value == "อ. พรอนันต์ เอี่ยมขจรชัย")
			{
				document.getElementById("name").value="อ. พรอนันต์ เอี่ยมขจรชัย";
			}
		}
</script>
<div class="add-data-form">
            <div class="card card-top" style="width: 900px; ">
                <h3>โครงงานสำหรับจบการศึกษา</h3>
                <hr/>
                <form class="add-form" action="insert-grad-pro.php" method="POST" enctype="multipart/form-data" onsubmit="return confirm('คุณต้องการบันทึกข้อมูลหรือไม่ ?')">
                    <label for="title">ชื่อเรื่อง</label>
                    <input type="text" id="title" name="title" required autofocus>
                    <br/>
                    <br/>

                    <label for="des">รายละเอียด</label>
                    <textarea rows="4" cols="40" name="des" required autofocus></textarea>
                    <br>
                    <br>

                    <label for="year">เจ้าของโครงงาน</label>
                    <input type="text" id="owner" name="owner">
                    <br/>
                    <br/>

                    <label for="details">ที่ปรึกษาโครงงาน</label><br>
                    <td>
								<select id="teacher" class="searchBox" style=width:45%; type="dropdown" name="teacher" onChange="explain(this)">
									<option value="">------------ รายชื่ออาจารย์ ------------</option>
									<option value="ผศ. ดร. จิติมนต์ อั่งสกุล">ผศ. ดร. จิติมนต์ อั่งสกุล (Jitimon Angskun)</option>
									<option value="รศ. ดร. วีรพงษ์ พลนิกรกิจ">รศ. ดร. วีรพงษ์ พลนิกรกิจ (Veerapong Polnikornkij)</option>
									<option value="รศ. ดร. ศิรปัฐช์ บุญครอง">รศ. ดร. ศิรปัฐช์ บุญครอง (Sirapat Boonkrong)</option>
									<option value="ผศ. ดร. สถิตย์โชค โพธิ์สอาด">ผศ. ดร. สถิตย์โชค โพธิ์สอาด (Satidchoke Phosaard)</option>
									<option value="ผศ. ดร. ธรา อั่งสกุล">ผศ. ดร. ธรา อั่งสกุล (Thara Angskun)</option>
									<option value="ผศ. ดร. ศุภกฤษฏิ์ นิวัฒนากูล">ผศ. ดร. ศุภกฤษฏิ์ นิวัฒนากูล (Suphakit Niwattanakul)</option>
									<option value="ผศ. ดร. หนึ่งหทัย ขอผลกลาง">ผศ. ดร. หนึ่งหทัย ขอผลกลาง (Neunghathai Khopolklang)</option>
									<option value="อ. ดร. พิชญสินี กิจวัฒนาถาวร">อ. ดร. พิชญสินี กิจวัฒนาถาวร (Phichayasini Kitwatthanathawon)</option>
									<option value="อ. ดร. ธรรมศักดิ์ เธียรนิเวศน์">อ. ดร. ธรรมศักดิ์ เธียรนิเวศน์ (Thammasak Thianniwet)</option>
									<option value="อ. ดร. สรชัย กมลลิ้มสกุล">อ. ดร. สรชัย กมลลิ้มสกุล (Sorachai Kamollimsakul)</option>
									<option value="อ. ดร. ฉัตรภัสร์ ฐิติอัคราวงศ์">อ. ดร. ฉัตรภัสร์ ฐิติอัคราวงศ์ (Chatphat Titiakarawongse)</option>
									<option value="อ. ดร. นิศาชล จำนงศรี">อ. ดร. นิศาชล จำนงศรี (Nisachol Chamnongsri)</option>
									<option value="อ. ดร. ธวัชพงษ์ พิทักษ์">อ. ดร. ธวัชพงษ์ พิทักษ์ (Thawatphong Phithak)</option>
									<option value="อ. ดร. นฤมล รักษาสุข">อ. ดร. นฤมล รักษาสุข (Narumol Ruksasuk)</option>
									<option value="อ. นรินทร ฉิมสุนทร">อ. นรินทร ฉิมสุนทร (Narintorn Chimsuntorn)</option>
									<option value="อ. พรอนันต์ เอี่ยมขจรชัย">อ. พรอนันต์ เอี่ยมขจรชัย (Porn-anant Iamkhajornchai)</option>
								</select> <a> กรุณาเลือก </a><br/>
								<br/><input id="name" type="text" readonly="" name="advisor" />							
							</td>
                    <br/>
                    <br/>

                    <label for="subject">หัวข้อเรื่อง</label>
                    <input type="text" id="subject" name="subject">
                    <br/>
                    <br/>

            <label for="type">ชนิด</label>
            <input type="text" name="type">
            <br>
            <br>

                    <label for="type">ที่อยู่เว็บไซต์</label>
                    <input type="text" id="url" name="url">
                    <br/>
                    <br/>

                    <label for="file">เลือกไฟล์</label>
                    <input type="file" id="file" name="file">
                    <br/>
                    <br/>
                    <br/>

                    <input type="submit" value="Save" class="btn-save" />
                    <input type="reset" value="Clear" class="btn-clear" />
                </form>
                <hr/>
            </div>
        </div>