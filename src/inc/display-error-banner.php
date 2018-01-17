<div>
    <h3 style="color:red;font-size: 20px;padding: 0px;margin: 0px;">Error</h3>
    <?php 
	    foreach ($post_errors as $e ) {
	        echo '<p style="color:red;margin:0px;">'. $e . '</p>';
	    } 
    ?>
</div>