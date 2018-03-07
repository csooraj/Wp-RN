function UploadEditProfileDetails() {
  let appname = $.cookie("appname");
  let database = firebase.database();
  let EditProfile_cpSize = document.getElementById("EditProfile_cpSize").value;
  let EditProfile_cpTitleColor = document.getElementById("EditProfile_cpTitleColor").value;
  let EditProfile_sbTitleColor = document.getElementById("EditProfile_sbTitleColor").value;
  let EditProfile_formColor = document.getElementById("EditProfile_formColor").value;
  let EditProfile_submitTextSize = document.getElementById("EditProfile_submitTextSize").value;
  let EditProfile_submitBg = document.getElementById("EditProfile_submitBg").value;
  let EditProfile_formBorderColor = document.getElementById("EditProfile_formBorderColor").value;
  let EditProfile_SubmitTextColor = document.getElementById("EditProfile_SubmitTextColor").value;

  let e1 = document.getElementById("EditProfile_cpFont");
  let EditProfile_cpFont = e1.options[e1.selectedIndex].text;
  let EditProfile_cpFontIOS = document.getElementById("EditProfile_cpFontIOS").value;
  let e4 = document.getElementById("EditProfile_sbFont");
  let EditProfile_sbFont = e4.options[e4.selectedIndex].text;
  let EditProfile_sbFontIOS = document.getElementById("EditProfile_sbFontIOS").value;
  let e2 = document.getElementById("EditProfile_formLabelFont");
  let EditProfile_formLabelFont = e2.options[e2.selectedIndex].text;
  let EditProfile_formLabelFontIOS = document.getElementById("EditProfile_formLabelFontIOS").value;
  let e3 = document.getElementById("EditProfile_submitFont");
  let EditProfile_submitFont = e3.options[e3.selectedIndex].text;
  let EditProfile_submitFontIOS = document.getElementById("EditProfile_submitFontIOS").value;

  let User_fields = $('#terms').val();

  if ((EditProfile_cpSize !== '') && (EditProfile_cpTitleColor !== '') && (EditProfile_submitTextSize  !== '')) {
    document.getElementById("Error").innerHTML = "";
      var data = {
        "UserNameFontSize": EditProfile_cpSize,
        "UserNameFontFamily": EditProfile_cpFont,
        "UserNameFontFamilyIOS": EditProfile_cpFontIOS,
        "UserNameTextColor": EditProfile_cpTitleColor,
        "UserNameSubTitleFont": EditProfile_sbFont,
        "UserNameSubTitleFontIOS": EditProfile_sbFontIOS,
        "UserNameSubTitleColor": EditProfile_sbTitleColor,
        "UserNameFormLabel": EditProfile_formColor,
        "UserNameFormFont": EditProfile_formLabelFont,
        "UserNameFormFontIOS": EditProfile_formLabelFontIOS,
        "EditProfileButtonTextSize": EditProfile_submitTextSize,
        "EditProfileButtonTextFont": EditProfile_submitFont,
        "EditProfileButtonTextFontIOS": EditProfile_submitFontIOS,
        "EditProfileButtonTextColor": EditProfile_SubmitTextColor,
        "EditProfileButtonBg": EditProfile_submitBg,
        "UserFields": User_fields,
        "UserNameFormBorderColor": EditProfile_formBorderColor,
      };
    firebase.database().ref("Test/Profile").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      } else {
        document.getElementById("loading").innerHTML = 'Loading Preview...';
        var iframe = document.getElementById('mine');
        iframe.src = iframe.src;
      }
    });
    firebase.database().ref(appname+"/Profile").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}
