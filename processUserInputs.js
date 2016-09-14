/// <reference path="typings/globals/jquery/jquery.d.ts" />
/// <reference path="typings/globals/jquery/bootstrap.tagsinput.d.ts" />
// import $ = require("jquery");
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
$('#atmosphere-list').tagsinput({
    typeahead: {
        source: ['quiet', 'social', 'relaxing'],
        afterSelect: function (val) {
            this.$element.val("");
        }
    }
});
$('#theme-list').tagsinput({
    typeahead: {
        source: ['takeaway', 'restaurant'],
        afterSelect: function (val) {
            this.$element.val("");
        }
    }
});
function collectInputs() {
    window.location.href = "searchResultPage.php";
}
;
