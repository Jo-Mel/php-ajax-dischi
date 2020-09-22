let $ = require("jquery");

$(document).ready(init);

function init() {
  getData();

  $(document).on("change", "#select-id", function() {
    var thisAuthor = $(this).val();
    filterData(thisAuthor);
  });
}

//** funzioni **//

function filterData(autore) {
  $.ajax({
    url: "http://localhost:8888/boolean-php/php-ajax-dischi/server.php",
    method: "GET",
    data: {
      author: autore,
    },
    success: function(risposta) {
      $(".cds-container").html(" ");
      insertCd(risposta);
    },
    error: function() {
      alert("error");
    },
  });
}

function getData() {
  $.ajax({
    url: "http://localhost:8888/boolean-php/php-ajax-dischi/server.php",
    method: "GET",
    success: function(risposta) {
      insertCd(risposta);
      printSelect(risposta);
    },
    error: function() {
      alert("error");
    },
  });
}

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

function printSelect(data) {
  var source = $("#option-template").html();
  var template = Handlebars.compile(source);

  var arrayAuthor = [];

  for (var i = 0; i < data.length; i++) {
    if (!arrayAuthor.includes(data[i].author)) {
      arrayAuthor.push(data[i].author);
      var context = {
        author: data[i].author,
      };
    }
    var html = template(context);
    $("#select-id").append(html);
  }
}
