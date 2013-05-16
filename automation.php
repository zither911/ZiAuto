<?php 
	include("includes/header.php");
?>
            <div class="section" id="automation"> 
                <h1>automation Information</h1> 
                <div class="half right">
                    <h4>Quick automation Form</h4>
                    <p>Nullam a tortor est, congue fermentum nisi. Maecenas nulla nulla, eu volutpat euismod, scelerisque ut dui.</p>
                    <div id="automation_form">
                        <form method="post" name="automation" action="#">
                            <div class="col_175 left">
                                <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                                <div class="cleaner h10"></div>
                            </div>
                            <div class="col_175 right">                           
                                <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                                <div class="cleaner h10"></div>
                            </div>
                            
                            <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                            <div class="cleaner h10"></div>
                            <input type="submit" value="Send" id="submit" name="submit" class="submit_btn left" />
							<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn right" />
                        </form>
                    </div>
                </div>
                
                <div class="half left">
                    <h4>Company Name</h4>
                    404-808 Duis lacinia dictum,<br />
                    Aliquam suscipit ipsum, 11660<br />
                    Diam a mollis tempor<br /><br />
                    
                    <strong>Phone:</strong> 060-060-0660<br />
            		<strong>Email:</strong> <a href="mailto:info@company.com">info@company.com</a><br />
                    
                    <div class="clear h20"></div>
                    <div class="img_nom img_border"><span></span>
					<!--
                    <iframe width="350" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=new+york+central+park&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=60.158465,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Central+Park,+New+York&amp;t=m&amp;ll=40.769606,-73.973372&amp;spn=0.014284,0.033023&amp;z=14&amp;output=embed"></iframe></div><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=new+york+central+park&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=60.158465,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Central+Park,+New+York&amp;t=m&amp;ll=40.769606,-73.973372&amp;spn=0.014284,0.033023&amp;z=14" style="color:#0000FF; text-align:left">View Larger Map</a></small>-->
                </div>
                <a href="index.php" class="home_btn">home</a> 
                <a href="camera.php" class="page_nav_btn previous">Previous</a>
                <a href="index.php" class="page_nav_btn next">Next</a>
            </div> 
			
<?php 
	include("includes/footer.php");
?>