<html>
    <head>
        <title>jYoutube - jQuery YouTube plugin demo</title>
        <script src="js/jquery-1.8.3.js"></script>
        <script src="js/butil.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                // Get youtube video thumbnail on user click
                var url = '';
                $('#submit').click(function(){
                    // Check for empty input field
                    if($('#url').val() != ''){
                        // Get youtube video's thumbnail url
                        // using jYoutube jQuery plugin
                        url = $.jYoutube($('#url').val(), 'small');
            
                        // Now append this image to <div id="thumbs">
                        $('#thumbs').append($('<img src="'+url+'" />'));
                    }
                });
            });
        </script>

    </head>
    <body>

        <div class="left">
            <h1>Submit YouTube link</h1>
            <form>
                <input type="text" name="url" id="url"/>
                <input type='button' value="Get Thumbnail" id="submit"/>
            </form>

            <p>Your YouTube video thumbs:</p>
            <div id="thumbs"> </div>

    </body>
</html>