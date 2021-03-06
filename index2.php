<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>POOM Labs</title>
        <link rel="stylesheet" href="css/mediaelementplayer.css" />	
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <div style="width: 45%; float:right">
            <video width="320" height="240" poster="poster.jpg" controls="controls" preload="none">
                <!--Youtube Source-->
                <source type="video/youtube" src="http://www.youtube.com/watch?v=nOEw9iiopwI" />
                <!-- MP4 for Safari, IE9, iPhone, iPad, Android, and Windows Phone 7 -->
                <source type="video/mp4" src="media/video/echo-hereweare.mp4" />
                <!-- WebM/VP8 for Firefox4, Opera, and Chrome -->
                <source type="video/webm" src="media/video/echo-hereweare.webm" />
                <!-- Ogg/Vorbis for older Firefox and Opera versions -->
                <source type="video/ogg" src="media/video/echo-hereweare.ogv" />

                <!-- Flash fallback for non-HTML5 browsers without JavaScript -->
                <object width="320" height="240" type="application/x-shockwave-flash" data="fxplugin/flashmediaelement.swf">
                    <param name="movie" value="fxplugin/flashmediaelement.swf" />
                    <param name="flashvars" value="controls=true&file=media/video/echo-hereweare.mp4" />
                    <!-- Image as a last resort -->
                    <img src="loading.gif" width="320" height="240" title="No video playback capabilities" />
                </object>
            </video>
        </div>
        <!--        <div style="width: 45%; float: left;">
                    <video width="640" height="360" style="width: 100%; height: 100%;" id="player1">
                        <source type="video/youtube" src="http://www.youtube.com/watch?v=nOEw9iiopwI" />
                    </video>
                </div>-->
        <script src="js/jquery-1.8.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
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
