$(document).ready(function(){
  $('#myid19').addClass('active');
  var appname = $.cookie("appname");
  firebase.database().ref(appname+"/CustomPostLayout").on('value', function(snapshot) {
      $("#test").empty();
      snapshot.forEach(function(entry, index) {
        var layout = entry.val().LayoutNumber;
        var imageLink = layout.toLowerCase();
        $("#test").append("<tr><td>"+entry.key+"</td><td><img class=img-responsive style=height:416px;width:200px src=../assets/"+imageLink+".jpg></td><td><a><button type='button' class='btn btn-success' onclick=\"handleEditLayout('"+entry.key+','+imageLink+"')\">CONFIGURE LAYOUT</button></a></td><td><a href=./"+imageLink+".php></a><select class='form-control' id="+entry.key+"><option>Layout1</option><option>Layout2</option><option>Layout3</option><option>Layout4</option></select></td><td><button type='button' class='btn btn-primary' onclick=\"handleUpdateSubItems('"+entry.key+"')\">UPDATE</button></td><td><button type='button' class='btn btn-danger' onclick=\"handleDelete('"+entry.key+"')\">DELETE</button></td></tr>");
        $("#"+entry.key).val(layout);
      });
  });
});


function handleUpdateSubItems(entry) {
  var appname = $.cookie("appname");
  var layout = document.getElementById(entry).value;
  var data = { "LayoutNumber": layout}
  firebase.database().ref(appname+"/CustomPostLayout/"+entry).update(data, function(error) {
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
  $(location).attr('href','./'+res[1].toLowerCase()+'.php');
}

function handleDelete(entry) {
  var appname = $.cookie("appname");
  firebase.database().ref(appname+"/CustomPostLayout/"+entry).remove();
}
