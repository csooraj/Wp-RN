$(document).ready(function(){
  $('#myid7').addClass('active');
  var appname = $.cookie("appname");
  firebase.database().ref(appname+"/Screens/Taxonomy").on('value', function(snapshot) {
      $("#test").empty();
      snapshot.forEach(function(entry, index) {
        var layout = entry.val().Layout;
        var imageLink = layout.toLowerCase();
        $("#test").append("<tr><td>"+entry.key+"</td><td><img class=img-responsive style=height:416px;width:200px src=../assets/"+imageLink+".png></td><td><a><button type='button' class='btn btn-success' onclick=\"handleEditLayout('"+entry.key+','+imageLink+"')\">CONFIGURE LAYOUT</button></a></td><td><a href=./"+imageLink+".php></a><select class='form-control' id="+entry.key.replace(/ /g,'')+"><option>Taxonomy_Grid</option><option>Taxonomy_List</option></select></td><td><button type='button' class='btn btn-primary' onclick=\"handleUpdateSubItems('"+entry.key+"')\">UPDATE</button></td><td><button type='button' class='btn btn-danger' onclick=\"handleDelete('"+entry.key+"')\">DELETE</button></td></tr>");
        $("#"+entry.key).val(layout);
      });
      document.getElementById("loader").innerHTML = "";
  });
});


function handleUpdateSubItems(entry) {
  var appname = $.cookie("appname");
  var id = entry.replace(/ /g,'');
  var layout = document.getElementById(id).value;
  var data = { "Layout": layout}
  firebase.database().ref(appname+"/Screens/Taxonomy/"+entry).update(data, function(error) {
    if (error !== null) {
      document.getElementById('loading').innerHTML = 'Some Error Occured....';
    } else {
      alert("Updated Successfully");
    }
  });
}

function handleEditLayout(entry) {
  var res = entry.split(",");
  $.cookie("custompost", res[0]);
  if(res[1]=== 'taxonomy_list'){
    window.open('./layout5.php','_blank');
    //$(location).attr('href','./layout1.php');
  }else{
    window.open('./layout6.php','_blank');
    //$(location).attr('href','./layout4.php');
  }
}

function handleDelete(entry) {
  var appname = $.cookie("appname");
  var ref = firebase.database().ref(appname+"/Screens/ScreenList/");
  ref.on('value', (snapshot) => {
    snapshot.forEach(function(data, index) {
      if(data.val()===entry){
        let key = data.key;
        firebase.database().ref(appname+"/Screens/ScreenList").child(key).remove();
      }
    });
  });
  firebase.database().ref(appname+"/Screens/Taxonomy/"+entry).remove();
}
