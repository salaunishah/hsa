$(document).ready(function() {
var $FNameLNameRegEx = /^([a-zA-Z]{2,30})$/;
 var $EmailIdRegEx = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{2,50})(\]?)$/;
   var nameflag = false,emailidflag = false,messageflag = false,subjectflag=false;
   $("#name").bind("keypress", function (e) {
        var keyCode = e.which ? e.which : e.keyCode
        var ret = ((keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || specialKeys.indexOf(keyCode) != -1);
        $("#namevalidate").html(ret ? "" : "(*) Invalid Last Input..!!");
        return ret;
    });
    $("#name").bind("blur", function (e) {
        if ($("#name").val() == "") {
            nameflag = false;
            $("#namevalidate").html('(*) First Name Required..!!');
        }
        else {
            if (!$("#name").val().match($FNameLNameRegEx)) {
                $("#namevalidate").html('Invalid First Name..!!');
                nameflag = false;
            }
            else {
                nameflag = true;
            }
        }
    });
    $("#subject").bind("keypress", function (e) {
        var keyCode = e.which ? e.which : e.keyCode
        var ret = ((keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || specialKeys.indexOf(keyCode) != -1);
        $("#subjectvalidate").html(ret ? "" : "(*) Invalid Last Input..!!");
        return ret;
    });
    $("#subject").bind("blur", function (e) {
        if ($("#subject").val() == "") {
            nameflag = false;
            $("#subjectvalidate").html('(*)  Subject..!!');
        }
        else {
            if (!$("#subject").val().match($FNameLNameRegEx)) {
                $("#subjectvalidate").html('Invalid Subject.!!');
                subjectflag = false;
            }
            else {
                subjectflag = true;
            }
        }
    });
   
     $("#emailid").bind("blur", function (e) {
        $("#emailidvalidate").empty();
        if ($("#emailid").val() == "") {
            emailidflag = false;
            $("#emailidvalidate").html('(*) Email Id Required..!!');
        }
        else {
            if (!$("#emailid").val().match($EmailIdRegEx)) {
                emailidflag = false;
                $("#emailidvalidate").html('Invalid Email Id..!!');
            }
            else {
                emailidflag = true;
            }
        }
    });
      $("#message").bind("keypress", function (e) {
        var keyCode = e.which ? e.which : e.keyCode
        var ret = ((keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || specialKeys.indexOf(keyCode) != -1);
        $("#namevalidate").html(ret ? "" : "(*) Invalid Last Input..!!");
        return ret;
    });
    $("#message").bind("blur", function (e) {
        if ($("#message").val() == "") {
            messageflag = false;
            $("#messagevalidate").html('(*) Message Required..!!');
        }
        else {
            if (!$("#message").val().match($FNameLNameRegEx)) {
                $("#messagevalidate").html('Invalid Message..!!');
                messageflag = false;
            }
            else {
                messageflag = true;
            }
        }
    });
  
  });