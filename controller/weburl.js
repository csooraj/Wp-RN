function UploadWebSiteUrl() {
  let appname = $.cookie("appname");
  let database = firebase.database();
  let App_Url = document.getElementById("websiteurl").value;
  let Home_Url = document.getElementById("homeurl").value;
  let Slider_Url = document.getElementById("sliderurl").value;

  if ((App_Url !== '')) {
    document.getElementById("Error").innerHTML = "";
      var data = {
        "AppUrl": App_Url,
      };

      var homescreen = {
        "HomeUrl": Home_Url,
        "SliderUrl": Slider_Url
      }

    firebase.database().ref(appname+"/AppUrl").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }
    });

    firebase.database().ref(appname+"/HomeScreen").update(homescreen, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }else{
        alert("Url Updated Successfully");
      }
    });

  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}
