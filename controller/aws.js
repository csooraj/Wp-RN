function UploadAwsDetails() {
  let appname = $.cookie("appname");
  let database = firebase.database();
  let keyPrefix = document.getElementById("keyprefix").value;
  let bucket = document.getElementById("bucket").value;
  let region = document.getElementById("region").value;
  let secretKey = document.getElementById("secretKey").value;
  let accessKey = document.getElementById("accessKey").value;

  if ((keyPrefix !== '') && (bucket !== '') && (region !== '')&& (secretKey !== '')&& (accessKey !== '')) {
    const options = {
      keyPrefix: keyPrefix,
      bucket: bucket,
      region: region,
      accessKey: accessKey,
      secretKey: secretKey,
      successActionStatus: 201
    }
    firebase.database().ref(appname+"/EditProfile/AwsConfig").update(options, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }else{
        alert("Configuration Uploaded SucessFully");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}
