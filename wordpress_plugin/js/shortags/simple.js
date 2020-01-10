jQuery(document).ready(function($) {

    tinymce.create('tinymce.plugins.flstBubble_plugin', {
        init : function(ed, url) {
                // Register command for when button is clicked
                ed.addCommand('flstBubble_insert_shortcode', function() {
                    selected = tinyMCE.activeEditor.selection.getContent();




ed.windowManager.open({
	// call content via admin-ajax, no need to know the full plugin path
	file : '/wp-content/plugins/flstplugin/form.html',
	width : 500,
	height : 500,
	inline : 1
	}, {
	plugin_url : url // Plugin absolute URL
	});


       
                });

            // Register buttons - trigger above command when clicked
            ed.addButton('flstBubble_button', {title : 'Insert shortcode', cmd : 'flstBubble_insert_shortcode', image: url + '/icon.gif' });
        // Add a node change handler, selects the button in the UI when a image is selected
        	ed.onNodeChange.add(function(ed, cm, n) {
          cm.setActive('themedelta', n.nodeName == 'IMG');
          });
        },
        getInfo : function() {
        	return {
        	longname  : 'flstBubble_button',
        	author       : 'flstBubble_button',
        	authorurl : 'http://www.flester.ro/',
        	infourl   : 'http://www.flester.ro/',
        	version   : "1.0"
        	};
        	}
    });

    // Register our TinyMCE plugin
    // first parameter is the button ID1
    // second parameter must match the first parameter of the tinymce.create() function above
    tinymce.PluginManager.add('flstBubble_button', tinymce.plugins.flstBubble_plugin);



 });