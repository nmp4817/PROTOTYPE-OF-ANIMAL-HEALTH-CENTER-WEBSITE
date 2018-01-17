<section>
	<h3>Subscribe Fish Creek</h3>
	<?php
		echo validation_errors(); 
	?>
	<p>Required fields are marked with an asterisk(*).</p>
	<!-- form helper function form_open() -->
	<?php 
		$data = array('onsubmit' => "return validateFormSubscribe()"); 
		echo form_open('subscribe/add_client',$data); 
	?>
	<!-- <form name="subscribeForm" action="subscribe.php" onsubmit="return validateFormSubscribe()" method="POST"> -->
		<table id="subscribe">
			<tbody>
				<tr>
					<td>
						<?php 
							echo form_label("* Client Full Name:","full_name");
						?>
						<!-- <label for="full_name">* Client Full Name:</label> -->
					</td>
					<td>
						<?php
							$color_name="";
							if ( form_error('full_name') ) { $color_name = "red"; } 
							$data_name = array('type'  => 'text','name'  => 'full_name','value' => set_value('full_name'),'style'=>"border-color:$color_name");
							echo form_input($data_name) 
						?>
						<!-- <input type="text" name="full_name" required /> -->
					</td>
				</tr>
				<tr>
					<td>
						<?php 
							echo form_label("* Address:","address");
						?>
						<!-- <label for="address">* Address:</label> -->
					</td>
					<td>
						<?php
							$color_address="";
							if ( form_error('address') ) { $color_address = "red"; } 
							$data_address = array('type'  => 'text','name'  => 'address','value' => set_value('address'),'style'=>"border-color:$color_address");
							echo form_input($data_address) 
						?>
						<!-- <input type="text" name="address" required/> -->
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
						<!-- <input type="email" name="email" maxlength="40"required/> -->
					</td>
				</tr>
				<tr>
					<td>
						<?php 
							echo form_label("* Phone:","phone");
						?>
						<!-- <label for="phone">* Phone:</label> -->
					</td>
					<td>
						<?php
							$color_phone="";
							if ( form_error('phone') ) { $color_phone = "red"; } 
							$data_phone = array('type'  => 'text','name'  => 'phone','value' => set_value('phone'),'style'=>"border-color:$color_phone");
							echo form_input($data_phone) 
						?>
						<!-- <input type="text" name="phone" required/> -->
					</td>
				</tr>
				<tr>
					<td>
						<?php 
							echo form_label("* Password:","password");
						?>
						<!-- <label for="password">* Password:</label> -->
					</td>
					<td>
						<?php
							$color_password="";
							if ( form_error('password') ) { $color_password = "red"; } 
							$data_password = array('type'  => 'password','name'  => 'password','style'=>"border-color:$color_password");
							echo form_input($data_password) 
						?>
						<!-- <input type="password" name="password" required/> -->
					</td>
				</tr>
				<tr>
					<td>
						<?php 
							echo form_label("* Type of Service:","service_requested");
						?>
						<!-- <label for="service_requested">* Type of Service:</label> -->
					</td>
					<td>
						<!-- <Select name="service_requested">
							<option value="0">Service Name</option> -->
							<?php
								$options = array("0"=>"Service Name");
								foreach ($services as $service) {
									$options[element('serviceid',$service)] = element('servicename',$service);
									// echo '<option value="'.$result_service_arr[$i][0].'"'. ( ($col_service_id == $result_service_arr[$i][0]) ? ' selected ': '' ).'>'.$result_service_arr[$i][1].'</option>';
								} 
								echo form_dropdown("service_requested",$options,set_value("service_requested"));
							?>
					    <!-- </Select> -->
					</td>
				</tr>
				<tr>
					<td>
						<?php 
							echo form_label("* Pet:","pet_name");
						?>
						<!-- <label for="pet_name">* Pet:</label> -->
					</td>
					<td>
						<!-- <Select name="pet_name">
							<option value="0">Pet Name</option> -->
							<?php
								$options = array("0"=>"Pet Name");
								foreach ($pets as $pet) {
									$options[element('petid',$pet)] = element('petname',$pet);
									// for ($i=0; $i < sizeof($result_pet_arr); $i++) {
									// 	echo '<option value="'.$result_pet_arr[$i][0].'"'. ( ($col_pet_id == $result_pet_arr[$i][0]) ? ' selected ': '' ).'>'.$result_pet_arr[$i][1].'</option>';
								}
								echo form_dropdown("pet_name",$options,set_value("pet_name"));
							?>
					    <!-- </Select> -->
					</td>
				</tr>
			</tbody>	
		</table>
		<?php 
			$data_button = array( 
								"name" => "client_save",
								"id" => "button",
								"type" => "submit",
								"content" => "Send Now"
							);
			echo form_button($data_button);
		?>
		<!-- <button id="button" name="client_save" type="submit">Send Now</button> -->
	</form>
	
	<br/><br/><br/>
</section>