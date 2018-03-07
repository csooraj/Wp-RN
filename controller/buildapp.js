$(document).ready(function(){

  $("#buildapp").click(function(){
    $.post("https://www.bitrise.io/app/9e90d762721b601f/build/start.json", {
   "payload":{
       "hook_info":{
           "type":"bitrise",
           "api_token":"qi8GFF2r9fb7BSilQ0bEWQ"
       },
       "build_params":{
           "branch":"master"
       }
   },
   function(data, status, jqXHR) {
                console.log('status: ' + status + ', data: ' + data);
        }

  });
});
});
