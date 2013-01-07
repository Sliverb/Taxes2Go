<?php include '../base/header.php'; ?>
		
		<div class="subHeader headerCommon">
			<div class="container">					
				<div class="curls centeredCurl">
					About
				</div>
			</div>
			<div class="clear"></div>				
		</div>
		
		<div id="page">
			<div class="tabs-bg">
				<div class="tabs tabCentered" style="width:475px;">
					<ul>
						<li>
							<a href="aboutUs.php" class="<? if ($page=="aboutUs") echo "tabActive" ?>">
							   About Us
							</a>
						</li>					
						<li>
							<a href="team.php" class="<? if ($page=="team") echo "tabActive" ?>">
							   Team
							</a>
						</li>					
						<li>
							<a href="privacy.php" class="<? if ($page=="privacy") echo "tabActive" ?>">
							   Privacy
							</a>
						</li>					
						<li>
							<a href="disclaimer.php" class="<? if ($page=="disclaimer") echo "tabActive" ?>">
							   Disclaimer
							</a>
						</li>	
						<li>
							<a href="contactUs.php" class="<? if ($page=="contactUs") echo "tabActive" ?>">
							   Contact Us
							</a>
						</li>						
					</ul>
				</div>
			</div>