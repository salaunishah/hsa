

$(document).ready(function () {

    //Global Variable Declaration.
    var $FNameLNameRegEx = /^([a-zA-Z]{2,20})$/;
    var $PasswordRegEx = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,12}$/;
    var $EmailIdRegEx = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{2,10})(\]?)$/;
    var $ConNoRegEx = /^([0-9]{10})$/;
var specialKeys = new Array();
    specialKeys.push(8); //Backspace.
    specialKeys.push(9); //Tab.
    specialKeys.push(46); //Delete.

    specialKeys.push(16); //Shift.
    specialKeys.push(20); //Caps Lock.

    specialKeys.push(37); //Right Arrow.
    specialKeys.push(39); //Left Arrow.
    specialKeys.push(32);//space

 var lnameflag = false, nameflag = false, emailidflag = false, contactnoflag = false, passwordflag = false;
var usernameflag = false,userpasswordflag = false;
$("#lname").bind("keypress", function (e) {
        var keyCode = e.which ? e.which : e.keyCode
        var ret = ((keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || specialKeys.indexOf(keyCode) != -1);
        $("#lnamevalidate").html(ret ? "" : "(*) Invalid Last Input..!!");
        return ret;
    });
    $("#lname").bind("blur", function (e) {
        if ($("#lname").val() == "") {
            lnameflag = false;
            $("#lnamevalidate").html('(*) Organisation Last Required..!!');
        }
        else {
            if (!$("#lname").val().match($FNameLNameRegEx)) {
                $("#lnamevalidate").html('Invalid Last name..!!');
                lnameflag = false;
            }
            else {
                lnameflag = true;
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
            if (!$("#name").val().match($FNameLNameRegEx)) {
                $("#namevalidate").html('Invalid  Name..!!');
                nameflag = false;
            }
            else {
                nameflag = true;
            }
        }
    });
    $("#contactno").bind("keypress", function (e) {
        var keyCode = e.which ? e.which : e.keyCode
        var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
        $("#contactnovalidate").html(ret ? "" : "(*) Invalid Last Input..!!");
        return ret;
    });
    $("#contactno").bind("blur", function (e) {
        $("#contactnovalidate").empty();
        if ($("#contactno").val() == "") {
            contactnoflag = false;
            $("#contactnovalidate").html('(*) Contact No. Required..!!');
        }
        else {
            if (!$("#contactno").val().match($ConNoRegEx)) {
                $("#contactnovalidate").html('Invalid Contact No..!!');
                contactnoflag = false;
            }
            else {
                contactnoflag = true;
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
     
    $("#password").bind("blur", function (e) {
        if ($("#password").val() == "") {
            passwordflag = false;
            $("#passwordvalidate").html('(*) password Required..!!');
        }
        else {
            if (!$("#password").val().match($PasswordRegEx)) {
                $("#passwordvalidate").html('Invalid password..!!');
                passwordflag = false;
            }
            else {
                passwordflag = true;
            }
        }
    });
     $("#reg").click(function () {
        if ($("#lname").val() == "") {
            lnameflag = false;
            $("#lnamevalidate").empty();
            $("#lnamevalidate").html('(*) Last Name Required..!!');
        }
        else {
            $("#lnamevalidate").empty();
            if (!$("#lname").val().match($FNameLNameRegEx)) {
                $("#lnamevalidate").html('Invalid Last Name..!!');
                lnameflag = false;
            }
            else {
                $("#lnamevalidate").empty();
                lnameflag = true;
            }
        }
        if ($("#name").val() == "") {
            nameflag = false;
            $("#namevalidate").empty();
            $("#namevalidate").html('(*)Name Required..!!');
        }
        else {
            $("#namevalidate").empty();
            if (!$("#name").val().match($FNameLNameRegEx)) {
                $("#namevalidate").html('Invalid  Name..!!');
                nameflag = false;
            }
            else {
                $("#namevalidate").empty();
                nameflag = true;
            }
        }
        if ($("#contactno").val() == "") {
            contactnoflag = false;
            $("#contactnovalidate").empty();
            $("#contactnovalidate").html('(*) Contact No. Required..!!');
        }
        else {
            $("#contactnovalidate").empty();
            if (!$("#contactno").val().match($ConNoRegEx)) {
                $("#contactnovalidate").html('Invalid Contact No..!!');
                contactnoflag = false;
            }
            else {
                $("#contactnovalidate").empty();
                contactnoflag = true;
            }
        }
        if ($("#emailid").val() == "") {
            emailidflag = false;
            $("#emailidvalidate").empty();
            $("#emailidvalidate").html('(*) Email Id Required..!!');
        }
        else {
            $("#emailidvalidate").empty();
            if (!$("#emailid").val().match($EmailIdRegEx)) {
                emailidflag = false;
                $("#emailidvalidate").html('Invalid Email Id..!!');
            }
            else {
                $("#emailidvalidate").empty();
                emailidflag = true;
            }
        }
        if ($("#password").val() == "") {
            passwordflag = false;
            $("#passwordvalidate").empty();
            $("#passwordvalidate").html('(*) Password Required..!!');
        }
        else {
            $("#passwordvalidate").empty();
            if (!$("#password").val().match($PasswordRegEx)) {
                passwordflag = false;
                $("#passwordvalidate").html('Invalid Password');
            }
            else {
                $("#passwordvalidate").empty();
                passwordflag = true;
            }
        }
     if (lnameflag == true && nameflag == true && emailidflag == true && contactnoflag== true && passwordflag == true) {
            register();
        }
        else {
            alert("Invalid Inputs..!!");
        }
    });
/*login validations*/
    $("#username").bind("blur", function (e) {
        $("#usernamevalidate").empty();
        if ($("#username").val() == "") {
            $("#usernamevalidate").html("(*) Username Required..!!");
            usernameflag = false;
        }
        else {

            if (!$("#username").val().match($EmailIdRegEx)) {
                usernameflag = false;
                $("#usernamevalidate").html('Invalid Username..!!');
            }
            else {
                $("#usernamevalidate").empty();
                usernameflag = true;
            }
        }
        return usernameflag;
    });

    $("#userpassword").bind("blur", function (e) {
        $("#userpasswordvalidate").empty();
        if ($("#userpassword").val() == "") {
            $("#userpasswordvalidate").html("(*) Password Required..!!");
           userpasswordflag= false;
        }
        else {
            if (!$("#userpassword").val().match($PasswordRegEx)) {
               userpasswordflag= false;
                $("#userpasswordvalidate").html('-- Invalid Password..!!<br/><ul><li> Minimum 8 Maximum 12 Character Required.</li><li> Atleast One Uppercase Required.</li><li> Atleast One Lowercase Required.</li><li> Atleast One Numeric Required.</li><li> NO SPECIAL CHARACTERS ALLOWED.</li></ul>');
            }
            else {
                $("#userpasswordvalidate").empty();
               userpasswordflag= true;
            }
        }
        return userpasswordflag;
    });

    $("#sign").click(function () {
        if ($("#username").val() == "") {
            $("#usernamevalidate").html("(*) Username Required..!!");
            usernameflag = false;
        }
        else {
            $("#usernamevalidate").empty();
            if (!$("#username").val().match($EmailIdRegEx)) {
                $("#usernamevalidate").html("Invalid Username..!!");
                usernameflag = false;
            }
            else {
                $("#usernamevalidate").empty();
                usernameflag = true;
            }
        }
        if ($("#userpassword").val() == "") {
            $("#userpasswordvalidate").html("(*) Password Required..!!");
           userpasswordflag= false;
        }
        else {
            if (!$("#userpassword").val().match($PasswordRegEx)) {
               userpasswordflag= false;
                $("#userpasswordvalidate").html('-- Invalid Password..!!<br/><ul><li> Minimum 8 Maximum 12 Character Required.</li><li> Atleast One Uppercase Required.</li><li> Atleast One Lowercase Required.</li><li> Atleast One Numeric Required.</li><li> NO SPECIAL CHARACTERS ALLOWED.</li></ul>');
            }
            else {
                $("#userpasswordvalidate").empty();
               userpasswordflag= true;
            }
        }
        if (usernameflag == true &&userpasswordflag== true) {
           login();
        }
        else {
            alert("Invalid Inputs..!!")
        }
    });
});
function register(){ 
    var name = $('#name').val();
     var lname = $('#lname').val(); 
    var contactno = $('#contactno').val(); 
    var emailid = $('#emailid').val(); 
    var password = $('#password').val();
    

    $.post("adduser.php",{

        name:name,
        lname: lname,
       contactno: contactno,
        emailid: emailid,
       password: password
      

     },
     function(data, status){

        alert('Your Have Successfully Registered!');
         document.location="welcome.php";
       
    });

}

function login(){
    var username = $('#username').val(); 
    var userpassword = $('#userpassword').val(); 
    
    $.post("signin.php",{

       username: username,
        userpassword: userpassword
        
     
     },
     function(data, status){

        if (data=='Success') {
            document.location="welcome.php";
        }else{
            alert(data);
        }
       

    });

}
