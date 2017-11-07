function formatState () {
var $state = $(
'<span><img src="http://www.101computing.net/wp/wp-content/uploads/HTML-Layout-3.png" class="img-flag" /> ' + 'test' + '</span>'
);
return $state;
};

$("#js-example-templating").select2({
templateResult: formatState
});
