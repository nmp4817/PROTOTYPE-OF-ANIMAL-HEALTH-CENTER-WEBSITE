<!DOCTYPE html>
<html>
	<head>
		<title>Fish Creek Animal Hospital</title>
		<link rel="stylesheet" href="<?php echo asset_url().'css/fishcreek.css'; ?>">
	</head>
	<body>
		<div id="wrapper">
			<table>
				<thead>
					<tr>
						<th colspan="2">
							<header>
								<hgroup>
									<h1>Fish Creek Animal Hospital</h1>
								</hgroup>
							</header>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="100px">
							<nav>
								<table>
									<tbody>
										<tr>
											<!-- url helper function anchor() and base_url() -->
											<?php echo anchor(base_url(),"Home"); ?><br/>
											<!-- <a href="<?php //echo base_url(); ?>">Home</a> -->
										</tr>
										<tr>
											<?php echo anchor(base_url().'service',"Services"); ?><br/>
											<!-- <a href="<?php //echo base_url(); ?>service">Services</a><br/> -->
										</tr>
										<tr>
											<?php echo anchor(base_url().'askvet',"Ask the Vet"); ?><br/>
											<!-- <a href="<?php //echo base_url(); ?>askvet">Ask the Vet</a><br/> -->
										</tr>
										<tr>
											<?php echo anchor(base_url().'subscribe',"Subscribe"); ?><br/>
											<!-- <a href="<?php //echo base_url(); ?>subscribe">Subscribe</a><br/> -->
										</tr>
										<tr>
											<?php echo anchor(base_url().'contact',"Contact"); ?><br/>
											<!-- <a href="<?php //echo base_url(); ?>contact">Contact</a><br/> -->
										</tr>
									</tbody>
								</table> 	
							</nav>
						</td>
						<td>