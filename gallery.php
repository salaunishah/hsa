<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="js/upcomingevent.js" type="text/javascript"></script>
   <script src="js/news.js" type="text/javascript"></script>
 <script src="js/gallery.js" type="text/javascript"></script>
 
   <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet" type="text/css" />
      
  <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js" type="text/javascript"></script>
     <script type="text/javascript">
          $(document).ready(function () {

            $("#TxtEventDate").datepicker({
              showWeek: true,
              yearSuffix: "(DOB)",
              showAnim: "slide"
            });
          });
          
      </script>
           
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}
 .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
 .dropdown-btn:hover {
  color: #f1f1f1;
}


.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 15px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
  .active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;

}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   <button class="dropdown-btn">ADMIN 
    <i class="fa fa-caret-down"></i>
  </button>
  <a href="addneweventgalleryrecord.php">ADD IMAGE</a>
  <a href="editeventgalleryrecord.php">EDIT IMAGE</a>
  <a href="addnewupcomingevent.php">UPCOMING EVENT</a>
  <a href="editupcomingevent.php">EDIT UPCOMING EVENT</a>
   <a href="editupcomingevent.php">PAST EVENT</a>
  <a href="editupcomingevent.php">NEWS</a>
   <a href="editupcomingevent.php">RESULTS</a>

</div>


<div id="main">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top ">
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link"><span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; </span> </a>
      
    </li>

  ...
    <li class="nav-item">
      <a class="nav-link" href="#">HSA Admin</a>
    </li>

  </ul>
   <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
</nav>
   <div class="container" style="min-height:600px;">
               <div class="row">
                  <div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-1 col-lg-6 col-md-6 col-sm-10">
                     <center><h3><i class="fa fa-picture-o"></i> &nbsp;Add News</h3><hr /></center>
                     <div class="form-group">
                      <center><span style="color: green;"><i class="fa fa-picture-o"></i> Upload  Image:</span></center><br />
                      <center><img id="ImgProductDisplayPic" src="images/DefaultProduct.jpg" alt="image" height="150px" width="220px"/></center><br /><br />
                      <center><input type='file' id="FU_ProductImage" /></center><br />
                      <center><small id="ProductImageValidate"></small></center>
                     </div>

                     <div class="form-group">
                      <span style="color: green;"> Image Title:</span><br />
                      <div class="input-group">
                         <span class="input-group-addon"><i class="fa fa-comments"></i></span>
                         <input type="text" id="TxtImageTitle"  placeholder="Enter Image Title Here.." class="form-control" maxlength="200"></textarea>
                      </div>
                      <small id="TxtImageTitleValidate"></small>
                     </div>
                     <div class="form-group">
                      <a id="BtnAddGallery" class="btn btn-warning"><i class="fa fa-picture-o"></i> Add Image</a>
                     </div>
                  </div>
               </div>
            </div>
                   </div>

                  
         
  </div>
<br>
        

<script>
  var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 
