/*
	Copyright (c) 2004-2009, The Dojo Foundation All Rights Reserved.
	Available via Academic Free License >= 2.1 OR the modified BSD license.
	see: http://dojotoolkit.org/license for details
*/


if(!dojo._hasResource["dojo_widgets.wishlist.Wishlist"]){dojo._hasResource["dojo_widgets.wishlist.Wishlist"]=true;dojo.provide("dojo_widgets.wishlist.Wishlist");dojo.experimental("dojo_widgets.wishlist.Wishlist");dojo.require("dijit._Widget");dojo.require("dijit._Templated");dojo.require("dojox.layout.ScrollPane");dojo.declare("dojo_widgets.wishlist.Wishlist",[dijit._Widget,dijit._Templated],{widgetID:null,theId:null,title:null,theDialog:null,content:null,showing:false,toggle:"Show Wishlist",loaded:false,wishSkus:null,showMe:"true",templateString:"<div dojoAttachPoint=\"WishlistContainer\"><span class=\"leftcol\">&nbsp;<span id=\"wishlist_save\"><a href=\"#\" dojoAttachPoint=\"WishlistSave\" dojoAttachEvent=\"onclick: saveWishIn\">Save WishList</a> | <a href=\"#\" dojoAttachPoint=\"WishlistLogin\" dojoAttachEvent=\"onclick: signWishIn\">Sign In</a></span></span><span class=\"centercol\"><a dojoAttachPoint=\"WishlistLogo\" style=\"color: #FFFFFF; font-family: Verdana; font-size: 11px; font-weight: bold;\"><img src=\"http://ll.tattoojohnny.com/prod/images/wishlist_center.jpg\" width=\"390\" height=\"39\" border=\"0\"></a></span><span class=\"rightcol\"><a href=\"#\" dojoAttachPoint=\"WishlistToggle\" dojoAttachEvent=\"onclick: toggleWishlist\">${toggle}</a>&nbsp;</span><div id=\"wishlist_products\" dojoAttachPoint=\"WishlistProducts\"><div id=\"wishlist_items\" dojoAttatchPoint=\"WishlistItems\"><span style='float: left; margin-top: 5px;'><img src='http://ll.tattoojohnny.com/prod/images/loading.gif' /></span><span style='float: left;margin-top: 10px;margin-left: 5px; color: white;'>Loading Wishlist...</span></div></div><div dojoAttachPoint=\"WishlistDialogContainer\"></div></div>",theScroller:false,dateObj:null,wish_auth:false,postCreate:function(){this.dateObj=new Date();this.inherited(arguments);if(dojo.cookie("tsc")!=undefined){this.showMe=dojo.cookie("tsc");}if(this.showMe!="false"){this.toggleWishlist(false);}else{dojo.style(this.WishlistProducts,"display","none");dojo.style(dojo.byId("wishlist_products"),"height","0px");dojo.style(dojo.byId("div06"),"height","45px");}this.theScroller=new dojox.layout.ScrollPane({orientation:"horizontal"},this.WishlistProducts);this.theScroller.startup();dojo.connect(window,"onresize",this.resizeWishlist);dojo.addOnLoad(this,"initWishlist");},initWishlist:function(){dojo.xhrGet({url:"/wishlist.php?ts="+this.dateObj.getTime(),async:true,load:dojo.hitch(this,"setSkus"),error:function(_a,_b){},mimetype:"text/plain"});},setSkus:function(_3){res=dojox.json.ref.fromJson(_3);this.wishSkus=new Array();if(res.wishlist.length>0){this.wishSkus=dojox.json.ref.fromJson(res.wishlist);}if(dojo.cookie("ttjwishlist")==""){dojo.cookie("ttjwishlist",res.wish_guid,{path:"/",domain:".tattoojohnny.com",expires:30});}if(res.wish_auth=="auth"){this.wish_auth=true;dojo.style(dojo.byId("wishlist_save"),"display","none");}else{this.wish_auth=false;}this.loadStuff();if(this.showing){this.setImages();}var _3=dojo.queryToObject(window.location.search.slice(1));if(_3["rmesg"]){this.alertWishlist(parseInt(_3["rmesg"]));}},loadStuff:function(){this.setImages();var _1=this;dojo.query(".makeWish").forEach(function(_2,i){dojo.connect(_2,"onclick",_1.makeWish);});dojo.query(".whystencil").forEach(function(_4,i){dojo.connect(_4,"onclick",_1.popStencil);});},startup:function(){this.inherited(arguments);},addImage:function(_6){if(dojo.indexOf(this.wishSkus,_6)==-1){this.wishSkus[this.wishSkus.length]=_6;}if((!this.wish_auth)&&((this.wishSkus.length==2)||(this.wishSkus.length==6)||(this.wishSkus.length==10))){this.alertWishlist();}},removeImage:function(_7){var _8=this;if(dojo.indexOf(this.wishSkus,_7)!=-1){var j=0;var _a=new Array();for(i=0;i<=_8.wishSkus.length;i++){if((_8.wishSkus[i]!=_7)&&(_8.wishSkus[i]!=undefined)){_a[j]=_8.wishSkus[i];j++;}}this.wishSkus=_a;}},setImages:function(){var _b=this;var _d="<table class=\"items\"><tr>";dojo.forEach(this.wishSkus,function(x){if(x.length>0){_d=_d+"<td><table><tr><td><a href=\"/product/"+x+"\"><img border=\"0\" align=\"left\" src=\""+_b.getImageLoc(x)+"\" border=\"0\" align=\"left\" /></a></td><td align=\"left\" class=\"dl_text\"><a sku=\""+x+"\" class=\"rm_link\" href=\"#\">Remove</a><br /><a sku=\""+x+"\" class=\"dl_link\" href=\"#\">Download</a></td></tr></table></td>";}});_d=_d+"</tr></table>";dojo.byId("wishlist_items").innerHTML=_d;dojo.query(".rm_link").forEach(function(_d,i){dojo.connect(_d,"onclick",_b,"killWish");});dojo.query(".dl_link").forEach(function(_f,i){dojo.connect(_f,"onclick",_b,"getWish");});},getImageLoc:function(sku){if(sku.length>0){return "http://ll.tattoojohnny.com/prod/images/products/"+sku.substring(0,1)+"/"+sku.substring(0,2)+"/"+sku.substring(0,3)+"/"+sku+"/"+sku+"_color.jpg";}},toggleWishlist:function(){if(this.showing){dojo.byId("wishlist_items").innerHTML="";dojo.cookie("tsc","false",{path:"/",domain:".tattoojohnny.com",expires:30});this.WishlistToggle.innerHTML="Show Wishlist";dojo.style(this.WishlistProducts,"display","none");dojo.style(dojo.byId("wishlist_products"),"height","0px");dojo.style(dojo.byId("div06"),"height","45px");this.showing=false;}else{dojo.cookie("tsc","true",{path:"/",domain:".tattoojohnny.com",expires:30});this.WishlistToggle.innerHTML="Hide Wishlist";dojo.style(dojo.byId("div06"),"background","#5BB2E2");dojo.style(dojo.byId("wishlist_products"),"height","70px");dojo.style(dojo.byId("div06"),"height","96px");dojo.style(this.WishlistProducts,"display","block");if(dojo.isIE==6){dojo.style(dojo.byId("wishlist_products"),"height","55px");}this.showing=true;this.setImages();}},makeWish:function(e){dijit.byId("wishlist").addWish(e.target.getAttribute("sku"));dijit.byId("wishlist_products").resize();},killWish:function(e){dijit.byId("wishlist").removeWish(e.target.getAttribute("sku"));dijit.byId("wishlist_products").resize();},getWish:function(e){window.location.href="/download/"+e.target.getAttribute("sku");},addWish:function(sku){this.addImage(sku);this.setImages();dojo.xhrGet({url:"/services/Wishlist/add/sku/"+sku+"?ts="+this.dateObj.getTime(),async:true,error:function(_a,_b){},mimetype:"text/plain"});},removeWish:function(sku){this.removeImage(sku);this.setImages();dojo.xhrGet({url:"/services/Wishlist/remove/sku/"+sku+"?ts="+this.dateObj.getTime(),async:true,error:function(_a,_b){},mimetype:"text/plain"});},saveWishIn:function(){this.alertWishlist(6);},signWishIn:function(){this.alertWishlist(5);},popStencil:function(e){dojo.stopEvent(e);window.open("/whystencil","whystencil","height=590,width=590,top=0,left=0,scrollbars=yes,screenx=50,screeny=50");},resizeWishlist:function(){dijit.byId("wishlist_products").resize();},alertWishlist:function(id){if(!this.theDialog){this.theDialog=new dijit.Dialog({id:"wishlistDialog",title:"Save Your Wishlist",draggable:false}),this.WishlistDialogContainer;}dojo.connect(this.theDialog,"onLoad",this,this.connectClose);switch(id){case 0:break;case 1:if(this.wish_auth){this.theDialog.setHref("/services/Wishlist/confirm");this.theDialog.show();}break;case 2:if(this.wish_auth){this.theDialog.setHref("/services/Wishlist/login");this.theDialog.show();}break;case 3:this.theDialog.setHref("/services/Wishlist/error");dojo.connect(this.theDialog,"onLoad",this,this.triggerMemberForm);this.theDialog.show();break;case 4:this.theDialog.setHref("/services/Wishlist/exists");this.theDialog.show();break;case 5:this.theDialog.setHref("/services/Wishlist/form");dojo.connect(this.theDialog,"onLoad",this,this.triggerMemberForm);this.theDialog.show();break;default:this.theDialog.setHref("/services/Wishlist/form");dojo.connect(this.theDialog,"onLoad",this,this.triggerNonMemberForm);this.theDialog.show();break;}},connectClose:function(){var _1=this;dojo.query(".dialog_close",_1.theDialog.containerNode).forEach(function(_2,i){dojo.connect(_2,"onclick",_1,_1.doClose);});if(dojo.byId("user_fname")){dojo.connect(dojo.byId("user_fname"),"onfocus",this.toggleSearchInputIn);dojo.connect(dojo.byId("user_fname"),"onblur",this.toggleSearchInputOut);}if(dojo.byId("user_lname")){dojo.connect(dojo.byId("user_lname"),"onfocus",this.toggleSearchInputIn);dojo.connect(dojo.byId("user_lname"),"onblur",this.toggleSearchInputOut);}if(dojo.byId("user_email")){dojo.connect(dojo.byId("user_email"),"onfocus",this.toggleSearchInputIn);dojo.connect(dojo.byId("user_email"),"onblur",this.toggleSearchInputOut);}if(dojo.byId("user_emailmember")){dojo.connect(dojo.byId("user_emailmember"),"onfocus",this.toggleSearchInputIn);dojo.connect(dojo.byId("user_emailmember"),"onblur",this.toggleSearchInputOut);}if(dojo.byId("user_new_1")){if(dojo.byId("user_new_1").checked){this.triggerMemberForm();}dojo.connect(dojo.byId("user_new_1"),"onclick",this.showMemberForm);}if(dojo.byId("user_new_0")){if(dojo.byId("user_new_0").checked){this.triggerNonMemberForm();}dojo.connect(dojo.byId("user_new_0"),"onclick",this.showNonMemberForm);}},doClose:function(e){this.theDialog.hide();},toggleSearchInputIn:function(e){dojo.stopEvent(e);(e.target.value==e.target.getAttribute("title"))?e.target.value="":null;dojo.style(e.target,"color","black");},toggleSearchInputOut:function(e){dojo.stopEvent(e);(e.target.value=="")?e.target.value=e.target.getAttribute("title"):null;(e.target.value==e.target.getAttribute("title"))?dojo.style(e.target,"color","#666"):null;},showMemberForm:function(e){dijit.byId("wishlist").triggerMemberForm();},triggerMemberForm:function(){dojo.byId("user_new_1").checked="checked";dojo.style(dojo.byId("nonmemberform"),"display","none");dojo.style(dojo.byId("memberform"),"display","block");dojo.byId("vskipuser_fname").innerHTML=true;dojo.byId("vskipuser_lname").innerHTML=true;dojo.byId("vskipuser_email").innerHTML=true;dojo.byId("vskipuser_emailmember").innerHTML=false;dojo.byId("vskipuser_password").innerHTML=false;},showNonMemberForm:function(e){dijit.byId("wishlist").triggerNonMemberForm();},triggerNonMemberForm:function(){dojo.byId("user_new_0").checked="checked";dojo.style(dojo.byId("memberform"),"display","none");dojo.style(dojo.byId("nonmemberform"),"display","block");dojo.byId("vskipuser_fname").innerHTML=false;dojo.byId("vskipuser_lname").innerHTML=false;dojo.byId("vskipuser_email").innerHTML=false;dojo.byId("vskipuser_emailmember").innerHTML=true;dojo.byId("vskipuser_password").innerHTML=true;}});}