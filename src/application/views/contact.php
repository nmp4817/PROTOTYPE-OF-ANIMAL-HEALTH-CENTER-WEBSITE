<section>
	<h3>Contact Fish Creek</h3>
	<?php
		echo validation_errors();
	?>
	<p>Required fields are marked with an asterisk(*).</p>
	<!-- form helper function form_open() -->
	<?php 
		$data = array('onsubmit' => "return validateFormContact()"); 
		echo form_open('contact/add_contact',$data); 
	?>
	<!-- <form name="contactForm" action="contact.php" onsubmit="return validateFormContact()" method="POST"> -->
		<table id="contact">
			<tbody>
				<tr>
					<td>
						<?php 
							echo form_label("* Name:","full_name");
						?>
						<!-- <label for="full_name">* Name:</label> -->
					</td>
					<td>
						<?php
							$color_name="";
							if ( form_error('full_name') ) { $color_name = "red"; } 
							$data_name = array('type'  => 'text','name'  => 'full_name','value' => set_value('full_name'),'style'=>"border-color:$color_name");
							echo form_input($data_name) 
						?>
						<!-- <input type="text" name="full_name" value="<?php //echo set_value('full_name'); ?>" /> -->
					</td>
				</tr>
				<tr>
					<td>
						<?php 
							echo form_label("* E-mail:","email");
						?>
						<!-- <label for="email">* E-mail:</label> -->
					</td>
					<td>
						<?php
							$color_email="";
							if ( form_error('email') ) { $color_email = "red"; } 
							$data_email = array('type'  => 'email','name'  => 'email','value' => set_value('email'),'style'=>"border-color:$color_email");
							echo form_input($data_email) 
						?>
						<!-- <input type="email" name="email" value="<?php //echo set_value('email'); ?>" /> -->
					</td>
				</tr>
				<tr>
					<td>
						<?php 
							echo form_label("* Comments:","comments");
						?>
						<!-- <label for="comments">* Comments:</label> -->
					</td>
					<td>
						<?php 
							$color_comments="";
							if ( form_error('comments') ) { $color_comments = "red;"; } 
							$data_comments = array('name'  => 'comments','rows' => '2','value' => trim(set_value('comments')),'style'=>"border-color:$color_comments");
							echo form_textarea($data_comments);
						?>
							<!-- <textarea name="comments"><?php //echo set_value('comments'); ?> </textarea> -->
					</td>
				</tr>
			</tbody>
		</table>
		<?php 
			$data_button = array( 
								"name" => "contact_button",
								"id" => "button",
								"type" => "submit",
								"content" => "Send Now"
							);
			echo form_button($data_button);
		?>
		<!-- <button id="button" name="contact_button" type="submit">Send Now</button> -->
	</form>
</section> <br/><br/><br/>