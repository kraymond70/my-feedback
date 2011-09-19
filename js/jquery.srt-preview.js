/*
 * @category JS
 * @package Support Request Tool
 * @copyright 2011, 2012 Dmitry Sheiko (http://dsheiko.com)
 * @license GNU
 */

var srtNs = {};
(function( $, srtNs ) {
srtNs.preview =(function() {
    var _node = [];
    var _private = {
        getScreenshot : function() {
            $.ajax({
                'url': 'srt-screenshot.php',
                'type': 'POST',
                'dataType': 'jsonp',
                'jsonpCallback': 'srtNs.preview.renderScreenshot',
                'data': 'requestUri=' + _node.requestUri.val() + '&srt-data=' + _node.data.val()
            });
        },
        onCancel : function(e) {
            e.preventDefault();
            window.location.href =  _node.requestUri.val();
        },
        onSubmit : function() {
            e.preventDefault();
            alert('Here goes your logic');
        }
    };
    return {
            init : function() {                
                _node = {
                    requestUri : $('input[name=requestUri]'),
                    data : $('input[name=srt-data]'),
                    image : $('div.screenshot'),
                    submit : $('button[name=submit]'),
                    cancel : $('button[name=cancel]')
                };
                _node.cancel.bind('click', _private.onCancel);
                _node.submit.bind('click', _private.onSubmit);
                _private.getScreenshot();
            },
            renderScreenshot : function(data) {
                _node.image.append('<img src="' + data.url + '" width="940"  />');
            }
        }
}());
// Document is ready
$(document).bind('ready.app', srtNs.preview.init);

})( jQuery, srtNs );
