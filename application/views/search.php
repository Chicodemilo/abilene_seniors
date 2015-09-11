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
				<th class="service">TYPE OF SERVICE</th>
				<th class="phone">PHONE NUMBER</th>
			</tr>
			<?php 
			$flipper = 1;      
			foreach($resources->result() AS $row) { 
    
    			if ($flipper == 1){
            		echo "<tr class='row1'><td><a href='".base_url()."welcome/resource/".$row->id."'>".$row->name."</a></td><td>".$row->categoryone."</td><td class='phone'>".$row->phone."</td></tr>";
            		$flipper = 2;
        		}else{
        			echo "<tr class='row2'><td><a href='".base_url()."welcome/resource/".$row->id."'>".$row->name."</a></td><td>".$row->categoryone."</td><td class='phone'>".$row->phone."</td></tr>";
            		$flipper = 1;
        		}
			}
			?>
		</table>
	</div>
	<br>

	<?php echo $this->pagination->create_links(); ?>
</div>
