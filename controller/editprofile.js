function UploadEditProfileDetails() {
  let appname = $.cookie("appname");
  let database = firebase.database();
  let EditProfile_cpBg = document.getElementById("EditProfile_cpBg").value;
  let EditProfile_cpSize = document.getElementById("EditProfile_cpSize").value;
  let EditProfile_cpTitleColor = document.getElementById("EditProfile_cpTitleColor").value;
  let EditProfile_formColor = document.getElementById("EditProfile_formColor").value;
  let EditProfile_submitTextSize = document.getElementById("EditProfile_submitTextSize").value;
  let EditProfile_submitBg = document.getElementById("EditProfile_submitBg").value;
  let EditProfile_formBorderColor = document.getElementById("EditProfile_formBorderColor").value;
  let EditProfile_SubmitTextColor = document.getElementById("EditProfile_SubmitTextColor").value;

  let e1 = document.getElementById("EditProfile_cpFont");
  let EditProfile_cpFont = e1.options[e1.selectedIndex].text;
  let EditProfile_cpFontIOS = document.getElementById("EditProfile_cpFontIOS").value;

  let e2 = document.getElementById("EditProfile_formLabelFont");
  let EditProfile_formLabelFont = e2.options[e2.selectedIndex].text;
  let EditProfile_formLabelFontIOS = document.getElementById("EditProfile_formLabelFontIOS").value;

  let e3 = document.getElementById("EditProfile_submitFont");
  let EditProfile_submitFont = e3.options[e3.selectedIndex].text;
  let EditProfile_submitFontIOS = document.getElementById("EditProfile_submitFontIOS").value;

  if (( EditProfile_cpBg !== '') && (EditProfile_cpSize !== '') && (EditProfile_cpTitleColor !== '') && (EditProfile_submitTextSize  !== '')) {
    document.getElementById("Error").innerHTML = "";
      var data = {
        "EditProfileChangePicBg": EditProfile_cpBg,
        "EditProfileChangePicFontSize": EditProfile_cpSize,
        "EditProfileChangePicTitleColor": EditProfile_cpTitleColor,
        "EditProfileChangePicTitleFont": EditProfile_cpFont,
        "EditProfileChangePicTitleFontIOS": EditProfile_cpFontIOS,
        "EditProfileFormLabelColor": EditProfile_formColor,
        "EditProfileFormLabelFont": EditProfile_formLabelFont,
        "EditProfileFormLabelFontIOS": EditProfile_formLabelFontIOS,
        "EditProfileSubmitButtonBgColor": EditProfile_submitBg,
        "EditProfileSubmitButtonTextSize": EditProfile_submitTextSize,
        "EditProfileSubmitButtonTextFont": EditProfile_submitFont,
        "EditProfileSubmitButtonTextFontIOS": EditProfile_submitFontIOS,
        "EditProfileSubmitButtonTextColor": EditProfile_SubmitTextColor,

      };
    firebase.database().ref("Test/EditProfile").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      } else {
        document.getElementById("loading").innerHTML = 'Loading Preview...';
        var iframe = document.getElementById('mine');
        iframe.src = iframe.src;
      }
    });
    firebase.database().ref(appname+"/EditProfile").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}
