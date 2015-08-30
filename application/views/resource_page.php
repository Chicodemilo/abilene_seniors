<div id="back_button" class="back_button">
	<a href="javascript:history.back()">&#60;&#60;&#60;BACK</a>
</div>
<div class="content_wrapper_resource">
	<div id="resource_brown" class="resource_brown">
				<div id="resource_name" class="resource_name">
				<?php 
					echo $resource[0]['name'];
					echo "<hr>";
					echo "<span class='address_text'>".$resource[0]['phone']."<br>".$resource[0]['address']."<br>".$resource[0]['City'].", ".$resource[0]['State'];
					echo "<ul>";
					if ($resource[0]['categoryone'] != '') {
						echo '<li>'.$resource[0]['categoryone'].'</li>';
					}
					if ($resource[0]['categorytwo'] != '') {
						echo '<li>'.$resource[0]['categorytwo'].'</li>';
					}
					if ($resource[0]['categorythree'] != '') {
						echo '<li>'.$resource[0]['categorythree'].'</li>';
					}
					echo "</li>";
					echo "</span>";
				 ?>
				</div>
				
				<div id="resource_picture" class="resource_picture">
				</div>

				<div id="resoucre_map" class="resource_map">
				</div>
	</div>
	<div id="under_the_brown" class="under_the_brown">&nbsp;</div>
</div>