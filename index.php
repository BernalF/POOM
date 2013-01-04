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
                        <p>Hello User</p>
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
                    <video class="videoPlayer" id="player1" preload="none">                        
                        <source type="video/webm" src="media/video/echo-hereweare.webm" />                                                
                    </video>                    
                    <ul class="videos_section">
                        <li class="current" source='{"src":"media/video/echo-hereweare.mp4", "type":"video/mp4"}|{"src":"media/video/echo-hereweare.webm", "type":"video/webm"}'> 
                            <a href="#">
                                <img alt="video1" src="media/video/thumbs/echo-hereweare.jpg" >
                                <span>gangnam-style</span>
                            </a>
                        </li>
                        <li source='{"src":"media/video/echo-hereweare.ogv", "type":"video/ogg"}'>
                            <a href="#" >
                                <img alt="video2" src="media/video/thumbs/echo-hereweare.jpg" >
                                <span>rs_g105.wmv</span>
                            </a>
                        </li>      
                        <li source='{"src":"http://www.youtube.com/watch?v=nOEw9iiopwI", "type":"video/youtube"}'>
                            <a href="#" >
                                <img alt="video3" src="media/video/thumbs/echo-hereweare.jpg" >
                                <span>rs_g105.wmv</span>
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
<script src="js/butil.js"></script>
<script type="text/javascript">    
    $(function(){        
        $('#player1').bmedia({           
            ended: function(e){
                PlayNext(e.target);
            }           
        });        
        
        /*
         * Author: Bernal Fernandez Rojas         
         * Description: Videos Section List click handler
         * Creation Date: December, 2012         
         */
        $('.videos_section li').off('click.videos_section').on('click.videos_section', function() {
            $(this).addClass('current').siblings().removeClass('current');
            var media_src = $(this).attr('source');
            $('video#player1:first').each(function(){
                this.player.pause();                
                this.player.setSrc(getSource(media_src)); 
                this.player.load();
                this.player.play();
            });
        });
        
        /*
         * Author: Bernal Fernandez Rojas         
         * Description: Auto Play next in videos Section
         * Creation Date: December, 2012         
         */        
        function PlayNext(currentPlayer) {
            var media_src="";
            if ($('.videos_section li.current').length > 0){ //Get the current song
                var current_item = $('.videos_section li.current:first'); //:first is added if we have more than once .current
                media_src = $(current_item).next().attr('source');
                $(current_item).next().addClass('current').siblings().removeClass('current');                
            }else{ //If there is no .current
                var current_item = $('.videos_section li:first'); //Get :first if we don't have .current
                media_src = $(current_item).next().attr('source');
                $(current_item).next().addClass('current').siblings().removeClass('current');                
            }
            //If it is the last - Stop playing
            if( $(current_item).is(':last-child') ) { 
                $(current_item).removeClass('current');
            }else{
                currentPlayer.setSrc(getSource(media_source));
                currentPlayer.load();
                currentPlayer.play();
            }
        }            
    });    
</script>
