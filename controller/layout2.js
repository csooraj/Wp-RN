function UploadPostArchiveDetails() {
  let appname = $.cookie("appname");
  let menuitem = $.cookie("custompost");
  let database = firebase.database();
  let PostArchive_subtitlecolor = document.getElementById("PostArchive_subtitlecolor").value;
  let PostArchive_titlecolor = document.getElementById("PostArchive_titlecolor").value;
  let PostArchive_categorycolor = document.getElementById("PostArchive_categorycolor").value;
  let PostArchive_tabTextColor = document.getElementById("PostArchive_tabTextColor").value;
  let PostArchive_tabBordercolor = document.getElementById("PostArchive_tabBordercolor").value;
  let PostArchive_tabBgcolor = document.getElementById("PostArchive_tabBgcolor").value;
  let e2 = document.getElementById("Post_titleFont");
  let Post_categoryfontFamilyIOS = document.getElementById("Post_categoryFontIOS").value;
  let e4 = document.getElementById("Post_categoryFont");
  let Post_categoryfontFamily = e4.options[e4.selectedIndex].text;
  let Post_titlefontFamily = e2.options[e2.selectedIndex].text;
  let Post_titlefontFamilyIOS = document.getElementById("Post_titleFontIOS").value;
  var e3 = document.getElementById("Post_authorFont");
  let Post_authorFont = e3.options[e3.selectedIndex].text;
  let Post_authorFontIOS = document.getElementById("Post_authorFontIOS").value;
  var e7 = document.getElementById("Post_tabFont");
  let Post_TabTitleFont = e7.options[e7.selectedIndex].text;
  let Post_TabTitleFontIOS = document.getElementById("Post_tabFontIOS").value;
  let Post_dateLocale = document.getElementById("Date_locale").value;
  let Post_dateFormat = document.getElementById("Date_format").value;



  $.getJSON("https://wp-react.firebaseio.com/"+appname+"/Screens/Taxonomy/"+menuitem+".json", function(result){
  let child_terms = result.Terms;
  if ((PostArchive_subtitlecolor !== '') && ( PostArchive_titlecolor!== '') && (PostArchive_categorycolor !== '')) {
    document.getElementById("Error").innerHTML = "";
      var data = {
        "PostArchiveTitleColor": PostArchive_titlecolor,
        "PostDateLocale": Post_dateLocale,
        "PostDateFormat":Post_dateFormat,
        "PostTabTextColor": PostArchive_tabTextColor,
        "PostTabBorderColor": PostArchive_tabBordercolor,
        "PostArchiveSubTitleColor": PostArchive_subtitlecolor,
        "PostArchiveCategoryColor": PostArchive_categorycolor,
        "PostTitleFontFamily": Post_titlefontFamily,
        "PostTitleFontFamilyIOS": Post_titlefontFamilyIOS,
        "PostAuthorFont": Post_authorFont,
        "PostAuthorFontIOS": Post_authorFontIOS,
        "PostCategoryFont": Post_categoryfontFamily,
        "PostCategoryFontIOS": Post_categoryfontFamilyIOS,
        "PostTabFont": Post_TabTitleFont,
        "PostTabFontIOS": Post_TabTitleFontIOS,
        "PostTabBgColor": PostArchive_tabBgcolor,
        "ScreenName": menuitem,
        "ChildTerms": child_terms,
      };
    var menuname = $.cookie("custompost");
    firebase.database().ref("Test/Layout2/"+menuname+"/").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      } else {
        document.getElementById("loading").innerHTML = 'Loading Preview...';
        var iframe = document.getElementById('mine');
        iframe.src = iframe.src;
      }
    });
    firebase.database().ref(appname+"/Layout2/"+menuname+"/").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
 });
}
