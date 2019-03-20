<?php
	include("header.php");
?>

<div class="row">
	<div id='mailing-button'>
	<button type="button" class="articlesubmit" onclick="window.location.href='/upload.php'">Upload An Article</button>
	</div>
	</div>
<div class="col-xs-12" id="mapspace">
</div>
</div>
<script type="text/javascript">
  function initialize() { 
	var stylesArray=  [{"featureType":"landscape","elementType":"all","stylers":[{"color":"#206040"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#feffef"}]},{"featureType":"road","elementType":"all","stylers":[{"color":"#339966"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#339966"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"visibility":"simplified"}][{"color":"#ffffff"}]},{"featureType":"administrative.province","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"labels.icon","stylers":[{"visibility":"off"}]}]
  var styledMap = new google.maps.StyledMapType(stylesArray,
    {name: "Styled Map"});
    google.maps.visualRefresh = true;
    var isMobile = (navigator.userAgent.toLowerCase().indexOf('android') > -1) ||
      (navigator.userAgent.match(/(iPod|iPhone|iPad|BlackBerry|Windows Phone|iemobile)/));
    if (isMobile) {
      var viewport = document.querySelector("meta[name=viewport]");
      viewport.setAttribute('content', 'initial-scale=1.0, user-scalable=no');
    }
    var mapDiv = document.getElementById('mapspace');
    var map = new google.maps.Map(mapDiv, {
      center: new google.maps.LatLng(52.520008, 13.404954),
      zoom: 5,
		mapTypeControlOptions:{
      mapTypeIds: [google.maps.MapTypeId.SATELLITE, 'map_style']
		},
		disableDefaultUI: true
    });
    var opt = { minZoom: 2 };
    map.setOptions(opt);
    //Associate the styled map with the MapTypeId and set it to display.
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');
	
	var infoWindow = new google.maps.InfoWindow;

	function downloadUrl(url,callback) {
	 var request = window.ActiveXObject ?
	     new ActiveXObject('Microsoft.XMLHTTP') :
	     new XMLHttpRequest();

	 request.onreadystatechange = function() {
	   if (request.readyState == 4) {
	     request.onreadystatechange = doNothing;
	     callback(request, request.status);
	   }
	 };

	 request.open('GET', url, true);
	 request.send(null);
	}

 downloadUrl("phpsqlajax_genxml.php", function(data) 
 {
 	var xml = data.responseXML;
   	var markers = xml.documentElement.getElementsByTagName("marker");
 	var newMarkers=[];
   	for (var i = 0; i < markers.length; i++) 
 	{
 		var format = markers[i].getAttribute("format");
		var ID = markers[i].getAttribute("ID");
     	var name = markers[i].getAttribute("name");
     	var address = markers[i].getAttribute("address");
     	var type = markers[i].getAttribute("type");
 		var summ = markers[i].getAttribute("summ");
     	var point = new google.maps.LatLng(
         parseFloat(markers[i].getAttribute("lat")),
         parseFloat(markers[i].getAttribute("lng")));
 		var html = "<div id='boxTop'><h3 id='boxTopTitle'>" + name + "</h3></div> <div id='boxMain'><i>" + address + "</i><br />" + summ +"<br />";
     	var marker = new google.maps.Marker({

       	  map: map,
       	  position: point,
 			icon: "images/" + format + ".png",
            url: "/article.php?ID=" + ID +""
     	});
   	  	newMarkers.push(marker);
        	var boxText = document.createElement("div");
 		boxText.setAttribute("id","infoBoxDiv");
 		boxText.innerHTML = html;
	
   			var myOptions = {
   		 	   content: boxText
   				,maxWidth: 0
   				,zIndex: null
   				,boxStyle: { 
   		  		  	opacity: 0.95
  					,height: "220px"
   		 	   }
 		   ,closeBoxURL: ""
 		   ,pixelOffset: new google.maps.Size(80, 20)
   			   ,InfoBoxClearance: new google.maps.Size(1, 1)
   			   ,isHidden: false
   			   ,pane: "floatPane"
   			   ,enableEventPropagation: false
  		 	  ,alignBottom: true
   		   };
  	  	 	newMarkers[i].InfoBox = new InfoBox(myOptions);
  	   	 	google.maps.event.addListener(marker, 'mouseover', (function(marker,i) 
 		{
 			return function(){
 				newMarkers[i].InfoBox.open(map, this);
 			}
  	   	 	})(marker,i));
  	   	 	google.maps.event.addListener(marker, 'mouseout', (function(marker,i) 
 		{
 			return function(){
 				newMarkers[i].InfoBox.close(map, this);
 			}
  	   	 	})(marker,i));
    google.maps.event.addListener(marker, 'click', function() {
    window.location.href = this.url;
});
  
   }
  
  });
 
      
 var customIcons = {
   restaurant: {
     icon: 'http://labs.google.com/ridefinder/images/mm_20_blue.png'
   },
   bar: {
     icon: 'http://labs.google.com/ridefinder/images/mm_20_red.png'
   }
 };

 }
 google.maps.event.addDomListener(window, 'load', initialize);


function doNothing() {}
 </script>

<?php
	include("footer.php");
?>