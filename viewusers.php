<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Home Page</title>
<link rel="stylesheet" href="css.css">
<script src="js.js"></script> 
        
        <div id="main_header">
            <marquee>  <h1>CREDIT MANAGEMENT SYSTEM  </h1></marquee>
    
        </div>
         <nav class="navigation_bar">
             <div class="menu">  
			 <a href="index.html">Home </a>&nbsp;&nbsp;|&nbsp;&nbsp;
             <a href="about.html">About</a>&nbsp;&nbsp;|&nbsp;&nbsp;
             <a href="contact.html">Contact</a>
                 </div>
        </nav>
            </head>
    
    <body >
        
        <div class="body_container">
              <aside>
        <h1>Side Bar</h1>    
    </aside>
	<table id="outputs">
	<tr>
	
	<th>Name</th>
	
	</tr>
        <?php
include ('connect_database.php');

$query = mysqli_query($con,"SELECT * FROM users");
while($rows = mysqli_fetch_array($query))
{   //$Id=$rows['ID'];
	$Name=$rows['Name'];
	/***
	$Email=$rows['Email'];
	$Contact =$rows['Contact no.'];
	$Credit=$rows['Current credit'];
	***/



echo "<tr><td>"."$Name" . "</tr></td>" ;

}


?>
	</table>
         
        </div>
      
    </body>
    
    
         <footer>
           <div class="footer_part">  &copy; Credit Management system &nbsp;<span class="separator">|</span> Design by  <a  href="https://www.linkedin.com/in/jiban-barman-bb-153a161">Jiban Barman</a>
             </div>
         </footer>     
         
</html>
