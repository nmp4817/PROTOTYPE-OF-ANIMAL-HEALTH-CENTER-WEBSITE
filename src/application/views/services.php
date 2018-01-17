<div id="main">
	<section>
		<p>
			<ul>
				<?php

					foreach ($services as $service) { 
						//array helper function element()
						echo "<li><h4>".element('servicename',$service)."</h4></li>".element('servicedescription',$service);
					}
				?>
			</ul>
		</p>
	</section>
	<br/>
</div>