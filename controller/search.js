function UploadSearchViewDetails() {
  let appname = $.cookie("appname");
  let database = firebase.database();
  let Search_inputBg = document.getElementById("Search_inputBg").value;
  let Search_deleteButtonColor = document.getElementById("Search_deleteButtonColor").value;
  let Search_headerColor = document.getElementById("Search_headerColor").value;
  let Search_latestBgColor = document.getElementById("Search_latestBgColor").value;
  let Search_latestColor = document.getElementById("Search_latestColor").value;
  let Search_itemColor = document.getElementById("Search_itemColor").value;
  let Search_itemBorderColor = document.getElementById("Search_itemBorderColor").value;

  let e1 = document.getElementById("Search_placeFont");
  let Search_placeFont = e1.options[e1.selectedIndex].text;

  let e2 = document.getElementById("Search_deleteButtonFont");
  let Search_deleteButtonFont = e2.options[e2.selectedIndex].text;

  let e3 = document.getElementById("Search_itemFont");
  let Search_itemFont = e3.options[e3.selectedIndex].text;

  let e4 = document.getElementById("Search_latestFont");
  let Search_latestFont = e4.options[e4.selectedIndex].text;

  let Search_latestSize = document.getElementById("Search_latestSize").value;

  if ((Search_inputBg !== '') && (Search_deleteButtonColor !== '') && (Search_headerColor !== '') && (Search_placeFont !== '') && (Search_latestFont !== '')) {
    document.getElementById("Error").innerHTML = "";
      var data = {
        "SearchInputBg": Search_inputBg,
        "SearchDeleteBg": Search_deleteButtonColor,
        "SearchHeaderBg": Search_headerColor,
        "SearchLatestBg": Search_latestBgColor,
        "SearchLatestColor": Search_latestColor,
        "SearchItemColor": Search_itemColor,
        "SearchItemBorderColor": Search_itemBorderColor,
        "SearchPlaceholderFont": Search_placeFont,
        "SearchDeleteButtonFont": Search_deleteButtonFont,
        "SearchItemFont": Search_itemFont,
        "SearchLatestFont": Search_latestFont,
        "SearchLatestSize": Search_latestSize,

      };
    firebase.database().ref("Test/Search").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      } else {
        document.getElementById("loading").innerHTML = 'Loading Preview...';
        var iframe = document.getElementById('mine');
        iframe.src = iframe.src;
      }
    });
    firebase.database().ref(appname+"/Search").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}
