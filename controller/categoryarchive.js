function UploadCategoryArchiveDetails() {
  let appname = $.cookie("appname");
  let database = firebase.database();
  let CatArchive_titlecolor = document.getElementById("CatArchive_titlecolor").value;
  let CatArchive_bordercolor = document.getElementById("CatArchive_bordercolor").value;
  let e1 = document.getElementById("CatArchive_fontFamily");
  let CatArchive_fontFamily = e1.options[e1.selectedIndex].text;



  if ((CatArchive_titlecolor !== '') && ( CatArchive_bordercolor!== '')) {
    document.getElementById("Error").innerHTML = "";
      var data = {
        "CategoryArchiveTitleColor": CatArchive_titlecolor,
        "CategoryArchiveBorderColor": CatArchive_bordercolor,
        "CatgeoryArchiveFont": CatArchive_fontFamily,
      };
    firebase.database().ref("Test/CategoryArchive").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      } else {
        document.getElementById("loading").innerHTML = 'Loading Preview...';
        var iframe = document.getElementById('mine');
        iframe.src = iframe.src;
      }
    });
    firebase.database().ref(appname+"/CategoryArchive").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}
