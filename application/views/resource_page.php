
<div id="back_button" class="back_button">
	<a href="javascript:history.back()">&#60;&#60;&#60;BACK</a>
</div>
<?php 
	$address = $resource[0]['address'];
	$city = $resource[0]['City'];
 ?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script>
    var geocoder;
    var map;
    function initialize() {
      geocoder = new google.maps.Geocoder();

      var latlng = new google.maps.LatLng(31.4500, -100.4500);
      var mapOptions = {
        zoom: 15,
        center: latlng,
        scrollwheel: false
      }
      map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var address = "<?php echo $address.' '.$city?>";

        geocoder.geocode( { 'address': address}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location
            });
          } else {
          }
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>



<div class="content_wrapper_resource">
	<div id="resource_brown" class="resource_brown">
				<div id="resource_info" class="resource_info">
				<?php 
					echo "<span class='resource_name'>".$resource[0]['name']."</span>";
					echo "<hr>";
					echo "<span class='address_text'>".$resource[0]['phone']."<br>".$resource[0]['address']."<br>".$resource[0]['City'].", ".$resource[0]['State']."</span>";
					echo "<hr><span class='category_list'>Services Provided:<ul>";
					if ($resource[0]['categoryone'] != '') {
						echo '<li>'.$resource[0]['categoryone'].'</li>';
					}
					if ($resource[0]['categorytwo'] != '') {
						echo '<li>'.$resource[0]['categorytwo'].'</li>';
					}
					if ($resource[0]['categorythree'] != '') {
						echo '<li>'.$resource[0]['categorythree'].'</li>';
					}
					echo "</ul></span>";
				 ?>
				<hr>
				</div>
				
				<div id="resource_picture" class="resource_picture">
					<?php 
						if ($resource[0]['pic_name'] != '') {
							$pic_name = 'pic_one';
							echo "<img src='".base_url()."resources/".$resource[0]['id']."/"."images/".$pic_name."_MED.jpg' srcset='".base_url()."resources/".$resource[0]['id']."/"."images/".$pic_name."_SMALL.jpg 650w, ".base_url()."resources/".$resource[0]['id']."/"."images/".$pic_name."_MED.jpg 1300w, ".base_url()."resources/".$resource[0]['id']."/"."images/".$pic_name."_LARGE.jpg 1900w, ".base_url()."resources/".$resource[0]['id']."/"."images/".$pic_name."_LARGE.jpg 1024w 2x' />";
						}
					?>
				</div>

				<div id="map-canvas" class="resource_map">
				</div>
	</div>
	<div id="under_the_brown" class="under_the_brown">&nbsp;</div>
</div>