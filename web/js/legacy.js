function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_showHideLayers() { //v6.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
function createCookie(name, value, days)
{
  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
    }
  else var expires = "";
  document.cookie = name+"="+value+expires+"; path=/";
}
function readCookie(name)
{
  var ca = document.cookie.split(';');
  var nameEQ = name + "=";
  for(var i=0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1, c.length); //delete spaces
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
  return null;
}
function eraseCookie(name)
{
  createCookie(name, "", -1);
}
function adultcheck(){
    fe = $("adult");
    if (fe.checked) 
	{
		createCookie("adult", "1", 30);
	}
	else
	{
		eraseCookie("adult");
	}
}
function cbsel(item)
{
    fe = $(item);
    if (fe.checked) { fe.checked=false; }
    else { fe.checked = true; }
}
function rdsel(item)
{
    fe = $(item);
    fe.checked = true;
}

// JavaScript Document
function toggleKeyword(t,text) {
	if (t == 'in') {
		if (document.leftform.k.value == text) {
			document.leftform.k.value = ''
			document.leftform.k.className = 'keywordBoxPlain'
		}
	}
	else {
		if (document.leftform.k.value == '') {
			document.leftform.k.value = text
			document.leftform.k.className = 'keywordBoxEnter'
		}
	}
}
function checkSubmit( text ) {
  if (document.leftform.k.value == text) document.leftform.k.value = '';
	document.forms["leftform"].submit();
}

function searchSubmit( forceSubmit, text ) {
  var val; 
  val = document.forms["leftform"].elements["k"].value;
  if (val == text) { val = ''; }
  if (val == '') { val = text; }
	
  document.forms["leftform"].action = dojo.byId("formaction").getAttribute("dest") + "/" + val;
  
  if ((forceSubmit) && (val != text)) {
    document.forms["leftform"].submit();
  }
  
}
function changeclass(e,c){document.getElementById(e).className=c;}
