/*
	Copyright (c) 2004-2009, The Dojo Foundation All Rights Reserved.
	Available via Academic Free License >= 2.1 OR the modified BSD license.
	see: http://dojotoolkit.org/license for details
*/


if(!dojo._hasResource["dojo_widgets.banners.ResourceUpload"]){dojo._hasResource["dojo_widgets.banners.ResourceUpload"]=true;dojo.provide("dojo_widgets.banners.ResourceUpload");dojo.experimental("dojo_widgets.banners.ResourceUpload");dojo.require("dijit._Widget");dojo.declare("dojo_widgets.banners.ResourceUpload",[dijit._Widget],{postCreate:function(){this.inherited(arguments);dojo.connect(dojo.byId("resource_banner_style_0"),"onclick",this,"showURL");dojo.connect(dojo.byId("resource_banner_style_1"),"onclick",this,"showFile");dojo.connect(dojo.byId("resource_banner_style_2"),"onclick",this,"showHTML");},startup:function(){},showURL:function(){this.doHide("banner_file");this.doHide("banner_html");this.doShow("banner_url");},showHTML:function(){this.doHide("banner_file");this.doHide("banner_url");this.doShow("banner_html");},showFile:function(){this.doHide("banner_url");this.doHide("banner_html");this.doShow("banner_file");},doShow:function(_1){var i=dojo.fadeIn({node:_1});dojo.connect(i,"beforeBegin",function(){dojo.style(_1,"opacity",0);dojo.style(_1,"display","block");});i.play();},doHide:function(_3){var o=dojo.fadeOut({node:_3});dojo.connect(o,"onEnd",function(){dojo.style(_3,"opacity",0);dojo.style(_3,"display","none");});o.play();}});}