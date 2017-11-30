function UploadSideBarDetails() {
  let appname = $.cookie("appname");
  let database = firebase.database();
  let Home_headercolor = document.getElementById("Home_headercolor").value;
  let e1 = document.getElementById("sliderfont");
  let e2 = document.getElementById("subtitlefont");
  let e3 = document.getElementById("categoryfont");
  let e4 = document.getElementById("sliderfontIOS");
  let e5 = document.getElementById("subtitlefontIOS");
  let e6 = document.getElementById("categoryfontIOS");
  let e7 = document.getElementById("titlefont");
  let e8 = document.getElementById("titlefontIOS");
  let Home_titleFont = e7.options[e7.selectedIndex].text;
  let Home_titleFontIOS = e8.options[e8.selectedIndex].text;
  let Home_categoryfontIOS = e6.options[e6.selectedIndex].text;
  let Home_categoryfont = e3.options[e3.selectedIndex].text;
  let Home_subtitlefont = e2.options[e2.selectedIndex].text;
  let Home_subtitlefontIOS = e5.options[e5.selectedIndex].text;
  let Home_sliderfont = e1.options[e1.selectedIndex].text;
  let Home_sliderfontIOS = e4.options[e4.selectedIndex].text;
  let Home_iconcolor = document.getElementById("Home_iconcolor").value;
  let Home_slidertextcolor = document.getElementById("Home_slidertextcolor").value;
  let Home_posttitlecolor = document.getElementById("Home_posttitlecolor").value;
  let Home_categorytextcolor = document.getElementById("Home_categorytextcolor").value;
  let Home_slidersubcolor = document.getElementById("Home_slidersubcolor").value;
  let Home_datelocale = document.getElementById("Date_locale").value;
  let Home_dateformat = document.getElementById("Date_format").value
  if ((Home_headercolor !== '') && (Home_slidersubcolor !== '') && (Home_iconcolor !== '') && (Home_slidertextcolor !== '') && (Home_posttitlecolor !== '') && (Home_categorytextcolor !== '')) {
    document.getElementById("Error").innerHTML = "";
      var data = {
        "HomeHeaderColor": Home_headercolor,
        "PostDateLocale": Home_datelocale,
        "PostDateFormat": Home_dateformat,
        "HomeCategoryFont": Home_categoryfont,
        "HomeTitleFont": Home_titleFont,
        "HomeTitleFontIOS": Home_titleFontIOS,
        "HomeSubtitleFont": Home_subtitlefont,
        "HomeSubtitleFontIOS": Home_subtitlefontIOS,
        "HomeSliderFontIOS": Home_sliderfontIOS,
        "HomeCategoryFont": Home_categoryfont,
        "HomeCategoryFontIOS": Home_categoryfontIOS,
        "HomeSliderFont": Home_sliderfont,
        "HomeIconColor": Home_iconcolor,
        "HomeSliderTextColor": Home_slidertextcolor,
        "HomePostTitleColor": Home_posttitlecolor,
        "HomeCategoryTextColor": Home_categorytextcolor,
        "HomeSliderSubTitleColor": Home_slidersubcolor,
      };
    firebase.database().ref("Test/HomeScreen").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      } else {
        document.getElementById("loading").innerHTML = 'Loading Preview...';
        var iframe = document.getElementById('mine');
        iframe.src = iframe.src;
      }
    });
    firebase.database().ref(appname+"/HomeScreen").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}
