<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/defaults.css" />	
        <link rel="stylesheet" href="css/home.css" />
        <link rel="stylesheet" href="css/mediaelementplayer.css" />
        <title>POOM</title>
    </head>
    <body>
    <div id="MainContainer">
        <header id="Top">
            <h1 class="logo30"><a class="transition" href="#">POOM</a></h1>
            
            <ul class="userInfo">
            	<li class="userName">
                	<p>Hello Caleb</p>
                    <p><a href="#">Option 1</a> <a href="#">Option 2</a></p>
                </li>
            	<li class="userImage"></li>
            </ul>
            
        </header>
        
        <nav>
            <ul class="globalNav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Home</a></li>
            </ul>
        </nav>
        
        <section id="Main"> 
                   
            <div class="centerHolder">      
                <video class="videoPlayer" id="player1">
                    <source type="video/youtube" src="http://www.youtube.com/watch?v=nOEw9iiopwI" />
                </video>
                    
                <ul class="wistia_bento_section" id="section_0_container">
                    <li class="selected">
                        <a href="#" class="wistia_bento_item" id="item_0_0">
                            <img alt="" src="http://embed-0.wistia.com/deliveries/fb28388058455bc5e2aec1122f56f47fc5dea1ae.jpg?&amp;image_crop_resized=100x60" class="wistia_bento_item_thumb">
                            <span class="wistia_bento_item_name">Pepsi.wmv</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="wistia_bento_item" id="item_0_1">
                            <img alt="" src="http://embed-0.wistia.com/deliveries/77bd981a4f4c48e8a56200e16ade473c23a4627d.jpg?&amp;image_crop_resized=100x60" class="wistia_bento_item_thumb">
                            <span class="wistia_bento_item_name">rs_g105.wmv</span>
                        </a>
                    </li>
                    <li class="selected">
                        <a href="#" class="wistia_bento_item" id="item_0_0">
                            <img alt="" src="http://embed-0.wistia.com/deliveries/fb28388058455bc5e2aec1122f56f47fc5dea1ae.jpg?&amp;image_crop_resized=100x60" class="wistia_bento_item_thumb">
                            <span class="wistia_bento_item_name">Pepsi.wmv</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="wistia_bento_item" id="item_0_1">
                            <img alt="" src="http://embed-0.wistia.com/deliveries/77bd981a4f4c48e8a56200e16ade473c23a4627d.jpg?&amp;image_crop_resized=100x60" class="wistia_bento_item_thumb">
                            <span class="wistia_bento_item_name">rs_g105.wmv</span>
                        </a>
                    </li>
                    <li class="selected">
                        <a href="#" class="wistia_bento_item" id="item_0_0">
                            <img alt="" src="http://embed-0.wistia.com/deliveries/fb28388058455bc5e2aec1122f56f47fc5dea1ae.jpg?&amp;image_crop_resized=100x60" class="wistia_bento_item_thumb">
                            <span class="wistia_bento_item_name">Pepsi.wmv</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="wistia_bento_item" id="item_0_1">
                            <img alt="" src="http://embed-0.wistia.com/deliveries/77bd981a4f4c48e8a56200e16ade473c23a4627d.jpg?&amp;image_crop_resized=100x60" class="wistia_bento_item_thumb">
                            <span class="wistia_bento_item_name">rs_g105.wmv</span>
                        </a>
                    </li>
                    <li class="selected">
                        <a href="#" class="wistia_bento_item" id="item_0_0">
                            <img alt="" src="http://embed-0.wistia.com/deliveries/fb28388058455bc5e2aec1122f56f47fc5dea1ae.jpg?&amp;image_crop_resized=100x60" class="wistia_bento_item_thumb">
                            <span class="wistia_bento_item_name">Pepsi.wmv</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="wistia_bento_item" id="item_0_1">
                            <img alt="" src="http://embed-0.wistia.com/deliveries/77bd981a4f4c48e8a56200e16ade473c23a4627d.jpg?&amp;image_crop_resized=100x60" class="wistia_bento_item_thumb">
                            <span class="wistia_bento_item_name">rs_g105.wmv</span>
                        </a>
                    </li>
                </ul>  
            </div>
            
        </section>
        
</div>

<footer class="footer">
    <p class="textCenter">POOM is a new way of Marketing, All Rights Reserved</p>
</footer>
        
</body>
    
</html>
<script src="js/jquery-1.8.3.js"></script>
<script src="js/mediaelement-and-player.js"></script>
<script type="text/javascript">    
    
    
    $(function(){
        
        $('video').mediaelementplayer({
            //Shows debug errors on screen
            enablePluginDebug: false,
            //Loops
            loop: false,
            //Enables Flash and Silverlight to resize to content size
            enableAutosize: true,
            //The order of controls you want on the control bar (and other plugins below)
            features: ['playpause','progress','current','duration','tracks','volume','fullscreen'],
            //Remove or reorder to change plugin priority
            plugins: ['flash','silverlight'],
            //Hide controls when playing and mouse is not over the video
            alwaysShowControls: false,
            //Force iPad's native controls
            iPadUseNativeControls: false,	
            //Force iPhone's native controls
            iPhoneUseNativeControls: false,		
            //Force Android's native controls
            AndroidUseNativeControls: false,
            //Turns keyboard support on and off for this instance
            enableKeyboard: true,
            //Turns keyboard support on and off for this instance
            pauseOtherPlayers: true,
            //Specify to force MediaElement to use a particular video or audio type
            type: '',
            // path to Flash and Silverlight plugins
            pluginPath: '/POOM/flxpplugin/',
            // name of flash file
            flashName: 'flashmediaelement.swf',
            // name of silverlight file
            silverlightName: 'silverlightmediaelement.xap',
            // method that fires when the Flash or Silverlight object is ready
            success: function (mediaElement, domObject) { 		
                // add event listener
                $(mediaElement).bind('ended', function(e) {
                    alert(1);
                });                
                mediaElement.play();
            },
            // fires when a problem is detected
            error: function (e) { 
                alert(e);
            }
        });    
    });
    
</script>
