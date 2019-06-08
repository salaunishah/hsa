$(document).ready(function () {
 var $FNamedesignationRegEx = /^([a-zA-Z]{2,20})$/;
   
var specialKeys = new Array();
    specialKeys.push(8); //Backspace.
    specialKeys.push(9); //Tab.
    specialKeys.push(46); //Delete.

    specialKeys.push(16); //Shift.
    specialKeys.push(20); //Caps Lock.

    specialKeys.push(37); //Right Arrow.
    specialKeys.push(39); //Left Arrow.
    specialKeys.push(32);//space

 
 var designationflag = false; nameflag = false;  FileFlag = false; FileExtFlag = false; FileSizeFlag = false;
    //Upload Event Image Gallery File Upload Validation.
    $("#FU_ProductImage").change(function () {
        $("#ProductImageValidate").empty();

        var FileSize = document.getElementById("FU_ProductImage").files[0].size / 1024 / 1024;
        if (document.getElementById("FU_ProductImage").files.length == 0) {
            $("#ProductImageValidate").html("Invalid File Size OR No File Selected..!!<br />File Size Must Be Higher Than 0 MB & Lower Than 100 MB..!!");
            FileFlag = false;
            document.getElementById("ImgProductDisplayPic").src = "images/DefaultProduct.jpg";
        }
        else {
            var extension = document.getElementById("FU_ProductImage").value.split('.').pop().toLowerCase();
            var validFileExtensions = ['jpeg', 'jpg', 'png', 'bmp'];
            FileFlag = true;
            if ($.inArray(extension, validFileExtensions) == -1) {
                $("#ProductImageValidate").html("Only .jpeg,.jpg,.png or .bmp files are acceptable..!!");
                FileExtFlag = false;
                document.getElementById("ImgProductDisplayPic").src = "images/DefaultProduct.jpg";
            }
            else {
                FileExtFlag = true;
            }
            if (FileSize > 100) {
                $("#ProductImageValidate").html("Invalid File Size OR No File Selected..!!<br />File Size Must Be Higher Than 0 MB & Lower Than 100 MB..!!");
                FileSizeFlag = false;
                document.getElementById("ImgProductDisplayPic").src = "images/DefaultProduct.jpg";
            }
            else {
                FileSizeFlag = true;
            }
        }
        if (FileFlag == true && FileSizeFlag == true && FileExtFlag == true) {
            var reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById("ImgProductDisplayPic").src = e.target.result;
            };
            reader.readAsDataURL(document.getElementById("FU_ProductImage").files[0]);
        }
        else {
            document.getElementById("ImgProductDisplayPic").src = "images/DefaultProduct.jpg";
        }
    });

$("#designation").bind("keypress", function (e) {
        var keyCode = e.which ? e.which : e.keyCode
        var ret = ((keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || specialKeys.indexOf(keyCode) != -1);
        $("#designationvalidate").html(ret ? "" : "(*) Invalid Last Input..!!");
        return ret;
    });
    $("#designation").bind("blur", function (e) {
        if ($("#designation").val() == "") {
            designationflag = false;
            $("#designationvalidate").html('(*) Designation Required..!!');
        }
        else {
            if (!$("#designation").val().match($FNamedesignationRegEx)) {
                $("#designationvalidate").html('Invalid Designation..!!');
                designationflag = false;
            }
            else {
                designationflag = true;
            }
        }
    });
    $("#name").bind("keypress", function (e) {
        var keyCode = e.which ? e.which : e.keyCode
        var ret = ((keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || specialKeys.indexOf(keyCode) != -1);
        $("#namevalidate").html(ret ? "" : "(*) Invalid Last Input..!!");
        return ret;
    });
    $("#name").bind("blur", function (e) {
        if ($("#name").val() == "") {
            nameflag = false;
            $("#namevalidate").html('(*)  Name Required..!!');
        }
        else {
            if (!$("#name").val().match($FNamedesignationRegEx)) {
                $("#namevalidate").html('Invalid  Name..!!');
                nameflag = false;
            }
            else {
                nameflag = true;
            }
        }
    });
       $("#BtnAddContributor").click(function () {
        $("#ProductImageValidate").empty();
        if (document.getElementById("FU_ProductImage").files.length == 0) {
            $("#ProductImageValidate").html("Invalid File Size OR No File Selected..!!<br />File Size Must Be Higher Than 0 MB & Lower Than 100 MB..!!");
            FileFlag = false;
            document.getElementById("ImgProductDisplayPic").src = "images/DefaultProduct.jpg";
        }
        else {
            var FileSize = document.getElementById("FU_ProductImage").files[0].size / 1024 / 1024;
            var extension = document.getElementById("FU_ProductImage").value.split('.').pop().toLowerCase();
            var validFileExtensions = ['jpeg', 'jpg', 'png', 'bmp'];
            FileFlag = true;
            if ($.inArray(extension, validFileExtensions) == -1) {
                $("#ProductImageValidate").html("Only .jpeg,.jpg,.png or .bmp files are acceptable..!!");
                FileExtFlag = false;
                document.getElementById("ImgProductDisplayPic").src = "images/DefaultProduct.jpg";
            }
            else {
                FileExtFlag = true;
            }
            if (FileSize > 100) {
                $("#ProductImageValidate").html("Invalid File Size OR No File Selected..!!<br />File Size Must Be Higher Than 0 MB & Lower Than 100 MB..!!");
                FileSizeFlag = false;
                document.getElementById("ImgProductDisplayPic").src = "images/DefaultProduct.jpg";
            }
            else {
                FileSizeFlag = true;
            }
        }
           if ($("#designation").val() == "") {
            designationflag = false;
            $("#designationvalidate").empty();
            $("#designationvalidate").html('(*) Designation Required..!!');
        }
        else {
            $("#designationvalidate").empty();
            if (!$("#designation").val().match($FNamedesignationRegEx)) {
                $("#designationvalidate").html('Invalid Designation..!!');
                designationflag = false;
            }
            else {
                $("#designationvalidate").empty();
                designationflag = true;
            }
        }
        if ($("#name").val() == "") {
            nameflag = false;
            $("#namevalidate").empty();
            $("#namevalidate").html('(*)Name Required..!!');
        }
        else {
            $("#namevalidate").empty();
            if (!$("#name").val().match($FNamedesignationRegEx)) {
                $("#namevalidate").html('Invalid  Name..!!');
                nameflag = false;
            }
            else {
                $("#namevalidate").empty();
                nameflag = true;
            }
        }
       
  if (FileFlag == true && FileExtFlag == true && FileSizeFlag == true && nameflag == true && designationflag) {
            Addcontributor();
        }
        else {
            alert("Invalid Input ..!!");
        }
    });
});


 function Addcontributor(){
    // console.log($('#ImgProductDisplayPic').val());
    var formData = new FormData();
    formData.append("image",$('input[type=file]')[0].files[0]);
    formData.append("name",$('#name').val());
     formData.append("designation",$('#designation').val());
    


    $.ajax({
        url: 'addcontributors.php',
        data: formData,
        type: 'POST',
        contentType: false, // NEEDED, DON'T OMIT THIS 
        processData: false, // NEEDED, DON'T OMIT THIS
        
        success:function(data){
                alert(data);
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
    });

}









