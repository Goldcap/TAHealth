/*
	Copyright (c) 2004-2009, The Dojo Foundation All Rights Reserved.
	Available via Academic Free License >= 2.1 OR the modified BSD license.
	see: http://dojotoolkit.org/license for details
*/


if(!dojo._hasResource["dojo_widgets.checkout.Shipping"]){dojo._hasResource["dojo_widgets.checkout.Shipping"]=true;dojo.provide("dojo_widgets.checkout.Shipping");dojo.experimental("dojo_widgets.checkout.Shipping");dojo.require("dijit._Widget");dojo.require("dijit._Templated");dojo.declare("dojo_widgets.checkout.Shipping",[dijit._Widget,dijit._Templated],{widgetID:null,theId:null,title:null,theDialog:null,content:null,showing:true,loaded:false,form:null,templatePath:"/js/dojo/dojo_widgets/checkout/resources/Shipping.html",postCreate:function(){this.inherited(arguments);if(dojo.byId("Shipping")){dojo.connect(dojo.byId("Shipping"),"onsubmit",this,"doSubmit");}dojo.connect(dojo.byId("cart.secure"),"onclick",this,"doSecure");},startup:function(){this.inherited(arguments);this.theDialog=new dijit.Dialog({id:"checkoutDialog",title:this.title}),this.ShippingDialogContainer;},doSecure:function(e){dojo.stopEvent(e);this.theDialog.setHref("/services/Download/secure");this.theDialog.show();},doSubmit:function(e){dojo.stopEvent(e);dojo.attr(dojo.byId("Shipping"),"action","/cart/dobilling");document.forms["Shipping"].submit();}});}