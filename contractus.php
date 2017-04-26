<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TU-Pattaya</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="header-cont">
		<div class="header">
			<div class="left-header">
				<img src="images/logo_tu.gif" width="100px" height="100px">
			</div>
			<div class="right-header">
				มหาวิทยาลัยธรรมศาตร์<br>
				THAMMASAT UNIVERSITY<br>
				ศูนย์พัทยา
			</div>
		</div>
		<div class="content">
			<div class="top-content">
				<img src="images/forContract.jpg" width="960" height="400">
				<ul class="menu">
					<ppn><a href="home.php">หน้าหลัก</a></ppn>
					<ppn><a href="contact.php">บุคลากร</a></ppn>
					<ppn><a href="program.php">สาขาวิชา</a></ppn>
					<ppn><a href="dome.php">สภาพความเป็นอยู่นักศึกษา</a></ppn>
					<ppn><a href="about.php">ผู้สนใจเข้าศึกษา</a></ppn>
					<ppn><a class="active" href="contractus.php">ติดต่อเรา</a></ppn>
				</ul>
			</div>
			<div class="bottom-content">
				<div class="column-left">
					<ul>
						<li><a href="contractus.php">ที่อยู่และเบอร์ติดต่อ</a></li>
					</ul>
				</div>
				<div class="column-right">					
					<strong>ที่อยู่:</strong> <p>หมู่ 5 39/4 ตำบล โป่ง อำเภอ บางละมุง ชลบุรี 20150</p>
					<strong>โทรศัพท์:</strong> <p>038 259 050</p>
					<!--GOOGLE MAP-->
					<br/>
					<div style="width: 640px; ">
						<div id="map" style="width: 360px; height: 320px; float: left;"></div> 
						<div id="panel" style="width: 260px; height: 320px; float: right; overflow: scroll;"></div>
					</div>
					<script async defer
					src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1ljsHbZLnkwVdRATGl1CFMDoivvP4bm0&callback=initMap">
				</script>
				<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
				<script type="text/javascript"> 
					if (navigator.geolocation) { //Checks if browser supports geolocation
						navigator.geolocation.getCurrentPosition(function (position) {                                                              //This gets the
						var latitude = position.coords.latitude; //users current
						var longitude = position.coords.longitude; //location
						var sasinpark = new google.maps.LatLng(12.917655, 100.9939783); //Destination
						var coords = new google.maps.LatLng(latitude, longitude); //Creates variable for map coordinates
						var directionsService = new google.maps.DirectionsService();
						var directionsDisplay = new google.maps.DirectionsRenderer();
						var mapOptions = //Sets map options
						{
							zoom: 15,  //Sets zoom level (0-21)
							center: coords, //zoom in on users location
							mapTypeControl: true, //allows you to select map type eg. map or satellite
							navigationControlOptions:
							{
								style: google.maps.NavigationControlStyle.SMALL //sets map controls size eg. zoom
							},
							mapTypeId: google.maps.MapTypeId.ROADMAP //sets type of map Options:ROADMAP, SATELLITE, HYBRID, TERRIAN
						};
						map = new google.maps.Map( /*creates Map variable*/ document.getElementById("map"), mapOptions /*Creates a new map using the passed optional parameters in the mapOptions parameter.*/);
						directionsDisplay.setMap(map);
						directionsDisplay.setPanel(document.getElementById('panel'));
						var request = {
							origin: coords, //Set location
							destination: sasinpark, //Set Destination
							travelMode: google.maps.DirectionsTravelMode.DRIVING /*Mode DRIVING. can change to WALKING, BICYCLING */
						};

						directionsService.route(request, function (response, status) {
							if (status == google.maps.DirectionsStatus.OK) {
								directionsDisplay.setDirections(response);
							}
						});
					});
					} else {
						alert("Geolocation is not supported by this browser");
					}
				</script>
				<!-- /GOOGLE MAP -->
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>