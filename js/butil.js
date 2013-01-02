/*
 * Author: Bernal Fernandez Rojas
 *
 * Description: Default error Callback funtion
 * 
 * Creation Date: March, 2012
 * 
 */
function defaultErrorCallback (jqXHR, textStatus){
    if (jqXHR.status === 0) {
        alert('Not connect.\n Verify Network.', jqXHR.status);                
    } else if (jqXHR.status == 404) {
        alert('Requested page not found.', jqXHR.status);                
    } else if (jqXHR.status == 500) {
        alert('Internal Server Error.', jqXHR.status);                
    } else if (textStatus === 'parsererror') {
        alert('Requested JSON parse failed.', jqXHR.status);                
    } else if (textStatus === 'timeout') {
        alert('Time out error.', jqXHR.status);                
    } else if (textStatus === 'abort') {
        alert('Ajax request aborted.', jqXHR.status);                
    } else {
        alert('Uncaught Error.\n', jqXHR.responseText);                
    }          
}

/*
 * Author: Bernal Fernandez Rojas
 * 
 * Description: Generic Function to execute Ajax Request with any action
 * 
 * Creation Date: July, 2012
 * 
 */
(function ($) {  
    var defaults = {
        eventType: '',
        eventNamespace: '',
        type: 'POST',
        url: '',
        data: {},
        cache: true,
        dataType: 'html',
        contentType: 'application/x-www-form-urlencoded',
        async: true,        
        ajaxBeforeSend: undefined,
        ajaxSuccess: undefined,
        ajaxError: undefined             
    }        
    $.extend({
        bAjax: function(options){
            var opts = $.extend({}, defaults, options);                               
            $.ajax({
                type : opts.type,
                url : opts.url,
                data : opts.data,
                beforeSend: function(xhr){
                    if (opts.ajaxBeforeSend != undefined)
                        opts.ajaxBeforeSend(xhr);                    
                },
                cache: opts.cache,
                dataType: opts.dataType,
                contentType: opts.contentType,
                async: opts.async,
                done: function(response){
                    if(opts.ajaxSuccess != undefined)
                        opts.ajaxSuccess (response);
                },
                fail: function(jqXHR, textStatus){
                    (opts.ajaxError != undefined) ? opts.ajaxError(jqXHR, textStatus) : defaultErrorCallback(jqXHR, textStatus);                        
                }
            });                          
        }                                                         
    });            
    $.fn.extend({
        bAjax: function(options){
            var opts = $.extend({}, defaults, options);
            var button = $(this);                
            if(opts.eventType != ''){
                var evtNamespace = '';                
                (opts.eventNamespace == '') ? evtNamespace = button.attr('id') : evtNamespace = opts.eventNamespace;                                
                button.off(opts.eventType + '.' + evtNamespace).on(opts.eventType + '.' + evtNamespace, function(){                    
                    $.ajax({
                        type : opts.type,
                        url : opts.url,
                        data : opts.data,
                        beforeSend: function(xhr){
                            if (opts.ajaxBeforeSend != undefined)
                                opts.ajaxBeforeSend(xhr);                            
                        },
                        cache: opts.cache,
                        dataType: opts.dataType,
                        contentType: opts.contentType,
                        async: opts.async,
                        done: function(response){
                            if(opts.ajaxSuccess != undefined)
                                opts.ajaxSuccess (response);                            
                        },
                        fail: function(jqXHR, textStatus){
                            (opts.ajaxError != undefined) ? opts.ajaxError(jqXHR, textStatus) : defaultErrorCallback(jqXHR, textStatus);                                                
                        }
                    });       
                });                    
            }                                
        }
    });                      
})(jQuery);

/*
 *
 * Author: Bernal Fernandez Rojas
 *
 * Description: Generic Function to play media on the browser
 *
 * Creation Date: December, 2012
 * 
 */
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
        pluginPath: '/POOM/fxplugin/',
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
                        $(mediaElement).off('loadstart.' + evtNamespace).on('loadstart.' + evtNamespace , function(e) {
                            opts.loadstart(e);
                        }); 
                    }
                    //Play event
                    if(opts.play != undefined){
                        $(mediaElement).off('play.' + evtNamespace).on('play.' + evtNamespace , function(e) {
                            opts.play(e);
                        }); 
                    }
                    //Pause Event
                    if(opts.pause != undefined){
                        $(mediaElement).off('pause.' + evtNamespace).on('pause.' + evtNamespace , function(e) {
                            opts.pause(e);
                        }); 
                    }
                    //Ended Event
                    if(opts.ended != undefined){
                        $(mediaElement).off('ended.' + evtNamespace).on('ended.' + evtNamespace , function(e) {
                            opts.ended(e);
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
                return '';            
            size = (size === null) ? 'big' : size;
            var vid;
            var results;
            results = url.match('[\\?&]v=([^&#]*)');
            vid = ( results === null ) ? url : results[1];
            if(size == 'small')
                return 'http://img.youtube.com/vi/'+vid+'/2.jpg';
            else 
                return 'http://img.youtube.com/vi/'+vid+'/0.jpg';            
        }
    })
})(jQuery);

/*
* Author: Bernal Fernandez Rojas
* 
* Description: String Builder implementation in Javacript
* 
* Creation Date: March, 2012
* 
*/
//Initializes a new instance of the StringBuilder class and appends the given value if supplied
function StringBuilder(value) {
    this.strings = [];
    this.append(value);
}
//Appends the given value to the end of this instance.
StringBuilder.prototype.append = function(value) {
    if(value) {
        this.strings.push(value);
    }
}
//Clears the string buffer
StringBuilder.prototype.clear = function() {
    this.strings.length = 1;
}
//Converts this instance to a String.
StringBuilder.prototype.toString = function() {
    return this.strings.join('');
}

function getSource(mediaSource){
    var aSource = mediaSource.split('|');  
    srcObj = [];
    $.each(aSource, function(key, val){
        srcObj.push($.parseJSON(val));
    });    
    return srcObj;
}