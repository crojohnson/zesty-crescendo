<?php
$view = $_REQUEST['view'];

//directions and parking
$pt1 = <<<PT1
<iframe width="600" height="450" frameborder="0" style="border:0" 
src="https://www.google.com/maps/embed/v1/place?q=Falkirk%20Cultural%20Center%2C%20Mission%20Avenue%2C%20San%20Rafael%2C%20CA%2C%20United%20States&key=AIzaSyC1d4U6sIJhJS6pjXG44rmflWYGYVDlg6k"></iframe>
<p>Come join us at the beautiful Falkirk Cultural Center</p>
<p>1408 Mission Avenue at "E" Street
San Rafael, CA 94901
415-485-3328</p>
PT1;

//hotels
$pt2 = <<<PT2
<iframe width="600" height="450" frameborder="0" style="border:0" 
src="https://www.google.com/maps/embed/v1/search?q=hotels%20in%20San%20Rafael%2C%20CA%2C%20United%20States&key=AIzaSyC1d4U6sIJhJS6pjXG44rmflWYGYVDlg6k"></iframe>
PT2;

//local attractions
$pt3 = <<<PT3
PT3;

//about us
$pt4 = <<<PT4
PT4;

//whos who
$pt5 = <<<PT5
PT5;

//faq
$pt6 = <<<PT6
PT6;

//registry
$pt7 = <<<PT7
PT7;

$views = array($pt1,$pt2,$pt3,$pt4,$pt5,$pt6,$pt7);

echo $views[$view];
?>