var fileName = '';
var downloadURL = '';
var config = {
  databaseURL: "https://chainside-731fd.firebaseio.com/",
  storageBucket: "gs://wp-react.appspot.com",
};
firebase.initializeApp(config);

function UploadSplash() {
  UploadToAws(2);
  var appname = $.cookie("appname");
  var database = firebase.database();
  let backgroundColor = document.getElementById("Splash_bgcolor").value;
  let titleSize = document.getElementById("Splash_titleSize").value;
  var e = document.getElementById("Splash_fontFamily");
  let fontFamily = e.options[e.selectedIndex].text;
  var e1 = document.getElementById("Splash_fontIOSFamily");
  let fontFamilyIOS = e1.options[e1.selectedIndex].text;
  let layouttype = document.querySelector('input[name="optradio"]:checked').value;
  let titleColor = document.getElementById("Splash_titleColor").value;
  var fileChooser = document.getElementById('fileUpload');
  var file = fileChooser.files[0];
  let title = document.getElementById("Splash_title").value;
  console.log("The value that you are looking for", downloadURL);
  if ((backgroundColor !== '') && (titleSize !== '') && (titleColor !== '') && (title !== '') && (layouttype !== '')) {
    document.getElementById("Error").innerHTML = "";
    document.getElementById("loading").innerHTML = 'Saving Data....';
    if (file === undefined) {
      var data = {
        "AppName": appname,
        "SplashBgColor": backgroundColor,
        "type": layouttype,
        "Splashtitle": title,
        "SplashtitleFontFamily": fontFamily,
        "SplashtitleFontIos": fontFamilyIOS,
        "SplashtitleSize": titleSize,
        "SplashtitleColor": titleColor
      };
    } else {
      var data = {
        "AppName": appname,
        "SplashBgColor": backgroundColor,
        "SplashtitleFontFamily": fontFamily,
        "SplashtitleFontIos": fontFamilyIOS,
        "type": layouttype,
        "SplashlogoUrl": file.name,
        "Splashtitle": title,
        "SplashtitleSize": titleSize,
        "SplashtitleColor": titleColor
      };
    }
    firebase.database().ref("Test/Splash").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      } else {
        //alert("Data Submitted Successfully");
        document.getElementById("loading").innerHTML = 'Loading Preview....';
        var iframe = document.getElementById('mine');
        iframe.src = iframe.src;
      }
    });
    firebase.database().ref(appname+"/Splash").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}

function UploadLogin() {
  UploadToAws(1);
  var appname = $.cookie("appname");
  var database = firebase.database();
  let login_bg = document.getElementById('fileUpload');
  var file1 = login_bg.files[0];
  let login_logo = document.getElementById('fileUpload1');
  var file2 = login_logo.files[0];
  let login_labelColor = document.getElementById("Login_textColor").value;
  let login_labelSize = document.getElementById("Login_labelSize").value;
  var e1 = document.getElementById("Login_labelFont");
  let login_labelfontFamily = e1.options[e1.selectedIndex].text;
  var e3 = document.getElementById("Login_fontIOSFamily");
  let login_fontFamilyIOS = e3.options[e3.selectedIndex].text;
  let login_buttonColor = document.getElementById("Login_buttonColor").value;
  let login_buttonTextSize = document.getElementById("Login_buttonTextSize").value;
  var e2 = document.getElementById("Login_buttonFont");
  let login_buttonfontFamily = e2.options[e2.selectedIndex].text;
  var e4 = document.getElementById("Login_buttonFontIOSFamily");
  let login_buttonfontFamilyIOS = e4.options[e4.selectedIndex].text;
  let login_inputBgColor = document.getElementById("Login_inputColor").value;
  if ((login_labelColor !== '') && (login_labelSize !== '') && (login_buttonColor !== '') && (login_buttonTextSize !== '') && (login_inputBgColor !== '')) {
    document.getElementById("Error").innerHTML = "";
    if ((file1 === undefined) && (file2 === undefined)) {
      var data = {
        "AppName": appname,
        "InputBgColor": login_inputBgColor,
        "LoginLabelColor": login_labelColor,
        "LoginLabelSize": login_labelSize,
        "LoginLabelFont": login_labelfontFamily,
        "LoginLabelIosFont": login_fontFamilyIOS,
        "LoginButtonLabelIosFont": login_buttonfontFamilyIOS,
        "LoginButtonLabelFont": login_buttonfontFamily,
        "LoginButtonColor": login_buttonColor,
        "LoginButtonTextSize": login_buttonTextSize
      };
    } else if (file1 === undefined) {
      var data = {
        "AppName": appname,
        "InputBgColor": login_inputBgColor,
        "LoginLogo": file2.name,
        "LoginLabelColor": login_labelColor,
        "LoginLabelSize": login_labelSize,
        "LoginLabelFont": login_labelfontFamily,
        "LoginButtonLabelFont": login_buttonfontFamily,
        "LoginButtonColor": login_buttonColor,
        "LoginButtonTextSize": login_buttonTextSize
      };
    } else if (file2 === undefined) {
      var data = {
        "AppName": appname,
        "InputBgColor": login_inputBgColor,
        "LoginBgUrl": file1.name,
        "LoginLabelColor": login_labelColor,
        "LoginLabelSize": login_labelSize,
        "LoginLabelFont": login_labelfontFamily,
        "LoginButtonLabelFont": login_buttonfontFamily,
        "LoginButtonColor": login_buttonColor,
        "LoginButtonTextSize": login_buttonTextSize
      };
    } else {
      var data = {
        "AppName": appname,
        "InputBgColor": login_inputBgColor,
        "LoginBgUrl": file1.name,
        "LoginLogo": file2.name,
        "LoginLabelColor": login_labelColor,
        "LoginLabelSize": login_labelSize,
        "LoginLabelFont": login_labelfontFamily,
        "LoginButtonLabelFont": login_buttonfontFamily,
        "LoginButtonColor": login_buttonColor,
        "LoginButtonTextSize": login_buttonTextSize
      };
    }
    firebase.database().ref("Test/Login").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      } else {
        document.getElementById("loading").innerHTML = 'Loading Preview...';
        var iframe = document.getElementById('mine');
        iframe.src = iframe.src;
      }
    });
    firebase.database().ref(appname+"/Login").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}

function HandleLoader() {
  document.getElementById("loading").innerHTML = 'Preview Loaded Tap Play To View';
}

function ReloadPreview(type) {
  var iframe = document.getElementById('mine');
  if (type === 1) {
    iframe.src = "https://appetize.io/embed/35th6932zj0ng14f1junyynr40?device=nexus5&scale=75&orientation=portrait&osVersion=7.1";
  } else {
    iframe.src = "https://appetize.io/embed/3neek0ahqvn2wk86w9zxd4bvyg?device=iphone5s&scale=75&orientation=portrait&osVersion=9.3";
  }
}

function UploadToAws(type) {
  var appname = $.cookie("appname");
  UploadTestAssets(0);
  if (type === 1) {
    UploadLogo(appname);
    UploadTestLogo();
  }
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

function UploadTestAssets(type) {
  if (type === 1) {
    UploadLogo(appname);
  }
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

function UploadTestLogo() {
  var bucket = new AWS.S3({
    params: {
      Bucket: 'wp-reactdemo'
    }
  });
  var fileChooser = document.getElementById('fileUpload1');
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

function UploadLogo(appname) {
  UploadTestLogo();
  var bucket = new AWS.S3({
    params: {
      Bucket: 'wp-reactdemo'
    }
  });
  var fileChooser = document.getElementById('fileUpload1');
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

function DownloadImage() {
  var bucket = new AWS.S3({
    params: {
      Bucket: 'wp-reactdemo'
    }
  });
  var params = {
    Bucket: 'wp-reactdemo'
  };
  bucket.listObjects(params, function(err, data) {
    var bucketContents = data.Contents;
    for (var i = 0; i < bucketContents.length; i++) {
      console.log("testing 123", bucketContents[i].Key);
      var urlParams = {
        Bucket: 'wp-reactdemo',
        Key: bucketContents[i].Key
      };
      bucket.getSignedUrl('getObject', urlParams, function(err, url) {
        $("#list").append("<a download=" + "test" + " href=" + url + ">Download Image<image height=50 width=50 src=" + url + " /></a>");
        console.log('the url of the image is', url);
      });
    }
  });
}
