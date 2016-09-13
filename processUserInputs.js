/// <reference path="typings/globals/jquery/jquery.d.ts" />
/// <reference path="typings/globals/jquery/bootstrap.tagsinput.d.ts" />
"use strict";
var $ = require("jquery");
$('#cuisine-list').tagsinput(['Thai', 'Korean', 'Afghan', 'Turkmen', 'Chinese']);
// $('#cuisine-list').tagsinput({
//   typeahead: {
//     source: ['Thai', 'Korean', 'Afghan', 'Turkmen', 'Chinese'],
//     afterSelect: function(val) { this.$element.val("");
//   }
// }
// });
/*
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
var selectedCuisines =  $("#cuisine-list").tagsinput('items');
var selectedLocations =  $("#location-list").tagsinput('items');
var selectedAtmosphere =  $("#atmosphere-list").tagsinput('items');
var selectetTheme =  $("#theme-list").tagsinput('items');

var userInputs = [{"cuisine":"Thai"}];

$.ajax({
  type: "POST",
  url: "search",
  data: {search: JSON.stringify(userInputs)},
  dataType: "json",
})
.done( function(data) {
    console.log('done');

  window.location.href = "searchResultPage.php";


})
.fail( function(data) {
  console.log('fail');

});


};
*/ 
