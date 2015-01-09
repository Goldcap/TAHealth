/*
	Copyright (c) 2004-2009, The Dojo Foundation All Rights Reserved.
	Available via Academic Free License >= 2.1 OR the modified BSD license.
	see: http://dojotoolkit.org/license for details
*/


if(!dojo._hasResource["dojo_widgets.faq.FAQ"]){dojo._hasResource["dojo_widgets.faq.FAQ"]=true;dojo.provide("dojo_widgets.faq.FAQ");dojo.experimental("dojo_widgets.faq.FAQ");dojo.require("dijit._Widget");dojo.declare("dojo_widgets.faq.FAQ",[dijit._Widget],{postCreate:function(){this.inherited(arguments);var _1=this;dojo.query(".reveal").forEach(function(_2,i){dojo.connect(_2,"onclick",_1.doReveal);});if(window.location.hash!=""){toggleDiv(window.location.hash.replace("#",""));}},doReveal:function(e){dojo.stopEvent(e);toggleDiv(e.target.getAttribute("name"));}});}