dojo.require("dijit.layout.TabContainer");
dojo.require("dojo_widgets.banners.BannerPicker");
dojo.require("dojo_widgets.banners.ResourceUpload");

dojo.addOnLoad( function() 
  {
  dojo.connect(dijit.byId('accountTabContainer'),"selectChild","getAccountNode");
  }
);

getAccountNode = function ( e  ) {
  var the_href="/"+e.title.toLowerCase().replace(" settings","");
  var thepath = window.location.pathname.split("/");
  if (("/" + thepath[1]) != the_href) {
    window.location.href = the_href;
  }
}
