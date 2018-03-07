function UploadLocale() {
  let appname = $.cookie("appname");
  let database = firebase.database();
  let Locale_Key = document.getElementById("Locale_Key").value;
  let Locale_Value = document.getElementById("Locale_Value").value;
  let Locale_lan  = document.getElementById("Locale_lan").value;


  if (( Locale_Key !== '') && (Locale_Value !== '')) {
    document.getElementById("Error").innerHTML = "";
      var config = {};
      var data = {};
      data[Locale_Key] = Locale_Value;
      config[Locale_lan] = data
    firebase.database().ref(appname+"/Locale").update(config, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }else{
        alert("Translation Uploaded");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}
