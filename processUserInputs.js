/// <reference path="typings/globals/jquery/jquery.d.ts" />
/// <reference path="typings/globals/jquery/bootstrap.tagsinput.d.ts" />
// import $ = require("jquery");
$('#cuisine-list').tagsinput({
    typeahead: {
        source: ['Thai', 'Korean', 'Afghan', 'Turkmen', 'Chinese', 'Indonesian', 'Mexican', 'Italian', 'Spanish', 'French', 'Japanese','Turkey','Indian'],
        afterSelect: function (val) {
            this.$element.val("");
        }
    }
});
$('#location-list').tagsinput({
    typeahead: {
        source: ['Addington', 'Aranui', 'Avondale', 'Avonhead', 'Avonside', 'Beckenham', 'Belfast', 'Bexley', 'Bishopdale', 'Bottle Lake', 'Bromley', 'Brooklands', 'Broomfield', 'Bryndwr', 'Burnside', 'Burwood', 'Casebrook', 'Cashmere', 'Christchurch Airport', 'Christchurch Central', 'Clifton', 'Cracroft', 'Dallington', 'Edgeware', 'Fendalton', 'Ferrymead', 'Halswell', 'Harewood', 'Heathcote Valley', 'Hei Hei', 'Hillmorton', 'Hillsborough', 'Hoon Hay', 'Hornby', 'Hornby South', 'Huntsbury', 'Ilam', 'Islington', 'Kainga', 'Kennedys Bush', 'Linwood', 'Mairehau', 'Marshland', 'Mcleans Island', 'Merivale', 'Middleton', 'Moncks Bay', 'Mount Pleasant', 'New Brighton', 'North New Brighton', 'Northcote', 'Northwood', 'Opawa', 'Papanui', 'Parklands', 'Phillipstown', 'Redcliffs', 'Redwood', 'Riccarton', 'Richmond', 'Richmond Hill', 'Russley', 'Saint Albans', 'Saint Martins', 'Shirley', 'Sockburn', 'Somerfield', 'South New Brighton', 'Southshore', 'Spreydon', 'Strowan', 'Styx', 'Sumner', 'Sydenham', 'Templeton', 'Upper Riccarton', 'Waimairi Beach', 'Wainoni', 'Waltham', 'Westmorland', 'Wigram', 'Woolston', 'Yaldhurst']
,
        afterSelect: function (val) {
            this.$element.val("");
        }
    }
});
$('#atmosphere-list').tagsinput({
    typeahead: {
        source: ['Quiet', 'Romantic', 'Relaxing','Classy','Formal','Casual'],
        afterSelect: function (val) {
            this.$element.val("");
        }
    }
});
$('#theme-list').tagsinput({
    typeahead: {
        source: ['Takeaway', 'Restaurant', 'Night club','Cafe', 'Bar', 'Bakery', 'Pubs', 'Casual Dining'],
        afterSelect: function (val) {
            this.$element.val("");
        }
    }
});
function collectInputs() {
    window.location.href = "searchResultPage.php";
}
;
