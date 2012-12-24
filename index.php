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
                    <video class="videoPlayer" id="player1">
                        <source type="video/youtube" src="http://www.youtube.com/watch?v=nOEw9iiopwI" />
                    </video>                    
                    <ul class="videos_section">
                        <li>
                            <a href="#">
                                <img alt="video1" src="http://resources0.news.com.au/images/2012/09/18/1226476/365984-gangnam-style.jpg">
                                <span>gangnam-style</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" >
                                <img alt="" src="http://embed-0.wistia.com/deliveries/77bd981a4f4c48e8a56200e16ade473c23a4627d.jpg?&amp;image_crop_resized=100x60">
                                <span>rs_g105.wmv</span>
                            </a>
                        </li>      
                        <li>
                            <a href="#" >
                                <img alt="" src="http://embed-0.wistia.com/deliveries/77bd981a4f4c48e8a56200e16ade473c23a4627d.jpg?&amp;image_crop_resized=100x60">
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
            ended: function(){
                alert("make the popud");
            }
        });
    });    
</script>
