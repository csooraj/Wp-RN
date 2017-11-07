function UploadPostArchiveDetails() {
  let appname = $.cookie("appname");
  let database = firebase.database();
  let PostArchive_subtitlecolor = document.getElementById("PostArchive_subtitlecolor").value;
  let PostArchive_titlecolor = document.getElementById("PostArchive_titlecolor").value;
  let PostArchive_categorycolor = document.getElementById("PostArchive_categorycolor").value;
  let PostArchive_calDaycolor = document.getElementById("PostArchive_calDaycolor").value;
  let PostArchive_calArrowcolor = document.getElementById("PostArchive_calArrowcolor").value;
  let PostArchive_calWeekcolor = document.getElementById("PostArchive_calWeekcolor").value;
  let PostArchive_calMonthcolor = document.getElementById("PostArchive_calMonthcolor").value;
  let e2 = document.getElementById("Post_categoryFont");
  let Post_categoryfontFamily = e2.options[e2.selectedIndex].text;
  let e4 = document.getElementById("Post_titleFont");
  let Post_titlefontFamily = e4.options[e4.selectedIndex].text;
  var e3 = document.getElementById("Post_authorFont");
  let Post_authorFont = e3.options[e3.selectedIndex].text;
  var e5 = document.getElementById("Post_layoutType");
  let Post_layoutfontFamily = e5.options[e5.selectedIndex].text;
  var e6 = document.getElementById("Post_calDayFont");
  let Post_calDayFont = e6.options[e6.selectedIndex].text;
  var e7 = document.getElementById("Post_calMonthFont");
  let Post_calMonthFont = e7.options[e7.selectedIndex].text;
  let e8 = document.getElementById("Post_titleFontIOS");
  let Post_categoryfontFamilyIOS = e8.options[e8.selectedIndex].text;
  let e9 = document.getElementById("Post_categoryFontIOS");
  let Post_titlefontFamilyIOS = e9.options[e9.selectedIndex].text;
  var e10 = document.getElementById("Post_authorFontIOS");
  let Post_authorFontIOS = e10.options[e10.selectedIndex].text;
  var e12 = document.getElementById("Post_calDayFontIOS");
  let Post_calDayFontIOS = e12.options[e12.selectedIndex].text;
  var e13 = document.getElementById("Post_calMonthFontIOS");
  let Post_calMonthFontIOS = e13.options[e13.selectedIndex].text;


  if ((PostArchive_subtitlecolor !== '') && ( PostArchive_titlecolor!== '') && (PostArchive_categorycolor !== '')) {
    document.getElementById("Error").innerHTML = "";
      var data = {
        "PostArchiveTitleColor": PostArchive_titlecolor,
        "PostArchiveSubTitleColor": PostArchive_subtitlecolor,
        "PostArchiveCategoryColor": PostArchive_categorycolor,
        "PostTitleFontFamily": Post_titlefontFamily,
        "PostAuthorFont": Post_authorFont,
        "PostLayout": Post_layoutfontFamily,
        "PostCategoryFont": Post_categoryfontFamily,
        "PostTitleFontFamilyIOS": Post_titlefontFamilyIOS,
        "PostAuthorFontIOS": Post_authorFontIOS,
        "PostCategoryFontIOS": Post_categoryfontFamilyIOS,
        "CalendarDayColor": PostArchive_calDaycolor,
        "CalendarArrowColor": PostArchive_calArrowcolor,
        "CalendarWeekColor": PostArchive_calWeekcolor,
        "CalendarMonthColor": PostArchive_calMonthcolor,
        "CalendarDayFont": Post_calDayFont,
        "CalendarMonthFont": Post_calMonthFont,
        "CalendarDayFontIOS": Post_calDayFontIOS,
        "CalendarMonthFontIOS": Post_calMonthFontIOS,
      };
    firebase.database().ref("Test/PostList").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      } else {
        document.getElementById("loading").innerHTML = 'Loading Preview...';
        var iframe = document.getElementById('mine');
        iframe.src = iframe.src;
      }
    });
    firebase.database().ref(appname+"/PostList").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}
