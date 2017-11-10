var menuItems = [];

$(document).ready(function(){
   document.getElementById('test').innerHTML = 'Loading Please Wait....';
  var appname = $.cookie("appname");
  var menuName = document.getElementById("menu_label").value;


  $("#submenu").hide();
  $("#savechanges").hide();
  $('#myidla2').addClass('active');
  $("input[name$='menuchild']").click(function() {
      var test = $(this).val();
      if(test === '1'){
        $("#submenu").show();
      }else{
        $("#submenu").hide();
      }
  });
//   $(".dropdown-menu li a img").click(function(){
//     var img_type = $(this).attr("src");
//     $('#preview').empty().append('<label for="sel1">Selected Layout</label><img style="height:200px;weight:200px" src='+img_type+'>');
//  });
 $("#addmenuitems").click(function(){
   var parentName = document.getElementById("menu_label").value;
   var menuName = document.getElementById("submenulabel").value;
   var menuUrl = $('#submenuurl :selected').text();
   var menuLayout = $('#submenulayout :selected').text();
   var data = { "Name": menuName, "Url": menuUrl, "Layout": menuLayout};
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
 $('.dropdown-menu li').on('click', function(){
  document.getElementById('loading').innerHTML = 'Saving Configuration Please Wait.......';
  var img_type = $(this).find('a').attr('title');
  var appname = $.cookie("appname");
  var menuName = document.getElementById("menu_label").value;
  var menuUrl = $('#menu_url :selected').text();
  var data = { "Name": menuName, "Url": menuUrl, "Layout": img_type, "SubMenu": menuItems };
  firebase.database().ref(appname+"/MenuItems/"+menuName).update(data, function(error) {
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


  $('#savechanges').on('click', function(){
   document.getElementById('loading').innerHTML = 'Saving Configuration Please Wait.......';
   var img_type = $('.dropdown-menu li').find('a').attr('title');
   var appname = $.cookie("appname");
   var menuName = document.getElementById("menu_label").value;
   var menuUrl = $('#menu_url :selected').text();
   var data = { "Name": menuName, "Url": menuUrl, "Layout": img_type, "SubMenu": menuItems };
   firebase.database().ref(appname+"/MenuItems/"+menuName).update(data, function(error) {
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

  $(".dropdown-menu li a").click(function(){
      $("#layoutbutton").text($(this).text());
      $("#layoutbutton").val($(this).text());

   });

   $("#clearchanges").click(function(){
       location.reload();
    });

  firebase.database().ref(appname+"/MenuItems/"+menuName).on('value', function(snapshot) {
         $("#test").empty();
    snapshot.forEach(function(entry) {
         $("#test").append("<tr id="+entry.val().Name+"><td>"+entry.val().Name+"</td><td id="+entry.val().Name+"url"+">"+entry.val().Url+"</td><td id="+entry.val().Name+"layout"+">"+entry.val().Layout+"</td><td><button type=button class='btn' onclick=\"handleConfigureLayout('" + entry.val().Layout+','+entry.val().Name+"')\">Configure Layout</button></td><td><button type=button class='btn btn-success' onclick=\"handleedit('" + entry.val().Name + "')\">EDIT</button></td><td><button type=button class='btn btn-danger' onclick=\"handledelete('" + entry.val().Name + "')\">DELETE</button></td></tr>");
         if(entry.val().ChildItems=== undefined){
           console.log("Do Nothing", entry.val().SubMenu);
         }else{
           console.log("Child Items", entry.val().SubMenu);
           entry.val().ChildItems.forEach(function(item, index) {
             console.log("The index is----->", index);
             $('#'+entry.val().Name).append("<table class='table table-bordered bg-success'><thead><tr><th>Sub Menu Label</th><th>Sub Menu Url</th><th>Layout Selected</th></tr></thead><tr><td id="+item.Name+">"+item.Name+"</td><td id="+item.Url+">"+item.Url+"</td><td id="+item.Layout+"><button type=button class='btn' onclick=\"handleConfigureLayout('" + item.Layout+','+item.Name+"')\">Edit "+item.Layout+"</button><td><button type='button' class='btn btn-success' onclick=\"handleEditSubItems('" + item.Name +','+ item.Url+','+item.Layout+','+ entry.val().Name+','+index+ "')\">EDIT</button></td><td><button type='button' class='btn btn-danger' onclick=\"handleDeleteSubItems('"+entry.val().Name+','+index+ "')\">DELETE</button></td></tr></table>");
           });
         }
     });
  });
 });


 function handleedit(entry){
   $("html, body").animate({ scrollTop: 0 }, "slow");
   menuItems = [];
   $("#savechanges").show();
   $('#radioview').show();
   var appname = $.cookie("appname");
   document.getElementById("menu_label").value = entry;
   document.getElementById("menu_url").value = document.getElementById ( entry+"url" ).innerText
   var menulayout = document.getElementById(entry+"layout").innerText;
   $('#layoutbutton').text(menulayout);
 }

 function handleConfigureLayout(entry){
   var res = entry.split(",");
   $.cookie("menuitem", res[1]);
   var win = window.open('./'+res[0].toLowerCase()+'.php', '_blank');
   win.focus();
   //$(location).attr('href', './'+res[0].toLowerCase()+'.php');
 }

 function handleSubMenuConfigureLayout(entry){
   var res = entry.split(",");
   $.cookie("menuitem", res[1]);
   var win = window.open('./'+res[0].toLowerCase()+'.php', '_blank');
   win.focus();
   //$(location).attr('href', './'+res[0].toLowerCase()+'.php');
 }

 function handledelete(entry){
   var appname = $.cookie("appname");
   firebase.database().ref(appname+"/MenuItems/"+entry).remove();
 }


 function handleEditSubItems(entry){
   var res = entry.split(",");
   var appname = $.cookie("appname");
   $('#myModalNorm').modal('show');
   document.getElementById("MenuLabel").innerHTML = res[3];
   document.getElementById("MenuId").innerHTML = res[4];
   document.getElementById("subMenuLabel").innerHTML = 'Edit '+res[0];
   document.getElementById("submenu_label").value = res[0];
   document.getElementById("subMenuUrl").value = res[1];
   document.getElementById("subMenuLayout").value = res[2];
 }


 function handleDeleteSubItems(entry){
   var res = entry.split(",");
   var appname = $.cookie("appname");
   firebase.database().ref(appname+"/MenuItems/"+res[0]+"/ChildItems/"+res[1]).remove();
 }

 function updateSubMenu(){
   var appname = $.cookie("appname");
   var menuName = document.getElementById("MenuLabel").innerHTML;
   var label = document.getElementById("submenu_label").value;
   var url = document.getElementById("subMenuUrl").value;
   var layout = document.getElementById("subMenuLayout").value;
   var index = document.getElementById("MenuId").innerHTML;
   var data = { "Name": label, "Url": url, "Layout": layout};
   firebase.database().ref(appname+"/MenuItems/"+menuName+"/ChildItems/"+index).update(data, function(error) {
     if (error !== null) {
       document.getElementById('loading').innerHTML = 'Some Error Occured....';
     } else {
       $('#myModalNorm').modal('hide');
       setTimeout(1000, alert("Updated Successfully"));
     }
   });
 }
