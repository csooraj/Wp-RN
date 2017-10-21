function UploadPostViewDetails() {
  let appname = $.cookie("appname");
  let database = firebase.database();
  let Post_titleSize = document.getElementById("Post_titleSize").value;
  var e2 = document.getElementById("Post_titleFont");
  let Post_titlefontFamily = e2.options[e2.selectedIndex].text;
  let Post_titlecolor = document.getElementById("Post_titleColor").value;
  let Post_datecolor = document.getElementById("Post_dateColor").value;
  var e3 = document.getElementById("Post_authorFont");
  let Post_authorfontFamily = e3.options[e3.selectedIndex].text;
  let Post_categoryColor = document.getElementById("Post_categoryColor").value;
  let Post_categoryFont = document.getElementById("Post_categoryFont").value;
  let Post_categorySize = document.getElementById("Post_categorySize").value;
  let Post_contentColor = document.getElementById("Post_contentColor").value;
  let Post_contentFont = document.getElementById("Post_contentFont").value;
  let Post_contentSize = document.getElementById("Post_contentSize").value;

  if ((Post_titleSize !== '') && (Post_titlefontFamily !== '') && (Post_titlecolor !== '') && (Post_datecolor !== '') && (Post_authorfontFamily !== '')) {
    document.getElementById("Error").innerHTML = "";
      var data = {
        "PostTitleSize": Post_titleSize,
        "PostTitleColor": Post_titlecolor,
        "PostTitleFont": Post_titlefontFamily,
        "PostDateColor": Post_datecolor,
        "PostAuthorFont": Post_authorfontFamily,
        "PostCategoryColor": Post_categoryColor,
        "PostCategorySize": Post_categorySize,
        "PostCategoryFont": Post_categoryFont,
        "PostContentColor": Post_contentColor,
        "PostContentSize": Post_contentSize,
        "PostContentFont": Post_contentFont,
      };
    firebase.database().ref("Test/PostDetails").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      } else {
        document.getElementById("loading").innerHTML = 'Loading Preview...';
        var iframe = document.getElementById('mine');
        iframe.src = iframe.src;
      }
    });
    firebase.database().ref(appname+"/PostDetails").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}
