<!DOCTYPE >
<html>
    <head><title>Video Example</title></head>
    <body>
        <div id="container">
            <div id="wistia_sgdw9winkb" class="wistia_embed" style="width:627px;height:240px;" data-video-width="320" data-video-height="240">&nbsp;</div>
            <script charset="ISO-8859-1" src="http://fast.wistia.com/static/concat/E-v1%2Cplaylist-v1%2Cplaylist-v1-bento%2CrequireEmail-v1.js"></script>
            <script>
                wistiaPlaylist = Wistia.playlist("sgdw9winkb", {
                    version: "v1",
                    theme: "bento",
                    videoOptions: {
                        volumeControl: true,
                        playerColor: "161617",
                        autoPlay: true,
                        videoWidth: 320,
                        videoHeight: 240
                    },
                    media_0_0: {
                        autoPlay: true,
                        controlsVisibleOnLoad: false
                    }
                });
                Wistia.plugin.requireEmail(wistiaPlaylist, {
                    version: "v1",
                    topText: "Enter your email address\nto view this video.",
                    videoIndex: 1
                });
            </script>
        </div>

    </body>
</html>
<script type="text/javascript" src="js/jquery-1.8.3.js"></script>