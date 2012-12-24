<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>HTML5 MediaElement</title>

        <script src="js/jquery-1.8.3.js"></script>
        <script src="js/mediaelement-and-player.js"></script>

        <link rel="stylesheet" href="css/mediaelementplayer.css" />

        <style>
            .mejs-list li:hover {
                background: #ffa;
                cursor: pointer;
            }
            .mejs-list li.current {
                background: #cddfff;
            }
        </style>

        <script>
            $(function(){
                $('video,audio').mediaelementplayer({
                    pluginPath: '/POOM/flxpplugin/',
                    success: function (mediaElement, domObject) {
                        mediaElement.addEventListener('ended', function (e) {
                            mejsPlayNext(e.target);
                        }, false);
                    },
                    keyActions: []
                });

                $('.mejs-list li').click(function() {
                    $(this).addClass('current').siblings().removeClass('current');
                    var audio_src = $(this).text();
                    $('audio#mejs:first').each(function(){
                        this.player.pause();
                        this.player.setSrc(audio_src);
                        this.player.play();
                    });
                });

            });

            function mejsPlayNext(currentPlayer) {
                if ($('.mejs-list li.current').length > 0){ // get the .current song
                    var current_item = $('.mejs-list li.current:first'); // :first is added if we have few .current classes
                    var audio_src = $(current_item).next().text();
                    $(current_item).next().addClass('current').siblings().removeClass('current');
                    console.log('if '+audio_src);
                }else{ // if there is no .current class
                    var current_item = $('.mejs-list li:first'); // get :first if we don't have .current class
                    var audio_src = $(current_item).next().text();
                    $(current_item).next().addClass('current').siblings().removeClass('current');
                    console.log('elseif '+audio_src);
                }

                if( $(current_item).is(':last-child') ) { // if it is last - stop playing
                    $(current_item).removeClass('current');
                }else{
                    currentPlayer.setSrc(audio_src);
                    currentPlayer.play();
                }
            }
        </script>

    </head>

    <body>

        <audio id="mejs" src="media/audio/audio-01.mp3" type="audio/mp3" controls="controls"></audio>
        <ul class="mejs-list">
            <li class="current">media/audio/audio-01.mp3</li>
            <li>media/audio/audio-02.mp3</li>
            <li>media/audio/audio-03.mp3</li>
        </ul>

    </body>
</html>