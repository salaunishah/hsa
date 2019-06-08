<?php
$result="";

if(isset($_POST['submit'])){
  require 'phpmailer/PHPMailerAutoload.php';

  $mail = new PHPMailer;
  $mail->Host='smtp.gmail.com';
  $mail->Port=587;
  $mail->SMTPAuth=true;
  $mail->SMTPSecure='tls';
  $mail->isSMTP();
  $mail->Username='salauni13angel@gmail.com';
  $mail->Password='chandresh14';
  $mail->setFrom($_POST['emailid'],$_POST['name']);
  $mail->addAddress('slnshah80@gmail.com','salauni');/*'slnshah80@gamil.com for myself in contact form'*/
  $mail->addReplyTo($_POST['emailid'],$_POST['name']);
  $mail->isHTML(true);
  $mail->subject='Form Submission:'.$_POST['subject'];
  $mail->Body='<h1 align=center>name:'.$_POST['name'].'<br>emailid:'.$_POST['emailid'].'<br>message:'.$_POST['message'].'</h1>';
  if (!$mail->send()) {
    $result="something went wrong";

  }
  else{
    $result="Will get back to You soon";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>HSA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script src="js/message.js" type="text/javascript"></script>
  <style type="text/css">
    #contactus{
  background-image:url('image/image6.jpg');
 }
    
  </style>
</head>
<body>
	<div>
		<!-- Fixed navbar -->
		<nav class="navbar navbar-default">
			<div class="nav_top">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					    aria-controls="navbar">
						
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="logo">
						
							<a class="navbar-brand" href="index.html">
								<img src="image/logo.png" alt="Go Halves" style="margin-bottom:10px;" class="size" />
							</a>
						
					</div>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<div class="nav_right_top">
						<ul class="nav navbar-nav">
                            <li>
								<a  href="#home">Home</a>
							</li>
                            <li>
								<a  href="#aboutus">About Us</a>
							</li>
                   <li class="dropdown">
                <a href="#registration" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notice
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="#news">News</a>
                  </li>
                  <li>
                    <a href="#results">Results</a>
                  </li>
                  <li>
                    <a href="#upcomingevents">Upcoming Events</a>
                  </li>
                  <li>
                    <a href="#pastevents">Past Events</a>
                  </li>
                </ul>
              </li>

							<li>
								<a  href="#gallery">Gallery</a>
							</li>
							<li>
								<a  href="#contributors">Contributors</a>
							</li>
							<li>
								<a  href="#contact">Contact Us</a>
							</li>
                          
							 <li class="dropdown">
								<a href="#registration" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registration
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="LoginPage/index.html">Swimmer</a>
									</li>
									<li>
										<a href="LoginPage/admin.html">Administrator</a>
									</li>
									
								</ul>
							</li>


						</ul>
					</div>
				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>
	</div>
    <div id="home">
<div class="bg bounceIn" style="animation-duration: 3s;"><img src="image/final.jpg" style="height: 700px;min-width: 100%; margin: 0px;" class="col-xs-12"></div>
<div id="title">The Governing Body For Aquatic Sports in Haryana</div>
<div class="row bounceInLeft" style="animation-duration: 5s;">
  <div id="text" class="col-lg-offset-2 col-lg-8 col-lg-offset-R-2 col-md-offset-2  col-md-8 col-sm-12 col-xs-12" style="padding-top: 10px;">
<p>
The Haryana Swimming Association (HSA) is the central governing body for promotion and administration of swimming sport in Haryana. The HSA is affiliated to SFI, the Indian governing body for the sport and Haryana Olympic Association. The HSA has been holding State Senior Aquatic Championships since 1966. The present association was registered in 2006 under the relevant act.
</p>
</div>
</div>
</div>
</div>
<div id="title">The HSA Annually conducts the following events</div>
<div class="row bounceInRight" style="animation-duration: 5s;">
  <div id="text" class="col-lg-offset-2 col-lg-8 col-lg-offset-R-2 col-md-offset-2  col-md-8 col-sm-12 col-xs-12" style="padding-top: 10px;">
    <ul>
    <li>State Trials for Sub Junior & Junior Team selections for National Aquatic Championships.</li>
<li>Sub Junior State Aquatic Championships</li>
<li>Junior State Aquatic Championships</li>
<li>Senior State Aquatic Championships</li>
</ul>
  </div>
</div>
</div>


<div id="aboutus">
   <div class="row " style="animation-duration: 5s;">
    <div id ="title"><span style="color:red;">A</span>bout <span style="color:red;">U</span>s</div>
    </div>
  </div>
    <div class="row bounceIn" style="animation-duration: 5s;">
  <div id="text" class="col-lg-offset-2 col-lg-8 col-lg-offset-R-2 col-md-offset-2  col-md-8 col-sm-12 col-xs-12" style="padding-top: 10px;">
    <p>
        Haryana Swimming Association (HSA), a non-profit organization is the governing body and driving force behind swimming in Haryana. The key objective of HSA is to promote swimming in Haryana and provide a platform to budding swimmers. HSA is affiliated to Swimming Federation of India. HSA hosts year-round competitive events at School, District and State levels.
The objectives of HSA are:
</p>
<ul>
<li>To encourage, control and promote the game of swimming in the Haryana State;</li>
<li>To lay down policy for guidance of bodies affiliated to it and if necessary, directly manage the game in the District where there is no organised body;</li>
<li>To collect funds to enable to discharge it obligations efficienlty;</li>
<li>To create public awareness about the benefits of sports and physical fitness.</li>
</ul>
  </div>
</div>
<div id="notice">
 <div id ="title"><span style="color:red;">N</span>otice</div>
    </div>
    <div class="row bounceInLeft" style="margin-bottom: 30px;animation-duration: 8s;">
  <div id="text" class="col-lg-offset-1 col-lg-5  col-md-offset-1 col-md-5 col-sm-12 col-xs-12 notice" style="padding-top: 10px;padding-left: 20px;padding-bottom:  20px;margin-right: 30px; box-shadow: 2px 2px 2px blue;">
    <div id ="title"><span style="color:red;">N</span>ews</div>
    <?php
    include("db_conn.php");
        $query = "SELECT * FROM news";

    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

    // if query results contains rows then fetch those rows 
    if(mysqli_num_rows($result) > 0)
    {
        $number = 1;
        
        while($row = mysqli_fetch_assoc($result))
        {
           
            $path = $row['image'];
 ?>
    <div class="column1">
        <img src="<?php echo $row['image'];?>" style="height:100px;width:100%;"/>
   </div>
      <?php
}    
}
?>

    </div>
      <div id="text" class="bounceInRight col-lg-offset-R-1 col-lg-5  col-md-offset-R-1 col-md-5 col-sm-12 col-xs-12 notice" style="padding-top: 10px;padding-left: 60px;padding-bottom:  20px; box-shadow: 2px 2px 2px blue;animation-duration: 8s;">
    <div id ="title"><span style="color:red;">R</span>esults</div>
         <?php
  include("db_conn.php");
  $query=mysqli_query($con,"SELECT * FROM result WHERE status='Y'");
  if(mysqli_num_rows($query)>0)
{
        
          
   while ($row = mysqli_fetch_array($query))
   {
    ?>
    <ul style="list-style-type: none;">
        <li style="list-style-type: circle;"><?php echo $row["title"];?></li>
        <li><?php echo $row["res"];?></li>
        
    </ul>
      <?php
}    
}
?>
 
    </div>
   </div>
    <div class="row" style="margin-bottom: 30px;">
  <div id="text" class=" bounceInLeft col-lg-offset-1 col-lg-5  col-md-offset-1 col-md-5 col-sm-12 col-xs-12 notice" style="padding-top: 10px;padding-left: 20px;padding-bottom:20px;margin-right: 30px; box-shadow: 2px 2px 2px blue; animation-duration: 8s;">
    <div id ="title"><span style="color:red;">U</span>pcoming Events</div>
      <?php
  include("db_conn.php");
  $query=mysqli_query($con,"SELECT * FROM upcomingevent WHERE status='Y'");
  if(mysqli_num_rows($query)>0)
{
        
          
   while ($row = mysqli_fetch_array($query))
   {
    ?>
    <ul style="list-style-type: none;">
        <li style="list-style-type: circle;"><?php echo $row["uptitle"];?></li>
       
        <li>Date: <?php echo $row["date"];?></li>
        <li>Time: <?php echo $row["time"];?></li>
        <li>Venue: <?php echo $row["venue"];?></li>
    </ul>
      <?php
}    
}
?>
    </div>
   
      <div id="text" class="col-lg-offset-R-1 col-lg-5  col-md-offset-R-1 col-md-5 col-sm-12 col-xs-12 notice bounceInRight" style="padding-top: 10px;padding-left: 60px;padding-bottom:  20px;box-shadow: 2px 2px 2px blue;margin-bottom: 30px; animation-duration: 8s;">
    <div id ="title"><span style="color:red;">P</span>ast Events</div>
    <?php
     include("db_conn.php");
  $query=mysqli_query($con,"SELECT * FROM upcomingevent WHERE status='N'");
  if(mysqli_num_rows($query)>0)
{
        
          
   while ($row = mysqli_fetch_array($query))
   {
    ?>
    <ul style="list-style-type: none;">
        <li style="list-style-type: circle;"><?php echo $row["uptitle"];?></li>
        
        <li>Date: <?php echo $row["date"];?></li>
        <li>Time: <?php echo $row["time"];?></li>
        <li>Venue: <?php echo $row["venue"];?></li>
    </ul>
      <?php
}    
}
?>
    </div>
   </div>
</div>
</div>
<div id="gallery" class="bounceInRight" style="animation-duration: 10s;">
 <div id ="title"><span style="color:red;">G</span>allery</div>
    </div>
     <?php
    include("db_conn.php");
        $query = "SELECT * FROM gallery";

    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

    // if query results contains rows then fetch those rows 
    if(mysqli_num_rows($result) > 0)
    {
        $number = 1;
        
        while($row = mysqli_fetch_assoc($result))
        {
           
            $path = $row['image'];
 ?>
    <div class="row bounceInRight" style="animation-duration: 10s;">
  <div class="column">
    <img id="myImg" src="<?php echo $row["image"];?>" alt="<?php echo $row["title"];?>" style="width: 80%; height: 150px;">
  </div>
   <!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01" src="<?php echo $row["image"];?>" >
  <div id="caption" <?php echo $row["title"];?>></div>
</div>

      <?php
}    
}
?>

</div>
<div id="contributors" class="bounceInLeft" style="animation-duration: 10s;">
 <div id ="title"><span style="color:red;">C</span>ontributors</div>
  <?php
    include("db_conn.php");
        $query = "SELECT * FROM contributors";

    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

    // if query results contains rows then fetch those rows 
    if(mysqli_num_rows($result) > 0)
    {
        $number = 1;
        
        while($row = mysqli_fetch_assoc($result))
        {
           
            $path = $row['image'];
 ?>
    <div class="row bounceInLeft" style="animation-duration: 10s;">
  <div class="card">
    <img src="<?php echo $row["image"];?>" class="image1" style="width:85%; height: 150px;">
  <div class="middle">
    <div class="cardtext"><?php echo $row["name"];?><br/><?php echo $row["designation"];?></div>
  </div>
  </div>
  </div>
    </div>
    <?php
}    
}
?>

</div>
<div id="contactus" class="bounceIn" style="animation-duration:15s;height: 500px;padding-top: 50px;">
  <div id ="title"><span style="color:red;">C</span>ontact <span style="color:red;">U</span>s </div>
  <div class="row"> 
    <div class="form-control col-lg-offset-2 col-lg-6 col-md-offset-2 col-md-6 col-sm-12 col-xs-12" >
<form method="post">
  <div class="form-group " id="d11">
    <div >
         <input id="name" type="text" name="name" placeholder="Enter Your Name" id="d11" style="border-style: none;">
      </div>
  <small id="namevalidate" style="color: blue; font-weight: bold;"></small>
</div>
<br/>
 <div class="form-group" id="d11">
    <div>
    <input id="subject" type="text" name="subject" placeholder="Enter Subject" id="d11" style="border-style: none;">
  </div>
  <small id="subjectvalidate" style="color: blue;font-weight: bold;"></small>
</div>
<br/>
  <div class="form-group" id="d11">
    <div>
    <input id="emailid" type="email" name="emailid" placeholder="Email Id" id="d11"style="border-style: none;">
  </div>
  <small id="emailidvalidate" style="color: blue;font-weight: bold;"></small>
</div>
<br/>
  <div class="form-group" id="d11">
    <div>
      <input type="text" placeholder="Your Message...." name="message" maxlength="500"  id="message" style="border-style: none;">
    </div>
<small id="messagevalidate" style="color: blue;font-weight: bold;"></small>
  </div>
  <br/>
  
    <button type="submit" class="btn btn-primary" name="submit">Submit </button> 
 
</form>
</div>
 <div class="col-lg-4  col-md-4 col-sm-12 col-xs-12" style="margin-left:30px;margin-top: 40px; ">
 <div id="title">   Haryana Swimming Association</div>
 <div id="text" style="color: black;">
    <ul style="list-style-type: none;">
<li>1002, Sector- 6, Bahadurgarh, 
Haryana</li>

<li>Phone: +91 - 9254 110 800</li>

<li>Email: anilkhatri008@yahoo.com</li>
</ul>
</div>
</div>
</div>
</div>

</body>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

</html>