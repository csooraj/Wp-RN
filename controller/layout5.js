function UploadCategoryArchiveDetails() {
  let appname = $.cookie("appname");
  var menuitem = $.cookie("custompost");
  let database = firebase.database();
  let CatArchive_titlecolor = document.getElementById("CatArchive_titlecolor").value;
  let CatArchive_bordercolor = document.getElementById("CatArchive_bordercolor").value;
  let e1 = document.getElementById("CatArchive_fontFamily");
  let CatArchive_fontFamily = e1.options[e1.selectedIndex].text;
  let e2 = document.getElementById("CatArchive_fontFamilyIOS");
  let CatArchive_fontFamilyIOS = e2.options[e2.selectedIndex].text;
  let CatArchive_LinkTo = $('#layoutbutton').text();


  if ((CatArchive_titlecolor !== '') && ( CatArchive_bordercolor!== '')) {
    document.getElementById("Error").innerHTML = "";
      var data = {
        "CategoryArchiveTitleColor": CatArchive_titlecolor,
        "CategoryArchiveBorderColor": CatArchive_bordercolor,
        "CategoryArchiveFont": CatArchive_fontFamily,
        "CategoryArchiveFontIOS": CatArchive_fontFamilyIOS,
        "LinkTo": CatArchive_LinkTo,
        "ScreenName": menuitem
      };
    firebase.database().ref("Test/Layout5/"+menuitem).update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      } else {
        document.getElementById("loading").innerHTML = 'Loading Preview...';
        var iframe = document.getElementById('mine');
        iframe.src = iframe.src;
      }
    });
    firebase.database().ref(appname+"/Layout5/"+menuitem).update(data, function(error) {
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
