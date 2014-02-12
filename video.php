<?php

include('inc/connect.php');
include('header.php');

$id=$_GET["id"];

$result = mysqli_query($con,"SELECT * FROM videos WHERE id=$id");

while($row = mysqli_fetch_array($result)){
	$title = $row['name'];
	$description = $row['description'];
	$user_id = $row['user_id'];
	$categories_id = $row['categories_id'];
	$date_added = $row['date_added'];
	$url = $row['url'];
}
?>
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit" id="video-unit">
		<div class="container">
			<div class="row">
				<video class="span12" style="background:#000" id="video" preload="auto" autobuffer="" controls="" poster="">
				  	<?php echo '<source src="videos/'.$url.'" type="video/mp4">'; ?>
				  	<!--<source src="movie.ogg" type="video/ogg">-->
					Your browser does not support the video tag.
				</video>
			</div>
		</div>
</div>

<section id="about-video">
	<div class="container">
    	<div class="row">
				<div class="span7">
					<ul id="video-title">
						<li><h3><?php echo $title; ?></h3></li>
						<li><h4 id="author">Author</h4></li>
					</ul>
						<div style="clear: both;"></div>

					<h5><?php echo $date_added; ?></h5>
					<p><?php echo $description; ?></p>
				</div>
				<!--<div id="social-share" class="span4">
					<img src="images/twitter-share.png">
					<img src="images/facebook-share.png">
					<img src="images/pinterest-share.png">
				</div>-->
				<div id="specific_buttons" class="span4 social-share">
				  <div id="twitter" data-url="http://www.cdisports.jamescobbett.co.uk<?php echo $_SERVER['REQUEST_URI']?>" data-title="Share on Twitter"></div>
				  <div id="facebook" data-url="http://www.cdisports.jamescobbett.co.uk<?php echo $_SERVER['REQUEST_URI']?>" data-title="Share on Facebook"></div>
				  <div id="google" data-url="http://www.cdisports.jamescobbett.co.uk<?php echo $_SERVER['REQUEST_URI']?>" data-title="Share on Google Plus"></div>	
				</div>
		</div>
	</div>
</section>

<section id="related-videos">
	<div class="container">
    	<div class="row">
			<div class="span12">
				RELATED VIDEOS //
			</div>	
		</div>
	</div>
</section>

<section id="comments-hottest">
	<div class="container">
    	<div class="row">
			<div class="span6">
				COMMENTS //
<div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'cdisports'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    
			</div>
			<div class="span5">
				THIS WEEKS HOTTEST //
			<div>	
		</div>
	</div>
</section>

<script type="text/javascript">

$('#twitter').sharrre({
      share: { twitter: true },
      url: document.URL,
      enableHover: false,
      enableTracking: true,
      template: '<a class="box" href="#"><div class="count" href="#">{total}</div></a>',
      buttons: { twitter: {via: 'James_Cobbett'}},
      click: function(api, options){
	    api.simulateClick();
	    api.openPopup('twitter');
	  }
    });

    $('#facebook').sharrre({
      share: { facebook: true },
      url: document.URL,
      enableHover: false,
      enableTracking: true,
      template: '<a class="box" href="#"><div class="count" href="#">{total}</div></a>',
      click: function(api, options){
	    api.simulateClick();
	    api.openPopup('facebook');
	  }
    });

    $('#google').sharrre({
	  share: {
	    googlePlus: true
	  },
	  template: '<a class="box" href="#"><div class="count" href="#">{total}</div></a>',
	  enableHover: false,
	  enableTracking: true,
	  click: function(api, options){
	    api.simulateClick();
	    api.openPopup('googlePlus');
	  }
	});
</script>

<?php include('footer.php'); ?>
