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
        <header id="Top">
            <a class="transition" href="#"><h1 class="logo30">POOM</h1></a>
            <nav>
                <ul class="iconsNav">

                </ul>
                <ul class="globalNav">

                </ul>
            </nav>
        </header>
        <section id="Main">            
            <div id="grid_main">
                <div id="grid_center">
                    <!--<object bgcolor="#000000" style="display:inline-block;display:inline;height:100%;margin:0;
                                                padding:0;position:relative;vertical-align:top;width:100%;zoom:1;" 
                                                classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
                                                id="wistia_11"><param value="http://embed-0.wistia.com/flash/embed_player_v2.0.swf?2012-06-01" 
                                                              name="movie"><param value="true" name="allowfullscreen">
                                            <param value="always" name="allowscriptaccess">
                                            <param value="opaque" name="wmode">
                                            <param value="autoLoad=false&amp;autoPlay=false&amp;banner=true&amp;controlsVisibleOnLoad=false&amp;customColor=161617&amp;endVide
                                                   oBehavior=default&amp;hdUrl=&amp;mediaDuration=31.2&amp;playButtonVisible=true&amp;showVolume=true&amp;stillUrl=http%3A%2F%2
                                                   Fembed-0.wistia.com%2Fdeliveries%2Ffb28388058455bc5e2aec1122f56f47fc5dea1ae.jpg%3Fimage_crop_resized%3D320x240&amp;unbufferedSeek=true
                                                   &amp;videoUrl=http%3A%2F%2Fembed-0.wistia.com%2Fdeliveries%2F3f9cd64473bccd6f4d9f8a53ff675b925eca4c3f.bin&amp;
                                                   embedServiceURL=http%3A%2F%2Fdistillery.wistia.com%2Fx&amp;accountKey=wistia-production_41649&amp;mediaID=wistia-production_2473963" 
                                                   name="flashvars">
                                            <embed bgcolor="#000000" style="display:inline-block;display:inline;height:100%;margin:0;padding:0;position:relative;vertical-align:top;
                                                   width:100%;zoom:1;" flashvars="autoLoad=false&amp;autoPlay=false&amp;banner=true&amp;controlsVisibleOnLoad=false&amp;
                                                   customColor=161617&amp;endVideoBehavior=default&amp;hdUrl=&amp;mediaDuration=31.2&amp;playButtonVisible=true&amp;
                                                   showVolume=true&amp;stillUrl=http%3A%2F%2Fembed-0.wistia.com%2Fdeliveries%2Ffb28388058455bc5e2aec1122f56f47fc5dea1ae.jpg%
                                                   3Fimage_crop_resized%3D320x240&amp;unbufferedSeek=true&amp;videoUrl=http%3A%2F%2Fembed-0.wistia.com%2Fdeliveries%2F3f9cd64473bccd6f4d9
                                                   f8a53ff675b925eca4c3f.bin&amp;embedServiceURL=http%3A%2F%2Fdistillery.wistia.com%2Fx&amp;accountKey=wistia-production_41649&amp;
                                                   mediaID=wistia-production_2473963" wmode="opaque" allowscriptaccess="always" allowfullscreen="true" type="application/x-shockwave-flash" 
                                                   name="wistia_11" src="http://embed-0.wistia.com/flash/embed_player_v2.0.swf?2012-06-01">
                                        </object>-->
                    <video style="height:100%;position:relative;vertical-align:top;width:100%;" id="player1">
                        <source type="video/youtube" src="http://www.youtube.com/watch?v=nOEw9iiopwI" />
                    </video>
<!--                    <span style="display: block; background-color: red;">asdasdasdasd</span>-->
                </div>
                <div id="grid_right_inside" >
                    <div id="grid_right">                                
                        <div id="sections">                                        
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
                            </ul>
                        </div>           
                    </div>
                </div>    
            </div>
        </section>
        <footer class="footer">
            <p class="textCenter">POOM is a new way of Marketing, All Rights Reserved</p>
        </footer>
        <script src="js/jquery-1.8.3.js"></script>
        <script src="js/mediaelement-and-player.js"></script>
    </body>
</html>
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
