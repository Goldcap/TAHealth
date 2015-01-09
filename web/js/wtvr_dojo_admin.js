// editor:
dojo.require("dijit.Editor"); 
dojo.require("dijit._editor.plugins.FontChoice");
dojo.require("dijit._editor.plugins.LinkDialog");
dojo.require("dijit._editor.plugins.TextColor");

//Combo Boxes
dojo.require("dijit.form.FilteringSelect");
dojo.require("dijit.form.ComboBox");

dojo.require("dojox.data.dom");

//Date Picker
dojo.require("dijit.form.DateTextBox");

//Product Promotions
dojo.require("dojo_widgets.reservation.Reservation");

/*
Pull the specific node id from the inline div
If that exists, then looks for any "form" nodes
and attatch them to the dojo form controller
replacing the action with a specific dojo_layout URL
*/
var snagForms = function( node ) {
  var nid=false;
  try {
    if (document.getElementById(node.id).getAttribute("nid")) {
      nid=document.getElementById(node.id).getAttribute("nid");
    } else {
      console.log('Note this nid is not an existing node');
      return false;
    }
    console.debug("Snagging forms in node ", nid);
  }catch(e){
		console.log('Note this is not an existing node');
		return false;
	}
	
  dojo.query("form",node.id).forEach(
    function(aform) {
        console.debug("Discovered form ", aform.id);
        if (nid) {
          var action = dojo.byId(aform.id).getAttribute("action") + '?destination=/dojo_layout/run/node/' + nid;
        } else {
          var action = dojo.byId(aform.id).getAttribute("action") + '?destination=/dojo_layout/run/confirm/null/null';
        }
        console.debug("Setting form action for ", aform.id, "to ", action);
        dojo.byId(aform.id).setAttribute("action",action);
        console.debug("Connecting form ", aform.id);
        dojo.connect(dojo.byId(aform.id),"onsubmit",function(event){formSubmit(event,aform.id,node);});
    }
  
  );
}

function toggleAdmin() {
  var display_status = document.getElementById("wtvr_control").style.display;
  display_status = (display_status == "") ? "none" : display_status;
  if (display_status == "none") {
  document.getElementById("wtvr_control").style.display="block";
  document.getElementById("wtvr_debug").style.display="block";
  } else {
  document.getElementById("wtvr_control").style.display="none";
  document.getElementById("wtvr_debug").style.display="none";
  }
}


