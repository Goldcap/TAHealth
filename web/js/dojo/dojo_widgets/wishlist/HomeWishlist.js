/*
	Copyright (c) 2004-2009, The Dojo Foundation All Rights Reserved.
	Available via Academic Free License >= 2.1 OR the modified BSD license.
	see: http://dojotoolkit.org/license for details
*/


if(!dojo._hasResource["dojo_widgets.wishlist.HomeWishlist"]){dojo._hasResource["dojo_widgets.wishlist.HomeWishlist"]=true;dojo.provide("dojo_widgets.wishlist.HomeWishlist");dojo.experimental("dojo_widgets.wishlist.HomeWishlist");dojo.declare("dojo_widgets.wishlist.HomeWishlist",[dijit._Widget],{wishSkus:null,postCreate:function(){this.inherited(arguments);this.wishSkus=new Array();var _1=dojox.json.ref.fromJson(dojo.cookie("tattoojohnny_wishlist_cookie"));if(_1!=undefined){this.wishSkus=_1;}dojo.addOnLoad(this,"loadStuff");},startup:function(){this.inherited(arguments);},loadStuff:function(){var _1=this;dojo.query(".makeWish").forEach(function(_2,i){dojo.connect(_2,"onclick",_1,_1.addWish);});},addWish:function(e){var _6=e.target.getAttribute("sku");if(dojo.indexOf(this.wishSkus,_6)==-1){this.wishSkus[this.wishSkus.length]=_6;}dojo.cookie("tattoojohnny_wishlist_cookie",dojox.json.ref.toJson(this.wishSkus),{path:"/",domain:".tattoojohnny.com",expires:30});dojo.xhrGet({url:"/services/Wishlist/add/sku/"+_6,async:true,load:function(_7,_8,_9){window.location.href="/product/"+_6;},error:function(_a,_b){},mimetype:"text/plain"});}});}