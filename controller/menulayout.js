let menuItems = [];

function UploadMenuDetails() {
  let appname = $.cookie("appname");
  let database = firebase.database();
  let Menu_Name = document.getElementById("menu_label").value;
  let Screen_Linked = $('#screen_link :selected').text();

  if ((Menu_Name !== '') && (Screen_Linked !== '')) {
    document.getElementById("Error").innerHTML = "";
      var data = {
        "Name": Menu_Name,
        "LinkTo": Screen_Linked
      };
    firebase.database().ref(appname+"/MenuItems/"+Menu_Name).update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}

$(document).ready(function(){
  $("#submenu").hide();
});


$("input[name$='menuchild']").click(function() {
    var test = $(this).val();
    if(test === '1'){
      $("#submenu").show();
    }else{
      $("#submenu").hide();
    }
});

$("#addmenuitems").click(function(){
  var parentName = document.getElementById("menu_label").value;
  var menuName = document.getElementById("submenulabel").value;
  var menuUrl = $('#submenuurl :selected').text();
  var menuLayout = $('#submenulayout :selected').text();
  var data = { "Name": menuName, "Layout": menuLayout};
  menuItems.push(data);
  var appname = $.cookie("appname");
  firebase.database().ref(appname+"/MenuItems/"+parentName+"/ChildItems").update(menuItems, function(error) {
    if (error !== null) {
      document.getElementById('loading').innerHTML = 'Some Error Occured....';
    } else {
      document.getElementById('loading').innerHTML = '';
      $("#alert_template button").after('<span>Saved Configuration</span>');
      $("#alert_template").fadeTo(500, 500).slideUp(500, function(){
        $("#alert_template").slideUp(500);
      });
    }
  });
});


$(document).ready(function(){
  $('#myid6').addClass('active');
  var appname = $.cookie("appname");
  firebase.database().ref(appname+"/MenuItems/").on('value', function(snapshot) {
        $("#test").empty();
   snapshot.forEach(function(entry) {
        $("#test").append("<tr id="+entry.val().Name.replace(/\s/g,'')+"><td>"+entry.val().Name+"</td><td id="+entry.val().Name+"url"+">"+entry.val().LinkTo+"</td><td><button type=button class='btn btn-danger' onclick=\"handledelete('" + entry.val().Name + "')\">DELETE</button></td></tr>");
        if(entry.val().ChildItems=== undefined){
          //console.log("Do Nothing", entry.val().SubMenu);
        }else{
          console.log("Child Items", entry.val().SubMenu);
          entry.val().ChildItems.forEach(function(item, index) {
            console.log("The index is----->", index);
            $('#'+entry.val().Name.replace(/\s/g,'')).append("<table class='table table-bordered bg-success'><thead><tr><th>Sub Menu Label</th><th>Connected View</th><th>Action</th></tr></thead><tr><td id="+item.Name+">"+item.Name+"</td><td id="+item.Layout+">"+item.Layout+"</td><td><button type='button' class='btn btn-danger' onclick=\"handleDeleteSubItems('"+entry.val().Name+','+index+ "')\">DELETE</button></td></tr></table>");
          });
        }
    });
    document.getElementById("loader").innerHTML = "";
});

});
