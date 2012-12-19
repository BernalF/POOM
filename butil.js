(function ($) {    
    var defaults = {
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
        // Path to Flash and Silverlight plugins
        pluginPath: '/POOM/flxpplugin/',
        // Name of flash file
        flashName: 'flashmediaelement.swf',
        // Name of silverlight file
        silverlightName: 'silverlightmediaelement.xap',
        // Method that fires when the Flash or Silverlight object is ready
        success: undefined,
        // Fires when a problem is detected
        error: undefined       
    }        
    $.fn.extend({
        bideoPlayer: function(options){
            var opts = $.extend({}, defaults, options);
            var button = $(this);                
            if(opts.eventType != ""){
                var evtNamespace = "";
                if(opts.eventNamespace == ""){
                    evtNamespace = button.attr("id");
                }
                else{
                    evtNamespace = opts.eventNamespace;
                }
                button.off(opts.eventType + "." + evtNamespace).on(opts.eventType + "." + evtNamespace, function(){
                    $("#CANLoading").css("display", "block");
                    $.ajax({
                        type : opts.type,
                        url : opts.url,
                        data : opts.data,
                        beforeSend: function(xhr){
                            if (typeof opts.ajaxBeforeSend === "function") {
                                opts.ajaxBeforeSend(xhr);
                            }
                        },
                        cache: opts.cache,
                        dataType: opts.dataType,
                        contentType: opts.contentType,
                        async: opts.async,
                        success: function(response){
                            opts.ajaxSuccess (response);
                            $("#CANLoading").css("display", "none");
                        },
                        error : function(jqXHR, textStatus){
                            (typeof opts.ajaxError === "function") ? opts.ajaxError(jqXHR, textStatus) : myCANUtil.defaultErrorCallback(jqXHR, textStatus);                                                
                        }
                    });       
                });                    
            }                                
        }
    });                      
})(jQuery);

