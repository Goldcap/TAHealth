/*
	Copyright (c) 2004-2009, The Dojo Foundation All Rights Reserved.
	Available via Academic Free License >= 2.1 OR the modified BSD license.
	see: http://dojotoolkit.org/license for details
*/


if(!dojo._hasResource["dojo_widgets.product.Product"]){dojo._hasResource["dojo_widgets.product.Product"]=true;dojo.provide("dojo_widgets.product.Product");dojo.experimental("dojo_widgets.product.Product");dojo.require("dijit._Widget");dojo.declare("dojo_widgets.product.Product",[dijit._Widget],{widgetID:null,theselect:null,thewidget:null,postCreate:function(){this.inherited(arguments);this.theselect=dijit.byId("fk_artist_id");dojo.connect(this.theselect,"onChange",this,"selectArtist");},selectArtist:function(){dojo.xhrGet({url:"/services/artist_users/royalty/"+this.theselect,handle:function(_1,_2){if(typeof _1=="error"){console.warn("error!",_2);}else{dojo.byId("product_artist_royalty").value=_1;}}});}});}