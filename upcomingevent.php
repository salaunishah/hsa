<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="js/upcomingevent.js" type="text/javascript"></script>
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
                    <center><h3><i class="fa fa-trophy"></i> &nbsp;Add Upcoming Event</h3><hr /></center>
                     <div class="form-group">
                      <center><span><i class="fa fa-picture-o"></i> Upload File:</span></center><br />
                      <center><input type='file' id="file" /></center><br />
                      <center><small id="filevalidate"></small></center>
                     </div>
                     <div class="form-group">
                      <span>Event Title:</span><br />
                      <div class="input-group">
                         <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                         <input id="TxtEventTitle" type="text" placeholder="Enter Event Title Here.." class="form-control" maxlength="100" />
                      </div>
                      <small id="TxtEventTitleValidate"></small>
                     </div>
                     <div class="form-group">
                      <span>Event Date:</span><br />
                      <div class="input-group">
                         <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                         <input id="TxtEventDate" type="text" placeholder="Enter Event Date Here.." class="form-control" maxlength="15" readonly="true" />
                      </div>
                      <small id="TxtEventDateValidate"></small>
                     </div>
                     <div class="form-group">
                      <span>Event Time:</span><br />
                      <div class="input-group">
                         <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                         <select class="form-control" style="width:60px;margin:0px;padding:0px;" id="DDL_Hours">
                          <option value="-1">HH</option>
                          <option value="1">01</option>
                          <option value="2">02</option>
                          <option value="3">03</option>
                          <option value="4">04</option>
                          <option value="5">05</option>
                          <option value="6">06</option>
                          <option value="7">07</option>
                          <option value="8">08</option>
                          <option value="9">09</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                         </select>
                         &nbsp;&nbsp;
                         <select class="form-control" style="width:60px;margin:0px;padding:0px;" id="DDL_Minutes">
                          <option value="-1">MM</option>
                          <option value="1">01</option>
                          <option value="2">02</option>
                          <option value="3">03</option>
                          <option value="4">04</option>
                          <option value="5">05</option>
                          <option value="6">06</option>
                          <option value="7">07</option>
                          <option value="8">08</option>
                          <option value="9">09</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                          <option value="31">31</option>
                          <option value="32">32</option>
                          <option value="33">33</option>
                          <option value="34">34</option>
                          <option value="35">35</option>
                          <option value="36">36</option>
                          <option value="37">37</option>
                          <option value="38">38</option>
                          <option value="39">39</option>
                          <option value="40">40</option>
                          <option value="41">41</option>
                          <option value="42">42</option>
                          <option value="43">43</option>
                          <option value="44">44</option>
                          <option value="45">45</option>
                          <option value="46">46</option>
                          <option value="47">47</option>
                          <option value="48">48</option>
                          <option value="49">49</option>
                          <option value="50">50</option>
                          <option value="51">51</option>
                          <option value="52">52</option>
                          <option value="53">53</option>
                          <option value="54">54</option>
                          <option value="55">55</option>
                          <option value="56">56</option>
                          <option value="57">57</option>
                          <option value="58">58</option>
                          <option value="59">59</option>
                          <option value="60">60</option>
                         </select>
                         &nbsp;&nbsp;
                         <select id = "DDL_AMPM" class="form-control" style="width:60px;margin:0px;padding:0px;">
                          <option value="AM">AM</option>
                          <option value="PM">PM</option>
                         </select>
                      </div>
                      <small id="TxtEventTimeValidate"></small>
                     </div>
                     <div class="form-group">
                      <span>Event Venue:</span><br />
                      <div class="input-group">
                         <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                         <textarea id="TxtEventVenue" type="text" placeholder="Enter Event Venue Here.." class="form-control" maxlength="200"></textarea>
                      </div>
                      <small id="TxtEventVenueValidate"></small>
                     </div>
                     
                     <div class="form-group">
                      <a id="BtnAddUpcomingEvent" class="btn btn-info"><i class="fa fa-trophy"></i> Add New Upcoming Event</a>
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
