/*
	Copyright (c) 2004-2009, The Dojo Foundation All Rights Reserved.
	Available via Academic Free License >= 2.1 OR the modified BSD license.
	see: http://dojotoolkit.org/license for details
*/


if(!dojo._hasResource["dojo_widgets.checkout.Account"]){
  dojo._hasResource["dojo_widgets.checkout.Account"]=true;
  dojo.provide("dojo_widgets.checkout.Account");
  dojo.experimental("dojo_widgets.checkout.Account");
  
  dojo.require("dijit._Widget");
  dojo.declare("dojo_widgets.checkout.Account",
  
  [dijit._Widget],
  {
  
  startup:function(){
    this.inherited(arguments);
    dojo.addOnLoad(this,"initDrop");
  },
  
  initDrop:function(){
    if(dojo.byId("user_country")){
      dojo.connect(dojo.byId("user_country"),"onchange",this,"swapBillState");
      this.swapBillState();
    }
  },
  
  swapBillState:function(){
    if(dojo.byId("user_country").selectedIndex!=1){
      dojo.style(dojo.byId("user_state_select_div"),"display","none");
      dojo.style(dojo.byId("user_state_text_div"),"display","block");
    }else{
      dojo.style(dojo.byId("user_state_text_div"),"display","none");
      dojo.style(dojo.byId("user_state_select_div"),"display","block");
    }
  },
  
  });
}
