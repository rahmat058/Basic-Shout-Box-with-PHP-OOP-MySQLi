<?php
   include_once "/classes/Shout.php";
   $shout = new Shout();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Basic Shout Box</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="wrapper clr">

	   <header class="headsection clr">
	   	  <h2>Basic Shout Box with PHP OOP & MySQLi</h2>
	   </header>

		<section class="content clr">
			<div class="box">
				<ul>
				<?php
                    $getData = $shout-> getAllData();
                    if($getData){
                        while($data = $getData->fetch_assoc()) {
                ?>        
                           <li><span><?php echo $data['time']; ?></span> - <b><?php echo $data['name']; ?></b> <?php echo $data['body']; ?></li>
                <?php  }  }	  ?>
					
				</ul>
			</div>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
       $shoutData = $shout->insertData($_POST);
    }
?>			
			<div class="shoutform clr">
				<form action="" method="post">
					<table>
						<tr>
							<td>Name</td>
							<td>:</td>
							<td><input type="text" name="name" required placeholder="Please Enter your name" /></td>
						</tr>
						<tr>
							<td>Body</td>
							<td>:</td>
							<td><input type="text" name="body" required placeholder="Please Enter your text" /></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><input type="submit" value="Shout It" /></td>
						</tr>
					</table>
				</form>
			</div>
		</section>
        
        <footer class="footersection clr">
        	<h2>&copy; www.raHMat project.com</h2>
        </footer>

	</div>
</body>
</html>