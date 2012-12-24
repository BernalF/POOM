(function ($) {    
    var defaults = {
        evtNamespace: '',
        //Shows debug errors on screen
        showConsoleResults: false,
        //Loops
        loop: false,
        //Enables Flash and Silverlight to resize to content size
        autosize: true,
        //The order of controls you want on the control bar (and other plugins below)
        controlsBar: ['playpause','progress','current','duration','tracks','volume','fullscreen'],
        //Remove or reorder to change plugin priority
        pluginsPriority: ['flash','silverlight'],
        //Hide controls when playing and mouse is not over the video
        alwaysShowControls: false,
        // show framecount in timecode (##:00:00:00)
        showTimecodeFrameCount: false,
        // used when showTimecodeFrameCount is set to true
        framesPerSecond: 25,
        // auto-select this language (instead of starting with "None")
        startLanguage:'None',
        // automatically translate into these languages
        translations:[],
        // enable the dropdown list of languages
        translationSelector: false,
        //Force iPad's native controls
        iPadControls: false,	
        //Force iPhone's native controls
        iPhoneControls: false,		
        //Force Android's native controls
        AndroidControls: false,
        //Turns keyboard support on and off for this instance
        enableKeyboard: true,
        //When this player starts, it will pause other players
        pauseOtherPlayers: true,
        // array of keyboard commands
        keyActions: [],
        //Specify to force MediaElement to use a particular video or audio type
        forceType: '',
        // Path to Flash and Silverlight plugins
        pluginPath: '/POOM/flxpplugin/',
        // Name of flash file
        swfName: 'flashmediaelement.swf',
        // Name of silverlight file
        xapName: 'silverlightmediaelement.xap',
        // Method that fires when the Flash or Silverlight object is ready
        success: undefined,
        // Fires when a problem is detected
        error: undefined,
        loadstart: undefined,
        play: undefined,
        pause: undefined,
        ended: undefined        
       
    }        
    $.fn.extend({
        bmedia: function(options){
            var opts = $.extend({}, defaults, options);            
            $(this).mediaelementplayer({
                enablePluginDebug: opts.showConsoleResults,
                loop: opts.loop,
                enableAutosize: opts.autosize,
                features: opts.controlsBar,
                plugins: opts.pluginsPriority,
                alwaysShowControls: opts.alwaysShowControls,                
                iPadUseNativeControls: opts.iPadControls,	
                iPhoneUseNativeControls: opts.iPhoneControls,		
                AndroidUseNativeControls: opts.AndroidControls,
                enableKeyboard: opts.enableKeyboard,
                pauseOtherPlayers: opts.pauseOtherPlayers,
                type: opts.forceType,
                pluginPath: opts.pluginPath,
                flashName: opts.swfName,
                silverlightName: opts.xapName,
                success: function(mediaElement, domObject){                    
                    //Success Event
                    if(opts.success != undefined)
                        opts.success(mediaElement, domObject);
                    
                    var evtNamespace = '';                    
                    (opts.eventNamespace == '') ? evtNamespace = $(this).attr('id') : evtNamespace = opts.eventNamespace;                    
                    
                    //loadstart Event
                    if(opts.loadstart != undefined){
                        $(mediaElement).off('loadstart.' + evtNamespace).on('loadstart.' + evtNamespace , function() {
                            opts.loadstart();
                        }); 
                    }
                    //Play event
                    if(opts.play != undefined){
                        $(mediaElement).off('play.' + evtNamespace).on('play.' + evtNamespace , function() {
                            opts.play();
                        }); 
                    }
                    //Pause Event
                    if(opts.pause != undefined){
                        $(mediaElement).off('pause.' + evtNamespace).on('pause.' + evtNamespace , function() {
                            opts.pause();
                        }); 
                    }
                    //Ended Event
                    if(opts.ended != undefined){
                        $(mediaElement).off('ended.' + evtNamespace).on('ended.' + evtNamespace , function() {
                            opts.ended();
                        }); 
                    }                    
                },
                error: function (e) { 
                    alert(e);
                }
            });           
        }
    });                      
})(jQuery);


/*
 * jYoutube 1.0 - YouTube video image getter plugin for jQuery
 *
 * Copyright (c) 2009 jQuery Howto
 *
 * Licensed under the GPL license:
 *   http://www.gnu.org/licenses/gpl.html
 *
 * Plugin home & Author URL:
 *   http://jquery-howto.blogspot.com
 *
 */
(function($){
    $.extend({
        jYoutube: function( url, size ){
            if(url === null)
                return "";            
            size = (size === null) ? "big" : size;
            var vid;
            var results;
            results = url.match("[\\?&]v=([^&#]*)");
            vid = ( results === null ) ? url : results[1];
            if(size == "small"){
                return "http://img.youtube.com/vi/"+vid+"/2.jpg";
            }else {
                return "http://img.youtube.com/vi/"+vid+"/0.jpg";
            }
        }
    })
})(jQuery);
