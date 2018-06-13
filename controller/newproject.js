$(document).ready(function(){
  $("#loader").hide();
  $("#createapp").click(function(){
    const appName = (document.getElementById("appname").value).replace(/ /g,'');
    $.cookie("appName", appName);
    if (appName === '') {
      alert("Enter the name of the app");
    } else{
      $("#loader").show();
      const data = { appName: appName };
      $.ajax({
         url: 'http://3a125c03.ngrok.io/newproject',
         type: 'POST',
         dataType: 'json',
         headers: {  'Access-Control-Allow-Origin': '*' },
         data:data,
         success: function(data,textStatus,xhr){
             $("#loader").hide();
             alert(data.message);
         },
         error: function(xhr,textStatus,errorThrown){
             $("#loader").hide();
             console.log('Error Something', errorThrown);
         },
     });
    }
  });

  $("#addurl").click(function() {
    const appUrl = document.getElementById("websiteurl").value;
    const appName = $.cookie("appName");

    if (appUrl === '') {
      alert("Enter the url of the website");
    } else{
      $("#loader").show();
      const data = { appName: appName, appUrl: appUrl };
      $.ajax({
         url: 'http://3a125c03.ngrok.io/addurl',
         type: 'POST',
         dataType: 'json',
         headers: {  'Access-Control-Allow-Origin': '*' },
         data:data,
         success: function(data,textStatus,xhr){
             $("#loader").hide();
             alert(data.message);
         },
         error: function(xhr,textStatus,errorThrown){
             $("#loader").hide();
             console.log('Error Something', errorThrown);
         },
     });
    }
  });

  $("#buildapk").click(function() {
    const appUrl = document.getElementById("websiteurl").value;
    const appName = $.cookie("appName");

    if (appUrl === '') {
      alert("Enter the url of the website");
    } else{
      $("#loader").show();
      const data = { appName: appName, appUrl: appUrl };
      $.ajax({
         url: 'http://3a125c03.ngrok.io/buildapk',
         type: 'POST',
         dataType: 'json',
         headers: {  'Access-Control-Allow-Origin': '*' },
         data:data,
         success: function(data,textStatus,xhr){
             $("#loader").hide();
             $("#downloadlink").append("<a href=" + "http://3a125c03.ngrok.io/"+appName+"/app.apk" + ">Click here to download the apk</a>");
         },
         error: function(xhr,textStatus,errorThrown){
             $("#loader").hide();
             console.log('Error Something', errorThrown);
         },
     });
    }
  });

  $("#previewapk").click(function() {
    const appName = $.cookie("appName");
    const data ={ "url": "https://files.fm/u/wdbsfj8m", "platform": "android" }
    $.ajax({
       url: 'https://tok_mj27ztnqukb5ruy4939ed5p8hm@api.appetize.io/v1/apps',
       type: 'POST',
       dataType: 'json',
       headers: {"Authorization": 'tok_mj27ztnqukb5ruy4939ed5p8hms'},
       data:data,
       success: function(data,textStatus,xhr){
           console.log("The data is------>", data);
       },
       error: function(xhr,textStatus,errorThrown){
           console.log('Error Something', errorThrown);
       },
   });
  });
});
