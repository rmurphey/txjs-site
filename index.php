<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <meta http-equiv="Content-Style-Type" content="text/css" /> 
    <link rel="icon" href="favicon.ico" type="image/x-icon" /> 
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> 
    <meta name="author" content="http://yayquery.com/" /> 
    <title>TXJS | Texas Javascript Conference - June 5th, 2010</title> 
    <link type="text/css" rel="stylesheet" media="all" href="css/base.css?2" /> 
	<link rel="stylesheet" href="css/jquery.ui.core.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/jquery.ui.theme.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/jquery.ui.tooltip.css" type="text/css" media="all">

	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head> 
<body> 
	<ul id="banner">
		<li class="news"><strong>News:</strong> Microsoft is sponsoring a shuttle to get you to &amp; from The Marchesa!</li>
		<a href="http://twitter.com/txjs"><li class="twitter">Follow @txjs on Twitter</li></a>
	</ul>
	
	<div id="wrapper">

	<section id="mainbar">
		<header id="flag"> 
		    <h1>TXJS</h1> 
		    <h2>June 5th, 2010</h2> 
		    <h3>Austin, TX</h3> 
		</header>

		<section id="content">
			<header>
				<h2 class="code">var TXJS = JS + BBQ + you;</h2>
			</header>

			<p class="intro">TXJS is a full-day conference in Austin, Texas, featuring some of the best minds in JavaScript.</p>
						
			<ul>
				<li><strong>Friday Night</strong> Gather your strength for a full day of JavaScript by joining us at <a href="http://www.gingermanpub.com/">The Ginger Man</a> in downtown Austin from 6 p.m. - 8 p.m. for TXJS Hapy Hour. Sponsored by <a href="http://facebook.com">Facebook</a> &mdash; the first two beers are on the house!</li>
				<li><strong>Saturday Day</strong> A whole lotta JavaScripters hanging out from 9 a.m. - 6 p.m. at the <a href="http://www.themarchesa.com/">Marchesa Hall &amp; Theater</a> &mdash; we&rsquo;ll have three rooms with speakers going all day, plus a lounge for informal conversation and hacking. <strong>Registration starts at 8:15 a.m.</strong></li>
				<li><strong>Saturday Night</strong> After the conference, get your JavaScript on with a hack night and party at <a href="http://www.texascoworking.com/">Texas Coworking</a> on Austin&rsquo;s fabulous Sixth Street, sponsored by <a href="http://google.com">Google</a> and hosted by <a href="http://twitter.com/austinjs">Austin JS</a>.</li>
			</ul>


		<section id="schedule">
			<header>
				<h2 class="code">Schedule</h2>
			</header>
			<table border="0">
				<thead>
					<tr>
						<th scope="col" width="10%">&nbsp;</th>
						<th scope="col" width="25%">Track A: Theater</th>
						<th scope="col" width="25%">Track B: Hall</th>
						<th scope="col" width="25%">Track C: Annex</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row"></th>
						<td colspan="3">A shuttle bus will be available to take you from the Driskill Hotel in downtown Austin to The Marchesa. <strong>The shuttle will start at 8am, and the last pickup will be at 9am.</strong></td>
					</tr>
					<tr>
						<th scope   = "row">8:15-9:00</th>
						<td colspan = "3"><strong>Registration</strong></td>
					</tr>
					<tr>
						<th scope   = "row">9:00-9:10</th>
						<td><strong>Welcome</strong></td>
						<td colspan="2" class="inactive">&nbsp;</td>
					</tr>
					<tr>
						<th scope   = "row">9:10-9:20</th>
						<td colspan = "3" class="break">Break</td>
					</tr>
					<tr>
						<th scope   = "row">9:20-10:10</th>
						<td>
							<strong>Douglas Crockford</strong>: Really, JavaScript?
							<aside>
								<p>First misunderstanding, then huge semipopularity, and now, respect. Despite its many obvious deficiencies, JavaScript has gotten something profoundly right. What does the future hold for this duckling?</p>
							</aside>
						</td>
						<td><strong>Tom Occhino</strong>: Front End Abstractions at Facebook
							<aside>
								<p>Facebook has seen incredible growth over the past few years and currently has over 400 million active users.  In order to face some of the challenges that come with such tremendous growth, we've developed some advanced abstractions around our front end infrastructure.  These systems allow us to write more modular code, serve pages up faster, provide our users with a better experience, and save us money.</p>
								<p>In my talk I'll go over some of these abstractions like Haste, Primer, Quickling, PageCache, and BigPipe, in order to paint a better picture of how Facebook works, and give the audience some ideas of how to architect their own systems around technologies that have proven to be very successful for Facebook.
								</p>
							</aside>
						</td>
						<td><em>Track C will be open for any attendee to present a talk; signups will be first-come, first served on the day of the conference.</em></td>
					</tr>
					<tr>
						<th scope   = "row">10:10-10:20</th>
						<td colspan = "3" class="break">Break</td>
					</tr>
					<tr>
						<th scope   = "row">10:20-11:00</th>
						<td><strong>John Resig</strong></td>
						<td><strong>Mike Taylor</strong>: Regressive Enhancement, or HTML5 for crappy browsers
							<aside>
								<p>In this talk the audience will learn how to use JavaScript, in conjunction with feature detection, in order to use the new semantic elements provided by HTML5 (i.e., &lt;header&gt;, &lt;footer&gt;, &lt;nav&gt;), as well as emulate the new input types (i.e., type=date, type=range) and input attributes (i.e., autofocus, list, pattern), in a cross-browser, future-proof fashion. In order to do this, we'll walk through the creation of a few example jQuery plugins ($.fn.autofocus, $.fn.placeholder, $.fn.datalist).</p>
								<p>Note that the primary focus will not be the specific mechanics of these example plugins--but rather how to use JavaScript as a stopgap solution while browser vendors work on implementing native support for these new features.</p>
								<p>Alas, using HTML5 today is not all magic and ponies--there are certain risks. As such, this talk also discusses the risks of using these new elements and features in today’s most popular browsers with partial or no HTML5 support (what’s up, Internet Explorer), including AJAX, CSS (for screen and print media), and interacting with the DOM via jQuery.</p>
							</aside>
						</td>
						<td>Open</td>
					</tr>
					<tr>
						<th scope   = "row">11:00-11:10</th>
						<td colspan = "3" class="break">Break</td>
					</tr>
					<tr>
						<th scope   = "row">11:10-11:50</th>
						<td><strong>Dan Webb</strong>: Building @anywhere: A Client-side Interface to Twitter
							<aside>
								<p>@anywhere is a platform which provides developers with the ability to create fully featured Twitter applications from pure client-side JavaScript.  This presentation will quickly introduce @anywhere then dive into what it took to build the platform.  We'll talk cross-domain communication, client-only authentication and security, iframes (oh, the iframes!) and lots more as in order to explain what it took to provide Twitter's API over pure JavaScript and how you could use similar techniques to expose a pure JavaScript interface to your web application.</p>
							</aside>
						</td>
						<td><strong>Joe McCann</strong>: Rapid Prototyping with JavaScript
							<aside>
								<p>The area of Research and Development (R&D) in software, web and user interface engineering is making quite a statement in many large and small scale organizations lately.  With such a vast amount of data and web service APIs available to developers, coupled with a huge demand for multiple systems integrating seamlessly across several platforms and devices, it should come as no surprise that companies are creating “Labs” departments left and right to create the “next big thing.”</p>
								<p>In order to cultivate innovative products and services, designers and developers need to research, ideate, and collaborate to develop creative approaches to current products or services, or even fill voids for users for products or services that have not been created.  Developers need to quickly build out prototypes of these ideas in order to not only implement the ideas and prove the value of the concept, but to also provide new products and/or services for the business itself (and keep the R&D department alive!).</p>
								<p>Rapid prototyping is exactly as it sounds:  creating a prototype of a concept or an idea in a very short amount of time. For years, such rapid prototyping and development of various simulations was heavily dominated by the Flash and Actionscript world.  Now, with the speed and power of current JavaScript interpreters and its ubiquity across arguably the most used piece of software known to man (the web browser), JavaScript, in harmony with HTML and CSS is quickly becoming a go to resource for hashing out proofs of concepts.</p>
								<p>From My Presentation, You Will Learn&hellip;</p>
								<ul>
									<li>What rapid prototyping is and why it is important.
									<li>Some actual results of rapid prototyping (case studies).
									<li>What tools you can use to build rapid prototypes (Titanium Desktop, Phonegap, HTML5 and CSS3, etc.).
									<li>The value of technologies like YQL and various web service APIs
								</ul>
							</aside>
						</td>
						<td>Open</td>
					</tr>
					<tr>
						<th scope   = "row">11:50-12:00</th>
						<td colspan = "3" class="break">Break</td>
					</tr>
					<tr>
						<th scope   = "row">12:00-12:40</th>
						<td><strong>Paul Irish</strong>: 10 Things I Learned from the jQuery Source
							<aside>
								<p>Paul Irish will open the jQuery source on the big screen, and run through how the jQuery object works.<p>
								<p>This talk will cover self executing anonymous functions as a global abatement technique, several interesting methods, internal jQuery paradigms, hiddenhancements, plugin architecture, and the evented model of application design.</p>
								<p>So both javascript topics you can apply to your own code, along with the basics of how jQuery itself works.</p>
							</aside>
						</td>
						<td><strong>Eugene Lazutkin</strong>: Dojo for Programmers
							<aside>
								<p>What Dojo offers to programmers: modules, OOP, AOP, FP. Overview of most popular techniques, and how Dojo implements them.</p>
							</aside>
						</td>
						<td>Open</td>
					</tr>
					<tr>
						<th scope   = "row">12:40-1:40</th>
						<td colspan = "3" class="break"><p>Lunch &mdash; Open Bar sponsored by <a href="http://mediatemple.net"><img src="http://s1.mt-cdn.net/_images/partnerlogos/mt-160x30-dk__7b47849.jpg" alt="(mt) Media Temple"></a></p></td>
					</tr>
					<tr>
						<th scope   = "row">1:40-2:20</th>
						<td><strong>Nicole Sullivan</strong>: The Top 5 Mistakes of Massive CSS
							<aside>
								<p>Your website has out-of-control CSS bloat. You know your performance is being impacted, but how do you move from organic CSS with no particular architecture to something lighter, more logical, and easier to maintain? In this session, Nicole Sullivan will show you how she improved the CSS at Facebook, Yahoo!, and the W3C.</p>
							</aside>
						</td>
						<td><strong>Alex Sexton</strong>: Breaking The Cross Domain Barrier
							<aside>
								<p>If you had to rank the best and worst moments of your JavaScript life, you'd probably rank reading "The Good Parts" up towards the top, and deep down at the bottom of the list would be the day that you found out that you couldn't make cross-domain requests in the browser. This talk covers the hacks, tips, and tricks to leave the Same Origin Policy in the dust. So grab a cookie, pad your json, and learn how to communicate properly.</p>
							</aside>
						</td>
						<td>Open</td>
					</tr>
					<tr>
						<th scope   = "row">2:20-2:30</th>
						<td colspan = "3" class="break">Break</td>
					</tr>
					<tr>
						<th scope   = "row">2:30-3:10</th>
						<td><strong>Tom Hughes-Croucher</strong>: JavaScript Everywhere! Creating a 100% JavaScript web stack
							<aside>
								<p>One of the costs of working on the web has traditionally been having to work in multiple languages. JavaScript has been the only choice for web front-ends but as soon as you start back-end work it can be anything from PHP to Python from Perl to Ruby or even C. Everything that is but JavaScript.</p>
								<p>In the last year server-side JavaScript has leapt forward with a passion, partly due to CommonJS but also due to Node.js. With these new advances we have an opportunity to enjoy more code re-use, and faster more efficient pages.</p>
								<p>This talk will explore server-side JavaScript and look at how we are using a JavaScript DOM/BOM to run YUI3 on Node.js. This allows us to:</p>
								<ul>
								   <li>Reuse the same code on the client and the server
								   <li>Deliver targeted experiences to various classes of client
								   <li>Smoke Test DOM operations during continuous integration
								</ul>
						</td>
						<td><strong>Andrew Dupont</strong>: How Custom Events Will Save The Universe
							<aside>
								<p>All the major frameworks support custom events. All framework authors love custom events and want you to <em>use</em> them. But few people actually do.</p>
								<p>Custom events aren't a gimmick. The ability to fire your own events -- just like the browser fires <code>click</code>, <code>mousemove</code>, <code>focus</code>, and all the rest -- can solve many of the problems large JS projects face.</p>
								<p>This talk will look at a handful of different recipes for integrating custom events into your own code. It'll show you how to fire custom events in each of the major JavaScript frameworks. It'll explore the advantages custom events have over a standard callback pattern.</p>		
							</aside>
						</td>
						<td>Open</td>
					</tr>
					<tr>
						<th scope   = "row">3:10-3:20</th>
						<td colspan = "3" class="break">Break</td>
					</tr>
					<tr>
						<th scope   = "row">3:20-4:00</th>
						<td><strong>Juriy Zaytsev</strong>: Dive into ECMAScript 5
							<aside>
								<p>5th edition of ECMAScript (aka ES5) is the new, shiny version of ECMAScript standard — standard that defines what we know as Javascript. Officially completed only few months ago, ECMAScript 5 brings a whole slew of exciting new features, as well as changes to already existing functionality.</p>
								<p>In this presentation, we'll dive into ECMAScript 5 to find out what makes it awesome. We'll talk about new model of "meta" attributes, and how it allows to create more robust code; we'll look at new strict mode, additions to built-in methods, and fixes to some of the annoying features of previous edition.</p>
							</aside>
						</td>
						<td><strong>Brandon Aaron</strong>: Special Events: Beyond Custom Events
							<aside>
								<p>Working with events is just part of working with the web. Events help us keep track of what our users are doing, what our server is sending us, and how one part of our app can communicate with another part. jQuery's event system is flexible and intuitive, letting you handle both DOM and custom events with the same API. What if you could hook directly into jQuery's event system to add additional functionality to events as they are bound and unbound? You could create some pretty awesome and complex custom events, and you can do it with jQuery right now! They are called Special Events. Learn how to create events that go beyond just the standard custom event.</p>
							</aside>
						</td>
						<td>Open</td>
					</tr>
					<tr>
						<th scope   = "row">4:00-4:10</th>
						<td colspan = "3" class="break">Break</td>
					</tr>
					<tr>
						<th scope   = "row">4:10-4:50</th>
						<td><strong>Peter Higgins</strong>: It's Just JavaScript
							<aside>
								<p>A pro-anti-library discussion illustrating how painfully similar library functionality is, and how, in the end, it is all "Just JavaScript". Having a sound understanding of the language should not only be a prerequisite to using a "Library" but will make your understanding and proficiency with said Library exponentially better.</p>
							</aside>
						</td>
						<td><strong>Tim Caswell</strong>: Writing a real-time game with NodeJS
							<aside>
								<p>Thanks to the hard work of the people at CommonJS and Ryan Dahl's work on NodeJS, server-side JavaScript is not only a possibility, but a remarkable way to make simple, fast servers.  This talk will quickly go over the architecture of node, why it's fast and simple at the same time.  We'll discuss the benefits of the single threaded model and why you would even care.</p>
								<p>Then the talk will shift gears and walk the audience through building the backend to a real-time multi-player game that uses the latest and greatest technologies in the browser.  We'll go over various techniques needed to manage code complexity and the high-level concepts used to keep several players on different browsers in sync with each-other.</p>
							</aside>
						</td>
						<td>Open</td>
					</tr>
					<tr>
						<th scope   = "row">4:50-5:00</th>
						<td colspan = "3" class="break">Break</td>
					</tr>
					<tr>
						<th scope   = "row">5:00-5:40</th>
						<td><strong>Brian LeRoux</strong>: F#$% Yeah, Mobile JavaScript	
							<aside>
<p>The rundown on the mobile web and how your JavaScript can even more awesome using XUI, Lawnchair and PhoneGap. This talk will be a gnarly journey through the urban jungle that is the mobile landscape and, like spiderman, we'll be throwing webs all over the place. Face!</p>
							</aside>							
						</td>
						<td><strong>Kyle Simpson</strong>: Web Performance &amp; UI Architecture
							<aside>
							<p>We all know that web performance optimization is becoming critical to the success of web sites/applications. The problem is, we often don't have the control over the UI Architecture ("middle-end") that we need to really make things better.</p>
							<p>We'll talk about how to use JavaScript (client- and server-side) to revamp the middle-end so we can throttle web performance (and code maintainability) to the next level.</p>
							<ul>
								<li>BikechainJS server-side JavaScript
								<li>HandlebarJS templating
								<li>LABjs client-side script loading
								<li>LABjs on the server!						
							</ul>
						</td>
						<td>Open</td>
					</tr>
					<tr>
						<th scope   = "row">5:40-6:00</th>
						<td><strong>Thanks and wrapup</strong></td>
						<td colspan = "2" class="inactive">&nbsp;</td>
					</tr>
					<tr>
						<th scope="row"></th>
						<td colspan="3">A shuttle bus will be available to take you from The Marchesa back to downtown Austin, dropping off at Texas Coworking (across the street from the Driskill Hotel). <strong>The shuttle will start at 6pm, and the last pickup will be at 7pm.</strong></td>
					</tr>
				</tbody>
			</table>
		</section>


			<h2 class="code">Speakers</h2>
			<ul class="speakers">
				<li>
					<img src="images/brandon_aaron.jpg" alt="Brandon Aaron">
					<p><strong>Brandon Aaron</strong>, jQuery team member</p>
				</li>
				<li>
					<img src="images/tim_caswell.jpg" alt="Tim Caswell">
					<p><strong>Tim Caswell</strong>, Node.js contributor and founder of <a href="http://howtonode.org">howtonode.org</a></p>
				</li>
				<li>
					<img src="images/douglas_crockford.jpg" alt="Douglas Crockford">
					<strong>Douglas Crockford</strong>, JavaScript architect at Yahoo! and author of "JavaScript: The Good Parts"
				</li>
				<li>
					<img src="images/tom_croucher.jpg" alt="Tom Hughes-Croucher">
					<p><strong>Tom Hughes-Croucher</strong>, technical evangelist at Yahoo!</p>
				</li>
				<li>
					<img src="images/andrew_dupont.jpg" alt="Andrew Dupont">
					<p><strong>Andrew Dupont</strong>, Prototype core team member</p>
				</li>
				<li>
					<img src="images/peter_higgins.jpg" alt="Peter Higgins">
					<p><strong>Peter Higgins</strong>, Dojo project lead</p>
				</li>
				<li>
					<img src="images/paul_irish.jpg" alt="Paul Irish">
					<p><strong>Paul Irish</strong>, jQuery team member and yayQuery podcast co-host</p>
				</li>
				<li>
					<img src="images/brian_leroux.jpg" alt="Brian LeRoux">
					<p><strong>Brian LeRoux</strong>, software architect at Nitobi and PhoneGap hacker/contributor</p>
				</li>
				<li>
					<img src="images/joe_mccann.jpg" alt="Joe McCann">
					<p><strong>Joe McCann</strong>, senior technologist at Frog Design</p>
				</li>
				<li>
					<img src="images/tom_occhino.jpg" alt="Tom Occhino">
					<p><strong>Tom Occhino</strong>, Facebook</p>
				</li>
				<li>
					<img src="images/john_resig.jpg" alt="John Resig">
					<p><strong>John Resig</strong>, creator of the jQuery JavaScript library</p>
				</li>
				<li>
					<img src="images/alex_sexton.jpg" alt="Alex Sexton">
					<p><strong>Alex Sexton</strong>, labs engineer at Bazaarvoice and yayQuery podcast co-host</p>
				</li>
				<li>
					<img src="images/kyle_simpson.jpg" alt="Kyle Simpson">
					<p><strong>Kyle Simpson</strong>, author of LABjs</p>
				</li>
				<li>
					<img src="images/adam_sontag.jpg" alt="Adam Sontag">
					<p><strong>Adam Sontag</strong>, jQuery UI developer relations team member and yayQuery podcast co-host</p>
				</li>
				<li>
					<img src="images/nicole_sullivan.jpg" alt="Nicole Sullivan">
					<p><strong>Nicole Sullivan</strong>, CSS ninja and performance engineer</p>
				</li>
				<li>
					<img src="images/mike_taylor.jpg" alt="Mike Taylor">
					<p><strong>Mike Taylor</strong>, HTML5 aficionado and front-end developer at Tunecore</p>
				</li>
				<li>
					<img src="images/dan_webb.jpg" alt="Dan Webb">
					<p><strong>Dan Webb</strong>, Twitter</p>
				</li>
				<li>
					<img src="images/juriy_zaytsev.jpg" alt="Juriy Zaytsev">
					<p><strong>Juriy Zaytsev</strong> (aka @kangax), expert JavaScript wrangler and Prototype core developer</p>
				</li>
			</ul>
		
		</section>
		
	</section>

	<section id="promos">
		<article>
			<header>
				<h4>Presented by</h4>
			</header>
			<p><a href="http://bazaarvoice.com"><img src="images/bazaarvoice_small.png" alt="Bazzarvoice"></a></p>
			<p>Saturday, June 5, 9am-6pm</p>
			<p><a href="http://www.themarchesa.com/">Marchesa Hall &amp; Theater</a><br>
			6406 N IH-35 Suite 3100<br>
			Austin, TX 78752</p>		
		</article>

		<article>
			<header>
				<h4>Saturday hack night &amp; party sponsored by</h4>
			</header>
			<p style="text-align:center"><a href="http://www.google.com"><img src="http://www.rebeccamurphey.com/stuff/white_online.gif" alt="Google" /></a></p>
		</article>
		
		<article>
			<header>
				<h4>Friday night happy hour at<br> The Ginger Man sponsored by</h4>
				<p style="text-align:center"><a href="http://facebook.com"><img src="/images/facebook_logo.png" alt="Facebook"></a></p>
			</header>
		</article>
		
		<article>
			<header>
				<h4>Open bar at The Marchesa sponsored by</h4>
				<p style="text-align:center"><a href="http://mediatemple.net"><img src="http://s2.mt-cdn.net/_images/partnerlogos/mt-180x150-lt__6e06a4b.jpg" alt="(mt) Media Temple"></a></p>
			</header>
		</article>
		
		<article>
			<header>
				<h4>Shuttle bus to and from The Marchesa sponsored by</h4>
				<p style="margin:10px 0"><a href="http://microsoft.com"><img src="/images/microsoft.png" alt="Microsoft"></a></p>
			</header>
		</article>
		
		<article class="sponsors amenity_sponsors">
			<header>
				<h4>Amenity Sponsors</h4>
			</header>
			<p><a href="http://couch.io"><img src="/images/couchio.png" alt="Couchio"></a></p>
			<p><a href="http://environmentsforhumans.com/"><img src="/images/e4h.png" alt="Environments for Humans"></a></p>
			<p><a href="http://github.com"><img src="/images/github.png" alt="Github"></a></p>
			<p><a href="http://nitobi.com"><img src="/images/nitobi.png" alt="Nitobi"></a></p>
		</article>

		<article class="sponsors">
			<header>
				<h4>Media Sponsors</h4>
			</header>
			<p><a href="http://atxwebshow.com"><img src="/images/atxwebshow.png" alt="ATX Web Show"></a></p>
			<p><a href="http://jsmag.com"><img src="/images/jsmag.png" alt="JSMag"></a></p>
			<p><a href="http://thechangelog.com"><img src="http://static.tumblr.com/njo56hx/GrCktl97v/changelog-title-alt.png" alt="The Changelog"></a></p>
		</article>

		<article>
			<header>
				<h4>Hosted by the yayQuery Podcast</h4>
			</header>
			<p style="text-align:center"><a href="http://yayQuery.com"><img src="images/yayQueryLogo.png" alt="yayQuery"></a></p>
		</article>
		
	</section>
	</div>
	
	<div id="parallax"> 
	   <!-- <div id="bluebonnets"><img src="images/bluebonnets.jpg" width="333" height="208" alt="" /></div> -->
	    <div id="cloud1"><img src="images/cloud.png" width="542" height="317" alt="" /></div> 
	    <div id="cloud2"><img src="images/cloud.png" width="542" height="317" alt="" /></div> 
	    <div id="cloud3"><img src="images/rainbow_clouds.png" width="386" height="303" alt="" /></div> 
	</div> 
	
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js" type="text/javascript"></script> 
    <script src="js/jquery.jparallax.js" type="text/javascript"></script> 
    <script src="js/jquery.hoverIntent.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript"> 
	// Localize
	window.TX = $;
	TX(function(){
	    (function(){
		var plx = TX('#parallax'),
		    win = TX(window);
		plx.width(win.width());
		plx.height(win.height())
	    })();
	
	    // Parallax
	    TX('#parallax').jparallax({},
		{xtravel: '50px', ytravel: '0px'},
		{xtravel: '200px', ytravel: '90px'},
		{xtravel: '300px', ytravel: '100px'},
		{xtravel: '400px', ytravel: '110px'},
		{xtravel: '0px', ytravel: '0px'}
	    );
	    
	    TX('#cloud1').css({'top':'10%', 'left': '80%'});
	    TX('#cloud2').css({'top':'50%', 'left': '20%'});
	    TX('#cloud3').css({'top':'60%', 'left': '75%'});

		// Tooltips
		var tipwidth = TX("td.break").first().outerWidth(),
			tip = TX("<div id='txtip' class='ui-tooltip ui-widget ui-widget-content'></div>").width(tipwidth).appendTo("body");
		TX("#schedule td:has(aside)")
		.each(function() {
			var t = TX(this),
				tooltip = t.find("aside").addClass("ui-tooltip-content").detach();
			t.hoverIntent(function(e) {
				//f my life
				var pos = t.position()
				pos.top += t.outerHeight();
				pos.left = t.closest("tr").children().eq(1).offset().left;
				tip.stop(1,1).html(tooltip).css(pos).animate({
						height:"show"
					},800,"easeInCirc");
			},function(e) {
				tip.stop(1,1).animate({
					height:"hide"
				},800,"easeOutCirc");
				
			});
			
		})
	});
    </script> 
</body> 
</html>
