// JavaScript Document
dojo.registerModulePath("dojo_widgets","/js/dojo/dojo_widgets");
dojo.registerModulePath("dojo","/js/dojo/dojo");
dojo.registerModulePath("dijit","/js/dojo/dijit");
dojo.registerModulePath("dojox","/js/dojo/dojox");

// scan page for widgets and instantiate them
dojo.require("dojo.parser");	
dojo.require("dijit.layout.ContentPane");

//Floating Pane
dojo.require("dojox.layout.FloatingPane");

// Local Widgets
dojo.require("dojo_widgets.layout.AutoTitlePane");
dojo.require("dojo_widgets.layout.AutoPane");
dojo.require("dojo_widgets.layout.HitchPane");

//Accordion container
dojo.require("dijit.layout.AccordionContainer");
dojo.require("dojox.fx.easing");
dojo.require("dojox.fx.scroll");

// for the Tree
dojo.require("dojo.data.ItemFileReadStore");

// Tooltip
dojo.require("dijit.Tooltip");

// Wishlist
dojo.require("dojo_widgets.faq.FAQ");
dojo.require("dojo_widgets.search.Search");


dojo.addOnLoad( function() 
  {
  dojo.parser.parse();
  fillJSONContainer( document );
  }
);

deleteIcon = function ( el, form ) {
  if (confirm('Are you sure you want to delete this image?')) {
    var thid = el.id;
    var ahidden = el.previousSibling;
    ahidden.setAttribute("value","true");
    el.parentNode.parentNode.style.display="none";
  }
}

function appendVar( aurl, key, value ) {
  var re = new RegExp(/\?/);
  delim = (re.exec( aurl )) ? "&" : "?";
  if (key == "date") {
  var d = new Date();
    return aurl + delim + "ts=" + d.getTime();
  } else {
    return aurl + delim + key + "=" + value;
  }
}

function getURL( theURL, handler, type, async ) {
   dojo.xhrGet({
      url: theURL,
      handle: handler,
      handleAs: type,
      async: async,
      load: function(type, data, evt){ 
        return data;
      },
      error: function(type, error){},
      mimetype: "text/plain"
  });
}

function hitURL( theURL ) {
   dojo.xhrGet({
      url: theURL,
      async: true,
      load: function(type, data, evt){ 
        
      },
      error: function(type, error){ 
        //alert(dojo.json.serialize(error)); 
       },
       mimetype: "text/plain"
  });
}

// JavaScript Document
getPageURL = function() {
  var query = document.URL.split("/");
  var thestring = '';
  var pattern = /^[a-z0-9\._]+$/;
  for(i=3;i<query.length;i++) {
    if(pattern.exec(query[i])) {
      thestring += query[i] + '/';
    }
  }
  return thestring;
}

function pageScroll() {
	window.scrollBy(0,-80); // horizontal and vertical scroll increments
	scrolldelay = setTimeout('pageScroll()',100); // scrolls every 100 milliseconds
	if (getScrollXY()[1] == 0) {
    stopScroll();
  }
}

function stopScroll() {
  clearTimeout(scrolldelay);
}

function getScrollXY() {
  var scrOfX = 0, scrOfY = 0;
  if( typeof( window.pageYOffset ) == 'number' ) {
    //Netscape compliant
    scrOfY = window.pageYOffset;
    scrOfX = window.pageXOffset;
  } else if( document.body && ( document.body.scrollLeft || document.body.scrollTop ) ) {
    //DOM compliant
    scrOfY = document.body.scrollTop;
    scrOfX = document.body.scrollLeft;
  } else if( document.documentElement && ( document.documentElement.scrollLeft || document.documentElement.scrollTop ) ) {
    //IE6 standards compliant mode
    scrOfY = document.documentElement.scrollTop;
    scrOfX = document.documentElement.scrollLeft;
  }
  return [ scrOfX, scrOfY ];
}

function openLink(link) {
  window.open(link);
  return true;
}

/*Dynamically generates a flopup window 
* using these parameters
*   @anid = id of widget (string is appended to "_floatingPane")
*   @title = window titlebar
*   @form = name of contained form, use "false" for no form
*   @href = location of window contents
*   */
function flopUp( args ) {
  
  if (! args.refresh)
    args.refresh = false;
  
  if (! args.refreshargs)
    args.refreshargs = null;
    
  var location = document.createElement("div");
  document.body.appendChild(location);
  href = appendVar(args.href, "date");
	theObject = dijit.byId(args.anid+"_floatingPane");
  
  if (! theObject) {
  	var theObject = new dojo_widgets.layout.HitchPane({
        id:args.anid+"_floatingPane",
    		title:args.title,
    		dockable: false,
    		maxable: false,
    		shadable: true,
    		closable: true,
    		resizable: false,
    		autoSize: args.autoSize,
    		autoSizeNodes: args.autoSizeNodes,
    		onRefresh: args.refresh,
    		onRefreshArgs: args.refreshargs
    },location);
    	
    theObject.startup();
  }
  
  if(args.hitch != null) {
    var hitchArgs = args.hitch.split(":");
  }
	
  if ((hitchArgs) && (hitchArgs[0] == "form")) {
	  hitchForm(hitchArgs[1],args.anid+"_floatingPane",args.href);
	} else if ((hitchArgs) && (hitchArgs[0] == "hitch")) {
	  theObject.setHitch( hitchArgs[1], args.href );
  } else {
    theObject.attr("href",args.href);
  }

}


/*
Utility function to attatch a form 
to the dojo form controller
Unused in this build
 @name = form node id
 @node = form parent node
 @url = url of AJAX Form
*/
var hitchForm = function(name,node,url) {
  console.debug("Hitching form ", name, " to node ", node);
    
  if (url){
  dijit.byId(node).setHref(url);
  }
  dojo.connect(dojo.byId(name),"onsubmit",function(event){formSubmit(event,name,node);});
}

/*
The dojo form controller
will refresh the container div with posted data
*/
var formSubmit = function(e,name,node){
  // prevent the form from actually submitting
	e.preventDefault(); 
	// submit the form in the background	
	dojo.xhrPost({
		form: name,
		handleAs: "text",
		handle: function(data,args){
			if(typeof data == "error"){
				console.warn("error!",args);
			}else{
				// show our response 
				console.log("Successfully posted form ", name);
				try {
          var resultNode = dijit.byId(node);
				} catch(e){
          var resultNode = node;
        }
        resultNode.setContent(data);
        
        try {
          
        } catch (e) {
        
        }
        //Recursively snag forms from post results
        //Deprecated, need to review...
        //snagForms(node);
			}
		}
	});
};

//For the replication of elements
function fillJSONContainer( data ) {
  dojo.query(".styro_container").forEach(function(node,i){
    fillFragments ( node );
  });
  
}

fillFragments = function( anelement ) {
  var base = anelement.childNodes[0].id.split("_");
  var jsondata = anelement.childNodes[0].innerHTML;
  var aform = anelement.childNodes[0].getAttribute("name").split("_");
  var object = dojo.fromJson(jsondata);
  if (object) {
  for (i=0;i<object["items"].length;i++){
    if (i > 0) { 
      uuid = duplicateFragment( base[1], true );
      if (uuid){ 
        var toremove = base[1]+"_";
        var re = new RegExp(base[1]);
        uuid = uuid.replace(re,"");
      }
    } else {
      uuid = "";
    }
    setFragment( aform[2], base[1], uuid, object["items"][i] );
    }
  }
}

setFragment = function ( formName, parentName, uuid, data ) {
  var parentID = parentName + uuid;
  for (key in data) {
    var formElement = document.getElementById( uuid + key );
    //This is an actual Form Element
    if ((formElement) && (formElement.type)) {
      switch (formElement.type) {
        case "text":
        case "hidden":
          formElement.value = data[key];
        break;
        case "select-one":
          setSelect(formElement,data[key]);
        break;
      }
    } else if (formElement) {
      //This is just an HTML Image Element
      if (formElement.src) {
        formElement.src = data[key];
      } else {
        formElement.innerHTML = data[key];
      }
    }
  }
}


setSelect = function (elementNode,aValue) {
  var nodeOptions = elementNode.options;
  for (j=0;j<nodeOptions.length;j++) {
    if (nodeOptions[j].value == aValue) {
      elementNode.selectedIndex = j;
    }
  }
}

duplicateFragment = function ( anid, prefill ) {
  var sourceFrag = document.getElementById( anid );
  if (! sourceFrag) {
    return false;
  }
  var theform = sourceFrag.parentNode;
  
  var thistotal = theform.elements[ anid + '_total'];
  var trackElement = document.getElementById(anid + "_track");
  /* ie this is the first "insert" */
  /* create a form "count" element, and track our inserted objects */
  
  if (! thistotal) {
    var newElement = document.createElement("input");
    newElement.setAttribute("type","hidden");
    newElement.setAttribute("value",1);
    newElement.setAttribute("name",anid + "_total");
    theform.appendChild(newElement);
  }
  
  if (! trackElement) {
    var trackElement = document.createElement("div");
    trackElement.setAttribute("id",anid + "_track");
    trackElement.style.display = "none";
    trackElement.innerHTML = anid;
    theform.appendChild(trackElement);
  }
  
  var theUUID = dojo.dnd.getUniqueId();
  
  var newID = theUUID + "_" + anid ;
  
  var destFrag = sourceFrag.cloneNode(true);
  firstDiv = dojo.query("*",destFrag)[0].parentNode;
  firstDiv.setAttribute("id", newID );
  firstDiv.setAttribute("class", "row" );
  
  //Remove any images that were moved
  dojo.query("img:not(.remove_iterator|.delete_icon)",destFrag).forEach(function(node,i){
    node.setAttribute("src","");
  });
  
  //Remove any images that were moved
  if (! prefill) {
    dojo.query("img.delete_icon",destFrag).forEach(function(node,i){
      node.setAttribute("src","");
    });
  }
  //Update Form Input Elements, If that's what we iterate
  dojo.query("input",destFrag).forEach(function(node,i){
    the_id = node.getAttribute("id");
    node.setAttribute("id",theUUID + "_" + the_id);
  });
  //Update Form Select Elements, If that's what we iterate
  dojo.query("select",destFrag).forEach(function(node,i){
    the_id = node.getAttribute("id");
    node.setAttribute("id",theUUID + "_" + the_id);
  });
  //Update Image Elements, If that's what we iterate
  dojo.query("img:not(.remove_iterator|.delete_icon)",destFrag).forEach(function(node,i){
    the_id = node.getAttribute("id");
    node.setAttribute("id",theUUID + "_" + the_id);
  });
  //Update Simple Span Elements (note, this class is added in the XSL of Styroform), 
  dojo.query("span.display",destFrag).forEach(function(node,i){
    the_id = node.getAttribute("id");
    node.setAttribute("id",theUUID + "_" + the_id );
  });
  //Update Simple Text Elements (note, this class is added in the XSL of Styroform), 
  //It's turned backwards, however
  dojo.query("span.displayselect",destFrag).forEach(function(node,i){
    the_id = node.getAttribute("id");
    node.setAttribute("id",theUUID + "_" + the_id );
  });
  
  theform.elements[anid + "_total"].value++;
  
  //Update the new node with a "remove" icon
  dojo.query("img.remove_iterator",destFrag).forEach(function(node,i){
    the_id = node.getAttribute("id");
    node.setAttribute("src",'/images/Neu/16x16/actions/undo.png');
    node.setAttribute("border",0);
    node.setAttribute("onclick","removeFragment('" + newID+ "')");
  });
  
  trackString = trackElement.innerHTML;
  trackArray = trackString.split(",");
  placeFrag = document.getElementById(trackArray[trackArray.length - 1]);
  dojo.place(destFrag,placeFrag,"after");
  
  trackElement.innerHTML += "," + newID;
  return newID;
}

removeFragment = function ( anid ) {
  var sourceFrag = document.getElementById( anid );
  var theform = sourceFrag.parentNode;
  dojo._destroyElement(sourceFrag);
  rootID = anid.split("_")[1];
  theform.elements[rootID + "_total"].value--;
  trackElement = document.getElementById(rootID + "_track");
  trackString = trackElement.innerHTML;
  var re = new RegExp("," + anid, 'g');
  trackString = trackString.replace(re,'');
  trackElement.innerHTML = trackString;
}

function toggleDiv( divid, parentid ) {
   parentid = (typeof parentid == 'undefined') ? 'null' : parentid;
   if (( ! dojo.style(divid,"display")) || (dojo.style(divid,"display") == "none")) {
    console.log("fading in "+ divid);
    var i = dojo.fadeIn({node : divid});
    dojo.connect(i, "beforeBegin", function(){
		  dojo.style(divid, "opacity", 0);
      dojo.style(divid, "display", "block");
    });
    if (parentid != "null") {
      dojo.connect(i, "onEnd", function(){
  		 dojo.removeClass(parentid,"windowshade_closed");
       dojo.addClass(parentid,"windowshade_open");
      });
    }
    i.play();
   } else {
    console.log("fading out "+ divid);
    var o = dojo.fadeOut({node : divid});
    dojo.connect(o, "onEnd", function(){
		 dojo.style(divid, "opacity", 0);
     dojo.style(divid,"display","none");
     if (parentid != "null") {
        dojo.removeClass(parentid,"windowshade_open");
        dojo.addClass(parentid,"windowshade_closed");
     }
    });
    o.play();
   }
   console.log("done toggling "+ divid);
}


setShare = function () {
  
  dojo.connect(dojo.byId('myspaceLink'), 'onclick', 'getShare');
  dojo.connect(dojo.byId('facebookLink'), 'onclick', 'getShare');
  dojo.connect(dojo.byId('diggLink'), 'onclick', 'getShare');
  dojo.connect(dojo.byId('deliciousLink'), 'onclick', 'getShare');
  dojo.connect(dojo.byId('redditLink'), 'onclick', 'getShare');
  dojo.connect(dojo.byId('stumbleuponLink'), 'onclick', 'getShare');
  dojo.connect(dojo.byId('googleLink'), 'onclick', 'getShare');
  
}

getShare = function ( e  ) {
  var theNode = e.target.parentNode.id;
  var embedCode = '<img src=\"http://'+document.domain+'/images/logo_share.jpg\" />';
  
  var myspaceUrl = 'http://www.myspace.com/index.cfm?fuseaction=postto&t='+document.title+'&c='+embedCode+'&u='+document.URL+'&l=3';
  var facebookUrl = 'http://www.facebook.com/sharer.php?src=bm&v=4&i=1226594683&u='+document.URL+'&t='+document.title;
  var diggUrl = 'http://digg.com/submit?url='+document.URL+'&title='+document.title+'&bodytext=Tattoo Johnny';
  var deliciousUrl = 'http://delicious.com/save?url='+document.URL+'&title='+document.title+'&v=5';
  var redditUrl = 'http://www.reddit.com/submit?url='+document.URL+'&title='+document.title;
  var stumbleuponUrl = 'http://www.stumbleupon.com/submit?url='+document.URL+'&title='+document.title;
  var googleUrl = 'http://www.google.com/bookmarks/mark?op=edit&bkmk='+document.URL+'&annotation=Tattoo Johnny&title='+document.title+'&output=popup';
  
  var theURL = document.URL.replace('http://'+document.domain+'/','');
  theURL = theURL.replace('/','');
  if (theURL == '') {
    theURL = 'index';
  }
  
  /*
  var myspacePing = '/track/share/HTML/MySpace/'+theURL;
  var facebookPing = '/track/share/HTML/Facebook/'+theURL;
  var diggPing = '/track/share/HTML/Digg/'+theURL;
  var deliciousPing = '/track/share/HTML/Delicious/'+theURL;
  var redditPing = '/track/share/HTML/Reddit/'+theURL;
  var stumbleuponPing = '/track/share/HTML/StumbleUpon/'+theURL;
  var googlePing = '/track/share/HTML/Google/'+theURL;
  
  hitURL(eval(theNode.replace("Link","Ping")));
  */
  
  var theDest = eval(theNode.replace("Link","Url"));
  
  window.open(theDest);
}

dojo.addOnLoad(function(){
  if (dojo.byId('ShareBox')) {setShare();}
});
