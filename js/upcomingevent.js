$(document).ready(function() {

    var TxtEventTitleFlag = false; TxtEventDateFlag = false; TxtEventTimeFlag = false; FileFlag = false; FileExtFlag = false; FileSizeFlag = false;
    //Upload Product File Upload Validation.
    $("#file").change(function () {
        $("#filevalidate").empty();

        var FileSize = document.getElementById("file").files[0].size / 1024 / 1024;
        if (document.getElementById("file").files.length == 0) {
            $("#filevalidate").html("Invalid File Size OR No File Selected..!!<br />File Size Must Be Higher Than 0 MB & Lower Than 300 MB..!!");
            FileFlag = false;
           
        }
        else {
            var extension = document.getElementById("file").value.split('.').pop().toLowerCase();
            var validFileExtensions = ['pdf', 'docx', 'doc'];
            FileFlag = true;
            if ($.inArray(extension, validFileExtensions) == -1) {
                $("#filevalidate").html("Only 'pdf', 'docx', 'doc' files are acceptable..!!");
                FileExtFlag = false;
                
            }
            else {
                FileExtFlag = true;
            }
            if (FileSize > 300) {
                $("#filevalidate").html("Invalid File Size OR No File Selected..!!<br />File Size Must Be Higher Than 0 MB & Lower Than 300 MB..!!");
                FileSizeFlag = false;
                
            }
            else {
                FileSizeFlag = true;
            }
        }
        if (FileFlag == true && FileSizeFlag == true && FileExtFlag == true) {
            var reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById("filedisplay").src = e.target.result;
            };
            reader.readAsDataURL(document.getElementById("file").files[0]);
        }
        else {
        
        }
    });




    //TxtEventTitle Validate.
    $("#TxtEventTitle").bind("blur", function (e) {
        $("#TxtEventTitleValidate").empty();
        if ($("#TxtEventTitle").val() == "") {
            $("#TxtEventTitleValidate").html('(*) Upcoming Event Title Required..!!');
            TxtEventTitleFlag = false;
        }
        else {
            if ($("#TxtEventTitle").val().length > 300) {
                $("#TxtEventTitleValidate").html('Invalid Upcoming Event Title ..!!');
                TxtEventTitleFlag = false;
            }
            else {
                TxtEventTitleFlag = true;
            }
        }
    });
    //TxtEventDate Validate.
    $("#TxtEventDate").bind("blur", function (e) {
        $("#TxtEventDateValidate").empty();
        if ($("#TxtEventDate").val() == "") {
            $("#TxtEventDateValidate").html('(*) Upcoming Event Date Required..!!');
            TxtEventDateFlag = false;
        }
        else {
            TxtEventDateFlag = true;
        }
    });
    //TxtEventTime Validate.
    $("#DDL_Hours").bind("change", function (e) {
        $("#TxtEventTimeValidate").empty();
        if ($("#DDL_Hours").val() == "-1") {
            $("#TxtEventTimeValidate").html('(*) Something Get Wrong with Upcoming Event Time..!!');
            TxtEventTimeFlag = false;
        }
        else {
            TxtEventTimeFlag = true;
        }
    });
	//TxtEventTime Validate.
    $("#DDL_Minutes").bind("change", function (e) {
        $("#TxtEventTimeValidate").empty();
        if ($("#DDL_Minutes").val() == "-1") {
            $("#TxtEventTimeValidate").html('(*) Something Get Wrong with Upcoming Event Time..!!');
            TxtEventTimeFlag = false;
        }
        else {
            TxtEventTimeFlag = true;
        }
    });
    //TxtEventVenue Validate.
    $("#TxtEventVenue").bind("blur", function (e) {
        $("#TxtEventVenueValidate").empty();
        if ($("#TxtEventVenue").val() == "") {
            $("#TxtEventVenueValidate").html('(*) Upcoming Event Venue Required..!!');
            TxtEventVenueFlag = false;
        }
        else {
            if ($("#TxtEventVenue").val().length > 200) {
                $("#TxtEventVenueValidate").html('Invalid Upcoming Event Venue ..!!');
                TxtEventVenueFlag = false;
            }
            else {
                TxtEventVenueFlag = true;
            }
        }
    });
    //BtnAddUpcomingEvent CLick Event.
    $("#BtnAddUpcomingEvent").click(function () {

        $("#filevalidate").empty();
        if (document.getElementById("file").files.length == 0) {
            $("#filevalidate").html("Invalid File Size OR No File Selected..!!<br />File Size Must Be Higher Than 0 MB & Lower Than 300 MB..!!");
            FileFlag = false;
            document.getElementById("filedisplay").src = "images/DefaultProduct.jpg";
        }
        else {
            var FileSize = document.getElementById("file").files[0].size / 1024 / 1024;
            var extension = document.getElementById("file").value.split('.').pop().toLowerCase();
            var validFileExtensions = ['pdf', 'doc', 'docx'];
            FileFlag = true;
            if ($.inArray(extension, validFileExtensions) == -1) {
                $("#filevalidate").html("Only .jpeg,.jpg,.png or .bmp files are acceptable..!!");
                FileExtFlag = false;
                          }
            else {
                FileExtFlag = true;
            }
            if (FileSize > 300) {
                $("#filevalidate").html("Invalid File Size OR No File Selected..!!<br />File Size Must Be Higher Than 0 MB & Lower Than 300 MB..!!");
                FileSizeFlag = false;
                
            }
            else {
                FileSizeFlag = true;
            }
        }
        $("#TxtEventTitleValidate").empty();
        if ($("#TxtEventTitle").val() == "") {
            $("#TxtEventTitleValidate").html('(*) Upcoming Event Title Required..!!');
            TxtEventTitleFlag = false;
        }
        else {
            if ($("#TxtEventTitle").val().length > 300) {
                $("#TxtEventTitleValidate").html('Invalid Upcoming Event Title ..!!');
                TxtEventTitleFlag = false;
            }
            else {
                TxtEventTitleFlag = true;
            }
        }
        $("#TxtEventDateValidate").empty();
        if ($("#TxtEventDate").val() == "") {
            $("#TxtEventDateValidate").html('(*) Upcoming Event Date Required..!!');
            TxtEventDateFlag = false;
        }
        else {
            TxtEventDateFlag = true;
        }
        $("#TxtEventTimeValidate").empty();
        if ($("#DDL_Hours").val() == "-1") {
            $("#TxtEventTimeValidate").html('(*) Something Get Wrong with Upcoming Event Time..!!');
            TxtEventTimeFlag = false;
        }
        else {
            TxtEventTimeFlag = true;
        }
		$("#TxtEventTimeValidate").empty();
        if ($("#DDL_Minutes").val() == "-1") {
            $("#TxtEventTimeValidate").html('(*) Something Got Wrong with Upcoming Event Time..!!');
            TxtEventTimeFlag = false;
        }
        else {
            TxtEventTimeFlag = true;
        }
        $("#TxtEventVenueValidate").empty();
        if ($("#TxtEventVenue").val() == "") {
            $("#TxtEventVenueValidate").html('(*) Upcoming Event Venue Required..!!');
            TxtEventVenueFlag = false;
        }
        else {
            if ($("#TxtEventVenue").val().length > 200) {
                $("#TxtEventVenueValidate").html('Invalid Upcoming Event Venue ..!!');
                TxtEventVenueFlag = false;
            }
            else {
                TxtEventVenueFlag = true;
            }
        }
        if (TxtEventTitleFlag == true && TxtEventDateFlag == true) {

            AddUpcomingEvent();
            alert("Success");
        }
        else {
            alert("(*) Invalid Inputs..!!");
        }
    });


});
function AddUpcomingEvent(){

    
    var formData = new FormData();
    formData.append("file",$('input[type=file]')[0].files[0]);
    formData.append("title",$('#TxtEventTitle').val());
    formData.append("date",$('#TxtEventDate').val());
    formData.append("time",($('#DDL_Hours').val()+":"+$('#DDL_Minutes').val()+" "+$('#DDL_AMPM').val()));
    formData.append("venue",$('#TxtEventVenue').val());

    
    $.ajax({
        
        url: 'addupcomingevent.php',
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