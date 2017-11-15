var ALPHABET = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

var ID_LENGTH = 8;

var generate = function() {
  var rtn = '';
  for (var i = 0; i < ID_LENGTH; i++) {
    rtn += ALPHABET.charAt(Math.floor(Math.random() * ALPHABET.length));
  }
  return rtn;
}


function UploadScreenDetails() {
  let appname = $.cookie("appname");
  let database = firebase.database();
  let screen = document.getElementById("screen").value;
  let url = $("#url option:selected").text();
  let type = $("#url option:selected").val();
  let layout = $('#layoutbutton').text();
  let terms = $('#terms').val();

  if ((screen !== '') && (url !== '') && (layout !== '') && (type !== '') && ( terms !== '' )) {
    var data = '';
    document.getElementById("Error").innerHTML = "";
    if(type==='Taxonomy'){
      data = {
        "Url": url,
        "Layout": layout,
        "Terms": terms,
      };
    }else{
      data = {
        "Url": url,
        "Layout": layout,
      };
    }
    firebase.database().ref(appname+"/Screens/"+type+"/"+screen).update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }else{
        //alert("Screen Created Successfully");
        //location.reload();
      }
    });

    let screenData = {
      "Screen": screen,
      "Layout": layout,
    }
    
    firebase.database().ref(appname+"/Screens/ScreenList").push(screenData, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }else{
        alert("Screen Created Successfully");
        location.reload();
      }
    });
  } else {
    alert("Fill All Fields");
  }
}

 $('#url').on('change', function(){
   var termurl = $("#url option:selected").text();
   $('#layout').empty();
   $('#termdiv').hide();
    var selectValues = {
        Page : ['Page_Plain', 'Page_News', 'Page_Card'],
        CustomPost : ['Custompost_Tile', 'Custompost_List'],
        Taxonomy : ['Taxonomy_Grid', 'Taxonomy_List'],
    }
    $.each(selectValues[this.value], function(key, value) {
       $('#layout').append("<li style='margin-bottom:10px'><a title="+value+"><img src=../assets/"+value+".png></a></li>");
  });
  if(this.value==='Taxonomy'){
    $('#termdiv').show();
    $('#terms').empty();
    $.getJSON(termurl, function(result){
       $.each(result, function(i, field){
           $("#terms").append('<option value='+field.name+'>'+field.name+'</option>');
       });
       $('#terms').selectpicker('refresh');
   });
  }
 });


 $("#layout").on('click', 'li a', function(){
      $("#layoutbutton").text($(this).attr('title'));
      $("#layoutbutton").val($(this).attr('title'));
   });
