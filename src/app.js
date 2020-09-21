let $ = require("jquery");

$(document).ready(function() {
  $.ajax({
    url: "http://localhost:8888/boolean-php/php-ajax-dischi/server.php",
    method: "GET",
    success: function(risposta) {
      insertCd(risposta);
      //   console.log(risposta);
    },
    error: function() {
      alert("errore");
    },
  });
});

function insertCd(data) {
  var source = $("#entry-template").html();
  var template = Handlebars.compile(source);

  for (var i = 0; i < data.length; i++) {
    var context = data[i];
    // console.log(context);

    var html = template(context);
    $(".cds-container").append(html);
  }
}
