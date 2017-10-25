function UploadGalleryView() {
  let appname = $.cookie("appname");
  let database = firebase.database();
  let Tabbar_Bg = document.getElementById("Tabbar_Bg").value;
  let Tabbar_textColor = document.getElementById("Tabbar_textColor").value;
  let Tabbar_borderColor = document.getElementById("Tabbar_borderColor").value;
  let e1 = document.getElementById("Tabbar_Font");
  let Tabbar_font = e1.options[e1.selectedIndex].text;
  let Tabbar_textSize = document.getElementById("Tabbar_textSize").value;

  if ((Tabbar_Bg !== '') && (Tabbar_textColor !== '') && (Tabbar_borderColor !== '') && (Tabbar_font !== '') && (Tabbar_textSize !== '')) {
    document.getElementById("Error").innerHTML = "";
      var data = {
        "TabBarBg": Tabbar_Bg,
        "TabBarTextColor": Tabbar_textColor,
        "TabBarBorderColor": Tabbar_borderColor,
        "TabBarFont": Tabbar_font,
        "TabBarTextSize": Tabbar_textSize,
      };
    firebase.database().ref("Test/Gallery").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      } else {
        document.getElementById("loading").innerHTML = 'Loading Preview...';
        var iframe = document.getElementById('mine');
        iframe.src = iframe.src;
      }
    });
    firebase.database().ref(appname+"/Gallery").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}
