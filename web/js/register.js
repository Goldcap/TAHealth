// JavaScript Document

function snarf() {
  var selected = document.forms["register"].elements["conference_location"].selectedIndex;
  if (selected == 2) {
    alert("We're sorry, web broadcast session are full, please contact the TA Health Education Foundation at (307)684-5833 x601 for further assistance.");
    document.forms["register"].elements["conference_location"].selectedIndex = 0;
  }
}
