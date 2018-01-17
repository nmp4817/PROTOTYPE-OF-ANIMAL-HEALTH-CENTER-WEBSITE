<section>
	<p>
		<?php echo anchor(base_url().'contact',"Contact"); ?> us if you have a question that you would like answered here.
	</p>
	<?php
		foreach ($QandAs as $QandA) { 
			echo '<p class="question"> <strong>'.$QandA['question'].'</strong>
			</p>
			<p class="answer">'.$QandA['answer'].'
			</p>';
		} 
	?>
	<br/><br/><br/>
</section>