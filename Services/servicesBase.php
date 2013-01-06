<?php include '../base/header.php'; ?>
		
		<div class="subHeader headerCommon">
			<div class="container">					
				<div class="curls centeredCurl">
					Services
				</div>
			</div>
			<div class="clear"></div>				
		</div>
		
		<div id="page">
			<div class="tabs-bg">
				<div class="tabs tabCentered" style="width:398px;">
					<ul>
						<li>
							<a href="servicesOverview.php" class="<? if ($page=="servicesOverview") echo "tabActive" ?>">
							   Overview
							</a>
						</li>					
						<li>
							<a href="individuals.php" class="<? if ($page=="individuals") echo "tabActive" ?>">
							   Individuals
							</a>
						</li>					
						<li>
							<a href="businesses.php" class="<? if ($page=="businesses") echo "tabActive" ?>">
							   Businesses
							</a>
						</li>					
						<li>
							<a href="payroll.php" class="<? if ($page=="payroll") echo "tabActive" ?>">
							   Payroll
							</a>
						</li>									
					</ul>
				</div>
			</div>