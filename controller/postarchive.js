function UploadPostArchiveDetails() {
  let appname = $.cookie("appname");
  let database = firebase.database();
  let e1 = document.getElementById("titleFont");
  let PostArchive_titlefontFamily = e1.options[e1.selectedIndex].text;
  let e2 = document.getElementById("titleFontIOS");
  let PostArchive_titlefontFamilyIOS = e2.options[e2.selectedIndex].text;
  let e3 = document.getElementById("subTitleFont");
  let PostArchive_subtitleFont = e3.options[e3.selectedIndex].text;
  let e4 = document.getElementById("subTitleFontIOS");
  let PostArchive_subtitleFontIOS = e4.options[e4.selectedIndex].text;
  let e5 = document.getElementById("categoryFontIOS");
  let PostArchive_categoryFontIOS = e5.options[e5.selectedIndex].text;
  let e6 = document.getElementById("categoryFont");
  let PostArchive_categoryFont = e6.options[e6.selectedIndex].text;
  let PostArchive_subtitlecolor = document.getElementById("PostArchive_subtitlecolor").value;
  let PostArchive_titlecolor = document.getElementById("PostArchive_titlecolor").value;
  let PostArchive_categorycolor = document.getElementById("PostArchive_categorycolor").value;

  if ((PostArchive_subtitlecolor !== '') && ( PostArchive_titlecolor!== '') && (PostArchive_categorycolor !== '')) {
    document.getElementById("Error").innerHTML = "";
      var data = {
        "PostArchiveTitleColor": PostArchive_titlecolor,
        "PostArchiveTitleFont" : PostArchive_titlefontFamily,
        "PostArchiveTitleFontIOS": PostArchive_titlefontFamilyIOS,
        "PostArchiveSubTitleColor": PostArchive_subtitlecolor,
        "PostArchiveSubTitleFont": PostArchive_subtitleFont,
        "PostArchiveSubTitleFontIOS": PostArchive_subtitleFontIOS,
        "PostCategoryFont": PostArchive_categoryFont,
        "PostCategoryFontIOS": PostArchive_categoryFontIOS,
        "PostArchiveCategoryColor": PostArchive_categorycolor,
      };
    firebase.database().ref("Test/PostArchive").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      } else {
        document.getElementById("loading").innerHTML = 'Loading Preview...';
        var iframe = document.getElementById('mine');
        iframe.src = iframe.src;
      }
    });
    firebase.database().ref(appname+"/PostArchive").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}
