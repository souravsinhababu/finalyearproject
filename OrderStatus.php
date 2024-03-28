<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: School Education
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>FootBall KIT</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.slidepanel.setup.js"></script>
<!-- Homepage Only Scripts -->
 
<script type="text/javascript">
$(function() {
    $('#featured_slide').after('<div id="fsn"><ul id="fs_pagination">').cycle({
        timeout: 5000,
        fx: 'fade',
        pager: '#fs_pagination',
        pause: 1,
        pauseOnPagerHover: 0
    });
});
</script>
<!-- End Homepage Only Scripts -->
</head>
<body>
<div class="wrapper col0">
  <div id="topbar">
    <div id="slidepanel" style="background-color:#FF8000;color:#000066;">
      
    </div>
    <div id="loginpanel">
      <ul>
        <li class="left">Logout Here &raquo;</li>
        <li class="right" id="toggle"><a id="slideit" href="index.html">&nbsp;Sign Out</a><a id="closeit" style="display: none;" href="#slidepanel">Close Panel</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="index.html">FootBall KIT  </a></h1>
      <p>FootBall Based Kit and Designing</p>
    </div>
    <div id="topnav">
      <ul>
       <li class="active"><a href="User.php">Home</a></li>
        <li><a href="ViewProduct.php">Product</a></li>
        <li><a href="ViewTrainer.php">Trainer</a></li>
        <li><a href="Order.php">Order</a></li>
        <li><a href="OrderStatus.php">Status</a></li>
		<li><a href="ViewVideo.php">Video</a></li>
		<li class="last"><a href="ViewTournament.php">Tournament</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="featured_slide">
    <div class="featured_box"><a href="#"><img src="images/1.jpg" alt="" /></a>
      <div class="floater">
        <h2>1. Foot Ball</h2>
        <p>Football is a family of team sports that involve, to varying degrees, kicking a ball to score a goal. Unqualified, the word football is understood to refer to whichever form of football is the most popular in the regional context in which the word appears.</p>
        <p class="readmore"><a href="https://en.wikipedia.org/wiki/Football" target="_blank">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images/2.jpg" alt="" /></a>
      <div class="floater">
        <h2>2. Ice hockey</h2>
        <p>Ice hockey is played between two teams of skaters on a large flat area of ice, using a three-inch-diameter (76.2 mm) vulcanized rubber disc called a puck. This puck is often frozen before high-level games to decrease the amount of bouncing and friction on the ice. The game is played all over North America, Europe and to varying extents in many other countries around the world. Ice hockey is the national sport of Latvia and the national winter sport of Canada.</p>
        <p class="readmore"><a href="https://en.wikipedia.org/wiki/Football" target="_blank">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images/3.jpg" alt="" /></a>
      <div class="floater">
        <h2>3. Roller hockey</h2>
        <p>Inline hockey is a variation of roller hockey very similar to ice hockey, from which it is derived. Inline hockey is played by two teams, consisting of four skaters and one goalie, on a dry rink divided into two halves by a center line, with one net at each end of the rink. The game is played in three 15-minute periods with a variation of the ice hockey off-side rule.</p>
        <p class="readmore"><a href="https://en.wikipedia.org/wiki/Football" target="_blank">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images/4.jpg" alt="" /></a>
      <div class="floater">
        <h2>4. Equipment of Hockey</h2>
        <p>This usually includes a helmet, shoulder pads/chest protector, elbow pads, mouth guard, protective gloves, heavily padded shorts, a 'jock' athletic protector, shin pads and a neck guard. Goaltenders wear masks and much bulkier, specialized equipment designed to protect them from many direct hits from the puck. In field hockey, there's a fair amount of equipment you need to get beforehand such as guards to ensure your safety. </p>
        <p class="readmore"><a href="https://www.myactivesg.com/sports/hockey/how-to-play/hockey-equipment/what-equipment-is-needed-to-play-hockey" target="_blank">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images/5.jpg" alt="" /></a>
      <div class="floater">
        <h2>5. Hockey Tournaments</h2>
        <p>Olympic Games - held every four years. <br />
World Hockey Cup - held every four years, in between the Olympics. <br />
Champions Trophy - currently held every year, for the top 6 ranked nations. <br />
Hockey Champions Challenge - held every year for teams ranked 9th-16th in the world.</p>
        <p class="readmore"><a href="https://en.wikipedia.org/wiki/International_field_hockey_tournaments" target="_blank">Continue Reading &raquo;</a></p>
      </div>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">
      <div class="column2">
        <h2 style="color:#0000CC">Check Order Status !</h2>
        
		
		<center>
		<form id="form1" name="form1" method="post" action="" >
		  <table style="width:50%; color:#660099; font-family:'Times New Roman', Times, serif; font-size:16px; font-weight:bold;" >
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2">
			  
			  
			  <table width="480" border="1" align="center" style="background-color:#99FFFF;" cellpadding="5">
    <tr>
		<td width="69" style="background-color:#00CCCC"><div align="center"><strong>OrderID</strong></div></td>
		<td width="69" style="background-color:#00CCCC"><div align="center"><strong>OrderDate</strong></div></td>
		<td width="69" style="background-color:#00CCCC"><div align="center"><strong>UserName</strong></div></td>
		<td width="69" style="background-color:#00CCCC"><div align="center"><strong>KitID</strong></div></td>
		<td width="69" style="background-color:#00CCCC"><div align="center"><strong>Type</strong></div></td>
		<td width="69" style="background-color:#00CCCC"><div align="center"><strong>Name</strong></div></td>
		<td width="76" style="background-color:#00CCCC"><div align="center"><strong>Price</strong></div></td>
		<td width="76" style="background-color:#00CCCC"><div align="center"><strong>UserQuantity</strong></div></td>
		<td width="76" style="background-color:#00CCCC"><div align="center"><strong>TotalPrice</strong></div></td>
		<td width="69" style="background-color:#00CCCC"><div align="center"><strong>Status</strong></div></td>
    </tr>
	<?php 
include("config.php");
session_start();
	$un=$_SESSION['uname'];
	$result =mysql_query("Select * from Order1 where UserName='$un'");
	while ($row = mysql_fetch_array($result))
          {
    ?>
    <tr>
	  <td><?php echo $row['OrderID']; ?></td>
	  <td><?php echo $row['Date']; ?></td>
	  <td><?php echo $row['UserName']; ?></td>
	  <td><?php echo $row['KitID']; ?></td>
	  <td><?php echo $row['Type'];?></td>
	  <td><?php echo $row['Name'];?></td>
     
	  <td><?php echo $row['Price']; ?></td>
	  <td><?php echo $row['Quantity']; ?></td>
	  <td><?php echo $row['TotalPrice']; ?></td>
	  <td><?php echo $row['Status']; ?></td>
    </tr>
  
  <?php } ?>
</table>
			  
			  
			  </td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
		
		</form>
		
		</center>
		
		
		
		
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2022 - All Rights Reserved - <a href="#">FootBall KIT</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.Hockeykit.com/" title="Aptone Website Templates">Aptone Templates</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>