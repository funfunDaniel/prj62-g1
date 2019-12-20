function getDepartmentData(){
    $.ajax({
        url: './MySQL/admin/get-json-department.php',
        type: 'get',
        dataType: 'JSON',
        success: function(resp){
            console.log("RESP : ",resp)
            var len = resp.length;
                for(var i=0; i<len; i++){
                    var id = resp[i].id
                    var dep = resp[i].dep;
                    var aff = resp[i].aff;

                    var tr_str = "<tr>" +
                    "<td align='center'>" + (i+1) + "</td>" +
                    "<td align='center'>" + dep + "</td>" +
                    "<td align='center'>" + aff + "</td>" +
                    "</tr>";
                    $("#department-table").append(tr_str);
                }
        }
    });
    }

    function addDepartment(){
        $.ajax({
            url: './MySQL/admin/add-department.php',
            method: 'POST',
            data: $('#data-form').serialize(),
            dataType: 'JSON',
            success: function(resp){
                // console.log(resp.status)
                if(resp.status > 0){
                    alert("เพิ่มหน่วยงานสำเร็จ")
                    getDepartmentData()
                }else{
                    alert("เพิ่มหน่วยงานไม่สำเร็จ กรุณาลองใหม่")
                    // console.log("2")

                }
            }
        });

    }

