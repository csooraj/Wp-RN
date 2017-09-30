function UploadAccountDetails() {
  UploadToAws();
  UploadTestAsset();
  let appname = $.cookie("appname");
  let database = firebase.database();
  let account_bg = document.getElementById('fileUpload');
  let e1 = document.getElementById("titleFont");
  let account_titlefontFamily = e1.options[e1.selectedIndex].text;
  var e2 = document.getElementById("inputlabelfont");
  let account_inputfontFamily = e2.options[e2.selectedIndex].text;
  let file1 = account_bg.files[0];
  let account_titleColor = document.getElementById("titlecolor").value;
  let account_titleSize = document.getElementById("titlesize").value;
  let account_labelColor = document.getElementById("labelcolor").value;
  let account_labelSize = document.getElementById("labelsize").value;
  let account_buttonColor = document.getElementById("continuebuttoncolor").value;
  let account_buttonTextSize = document.getElementById("continuebuttonlabelsize").value;
  let account_buttonTextColor = document.getElementById("continuebuttonlabelcolor").value;
  let account_inputBgColor = document.getElementById("inputcolor").value;
  let account_backLabelColor = document.getElementById("backbuttoncolor").value;
  let account_backLabelSize = document.getElementById("backbuttontextsize").value;
  let account_termsSize = document.getElementById("termstextsize").value;
  let account_termsColor = document.getElementById("termstextcolor").value;
  if ((account_backLabelSize !== '') && (account_backLabelColor !== '') && (account_buttonTextColor !== '') && (account_inputBgColor !== '') && (account_buttonTextSize !== '') && (account_buttonTextColor !== '') && (account_titleColor !== '') && (account_titleSize !== '') && (account_labelColor !== '') && (account_labelSize !== '') && (account_buttonColor !== '')) {
    document.getElementById("Error").innerHTML = "";
    if ((file1 === undefined)) {
      var data = {
        "AccountInputColor": account_inputBgColor,
        "AccountTitleFont": account_titlefontFamily,
        "AccountInputFont": account_inputfontFamily,
        "AccountBackLabelColor": account_backLabelColor,
        "AccountBackLabelSize": account_backLabelSize,
        "AccountButtonColor": account_buttonColor,
        "AccountButtonTextSize": account_buttonTextSize,
        "AccountButtonTextColor": account_buttonTextColor,
        "AccountTitleColor": account_titleColor,
        "AccountTitleSize": account_titleSize,
        "AccountLabelColor": account_labelColor,
        "AccountLabelSize": account_labelSize,
        "AccountTermsSize": account_termsSize,
        "AccountTermsColor": account_termsColor
      };
    } else {
      var data = {
        "AccountBgUrl": file1.name,
        "AccountInputColor": account_inputBgColor,
        "AccountTitleFont": account_titlefontFamily,
        "AccountInputFont": account_inputfontFamily,
        "AccountBackLabelColor": account_backLabelColor,
        "AccountBackLabelSize": account_backLabelSize,
        "AccountButtonColor": account_buttonColor,
        "AccountButtonTextSize": account_buttonTextSize,
        "AccountButtonTextColor": account_buttonTextColor,
        "AccountTitleColor": account_titleColor,
        "AccountTitleSize": account_titleSize,
        "AccountLabelColor": account_labelColor,
        "AccountLabelSize": account_labelSize,
        "AccountTermsSize": account_termsSize,
        "AccountTermsColor": account_termsColor
      };
    }
    firebase.database().ref(appname+"/CreateAccount").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }
    });
    firebase.database().ref("Test/CreateAccount").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      } else {
        document.getElementById("loading").innerHTML = 'Loading Preview...';
        var iframe = document.getElementById('mine');
        iframe.src = iframe.src;
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}

function UploadToAws(type) {
  var appname = $.cookie("appname");
  var bucket = new AWS.S3({
    params: {
      Bucket: 'wp-reactdemo'
    }
  });
  var fileChooser = document.getElementById('fileUpload');
  var file = fileChooser.files[0];
  if (file) {
    var name = file.name;
    var key = appname + "/" + name;
    var params = {
      Key: key,
      ContentType: file.type,
      Body: file
    };
    bucket.upload(params).on('httpUploadProgress', function(evt) {
      console.log("Uploaded :: " + parseInt((evt.loaded * 100) / evt.total) + '%');
    }).send(function(err, data) {
      console.log(err);
      console.log(data);
    });
  }
}

function UploadTestAsset() {
  var bucket = new AWS.S3({
    params: {
      Bucket: 'wp-reactdemo'
    }
  });
  var fileChooser = document.getElementById('fileUpload');
  var file = fileChooser.files[0];
  if (file) {
    var name = file.name;
    var params = {
      Key: "Assets/" + name,
      ContentType: file.type,
      Body: file
    };
    bucket.upload(params).on('httpUploadProgress', function(evt) {
      console.log("Uploaded :: " + parseInt((evt.loaded * 100) / evt.total) + '%');
    }).send(function(err, data) {
      console.log(err);
      console.log(data);
    });
  }
}
