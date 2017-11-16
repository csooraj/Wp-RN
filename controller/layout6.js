function UploadCategoryDetails() {
  let appname = $.cookie("appname");
  let database = firebase.database();
  let menuitem = $.cookie("custompost");
  let Menu_textcolor = document.getElementById("Menu_textcolor").value;
  let e1 = document.getElementById("Menu_fontFamily");
  let Menu_fontFamily = e1.options[e1.selectedIndex].text;
  let e2 = document.getElementById("Menu_fontFamilyIOS");
  let Menu_fontFamilyIOS = e2.options[e2.selectedIndex].text;
  let CatArchive_LinkTo = $('#layoutbutton').text();

  if ((Menu_textcolor !== '')) {
    document.getElementById("Error").innerHTML = "";
      var data = {
        "CategoryTextColor": Menu_textcolor,
        "CategoryTextFontFamily": Menu_fontFamily,
        "CategoryTextFontFamilyIOS": Menu_fontFamilyIOS,
        "LinkTo": CatArchive_LinkTo,
        "ScreenName": menuitem,
      };
    firebase.database().ref("Test/Layout6/"+menuitem).update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      } else {
        document.getElementById("loading").innerHTML = 'Loading Preview...';
        var iframe = document.getElementById('mine');
        iframe.src = iframe.src;
      }
    });
    firebase.database().ref(appname+"/Layout6/"+menuitem).update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}

$("#layout").on('click', 'li a', function(){
     $("#layoutbutton").text($(this).attr('title'));
     $("#layoutbutton").val($(this).attr('title'));
  });

  function handleEditLayout() {
    var layout = $('#layoutbutton').text();
    if(layout=== 'CategoryPostListWithImage'){
      window.open('./layout1.php','_blank');
      //$(location).attr('href','./layout1.php');
    }else if(layout === 'CategoryPostWithTab' ){
      window.open('./layout2.php','_blank');
      //$(location).attr('href','./layout4.php');
    }else if(layout==='CategoryPostWithImage'){
      window.open('./layout4.php','_blank');
    }else{
      window.open('./layout8.php','_blank');
    }
  }
