function UploadSideBarDetails() {
  let appname = $.cookie("appname");
  let database = firebase.database();
  let Home_headercolor = document.getElementById("Home_headercolor").value;
  let e1 = document.getElementById("sliderfont");
  let e2 = document.getElementById("subtitlefont");
  let e3 = document.getElementById("categoryfont");
  let Home_categoryfont = e3.options[e3.selectedIndex].text;
  let Home_subtitlefont = e2.options[e2.selectedIndex].text;
  let Home_sliderfont = e1.options[e1.selectedIndex].text;
  let Home_iconcolor = document.getElementById("Home_iconcolor").value;
  let Home_slidertextcolor = document.getElementById("Home_slidertextcolor").value;
  let Home_posttitlecolor = document.getElementById("Home_posttitlecolor").value;
  let Home_categorytextcolor = document.getElementById("Home_categorytextcolor").value;
  let Home_slidersubcolor = document.getElementById("Home_slidersubcolor").value;
  if ((Home_headercolor !== '') && (Home_slidersubcolor !== '') && (Home_iconcolor !== '') && (Home_slidertextcolor !== '') && (Home_posttitlecolor !== '') && (Home_categorytextcolor !== '')) {
    document.getElementById("Error").innerHTML = "";
      var data = {
        "HomeHeaderColor": Home_headercolor,
        "HomeCategoryFont": Home_categoryfont,
        "HomeSubtitleFont": Home_subtitlefont,
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
