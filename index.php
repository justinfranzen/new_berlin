<title>New Berlin Bowl &amp; Ale House</title>
  <meta name="description" content="We feature a 28 lane lane bowling alley along with an ale house equipped with 30 beers on tap with a specious sports bar and dining atmosphere">
  <meta name="keywords" content="New Berlin Ale House, New Berlin bowl, New Berlin volleyball, new berlin banquets">
<?php
include 'includes/header.php';
?>


<script src="http://code.jquery.com/jquery.js"></script>
<script src="src/skdslider.min.js"></script>
<link href="src/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({delay:5000, animationSpeed: 2000,showNextPrev:true,showPlayButton:true,autoSlide:true,animationType:'fading'});
			jQuery('#demo2').skdslider({delay:5000, animationSpeed: 1000,showNextPrev:true,showPlayButton:false,autoSlide:true,animationType:'sliding'});
			jQuery('#demo3').skdslider({delay:5000, animationSpeed: 2000,showNextPrev:true,showPlayButton:true,autoSlide:true,animationType:'fading'});
			
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			  $(window).trigger('resize');
			});
			
		});
</script>
<style type="text/css">
body{ margin:0; padding:0;}
.demo-code{ background-color:#ffffff; border:1px solid #333333; display:block; padding:10px;}
.option-table td{ border-bottom:1px solid #eeeeee;}
</style>



<body>
    
<div id="main">
    
    
            <div class="skdslider">
                <ul id="demo1" class="slides">
            <li>
            <img src="src/image/new-berlin-bowl.jpg" />
             <div class="slide-desc">
                    <h2>28 Lane Bowling Alley</h2>
                     <!--Slider Description example--<p>Demo description here. Demo description here. Demo description here. Demo description here. Demo description here. <a class="more" href="#">more</a></p>
            ---->
              </div>
            </li>
            <li><img src="src/image/new-berlin-bowl2.jpg" />
               <div class="slide-desc">
                    <h2>28 Lane Bowling Alley</h2>
                 <!------ <p>Demo description here. Demo description here. Demo description here. Demo description here. Demo description here. <a class="more" href="#">more</a></p>
            ----> 
              </div>  
            </li>
            <li><img src="src/image/new-berlin-ale-house.jpg" />
             <div class="slide-desc">
                    <h2>New Berlin Ale House</h2>
                   <!-----  <p>Demo description here. Demo description here. Demo description here. Demo description here. Demo description here. <a class="more" href="#">more</a></p>
-               --->
              </div>
            </li>
            <li><img src="src/image/new-berlin-ale-house2.jpg" />
              <div class="slide-desc">
                    <h2>New Berlin Ale House</h2>
                   <!----- <p>Demo description here. Demo description here. Demo description here. Demo description here. Demo description here. <a class="more" href="#">more</a></p>
                    ----->
              </div>
            </li>
                <li><img src="src/image/banquet-center.jpg" />
              <div class="slide-desc">
                   <h2>Banquet Center</h2>
                   <!------  <p>Demo description here. Demo description here. Demo description here. Demo description here. Demo description here. <a class="more" href="#">more</a></p>
----->
              </div>
            </li>
              <li><img src="src/image/new-berlin-pro-shop.jpg" />
             <div class="slide-desc">
                    <h2>Pro Shop</h2>
                  <!------   <p>Demo description here. Demo description here. Demo description here. Demo description here. Demo description here. <a class="more" href="#">more</a></p>
                ---->
              </div>
            </li>
            </ul>
        </div>

    <div class="content content2">
        
        <h1>New Berlin Bowl &amp; Ale House</h1>
        
        <br>
        
        <div class="row">
            
            <div class="col-lg-7 col-md-7 col-sm-12">
                
                <p>We feature a 28 lane lane bowling alley along with an ale house equipped with 30 beers on tap with a specious sports bar and dining atmosphere. In addition to our bowling alley and ale house, we also have a banquet center and volleyball court.</p>
                    
                <p>Our banquet center is able to seat up to 350 guests. Also, if you are looking for a summer or fall league, our outdoor volleyball courts are always available and equipped with an outdoor bar for food and and beverage services.</p>
                
                <p>New Berlin Bowl &amp; Ale House offers several ammentities to accomodate your entertainment needs. Take a look at our <a href="gallery.php" id="gallery-link">gallery</a> page to view our spacious areas of entertainment.</p>
                
            </div>
            
             <div class="col-lg-5 col-md-5 col-sm-12">
                
                <img src="images/new-berlin.jpg" alt="New Berlin Bowl & Ale House" id="new-berlin" />
                
            </div>
        
        </div>
        
    </div>
    
    <div id="blurb-section">
        
            <div class="row">
        
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    
                    <div class="blurb-section">
                    
                        <img src="images/bowling.gif" class="blurb-image" alt="Bowling" />
                        
                        <p class="blurb-title">Bowling</p>
                        
                            <ul class="blurb-info">
                                <li>Full Service Pro Shop</li>
                                <li>Qubica scoring system</li>
                                <li>AMF HPL sythetic lanes &amp; wood approaches</li>
                                <li>Multiple HDTV's</li>
                                <li>Fully stocked bar w/ daily specials</li>
                            </ul>
                        
                        <p class="more-info"><a href="#">More info</a></p>
                    
                    </div>
                
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    
                    <div class="blurb-section two">
                    
                        <img src="images/ale-house.gif" class="blurb-image" alt="Ale House" />
                        
                        <p class="blurb-title">Ale House</p>
                        
                            <ul class="blurb-info">
                                <li>Outdoor deck overlooking 8 volleyball courts</li>
                                <li>Video games</li>
                                <li>Dart Boards</li>
                            </ul>
                        
                        <p class="more-info"><a href="#">More info</a></p>
                        
                    </div>
                
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    
                    <div class="blurb-section three">
                    
                        <img src="images/banquets.gif" class="blurb-image" alt="Banquet Hall" />
                        
                        <p class="blurb-title">Banquet Hall</p>
                        
                            <ul class="blurb-info">
                                <li>Seating &amp; parking for up to 350 guests</li>
                                <li>Reasonably priced food &amp; beverages</li>
                                <li>Separate party room for meetings for 20 to 50 people</li>
                            </ul>
                        
                        <p class="more-info"><a href="#">More info</a></p>
                        
                    </div>
                
                </div>
        
            </div>
        
        </div>
        
    </div>
    
</body>
    
<?php
include 'includes/footer.php';
?>