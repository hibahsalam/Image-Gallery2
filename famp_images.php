<!DOCTYPE html>
<html>
<head>
	<title>Image Gallery</title>
  <link rel="icon" type="img/png" href="img.png"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/fe786c7701.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url('https://cdn.pixabay.com/photo/2016/11/10/14/16/floral-1814372__480.jpg');">
	<div class="container">
		<div class="jumbotron mt-2" id="div11">
			<table>
				<td><img src="./smit_logo.png" alt="" id = "smit_logo"></td>
				<td><h1 id="h11"><a href="index.php"> <span style="color:#C71585;">IMAGE GALLERY</span> </a></h1></td>
			</table>
		</div>
		<div id="bdiv">
			<button type="button" class="btn btn-primary" id="movb11" onclick = "window.location.href='./movie_images.php';"><b>Movies</button>
			<button type="button" class="btn btn-warning" id="fampb11" onclick = "window.location.href='./famp_images.php';"><b>Favourite Personality</b></button>
			<button type="button" class="btn btn-danger" id="carb11" onclick = "window.location.href='./car_images.php';">Cars</b></button>
			<br>
		</div>

		<div id="calbmi">
			<center><b>BMI:</b></center>
			<form name="bmi">
				<center>
					<table bgcolor="#ffffff" border="2"  bordercolor="#2d323e" rules="none" cellspacing="0" cellpadding="3">
						<tr style="color:#2d323e;">
							<td>
								<b><i>Weight(kg): </i></b>
							</td>
							<td >
								<div align="right">
									<input type=TEXT size="15" name=weight  value="Enter your weight" onClick=value="">
								</div>
							</td>
						</tr>
						<tr style="color:#2d323e;">
							<td>
								<b><i>Height(cm): </i></b>
							</td>
							<td >
								<div align="right">
									<input type=TEXT size="15" name=height  value="Enter your height"  onClick=value="">
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<input id="calc" type="button" value="CALCULATE" style="background-color:#2c3e50; color:#ecf0f1;" onClick="computeform(this.form)">
							</td>
						</tr>
						<!--td><input type="reset" value = "Reset" onClick="ClearForm(this.form)"-->
						<tr>
							<td>
								<div align=center style="color:#2d323e;">
									<b> <i>BMI: </i> </b>
								</div>
							</td>
							<td>
								<div align=center style="color:#2d323e;">
									<b> <i>Comment: </i> </b>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<input type = text name=bmi size=8>
							</td>
							<td>
								<input type = text name=my_comment size=45>
							</td>
						</tr>
					</table>
					</form>
					<HR>
					<B style="color:#C71585;align:center;"><u>DISCLAIMER :</u> This form is based on the calculation of
					<A HREF="http://phaster.com/unpretentious/bmi.html"><I>"Body Mass Index"</I></A>
					and is only meant to be a demonstration of how Javascript(tm) could be used
					on a Web Page. Information it contains may not be accurate and is not designed
					or intended to serve as medical advice. I am not liable for any physical or
					psychological damages suffered as a result of using this script.</B>
				<hr>

		</div>

	<!---FAMOUS-->

		<div id="famp2">
		<h2 id="h22"> <u>Favourite Personalities</u></h2>

			<?php
			$pic = array('https://cdn.wealthygorilla.com/wp-content/uploads/2018/07/Richest-Actors-Will-Smith.webp',
						'https://cdn.wealthygorilla.com/wp-content/uploads/2017/08/Richest-Athletes-David-Beckham.webp',
						'https://cdn.wealthygorilla.com/wp-content/uploads/2018/02/Richest-Comedians-Rowan-Atkinson.webp',
						'https://cdn.wealthygorilla.com/wp-content/uploads/2018/07/Richest-Actors-Jackie-Chan.webp',
						'https://cdn.wealthygorilla.com/wp-content/uploads/2017/08/Richest-Athletes-Kobe-Bryant.webp',
						'https://cdn.wealthygorilla.com/wp-content/uploads/2017/07/Richest-DJs-Avicii.webp',
						'https://cdn.wealthygorilla.com/wp-content/uploads/2017/08/Richest-Athletes-Michael-Jordan.webp',
						'https://cdn.wealthygorilla.com/wp-content/uploads/2018/07/Richest-Actors-Amitabh-Bachchan.webp',
						'https://cdn.wealthygorilla.com/wp-content/uploads/2018/07/Richest-Actors-Robert-Downey-Jr.webp',
						'https://cdn.wealthygorilla.com/wp-content/uploads/2017/08/Richest-Athletes-Roger-Federer.webp'
					);
			shuffle($pic);
			$checker = array();
			?>


			<ul>
				<?php
				for( $i = 0; $i < 10; $i++)
				echo "<li style=\"display: inline-block; margin-right:10px; margin-bottom:10px; border: 3px solid #ddd;
				border-radius: 4px; \">
										<img src=\"$pic[$i]\" width=\"300\" height=\"200\">
									</li>";


				?>
			</ul>
		</div>
  <div class="container" style="padding: 1.5%; ">
    <div class="footer" style="background-color:#ecf0f1; color:#2d323e;; text-align: center; box-shadow: 1px 1px 6px 0px #000; padding: 5px;">
      <h1 style="font-family=Times New Roman, serif;"><b>Contact Me</h1>
				<h3 style="font-family: Zapf Chancery, cursive;">Name : Hibah Abdul Salam</h3>
	      <h3 style="font-family: Zapf Chancery, cursive;">Regn. No. : 201911502</h3>
	      <h3 style="font-family: Zapf Chancery, cursive;">Email : hibahsalam@yahoo.com</h3>


    </div>
  </div>


	<script type="text/javascript" src="gallery.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
