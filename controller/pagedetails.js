function UploadPostViewDetails() {
  let appname = $.cookie("appname");
  let database = firebase.database();
  let Post_titleSize = document.getElementById("Post_titleSize").value;
  var e2 = document.getElementById("Post_titleFont");
  let Post_titlefontFamily = e2.options[e2.selectedIndex].text;
  let Post_titlefontFamilyIOS = document.getElementById("Post_titleFontIOS").value;
  let Post_titlecolor = document.getElementById("Post_titleColor").value;
  let Post_datecolor = document.getElementById("Post_dateColor").value;
  var e3 = document.getElementById("Post_authorFont");
  let Post_authorfontFamily = e3.options[e3.selectedIndex].text;
  let Post_categoryColor = document.getElementById("Post_categoryColor").value;
  let Post_authorfontFamilyIOS = document.getElementById("Post_authorFontIOS").value;
  let Post_categoryFont = document.getElementById("Post_categoryFont").value;
  let Post_categoryFontIOS = document.getElementById("Post_categoryFontIOS").value;
  let Post_categorySize = document.getElementById("Post_categorySize").value;
  let Post_contentColor = document.getElementById("Post_contentColor").value;
  let Post_contentFont = document.getElementById("Post_contentFont").value;
  let Post_contentFontIOS = document.getElementById("Post_contentFontIOS").value;
  let Post_contentSize = document.getElementById("Post_contentSize").value;
  let Post_commentTextColor = document.getElementById("Post_commentTextColor").value;
  let Post_commentColor = document.getElementById("Post_commentColor").value;
  let Post_commentFont = document.getElementById("Post_commentFont").value;
  let Post_commentFontIOS = document.getElementById("Post_commentFontIOS").value;
  let Post_commentSize = document.getElementById("Post_commentSize").value;
  let page_url = $.cookie("pageurl");
  if ((Post_titleSize !== '') && (Post_titlefontFamily !== '') && (Post_titlecolor !== '') && (Post_datecolor !== '') && (Post_authorfontFamily !== '')) {
    document.getElementById("Error").innerHTML = "";
      var data = {
        "PageUrl": page_url,
        "PostTitleSize": Post_titleSize,
        "PostTitleColor": Post_titlecolor,
        "PostTitleFont": Post_titlefontFamily,
        "PostTitleFontIOS": Post_titlefontFamilyIOS,
        "PostDateColor": Post_datecolor,
        "PostAuthorFont": Post_authorfontFamily,
        "PostAuthorFontIOS": Post_authorfontFamilyIOS,
        "PostCategoryColor": Post_categoryColor,
        "PostCategorySize": Post_categorySize,
        "PostCategoryFont": Post_categoryFont,
        "PostCategoryFontIOS": Post_categoryFontIOS,
        "PostContentColor": Post_contentColor,
        "PostContentSize": Post_contentSize,
        "PostContentFont": Post_contentFont,
        "PostContentFontIOS": Post_contentFontIOS,
        "PostCommentColor": Post_commentColor,
        "PostCommentTextColor": Post_commentTextColor,
        "PostCommentFont": Post_commentFont,
        "PostCommentFontIOS": Post_commentFontIOS,
        "PostCommentSize": Post_commentSize,
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
    let menuname = $.cookie("custompost");
    firebase.database().ref(appname+"/PageDetails/"+menuname).update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}
