<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="../favicon.ico" type="image/x-icon" /> 
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" /> 
    <meta name="author" content="http://yayquery.com/" /> 
    <title>TXJS | Texas Javascript Conference - Hapy Hour and Hack Night RSVP</title> 
    <link type="text/css" rel="stylesheet" media="all" href="css/base.css" /> 
</head> 
<body>
	<div id="main-container">
		<div id="headergroup">
			<h1>TXJS</h1>
			<h4>presented by <a href="http://bazaarvoice.com/">Bazaarvoice</a></h4>
		</div>
		<h2>Party Time RSVP <br />Mega Form</h2>
		
		<div id="description">
			Hi there Javascripter, <br />
			We'd like you to let us know if you're coming to some of our extra-curricular activities so we know what to plan for! Thanks!<br />
			<div class="sig">&lt;3,  yayQuery</div>
			<span class="notice">* Though we wish everyone could come, please only rsvp if you have purchased a conference ticket, thanks.</span>
		</div>
		<div id="spin-container">
			<ul id="formlist">
				<li id="rsvp1" class="event">
					<h3>Hack Night <span class="sponsoredby">sponsored by <a href="http://google.com/">Google</a></span></h3>
					<ul class="partyinfo">
						<li><span class="date">June 5th, 7-11pm</span> at Texas Coworking <a href="http://maps.google.com/maps?q=texas+coworking,+200+E+6th+Street+301,+Austin,+TX,+78701&hl=en&cd=25&ei=q2F9S_jvBJH6ygTfvuTZCA&sig2=cW0Ipk2_jLPjPAODjUHG7w&sll=30.14514,-97.950145&sspn=0.623771,0.639088&ie=UTF8&view=map&cid=8077190397748215426&ved=0CBwQpQY&hq=texas+coworking,+200+E+6th+Street+301,+Austin,+TX,+78701&hnear=&source=embed&ll=30.267852,-97.741005&spn=0.01225,0.022724&t=h&z=16&iwloc=A" class="maplink">map</a></li>
						<li class="odd">Beer and Pizza provided</li>
						<li>Bring your laptops and your brainz (wifi provided)</li>
						<li class="odd">Apply what you learned with the help of the people who taught it to you</li>
						<li>On 6th St. for easy post-hacking fun</li>
					</ul>
				</li>
				<li id="rsvp2" class="event">
					<h3>Friday Hapy Hour <span class="sponsoredby">sponsored by <a href="http://facebook.com/">Facebook</a></span></h3>
					<ul class="partyinfo">
						<li><span class="date">June 4th, 6-8pm</span> at The Gingerman <a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=gingerman+austin&sll=30.267852,-97.741005&sspn=0.01225,0.022724&ie=UTF8&hq=gingerman&hnear=Austin,+TX&ll=30.266925,-97.744396&spn=0.011787,0.022724&t=h&z=16&iwloc=A" class="maplink">map</a></li>
						<li class="odd">A few free beers from a <a href="http://aus.gingermanpub.com/draught.html">wide selection</a></li>
						<li>Not Mega Laptop friendly on Friday nights, but there is wi-fi</li>
						<li class="odd">Meet a bunch of the speakers, make friends and go through the schedule</li>
						<li>Downtown and close to W. 6th for all you classy drinkers</li>
					</ul>
				</li>
			</ul>
			<form id="rsvpform" name="rsvpform" action="" method="post">
				<fieldset>
					<dl id="namegroup">
						<dt><label for="fullname">Full Name</label></dt>
						<dd><input type="text" name="fullname" id="fullname" /></dd>
					</dl>
					<dl id="emailgroup">
						<dt><label for="email">Email Addy</label></dt>
						<dd><input type="email" name="email" id="email" /></dd>
					</dl>
					<div id="checkboxgroup">
						<dl>
							<dt><label for="beer">I drink beer</label></dt>
							<dd><input type="checkbox" name="beer" id="beer" /></dd>
						</dl>
						<dl>
							<dt><label for="fri">Attending Hapy Hour</label></dt>
							<dd><input type="checkbox" name="fri" id="fri" /></dd>
						</dl>
						<dl>
							<dt><label for="sat">Attending Hack Night</label></dt>
							<dd><input type="checkbox" name="sat" id="sat" /></dd>
						</dl>
					</div>
					<div class="btns">
						<button type="submit" name="submit" id="submit" value="window.txjs.RSVP();">window.txjs.RSVP();</button>
					</div>
				</fieldset>
			</form>
			<br class="clear" />
		</div>
	</div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script>

    </script> 
</body> 
</html>