/*
	Copyright (c) 2004-2009, The Dojo Foundation All Rights Reserved.
	Available via Academic Free License >= 2.1 OR the modified BSD license.
	see: http://dojotoolkit.org/license for details
*/


if(!dojo._hasResource["dojo_widgets.layout.DynamicDialog"]){dojo._hasResource["dojo_widgets.layout.DynamicDialog"]=true;dojo.provide("dojo_widgets.layout.DynamicDialog");dojo.experimental("dojo_widgets.layout.DynamicDialog");dojo.require("dijit.Dialog");dojo.require("dijit._Widget");dojo.require("dijit._Templated");dojo.declare("dojo_widgets.layout.DynamicDialog",[dijit._Widget,dijit._Templated],{widgetID:null,theId:null,title:null,theDialog:null,contentHref:null,button:null,loaded:false,templatePath:"/js/dojo/dojo_widgets/layout/resources/DynamicDialog.html",postCreate:function(){this.inherited(arguments);this.widgetID=this.id;this.theDialog=new dijit.Dialog({id:this.theId,title:this.title}),this.DojoBannerCanvas;},startup:function(){this.inherited(arguments);},init:function(){var _1=this.theDialog;dojo.xhrGet({url:this.contentHref,handle:function(_2,_3){if(typeof _2=="error"){console.warn("error!",_3);}else{_1.setContent(_2);dojo.parser.parse(_1);this.loaded=true;}}});return true;},showBanner:function(e){this.theDialog.href=this.contentHref;this.theDialog.show();},hideBanner:function(e){alert("shnay");}});}