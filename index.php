<?php
include_once "/classes/Shout.php";
$shout = new Shout();
?>
<!DOCTYPE html>
<html>
    <head>
	    <title>basic shout box</title>
	    <link rel= "stylesheet" href = "style.css"/>
	</head>
	<body>
	    <div class="wrapper clr">
		<header class= "headsection clr">
		    <h2>basic shoutbox with PHP OOP</h2>
		</header>
		    <section class ="content clr">
			    <div class ="box">
				    <ul>
                        
                        <?php
				    	    $getData = $shout->getAllData();
                            if ($getData) {
                                while ($data = $getData->fetch_assoc()) { ?>
                                     <li><span><?php echo $data['time']; ?></span> - <b><?php echo $data['name']; ?></b> <?php echo $data['text']; ?></li>
                        <?php } } ?>


					
					    
					</ul>
				</div>

<?php 

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    	$shoutdata = $shout->insertData($_POST);
    }

?>

				<div class= "shoutform clr">
				<form action="" method="post">
				    <table>
					    <tr>
						    <td>name</td>
							<td>:</td>
							<td><input type="text" name="name" required placeholder="please enter your name:" /></td>
						</tr>
					</table>
					<table>
					    <tr>
						    <td>body</td>
							<td>:</td>
							<td><input type="text" name="text" required placeholder="please enter your text:" /></td>
						</tr>
					</table>
					<table>
					    <tr>
						    <td></td>
							<td></td>
							<td><input type="submit" values="shout it" /></td>
						</tr>
					</table>
					</form>
				</div>
				<footer class="footsection clr">
				<h2>&copy; Copyright training with live project</h2>
				</footer>
			</section>
		</div>
	</body>
</html>