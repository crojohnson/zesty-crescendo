<!DOCTYPE html>
<html lang="en-us">

<head>
<meta charset="utf-8">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/base.css">
<link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>

<script src="jquery-2.1.4.min.js"></script>
<script src="bootstrap.min.js"></script>

<script>
function naviGate(int) {
  if (window.XMLHttpRequest) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function() {
      if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        document.getElementById("viewer").innerHTML = xmlHttp.responseText;
      }
    };
    xmlHttp.open("GET", "viewer.php?view=" + int, true);
    xmlHttp.send();
  }
}

function startUp() {
    var x = "<div class='cent'><h2>May 21st, 2016</h2></div><div class='cent'>5:00PM</div>";
    x += "<div class='cent'><h1>Zannie &amp; Corey</h1></div>";
    x += "<div class='cent'><h3>are getting hitched!</h3></div><br />";
    x += "<img src='heroshot.jpg' class='img-responsive' id='heroshot' alt='portrait in mexico' />";
    x += "<p>Welcome! We hope you will be able to join us to celebrate our marriage on May 21st at 5pm.</p>";
    x += "<p>We are thrilled to be able to celebrate at the <a href="http://www.falkirkculturalcenter.org/">Falkirk ";
    x += "Cultural Center</a>, an 1888 mansion in San Rafael, operated by their Parks department. " ;
    x += "We will have a brief ceremony in the rose garden, followed by dinner and drinks on the veranda.</p>";
    document.getElementById("viewer").innerHTML = x;
    $(".emph").removeClass('emph');
    document.location.hash = "";
}

function clearTabs() {
    for (var j; j < $(".butn").length; j++) {
        $(this).removeClass('emph');
    }
}

//Set the functions to fire when each menu button(or the jumbotron) is clicked
$(document).ready(function() {
    for (var i = 0; i < $(".butn").length; i++) {
        $(document).on('click', '.butn', function() {
            var x = $(this).attr('id').charAt(2);
            if (x != "m") {
              document.location.hash = "pt" + x;
              $(".emph").removeClass('emph');
              $(this).addClass('emph');
              naviGate(x);
            }
        });
    }
    $(document).on('click', '#home', function() {
        startUp();
    });
  });
</script>

<style>

</style>

</head>

<body onload="document.location.hash ? naviGate(document.location.hash.charAt(3)) : startUp();">
<a name="top"></a>
<div id="nav">
  <ul>
    <li><span class="butn" id="home">Home</span></li>
    <li><span class="butn" id="pt0">Directions & Parking</span></li>
    <li><span class="butn" id="pt1">Hotels & San Rafael Amenities</span></li>
    <li><span class="butn" id="pt2">Bay Area Transportation</span></li>
    <li><span class="butn" id="pt3">About Us</span></li>
    <li><span class="butn" id="pt4">Who's Who</span></li>
    <li><span class="butn" id="pt5">FAQ</span></li>
    <li><span class="butn" id="pt6">R.S.V.P.</span></li>
  </ul>
</div>

<div id="header">
  <img src="sky.JPG" alt="cloudy sky header image" />
</div>

<div class="container">
  <div id="viewer"></div>
</div>

</body>

</html>
