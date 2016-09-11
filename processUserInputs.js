"use strict";
$('#cuisine-list').tagsinput({
  typeahead: {
    source: ['Thai', 'Korean', 'Afghan', 'Turkmen', 'Chinese'],
    afterSelect: function(val) { this.$element.val("");
  }
}
});

$('#location-list').tagsinput({
typeahead: {
  source: ['Fendalton','Ilam','Hoon Hay'],
  afterSelect: function(val) { this.$element.val("");
}
}
});

$('.searchField').on('beforeItemRemove', function(event) {
event.cancel = true;
});


function collectInputs(){
  window.location="searchResultPage.php";
};
