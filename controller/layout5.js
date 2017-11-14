function UploadCategoryArchiveDetails() {
  let appname = $.cookie("appname");
  var menuitem = $.cookie("custompost");
  let database = firebase.database();
  let CatArchive_titlecolor = document.getElementById("CatArchive_titlecolor").value;
  let CatArchive_bordercolor = document.getElementById("CatArchive_bordercolor").value;
  let e1 = document.getElementById("CatArchive_fontFamily");
  let CatArchive_fontFamily = e1.options[e1.selectedIndex].text;
  let e2 = document.getElementById("CatArchive_fontFamilyIOS");
  let CatArchive_fontFamilyIOS = e2.options[e2.selectedIndex].text;



  if ((CatArchive_titlecolor !== '') && ( CatArchive_bordercolor!== '')) {
    document.getElementById("Error").innerHTML = "";
      var data = {
        "CategoryArchiveTitleColor": CatArchive_titlecolor,
        "CategoryArchiveBorderColor": CatArchive_bordercolor,
        "CategoryArchiveFont": CatArchive_fontFamily,
        "CategoryArchiveFontIOS": CatArchive_fontFamilyIOS,
      };
    firebase.database().ref("Test/Layout5/"+menuitem).update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      } else {
        document.getElementById("loading").innerHTML = 'Loading Preview...';
        var iframe = document.getElementById('mine');
        iframe.src = iframe.src;
      }
    });
    firebase.database().ref(appname+"/Layout5/"+menuitem).update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}
