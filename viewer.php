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
<div class="col-xs-3">
<img src="sign.JPG" alt="Falkirk Sign" />
</div>
<div class="col-xs-3">
<img src="falkirk.jpg" alt="Falkirk Cultural Center" />
</div>
</div>
<br><br>
<dl>
  <dt>Parking</dt>
  <dd>Parking is available in the adjoining lot just west (left) of the mansion, exactly at the interesction of 
    Mission Avenue and E Street, which dead ends at the lot. Additionally, the driveway circling the mansion is 
    available for parking on the side across from the mansion, but we ask that you reserve this area for those with 
    mobility challenges.</dd>
  <dt>Directions</dt>
  <dd>In our experience, Google's directions have been accurate; see the map below to get exact directions from your 
    house or hotel. Otherwise:
    <br><br>
    From San Francisco, take 101 North to exit 452 towards Central San Rafael, and continue onto Irwin Street. After 
    four blocks, turn left onto Mission Street. Stay on Mission as it jogs to the left at B Street. After another block 
    and a half you will find the parking lot on the right, just past the mansion.
    <br><br>
    From the East Bay, take 580 West until it merges into 101 North, and proceed as above.
    <br><br>
    From north of San Rafael, take 101 South to exit 452 towards Central San Rafael, and continue onto Hetherton 
    Street. Turn right onto Mission Street, and proceed as above.</dd>
</dl>
<iframe width="600" height="450" frameborder="0" style="border:0" 
src="https://www.google.com/maps/embed/v1/place?q=Falkirk%20Cultural%20Center%2C%20Mission%20Avenue%2C%20San%20Rafael%2C%20CA%2C%20United%20States&key=AIzaSyC1d4U6sIJhJS6pjXG44rmflWYGYVDlg6k"></iframe>
PT0;

//hotels & local stuff
$pt1 = <<<PT1
<p>If you're looking for things to do in San Francisco while you're here, check out the
<a href="http://guides.milespartnership.com/sf/vpg/current/" target="_blank">Official San Francisco Visitors Planning 
Guide 2015</a> for lots of information about local attractions.</p>
<p>For Zannie & Corey's recommendations for hotels, restaurants, and other amenities in San Rafael, check out the 
different layers on the map below.</p>
<iframe src="https://www.google.com/maps/d/embed?mid=zT6vlfbEBsfE.kPuO3_Y3zcH4" width="640" height="480"></iframe>
PT1;

//transportation
$pt2 = <<<PT2
<p>For getting around around San Francisco proper, we recommend public transportation. The easiest way to pay is with a 
<a href="https://www.clippercard.com">Clipper Card</a>, which you can use on all local transporation systems, 
including <a href="http://www.sfmta.com/">Muni</a> and <a href="http://www.sfmta.com/getting-around/transit/how-ride/how-to-cable-cars">cable 
cars</a> to get around San Francisco, <a href="http://www.actransit.org/">AC Transit</a> to get around the East 
Bay, and <a href="http://www.bart.gov/">BART</a> to get between cities and to the airports.</p>
<p>For taxi service, we recommend the <a href="http://www.flywheel.com" target="_blank">Flywheel App</a> for iPhone 
or Android. Their availability is limited in San Rafael, but plentiful in San Francisco.</p>
<p>For more information, check out the <a href="http://www.sanfrancisco.travel/transportation">Guide to Bay Area Transportation</a>.</p>
<p>Unfortunately, the North Bay (including San Rafael) is not well served by public transportation, so most people 
will probably want to have access to a car.</p>
PT2;

//about us
$pt3 = <<<PT3
<img src="cutecouple.jpg" alt="cute couple" style="float:right; margin:20px" />
<p>Zannie and Corey met on an online dating site in July of 2012, but after a few dates, neither really felt 
that chemistry--but they both did enjoy their time together enough to want to maintain a friendship. They went 
on group camping trips, met up for lunch from time to time, went to shows, and made music together with friends 
or just the two of them. Sometimes Corey would sleep on Zannie's couch in San Francisco instead of making the 
trek back to Oakland if jam night ran late.</p>
<p>By May of 2013, some chemistry had developed! As their friendship deepened into more, Corey taught Zannie 
the basics of how to play the ukulele (which she has since forgotten) and Zannie taught Corey how to drive a 
stick shift. More music, more camping, more shows. Board games, movie nights, work parties and meeting family. 
By the end of 2013, Corey had given up his apartment in Oakland.</p>
<p>In October of 2014, they went to Massachusetts to visit Corey's family and show Zannie where he had grown up. 
After a lovely few days in and around Boston, they took the train to New York, since Zannie had never been. When 
the three hour train trip turned out to include a four hour stop in the middle of nowhere on the border of 
Connecticut and Rhode Island, Zannie remarked that at least the company was good--there was no one she'd rather 
be stuck on a train with.</p>
<p>By the time they arrived in New York, there was just time for a quick slice of pizza and a walk along the 
Highline before checking in to the hotel Corey had chosen in Queens (with a gorgeous view of the New York 
skyline). Ready to relax after a frustrating day, they drew up a bath and got in for a soak with a split of 
bubbly from the mini bar. Before Corey could present the ring, or even really finish asking the question, 
Zannie was hugging him and saying yes.</p>
PT3;

//who's who
$pt4 = <<<PT4
<dl>
  <dt>Shabbir (Officiant)</dt>
  <dd>Our dear friend Shabbir has honored us by agreeing to officiate our ceremony. A friend of Zannie's for some 
  years now through mutual friends, he and Corey quickly bonded over their shared love of music.</dd>
  <dt>Talia (Flower Girl)</dt>
  <dd>Corey is Talia's popeye. (It was supposed to be papa, but Talia had her own way of pronouncing it, and it 
  stuck.) She lives in Richmond, California with her mama Lauren, her brother Levi, and Levi's dad Larry, and 
  also with her mommy Amy and Amy's partner Chris. She likes playing Pretty, Pretty Princess, gymnastics, and 
  jumping on her trampoline.</dd>
  <dt>Becky (Zannie's mom)</dt>
  <dd>Becky lives in Orange, California and is wrapping up a long career in nursing. Having done bedside nursing 
  for over 20 years, more recently she has transitioned into administrative nursing roles. She is an animal lover 
  and a prolific knitter.</dd>
  <dt>Greg (Zannie's dad) &amp; Mary</dt>
  <dd>Greg and Mary live in Elk Grove, California. Greg is retired from a long career with the State of 
  California; having begun as a schoolbus inspector, he transitioned through various civilian roles in the 
  California Highway Patrol, most recently as a database programmer. Mary is retired from working at the 
  Sacramento Bee newspaper in their advertising department. They are enjoying a lot of travel around the United 
  States for fun and family events, as well as various DIY projects at home.</dd>
  <dt>Paul &amp; Rosalie (Corey's parents)</dt>
  <dd>Paul and Rosalie split their time between their longtime home in Woburn, Massachusetts and their 
  second home in St. Augustine, Florida. Paul is retired from a 30 year career in IT. Rosalie is retired from 
  being a teacher and a librarian, in the years she was not a stay at home parent. They enjoy spending time with 
  Corey's sisters Rachel and Abby, Abby's husband Ryan, and their granddaughter Ada, who all live near them in 
  Massachusetts, and enjoy time in the outdoors with their rescue dog Winnie. They also delight in their 
  California grandkids, Talia and Levi.</dd>
PT4;

//faq
$pt5 = <<<PT5
<dl>
  <dt>What should I wear?</dt>
  <dd>We suggest you wear cocktail attire, or dressy casual if that's more comfortable for you. As our ceremony and 
  much of the reception will be outdoors, we suggest you consider wearing a hat and sunscreen. The ceremony and some 
  of the reception  will be held on grass, so please choose your shoes accordingly.</dd>
  <dt>Do you have a registry?</dt>
  <dd>We would be so pleased if you made a donation in any amount to one of our favorite organizations! We have 
  registered for this at <a href="https://thkfl.com/ZestyCrescendo">Thankful</a>, along with some more traditional 
  items in case you just can't stand not getting us something.
  </dd>
  <dt>What if I have special dietary needs?</dt>
  <dd>Dinner will be a buffet, so you will be able to pick and choose what you'd like. Avoiding gluten will be easy. 
  The main dish will be sustainable wild-caught fish; let us know if you would prefer a vegan alternative.</dd>
  <dt>Can I take pictures?</dt>
  <dd>Please do! Your photos of the reception in particular will be much appreciated.
  <br><br>
  We do ask that you give the professional photographer his space though, and especially during the ceremony, please
  consider whether you are blocking someone's view with your camera (<a 
  href="http://stevekeegan.com/blog/blog/how-to-prevent-your-guests-from-ruining-your-wedding-photos">including
  the photographer's</a>). We would also like to look out at our friends and family and see your smiling faces, rather
  than the backs of your phones. We will be able to share all of the professional images with you at no charge, so we
  invite you to enjoy the ceremony without worrying about documenting it.
  <br><br>
  That said, we do hope you will share your photos with us and the other guests! We are using WedPics to make it easy:<br><br>
  <a href="https://www.wedpics.com/wedding/GIZTSMBUGU4A/album">Our WedPics album</a><br>
  <a href="https://itunes.apple.com/us/app/wedpics-wedding-photo-app/id549402355?mt=8">iOS WedPics app</a><br>
  <a href="https://play.google.com/store/apps/details?id=com.dejami.WedPics">Android WedPics app</a><br><br>
  WeddingCode: ZannieCorey
  </dd>
  <dt>Can I bring the kids?</dt>
  <dd>With the exception of immediate family members, we’d like our wedding day to be an adult-only celebration.
  Thanks for your understanding.</dd>
</dl>
PT5;

//r.s.v.p.
$pt6 = <<<PT6
<iframe src="https://docs.google.com/forms/d/1y3MrMF38DT4q9weDfpA-mXwtj6DJOu-rSeh2RBhThfE/viewform?embedded=true" width="760" height="900" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
PT6;


$views = array($pt0,$pt1,$pt2,$pt3,$pt4,$pt5,$pt6);

echo $views[$view];
stupid mistake don't merge
?>
