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
  let layout = $('#layoutbutton').text();
  let terms = $('#terms').val();
  let type = $("#url option:selected").val();
  if ((screen !== '') && (url !== '') && (layout !== '') && (type !== '') && ( terms !== '' )) {
    var data = '';
    document.getElementById("Error").innerHTML = "";
    alert(type);
    if (type === 'Taxonomy') {
      let url = $("#url option:selected").text();
      data = {
        "Url": url,
        "Layout": layout,
        "Terms": terms,
      };
    } else if (type === 'CustomPost'){
      let url = $("#url option:selected").text();
      data = {
        "Url": url,
        "Layout": layout,
      };
    } else {
      type = "Page";
      let url = $("#url option:selected").val();
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

    let screenData = '';

   if( type === 'Taxonomy' || type === 'CustomPost' ) {
     let url = $("#url option:selected").text();
     screenData = {
       "Screen": screen,
       "Layout": layout,
       "Url": url,
       "Terms": terms,
     }
   } else {
     let url = $("#url option:selected").val();
     screenData = {
       "Screen": screen,
       "Layout": layout,
       "Url": url,
       "Terms": terms,
     }
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
        Taxonomy : ['Taxonomy_Grid', 'Taxonomy_List', 'Taxonomy_Tab'],
    }
    if(( this.value === 'Taxonomy') || ( this.value === 'CustomPost')) {
      $.each(selectValues[this.value], function(key, value) {
         $('#layout').append("<li style='margin-bottom:10px'><a title="+value+"><img src=../assets/"+value+".png></a></li>");
      });
    } else {
      $.each(selectValues['Page'], function(key, value) {
         $('#layout').append("<li style='margin-bottom:10px'><a title="+value+"><img src=../assets/"+value+".png></a></li>");
      });
    }

  if(this.value==='Taxonomy'){
    $('#termdiv').show();
    $('#terms').empty();
    $.getJSON(termurl, function(result){
       $.each(result, function(i, field){
         if ((field.meta_data.length > 0) && (field.meta_data.hasOwnProperty("lf_featured"))) {
           if (field.meta_data.lf_featured.length > 0 ) {
              $("#terms").append('<option value='+field.meta_data.lf_featured[0]+'+'+field.term_details.name+'+'+field.term_details.term_id+'+'+field.term_details.taxonomy+'>'+field.term_details.name+'</option>');
           }
         } else {
              let term_meta = field.term_details.name.concat('+').concat(field.term_details.term_id).concat('+').concat(field.term_details.taxonomy);
              $("#terms").append("<option value='"+ term_meta + "'>" + field.term_details.name + "</option>");
           }
       });
       $('#terms').selectpicker('refresh');
   });
  }
 });


 $("#layout").on('click', 'li a', function(){
      $("#layoutbutton").text($(this).attr('title'));
      $("#layoutbutton").val($(this).attr('title'));
   });
