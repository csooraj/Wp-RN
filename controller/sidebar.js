function UploadSideBarDetails() {
  let appname = $.cookie("appname");
  let database = firebase.database();
  let Menu_textcolor = document.getElementById("Menu_textcolor").value;
  var e2 = document.getElementById("labelfont");
  let Menu_inputfontFamily = e2.options[e2.selectedIndex].text;
  var e3 = document.getElementById("labelfontIos");
  let Menu_inputfontFamilyIos = e3.options[e3.selectedIndex].text;
  let Menu_usercolor = document.getElementById("Menu_usercolor").value;
  let Menu_bgcolor = document.getElementById("Menu_bgcolor").value;
  let Menu_accordioncolor = document.getElementById("Menu_accordioncolor").value;
  let Menu_bordercolor = document.getElementById("Menu_bordercolor").value;

  if ((Menu_textcolor !== '') && (Menu_usercolor !== '') && (Menu_bgcolor !== '') && (Menu_accordioncolor !== '') && (Menu_bordercolor !== '')) {
    document.getElementById("Error").innerHTML = "";
      var data = {
        "MenuTextColor": Menu_textcolor,
        "MenuUserColor": Menu_usercolor,
        "MenuBgColor": Menu_bgcolor,
        "MenuFontFamily": Menu_inputfontFamily,
        "MenuFontFamilyIos": Menu_inputfontFamilyIos,
        "MenuAccordionColor": Menu_accordioncolor,
        "MenuBorderColor": Menu_bordercolor,
      };
    firebase.database().ref("Test/SideBar").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      } else {
        document.getElementById("loading").innerHTML = 'Loading Preview...';
        var iframe = document.getElementById('mine');
        iframe.src = iframe.src;
      }
    });
    firebase.database().ref(appname+"/SideBar").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}
