$(document).ready(function () {

 var FileFlag = false; FileExtFlag = false; FileSizeFlag = false;
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

       $("#BtnAddNews").click(function () {
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
  if (FileFlag == true && FileExtFlag == true && FileSizeFlag == true) {
            Addnews();
        }
        else {
            alert("Invalid Input ..!!");
        }
    });
});


 function Addnews(){
    // console.log($('#ImgProductDisplayPic').val());
    var formData = new FormData();
    formData.append("image",$('input[type=file]')[0].files[0]);
   
    


    $.ajax({
        url: 'addnews.php',
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









