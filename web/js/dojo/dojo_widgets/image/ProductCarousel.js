/*
	Copyright (c) 2004-2009, The Dojo Foundation All Rights Reserved.
	Available via Academic Free License >= 2.1 OR the modified BSD license.
	see: http://dojotoolkit.org/license for details
*/


if(!dojo._hasResource["dojo_widgets.image.ProductCarousel"]){dojo._hasResource["dojo_widgets.image.ProductCarousel"]=true;dojo.provide("dojo_widgets.image.ProductCarousel");dojo.experimental("dojo_widgets.image.ProductCarousel");dojo.require("dojo.data.ItemFileReadStore");dojo.require("dojox.fx.scroll");dojo.require("dojo.fx.easing");dojo.require("dojo.fx");dojo.require("dijit._Widget");dojo.require("dijit._Templated");dojo.declare("dojo_widgets.image.ProductCarousel",[dijit._Widget,dijit._Templated],{widgetID:null,imageStore:null,imageNodes:null,imageCount:0,request:null,size:120,ImageArray:null,InterFaceWidth:520,ViewingAreaWidth:0,OffstageWidth:null,ImagesShowing:null,ViewingAreaHeight:131,ImageValignment:"middle",templatePath:"/js/dojo/dojo_widgets/image/resources/ProductCarousel.html",header:"",viewLink:"",viewText:"",hitch:"null",init:true,currentImage:0,isMoving:false,postCreate:function(){this.inherited(arguments);this.widgetID=this.id;this.ViewingAreaWidth=this.InterFaceWidth-60;this.OffstageWidth=this.InterFaceWidth+this.size+50;if(this.ImagesShowing==null){this.ImagesShowing=Math.floor(this.InterFaceWidth/this.size);}dojo.style(this.DojoCarouselViewingArea,"opacity","0");this.init();},init:function(){this.connect(this.DojoCarouselNavPrev,"onclick","_prev");this.connect(this.DojoCarouselNavNext,"onclick","_next");this.setDataStore();return true;},update:function(){this.hideNode(this.DojoCarouselLoader);this.setStyles();this.setIDs();this.attachEventhandlers();this.showNode(this.DojoCarouselViewingArea);},setDataStore:function(){this.imageNodes=new dojo.data.ItemFileReadStore({data:this.imageStore,scope:this});this.imageNodes.fetch({onItem:this.setImage,onComplete:this.update,scope:this});},setImage:function(_1,_2){atitle=this.imageNodes.getValue(_1,"title");image=this.imageNodes.getValue(_1,"thumb");desc=this.imageNodes.getValue(_1,"desc");guid=this.imageNodes.getValue(_1,"guid");NewElement=document.createElement("span");NewElement.setAttribute("class","DojoCarouselSpan");var _3=(this.currentImage>(this.ImagesShowing-1))?this.OffstageWidth:this.currentImage*this.size;NewElement.style.left=_3+"px";NewElement.innerHTML="<div guid=\""+guid+"\" class=\"DojoCarouselThumbnailWrapper\" onClick=\""+this.hitch+"('"+guid+"')\" title=\""+desc+"\"><img src=\""+image+"\" title=\""+desc+"\" alt=\""+desc+"\" /></div><div class=\"DojoCarouselThumbnailTitle\">"+atitle+"</div>";this.DojoCarouselImageContainer.appendChild(NewElement);this.currentImage++;},setStyles:function(){dojo.style(this.DojoCarouselInterface,"width",this.ViewingAreaWidth+"px");dojo.style(this.DojoCarouselVerbiage,"width",this.InterFaceWidth-80+"px");dojo.style(this.DojoCarouselViewingArea,"zIndex",2);dojo.style(this.DojoCarouselVerbiage,"zIndex",5);dojo.style(this.DojoCarouselViewingArea,"left",0+"px");dojo.style(this.DojoCarouselVerbiage,"left",40+"px");dojo.style(this.DojoCarouselViewingArea,"top",0+"px");dojo.style(this.DojoCarouselVerbiage,"top",35+"px");dojo.style(this.DojoCarouselViewingArea,"height",this.ViewingAreaHeight+"px");dojo.style(this.DojoCarouselInterface,"height",this.ViewingAreaHeight+35+"px");dojo.style(this.DojoCarouselContainerScrollRight,"left",this.InterFaceWidth-25+"px");dojo.style(this.DojoCarouselVerbiage,"textAlign","center");dojo.query("span div",this.DojoCarouselInterface).style("vertialAlign",this.ImageValignment);},setIDs:function(){var _4=this.widgetID;dojo.query("span.DojoCarouselSpan",this.DojoCarouselImageContainer).forEach(function(_5,i){dojo.attr(_5,"id",_4+"_"+i);});},attachEventhandlers:function(){var _7=this.widgetID;var _8=this.hitch;dojo.query("div.DojoCarouselThumbnailWrapper",this.DojoCarouselImageContainer).forEach(function(_9,i){dojo.attr(_9,"id",_7+"Image_"+i);});},showNode:function(_b){dojo.fadeIn({node:_b,duration:500}).play();},hideNode:function(_c){dojo.fadeOut({node:_c,duration:200}).play();},_next:function(){if((this.currentImage<3)||(this.isMoving)){return;}this.isMoving=true;firstDiv=dojo.byId(this.widgetID+"_0");dupDiv=firstDiv.cloneNode(true);this.DojoCarouselImageContainer.appendChild(dupDiv);dojo.style(dupDiv,"left",this.OffstageWidth+"px");dojo.attr(dupDiv,"id","tmp");for(h=0;h<5;h++){var _d=(h==0)?true:false;var _e=(h==this.ImagesShowing)?true:false;this.leftSuperSlide(h,_e,_d);}},_prev:function(){if((this.currentImage<4)||(this.isMoving)){return;}this.isMoving=true;lastDiv=dojo.byId(this.widgetID+"_"+(this.currentImage-1));dupDiv=lastDiv.cloneNode(true);this.DojoCarouselImageContainer.insertBefore(dupDiv,dojo.byId(this.widgetID+"_0"));this.update();dojo.style(dojo.byId(this.widgetID+"_0"),"left",-this.size+"px");for(h=this.ImagesShowing+1;h>-1;h--){var _f=(h==0)?true:false;var _10=(h==this.ImagesShowing)?true:false;this.rightSuperSlide(h,_f,_10);}},leftSuperSlide:function(i,end,_13){var _14=dojo.fx.slideTo({node:this.widgetID+"_"+i,duration:500,left:((i-1)*this.size)});if(end){dojo.connect(_14,"onEnd",this,function(){this.isMoving=false;});}if(_13){dojo.connect(_14,"onEnd",this,function(){this.DojoCarouselImageContainer.removeChild(dojo.byId(this.widgetID+"_"+i));this.update();});}_14.play();},rightSuperSlide:function(i,end,_17){var pos=(_17)?(this.OffstageWidth):(i*this.size);var _19=dojo.fx.slideTo({node:this.widgetID+"_"+i,duration:500,left:pos});if(end){dojo.connect(_19,"onEnd",this,function(){this.isMoving=false;});}_19.play();}});}