<?php include 'aboutBase.php'; ?>
			
			<div class="tabContent">
				<div class="container tabMore">
					<h2 class="titleh2">Want to reach us? Try one of these methods.</h2>				
					<table>
						<tr>
							<td class="contactLeft">
								<h3 class="titleh3">
									Phone
								</h3>
								<p> 
									(770) 819-0075
								</p>								
							</td>
							<td class="contactRight" rowspan="4">
								<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=5220+Austell+Road,+Ste+E+Austell,+GA+30106&amp;aq=&amp;sll=47.613028,-122.342064&amp;sspn=0.328188,0.837021&amp;ie=UTF8&amp;hq=&amp;hnear=5220+Austell+Rd,+Austell,+Cobb,+Georgia+30106&amp;t=m&amp;z=14&amp;ll=33.827116,-84.61505&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=5220+Austell+Road,+Ste+E+Austell,+GA+30106&amp;aq=&amp;sll=47.613028,-122.342064&amp;sspn=0.328188,0.837021&amp;ie=UTF8&amp;hq=&amp;hnear=5220+Austell+Rd,+Austell,+Cobb,+Georgia+30106&amp;t=m&amp;z=14&amp;ll=33.827116,-84.61505" style="color:#0000FF;text-align:left">View Larger Map</a></small>										
							</td>
						</tr>
						<tr>
							<td class="contactLeft">
								<h3 class="titleh3">
									Fax
								</h3>
								<p> 
									(404) 745-8778
								</p>							
							</td>
						</tr>
						<tr>
							<td class="contactLeft">
								<h3 class="titleh3">
									Office
								</h3>
								<p>
									5520 Austell Road,
								</p>
								<p>
									Ste E
								</p>
								<p>
									Austell, GA, 30106
								</p>							
							</td>
						</tr>						
						<tr>
							<td class="contactLeft">
								<h3 class="titleh3">
									Email
								</h3>
								<form action="http://www.google.com/search" method="GET">
									<fieldset>
									<dl>
									<dt><label for="senderName">Name</label></dt>
									<dd><input type="text" name="senderName" 
											   placeholder="Your Name" id="senderName" /></dd>									
									<dt><label for="email">Email</label></dt>
									<dd>
										<input type="email" name="email" id="email"
											   placeholder="Your Email Address"
											   required="required" pattern=".+@.+\..+" />
									</dd>
									<dt><label for="subject">Subject</label></dt>
									<dd><input type="text" name="subject" placeholder="Subject" id="subject" /></dd>
									<dt><label for="body">Email Body</label></dt>
									<dd><textarea class="emailText" name="emailBody" placeholder="lol" id="emailBody" 
													cols="35" rows="6" maxlength="500" required="required"></textarea></dd>									
									</dl>
									</fieldset>
									<p><input class="mediumButton" type="submit" value="Send" /></p>
								</form>							
							</td>
						</tr>
					</table>						
				</div>
			</div>
		</div>
		
<?php include '../base/footer.php'; ?>