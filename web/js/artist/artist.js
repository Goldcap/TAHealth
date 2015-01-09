function getCode() {
  var fname = document.forms["artist"].elements["artist_fname"].value;
  var lname = document.forms["artist"].elements["artist_lname"].value;
  if ((fname.length == 0)  || (lname.length == 0)) {
    document.forms["artist"].elements["artist_code"].value = "";
  }
  dojo.xhrGet({
      url: "/services/ArtistAdmin/code/"+ fname + " " + lname,
      handleAs: "text",
      async: false,
      load: function(data){ 
        document.forms["artist"].elements["artist_code"].value = data;
      },
      error: function(type, error){},
      mimetype: "text/plain"
  });
}
