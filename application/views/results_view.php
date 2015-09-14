<div class="content_wrapper_search">
	<div id="search_bar" class="search_bar">
			<form action="<?php echo base_url()?>welcome/results" method="get">
				<span class="med_title">Find The Service You Need:</span>
				<select name="need" id="need" class="search_bar_no_hover">
					<option value="Please Select A Category">Select a Service</option>
					<?php 
						foreach ($categories as $value) {
							echo "<option value='".$value['name']."'>".$value['name']."</option>";
						}
					 ?>
				</select>
				<input type="submit" id="search_button" value="FIND IT!" class="input_no_hover">
			</form>
	</div>
	<div class="mCustomScrollbar" data-mcs-theme="dark-thick" id="results">
		<table class="results_table">
			<tr>
				<th class="provider">NAME OF PROVIDER</th>
				<th class="address">ADDRESS</th>
				<th class="phone">PHONE NUMBER</th>
			</tr>
			<?php 
			$flipper = 1;      
			foreach($resources AS $row) { 
    
    			if ($flipper == 1){
            		echo "<tr class='row1'><td><a href='".base_url()."welcome/resource/".$row['id']."'>".$row['name']."</a></td><td>";

            		if($row['address'] != ""){
            			echo $row['address'].", ".$row['City'].", ".$row['State'];
            		}

            		echo "</td><td>".$row['phone']."</td></tr>";
            		$flipper = 2;
        		}else{
        			echo "<tr class='row2'><td><a href='".base_url()."welcome/resource/".$row['id']."'>".$row['name']."</a></td><td>";

            		if($row['address'] != ""){
            			echo $row['address'].", ".$row['City'].", ".$row['State'];
            		}
            		
            		echo "</td><td>".$row['phone']."</td></tr>";
            		$flipper = 1;
        		}
			}
			?>
		</table>
	</div>
	<br>
	<?php 
		if($count > 1){
			echo '<div class="pagination_numbers">'.$count.' resources found for: '.$service.'</div>';
		}else{
			echo '<div class="pagination_numbers">'.$count.' resource found for: '.$service.'</div>';
		}
	 ?>
	 	<div id="results_mobile">
		<table class="results_table">
			
			<?php 
			$flipper = 1;      
			foreach($resources AS $row) { 
    
    			if ($flipper == 1){
            		echo "<tr class='row1'><td><a href='".base_url()."welcome/resource/".$row['id']."'>".$row['name']."</a><br>";

            		if($row['address'] != ""){
            			echo $row['address'].", ".$row['City'].", ".$row['State'];
            		}

            		echo "<br>".$row['phone']."</td></tr>";
            		$flipper = 2;
        		}else{
        			echo "<tr class='row2'><td><a href='".base_url()."welcome/resource/".$row['id']."'>".$row['name']."</a><br>";

            		if($row['address'] != ""){
            			echo $row['address'].", ".$row['City'].", ".$row['State'];
            		}
            		
            		echo "<br>".$row['phone']."</td></tr>";
            		$flipper = 1;
        		}
			}
			?>

		</table>
		<div class="scroll_div"></div>
	</div>
</div>