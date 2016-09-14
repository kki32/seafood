/// <reference path="typings/globals/jquery/jquery.d.ts" />
/// <reference path="typings/globals/jquery/bootstrap.tagsinput.d.ts" />
// import $ = require("jquery");
// $('#cuisine-list').tagsinput(['Thai', 'Korean', 'Afghan', 'Turkmen', 'Chinese']);
$('#cuisine-list').tagsinput({
    typeahead: {
        source: ['Thai', 'Korean', 'Afghan', 'Turkmen', 'Chinese'],
        afterSelect: function (val) {
            this.$element.val("");
        }
    }
});
$('#location-list').tagsinput({
    typeahead: {
        source: ['Fendalton', 'Ilam', 'Hoon Hay'],
        afterSelect: function (val) {
            this.$element.val("");
        }
    }
});
// $('.searchField').on('beforeItemRemove', function(event:ExtJqueryEventObject) {
// event.cancel = true;
// });
function collectInputs() {
        window.location.href = "searchResultPage.php";
}
;
