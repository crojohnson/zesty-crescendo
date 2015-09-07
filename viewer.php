<?php
$view = $_REQUEST['view'];

//directions and parking
$pt0 = <<<PT0
<div class="row">
<div class="col-xs-4">
<address>
  <strong><a href="http://www.falkirkculturalcenter.org/" target="_blank">Falkirk Cultural Center</a></strong><br>
  1408 Mission Avenue at "E" Street<br>
  San Rafael, CA 94901<br>
  <abbr title="Phone">P:</abbr> (415) 485-3328
</address>
</div>
<div class="col-xs-2"></div>
<div class="col-xs-4">
<img src="falkirk.jpg" alt="Falkirk Cultural Center" />
</div>
</div>
<br><br>
<p>In our experience, Google's directions have been accurate. Parking is available in a lot just west (left) of the 
mansion, visible from the street, and in a second lot towards the back of the property, behind the conservatory. 
Additionally, the driveway circling the mansion is available for parking on the side across from the mansion, 
but we ask that you reserve this area for those with mobility challenges.</p><br>
<iframe width="600" height="450" frameborder="0" style="border:0" 
src="https://www.google.com/maps/embed/v1/place?q=Falkirk%20Cultural%20Center%2C%20Mission%20Avenue%2C%20San%20Rafael%2C%20CA%2C%20United%20States&key=AIzaSyC1d4U6sIJhJS6pjXG44rmflWYGYVDlg6k"></iframe>
PT0;

//hotels
$pt1 = <<<PT1
<iframe width="600" height="450" frameborder="0" style="border:0" 
src="https://www.google.com/maps/embed/v1/search?q=hotels%20in%20San%20Rafael%2C%20CA%2C%20United%20States&key=AIzaSyC1d4U6sIJhJS6pjXG44rmflWYGYVDlg6k"></iframe>
PT1;

//local attractions
$pt2 = <<<PT2
<p><a href="http://guides.milespartnership.com/sf/vpg/current/" target="_blank">
Official San Francisco Visitors Planning Guide 2015</a></p>
<p>We recommend traveling around San Francisco by public transportation. The easiest way to pay is with a 
<a href="https://www.clippercard.com">Clipper Card</a>, which you can use on all local transporation systems, 
including <a href="http://www.sfmta.com/">Muni</a> and <a href="http://www.sfmta.com/getting-around/transit/how-ride/how-to-cable-cars">cable 
cars</a> to get around San Francisco, <a href="http://www.actransit.org/">AC Transit</a> to get around the East 
Bay, and <a href="http://www.bart.gov/">BART</a> to get between cities and to the airport.</p>
<p>For taxi service, we recommend the <a href="http://www.flywheel.com" target="_blank">Flywheel App</a> for iPhone or Android.</p>
<p><a href="http://www.sanfrancisco.travel/transportation">General Guide to Bay Area Transportation</a></p>
PT2;

//about us
$pt3 = <<<PT3
<h1>Under construction</h1>
PT3;

//who's who
$pt4 = <<<PT4
<h1>Under construction</h1>
PT4;

//faq
$pt5 = <<<PT5
<dl>
  <dt>What should I wear?</dt>
  <dd>We suggest our guests wear cocktail attire, or your "Sunday best." As our ceremony and much of the 
      reception will be outdoors, we suggest you wear a hat. The ceremony will be held on grass, so please 
      choose your shoes accordingly.</dd>
  <dt>Can I take photos?</dt>
  <dd>We understand you may wish to take photos, and we'd love to see the ones you take! We just ask that you 
  be discreet and mindful of the experience of others when taking them. Our photographer has not asked us to 
  restrict other photography, but we ask that guests are careful not to make her work more difficult. Watch 
  this space for the best way to share your pictures!</dd>
  <dt>Registry?</dt>
  <dd>We've been grown ups for quite some time now, and we really, really don't need anything. But if you feel 
  exceptionally compelled, we're registered at <a href="http://www.popeyes.com" target="_blank">Popeyes House of 
  Chicken</a>.</dd>
</dl>
PT5;

//r.s.v.p.
$pt6 = <<<PT6
<iframe src="https://docs.google.com/forms/d/1y3MrMF38DT4q9weDfpA-mXwtj6DJOu-rSeh2RBhThfE/viewform?embedded=true" width="760" height="800" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
PT6;


$views = array($pt0,$pt1,$pt2,$pt3,$pt4,$pt5,$pt6);

echo $views[$view];
?>