<?php
	include("includes/header.php");
?>
           <div class="section" id="water"> 
                <h1>Irrigation</h1>
				<div class="half right">
<?php
	for ($i=1;$i<=8;$i++) {
		$zone[$i] = "Off"; 
	}
	
	for ($i=1;$i<=8;$i++) {
		if (isset($_POST['zSubmit'][$i])) {
			if (($_POST['z'][$i]) == "On") { $zone[$i] = "Off"; } else { $zone[$i] = "On"; }
		} else { 
			if (isset($_POST['z'])) { $zone[$i] = $_POST['z'][$i]; }
		}
	}
	

?>					
					<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
						<input type="submit" id="bt1" name="zSubmit[1]" value="Zone 1">
							<input style="width:25px; text-align:center" name="z[1]" type="text" value="<?php echo $zone[1]; ?>"><br />

						<input type="submit" id="bt1" name="zSubmit[2]" value="Zone 2"><!--<label for="bt1"> Off</label>-->
							<input style="width:25px; text-align:center" name="z[2]" type="text" value="<?php echo $zone[2]; ?>"><br />

						<input type="submit" id="bt1" name="zSubmit[3]" value="Zone 3">
							<input style="width:25px; text-align:center" name="z[3]" type="text" value="<?php echo $zone[3]; ?>"><br />

						<input type="submit" id="bt1" name="zSubmit[4]" value="Zone 4">
							<input style="width:25px; text-align:center" name="z[4]" type="text" value="<?php echo $zone[4]; ?>"><br />

						<input type="submit" id="bt1" name="zSubmit[5]" value="Zone 5">
							<input style="width:25px; text-align:center" name="z[5]" type="text" value="<?php echo $zone[5]; ?>"><br />

						<input type="submit" id="bt1" name="zSubmit[6]" value="Zone 6">
							<input style="width:25px; text-align:center" name="z[6]" type="text" value="<?php echo $zone[6]; ?>"><br />

						<input type="submit" id="bt1" name="zSubmit[7]" value="Zone 7">
							<input style="width:25px; text-align:center" name="z[7]" type="text" value="<?php echo $zone[7]; ?>"><br />

						<input type="submit" id="bt1" name="zSubmit[8]" value="Zone 8">
							<input style="width:25px; text-align:center" name="z[8]" type="text" value="<?php echo $zone[8]; ?>"><br />
					</form>
				</div>
				<div class="half left">
					<div style='width: 240px; height: 420px; background-image: url( http://vortex.accuweather.com/adcbin/netweather_v2/backgrounds/silver_240x420_bg.jpg ); background-repeat: no-repeat; background-color: #86888B;' ><div id='NetweatherContainer' style='height: 405px;' ><script src='http://netweather.accuweather.com/adcbin/netweather_v2/netweatherV2ex.asp?partner=netweather&tStyle=whteYell&logo=1&zipcode=AFR|ZA|SF004|CENTURION|&lang=uke&size=12&theme=silver&metric=1&target=_self'></script></div><div style='text-align: center; font-family: arial, helvetica, verdana, sans-serif; font-size: 10px; line-height: 15px; color: #FFFFFF;' ><a style='color: #FFFFFF' href='http://www.accuweather.com/world-index-forecast.asp?partner=netweather&locCode=AFR|ZA|SF004|CENTURION|&metric=1' >Weather Forecast</a> | <a style='color: #FFFFFF' href='http://www.accuweather.com/maps-satellite.asp' >Weather Maps</a> | <a style='color: #FFFFFF' href='http://www.accuweather.com/index-radar.asp?partner=accuweather&zipcode=AFR|ZA|SF004|CENTURION|' >Weather Radar</a></div></div>
				</div>	 
                <a href="index.php" class="home_btn">home</a> 
                <a href="xbmc.php" class="page_nav_btn previous">Previous</a>
                <a href="camera.php" class="page_nav_btn next">Next</a>		
            </div> 
<?php
	include("includes/footer.php");
?>            
