<!--------php ............................................-->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/image.css">
<title>ನಿರ್ವಾಹಕ</title>
<style>

ul1 {
  display: inline;
  margin: 0;
  padding: 0;
}
ul1 li2 {display: inline-block;}
ul1 li2:hover {background: orange;}
ul1 li2:hover ul1 {display: block;}
ul1 li2 ul1 {
  position: absolute;
  width: 500px;
  display: none;
background:grey;
}
ul1 li2 ul1 li2 { 
  background:orange; 
  display: block; 
}
ul1 li2 ul1 li2 a {display:block !important;} 
ul1 li2 ul1 li2:hover {background:orange;}
</style>
<style>
a:hover {
    background-color: orange;
}
li {
    width: 300px;
}
.one {
    float: right;
    text-align: right;
}
.two {
    float: right;
    text-align: right;
}
header {
     width: 100%;
    display: inline;
    padding: 1em;
    color: white;
    background-color:  	green;
    clear: left;
    text-align: center;
}
.footer {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 0rem;
  background-color: #efefef;
  text-align: center;
}
h1{
	font-size: 40px;
 padding: -1em;
	 background-color: grey;
	
}
h2{
	font-size: 10px;
}
ul {
    width: 100%;
    
   text-align: center;
    background-color: red;
    list-style-type: none;
    float: center;
    padding: 0em;
    margin:0;
    font-size:25px;
    word-spacing: 30px;
    

}

li {	
     margin:19;
     display: inline;
     
     
    
}

}

</style>
<body>

<table style="text-align: left; width: 1370px; height: 90px;background-color: yellow;" border="0"
cellpadding="1" cellspacing="1">
<tbody>
<tr>
<td style="vertical-align: top;"><img
style="width: 135px; height: 143px;" alt=""
src="images1/cmrit.jpg"><br>
</td>
<td style="vertical-align: top;background-color: yellow;">
<div style="text-align: center ;"><span
style="font-weight: bold; font-style: italic; font-size:80px; align:center;margin-left: -12%;">ಕನ್ನಡ&nbsp;&nbsp;
ಸಂಸ್ಕೃತಿ&nbsp;&nbsp;ಸಂಘ</span><br>
</div>
</td>
<td style="vertical-align: top;"><img
style="width: 135px; height: 143px;" alt=""
src="images1/samskruthi.png"><br>
</td>
</tr>
</tbody>
</table>

<body bgcolor="#52EFCB">  <!--blck clr--#343236-->

<ul>
<li><a href="index1.php" style="text-decoration:none;">ಹೋಮ್</a></li>
<li><a href="about.php" style="text-decoration:none;">ಬಗ್ಗೆ</a></li>
<li><a href="gallery.php" style="text-decoration:none;">ಗ್ಯಾಲರಿ</a></li>

<li>
  <ul1>
    <li2>
      <a href="upcoming.php" style="text-decoration:none;">ಕಾರ್ಯಕ್ರಮಗಳು </a>
      <ul1>
        <?php
	$con=mysqli_connect('localhost','root','vinay','kannada');
	$result = mysqli_query($con,"SELECT * FROM upcoming");// for category table
	while($row = mysqli_fetch_array($result))	
	{
		echo $row['name']."-->".$row['date'];
		echo nl2br("\r\n");
	}
	$count = 0;
?>
      </ul2>
    </li2>
  </ul1></li>
<li><a href="admin.php" style="text-decoration:none;">ನಿರ್ವಾಹಕ</a></li>
&nbsp;&nbsp;&nbsp;
</ul>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
     
  
   <body>
	<br>
	<br>
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#FF0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
	<!--footer> <h2>Copyright © VY TEAM</h2></footer-->	
      </div>
     </div>
 
  <div class="footer">COPYRIGHTS Ⓒ 2016 VY TEAM CSE DEPT</div>
</body>
</html> 


