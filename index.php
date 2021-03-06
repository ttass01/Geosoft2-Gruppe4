<?php 
include 'dbfunctions.php';

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
  <meta charset="utf-8">
  <!-- If you delete this meta tag World War Z will become a reality -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Marike Meijer">
  <title>Geocomment</title>

  <!-- If you are using the CSS version, only link these 2 files, you may add app.css to use for your overrides if you like -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/foundation.css">
  <!-- Karte-->
  <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
  <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
<script src='https://api.tiles.mapbox.com/mapbox.js/v2.1.4/mapbox.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox.js/v2.1.4/mapbox.css' rel='stylesheet' />



<!--<style>
  body { margin:0; padding:0; }
  #map { position:absolute; top:0; bottom:0; width:100%; }
</style> 
-->

  <!-- If you are using the gem version, you need this only -->
  <link rel="stylesheet" href="css/app.css">

  <script src="js/vendor/modernizr.js"></script>
<!--
  <script type="text/javascript">
    // the Geolocation API provides us with the visitor's location
    navigator.geolocation.getCurrentPosition(GetLocation);
    
    function GetLocation(location) {
      // after we have acquired the user's location, it is written into the HTML <input...> text boxes below
      document.form.lat.value = location.coords.latitude;
      document.form.lon.value = location.coords.longitude;
    }
    </script>
    -->


    
</head>
<body >






<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="index3.html">Geocomment</h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon" id="menu-icon" >
       <img src="menu.png" >
       <style type="text/css">
          #menu-icon{
            position:right;
          }
       </style>
    
         </a>
    </li>
  </ul>

  <section class="top-bar-section">

    <!-- Right Nav Section -->
    <ul class="right">
      <li class="has-dropdown hide-for-large hide-for-medium">

        <a href="#">Menü</a>

        <ul class="dropdown">
           <li class="active"><a href="#">Search</a></li>
           <li><a href="#">Log In</a></li>
            <li><a href="#">Help</a></li>
        </ul>
      </li>
    </ul>

    <!-- Left Nav Section -->
    <ul class="left" >
   
      

      <li class="has-form">
       <div class="row collapse">
         <div class="large-12 small-10 columns">
            <input type="text" placeholder="Find Geodata">
         </div>
        </div>
    </li>


    </ul>
  </section>
</nav>








  


<div class="rows">
<!--<style>
#rows {
width: 100%;
margin-left: auto;
margin-right: auto;
margin-top: 0;
margin-bottom: 0;
max-width: 100%;

}
</style>
<div id="swap" data-interchange="[../small-header.html, (only screen)], [../medium-header.html, (medium)]">
</div> -->
  

     
  <div id="map">
    <style>
    
     #map{
    width: 100%; 
    height: 90%;
    float: left;
    position: absolute;
    }

    @media screen and (min-width: 640px) {
      #map{
      width:58%;
      height:93%;

          }
    }
     
    </style>
   

  
    <script type="text/javascript" >

          L.mapbox.accessToken = '<your access token here>';
          // Replace 'examples.map-i87786ca' with your map id.
          var mapboxTiles = L.tileLayer('https://{s}.tiles.mapbox.com/v3/examples.map-i87786ca/{z}/{x}/{y}.png', {
              attribution: '<a href="http://www.mapbox.com/about/maps/" target="_blank">Terms &amp; Feedback</a>'
          });

          var map = L.map('map')
              .addLayer(mapboxTiles)
              .setView([51.96217, 7.62561], 12);
               
              //map.locate({setView: true , maxZoom: 14});
               -->
               

          function onMapClick(e)
          {
        popup
        .setLatLng(e.latlng)
        .setContent('Hallo, möchtest du an dieser Stelle einen neuen Kommentar hinzufügen?<br /> <a href="">Ja</a>')
        .openOn(map);
          }

        map.on('click', onMapClick);

         var mapLink = '<a href="http://www.esri.com/">Esri</a>';
         var wholink = 'i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community';
         var aerial = L.tileLayer(
            'http://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
              maxZoom: 18,
              attribution: '&copy; ' + mapLink 
            });

         var mapQuestOpen_Aerial = L.tileLayer('http://oatile{s}.mqcdn.com/tiles/1.0.0/sat/{z}/{x}/{y}.jpg', {
             attribution: 'Tiles Courtesy of <a href="http://www.mapquest.com/">MapQuest</a> &mdash; Portions Courtesy NASA/JPL-Caltech and U.S. Depart. of Agriculture, Farm Service Agency', subdomains: '1234'
             });

         var osm = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
             attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>'

         });




         L.control.layers({
             'Aerial': aerial,
             'mapboxTiles': mapboxTiles,
             'MapQuest Open Aerial': mapQuestOpen_Aerial,
             'OpenStreetMap':osm,
             }, {}, {
            position: 'topleft'
          }).addTo(map);






    </script>
    }

  <!--

  <style>
 
  #map {
    width: 59% ; 
    height: 93%;
    float: left;
    position: absolute;

  }

  </style>
  -->
  
<!--
  <script type="text/javascript">
 
  var map = L.map('map').setView([51.96217, 7.62561],12);
 
  L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 35,
      attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>'
    }).addTo(map);

  
  
  
  var popup = L.popup();
  
  

  </script>
  -->
  </div>






  <div class="small-6 medium-6 large-6 columns">
  <!--map -->


  
  
  </div>

  <div class="small-5 hide-for-small medium-5 large-5 columns" id="backgroundright" >
  
    
    <dl class="tabs hide-for-small" data-tab >

      
        <dd class="active"><a href="#panel1">Home</a></dd>
        <dd>         <a href="#panel2">Comments</a></dd>
        <dd>         <a href="#panel3">Rating</a></dd>
        <dd>         <a href="#panel4">Log In</a></dd>
		<dd>		 <a href="#panel5">Sign In</a><dd>
    </dl>
      <div class="tabs-content">
        <div class="content active" id="panel1">
          <p> Welcome to Geocomment    </p>
          <!-- Size Classes: [tiny small large] -->
          <!-- Radius Classes: [radius round] -->
          <!-- Color Classes: [secondary success alert] -->
          <!-- Disabled Class: disabled -->


<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<script type="text/javascript">
function chkFormular () {
  if (document.createcomment.title.value == "") {
    alert("Please enter a title!");
    document.createcomment.title.focus();
    return false;
  }
  if(document.createcomment.url.value == "") {
   alert("Please enter a Url!");
   document.createcomment.url.focus();
   return false;
  }
  if(document.createcomment.comment.value == "") {
   alert("Please enter a comment!");
   document.createcomment.url.focus();
   return false;
  }
  if(document.createcomment.datum.value == "") {
   alert("Please enter a datum!");
   document.createcomment.url.focus();
   return false;
  }
}
</script>
</head>
<body>
<form name="createcomment" action="http://de.selfhtml.org/cgi-bin/formview.pl" method="post" onsubmit="return chkFormular()">
<fieldset>   
 <pre>
       <legend>Create Comment:</legend>

	<br>
		
		<label for="title">Title:</label>
        <input type="text" Placeholder="Title" name="title" id="title" class="text" />
		
		<label for="title">Title:</label>
        <input type="text" Placeholder="Title" name="title" id="title" class="text" />
        <label for="url">Url:</label>
        <input type="text" Placeholder="Url" name="url" id="url" class="text" />
        <label for="comment">Comment:</label>
        <textarea name="comment" wrap="PHYSICAL" Placeholder="Comment" cols="30" rows="5"></textarea>
        <label for="mapage">Datum:</label>
        <input type="date" Placeholder="Datum" name="datum" id="datum" class="date" />
        <input type="submit" value="Submit" class="button round" id="butcom1"/>
		
 </pre>
</fieldset>
</form>
</body>

</html>
		  
		  
          <style>
            #butcom1 {

               width: 50% ; 
               left: 14%;
               
               background-color: blue;
                
                float: left;
                position: left;

            }
          </style>
        
        </div>
        <div class="content" id="panel2">
<form name="Showcomments" action="http://giv-geosoft2d.uni-muenster.de" method="get">
<fieldset>
	<legend>Comments so far:</legend>


--- hier Kommentare einladen ---


</fieldset>
</form>
  
        </div>
        <div class="content" id="panel3">
		<html>

<body>
<form name="Rating" action="http://de.selfhtml.org/cgi-bin/formview.pl" method="post" onsubmit="return chkFormular2()">
<fieldset>   
 <pre>
    <legend>Rating:</legend>
	
	1 <input type="radio" name="rating" value="1" checked="checked" />
	2 <input type="radio" name="rating" value="2" />
	3 <input type="radio" name="rating" value="3" />
	4 <input type="radio" name="rating" value="4" />
	5 <input type="radio" name="rating" value="5" />
	<input type="submit" value="Submit" class="button round" id="butcom1">

</pre>
</form>
</html>
        </div>
        <div class="content" id="panel4">
		<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<script type="text/javascript">
function chkFormular3 () {
  if (document.Userlogin.mail.value == "") {
    alert("Please enter your email address!");
    document.Userlogin.mail.focus();
    return false;
  }
  if (document.Userlogin.mail.value.indexOf("@") == -1) {
   alert("No email address!");
   document.Userlogin.Mail.focus();
   return false;
  }
  if(document.Userlogin.password.value == "") {
   alert("Please enter your password!");
   document.Userlogin.password.focus();
   return false;
  }
}
</script>
</head>

<body>

<!-- Start Login Formular--------------------------- -->
<?php 

// Only show form to unloggedin visitors
if(IsLoggedIn() == true) {
	echo "Already Loggedin.";
} else {
	echo file_get_contents("form_register.php");
}
?>

<!--------------------- End -->

</body>

</html>
        </div>

        <div class="content" id="panel5">
		<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<script type="text/javascript">
function chkFormular4 () {
  if (document.Userregist.nickname.value == "") {
    alert("Please enter a Nickname!");
    document.Userregist.mail.focus();
    return false;
  }
  if (document.Userregist.mail.value == "") {
    alert("Please enter your email address!");
    document.Userregist.mail.focus();
    return false;
  }
  if (document.Userregist.mail.value.indexOf(".") == -1) {
   alert("No email address!");
   document.Userregist.Mail.focus();
   return false;
}
  if (document.Userregist.mail.value.indexOf(".") >= 3) {
   alert("No email address!");
   document.Userregist.Mail.focus();
   return false;
}
  if (document.Userregist.mail.value.indexOf("@") == -1) {
   alert("No email address!");
   document.Userregist.Mail.focus();
   return false;
  }
  if(document.Userregist.password.value == "") {
   alert("Please enter your password!");
   document.Userregist.password.focus();
   return false;
  }
   if(document.Userregist.password2.value != document.Userregist.password.value) {
   alert("Passwords are not equal!");
   document.Userregist.password2.focus();
   return false;
  }
}
</script>
</head>


<body>

<!-- Start Register Formular--------------------------- -->
<?php 

// Only show form to unloggedin visitors
if(IsLoggedIn() == true) {
	echo "Already registered.";
} else {
	echo file_get_contents("form_register.php");
}
?>

<!--------------------- End -->

</body>
        </div>

      </div>
            
     

    </div>
  </div>
  </div>
  
</div>







<!--Footer 

<footer class"row">
  <div class="large-12 columns">
    <div class="row">
      <div class="large-8 columns">
        
       
        </div>
      <div class="large-4 columns">
       
        <p>links and more</p>
        <style type="text/css">
        #type  {
        height:100%;
        
         position: right;
        }

        </style>
      </div>
    </div>
  </div>
</footer>
-->

  <!-- body content here -->



  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script src="js/foundation/foundation.interchange.js"></script>
  <script src="js/foundation/foundation.offcanvas.js"></script>
  <script>
    $(document).foundation();
    $("#swap").on("replace", function() {
      $(document).foundation();
    });
  </script>
</body>
</html>