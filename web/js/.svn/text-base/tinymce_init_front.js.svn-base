tinyMCE.init({
	// General options
  mode : "specific_textareas",
  editor_selector : "inputareadojo",

	theme : "simple",
  skin : "o2k7",
  
  extended_valid_elements : "div[dojotype|selected|title|id|class]",
  entity_encoding : "named",
  entities : "160,nbsp,38,amp,34,quot,162,cent,8364,euro,163,pound,165,yen,169,copy,174,reg,8482,trade,8240,permil,60,lt,62,gt,8804,le,8805,ge,176,deg,8722,minus",
  
	// Example content CSS (should be your site CSS)
	content_css : "/css/content.css",
  
	// Drop lists for link/image/media/template dialogs
	relative_urls: false,
  convert_urls : false,
  remove_script_host : false,
  template_external_list_url : "lists/template_list.js",
	external_link_list_url : "lists/link_list.js",
	external_image_list_url : "lists/image_list.js",
	media_external_list_url : "lists/media_list.js"

});

function toggleEditor(id) { 
  if (!tinyMCE.get(id))
    tinyMCE.execCommand('mceAddControl', false, id);
  else
    tinyMCE.execCommand('mceRemoveControl', false, id);
}
