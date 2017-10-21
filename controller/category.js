function UploadCategoryDetails() {
  let appname = $.cookie("appname");
  let database = firebase.database();
  let Menu_textcolor = document.getElementById("Menu_textcolor").value;
  let e1 = document.getElementById("Menu_fontFamily");
  let Menu_fontFamily = e1.options[e1.selectedIndex].text;

  if ((Menu_textcolor !== '')) {
    document.getElementById("Error").innerHTML = "";
      var data = {
        "CategoryTextColor": Menu_textcolor,
        "CategoryTextFontFamily": Menu_fontFamily,
      };
    firebase.database().ref("Test/CategoryGrid").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      } else {
        document.getElementById("loading").innerHTML = 'Loading Preview...';
        var iframe = document.getElementById('mine');
        iframe.src = iframe.src;
      }
    });
    firebase.database().ref(appname+"/CategoryGrid").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}
