//
// function predictThis(lookFor, form, resultsDiv, searchField){
//   // first, position the results:
//   var node = searchField;
//   var x = 0;
//   var y = 0;
//   while ( node != null )
//   {
//       x += node.offsetLeft;
//       y += node.offsetTop;
//       node = node.offsetParent;
//   }
//   resultsDiv.style.left = x + "px";
//   resultsDiv.style.top  = (y + 40) + "px";
//
//   // now, attach the keyup handler to the search field:
//   searchField.onkeyup = function()
//   {
//       var txt = this.value.toLowerCase();
//       if ( txt.length == 0 ) return;
//
//       var txtRE = new RegExp( "(" + txt + ")", "ig" );
//       // now...do we have any matches?
//       var top = 0;
//       for ( var s = 0; s < lookFor.length; ++s )
//       {
//           var srch = lookFor[s];
//           if ( srch.toLowerCase().indexOf(txt) >= 0 )
//           {
//               srch = srch.replace( txtRE, "<span>$1</span>" );
//               var div = document.createElement("div");
//               div.innerHTML = srch;
//               div.onclick = function() {
//                   searchField.value = this.innerHTML.replace(/\<\/?span\>/ig,"");
//                   resultsDiv.style.display = "none";
//               };
//               div.style.top = top + "px";
//               top += 20;
//               resultsDiv.appendChild(div);
//               resultsDiv.style.display = "block";
//           }
//       }
//   }
//   // and the keydown handler:
//   searchField.onkeydown = function()
//   {
//       while ( resultsDiv.firstChild != null )
//       {
//           resultsDiv.removeChild( resultsDiv.firstChild );
//       }
//       resultsDiv.style.display = "none";
//   }
// }
//
//  function predictCuisine()
//   {
//       var lookFor = [
//           "Thai",
//           "Chinese",
//           "Korean",
//       ];
//
//       var form = document.getElementById("cuisine");
//       var resultsDiv = document.getElementById("cuisine-results");
//       var searchField = form.search;
//
//       predictThis(lookFor, form, resultsDiv, searchField);
//
//   }
//
//   function predictLocation()
//    {
//
//        var lookFor = [
//            "Fendalton",
//            "Ilam",
//            "Hoon Hay",
//        ];
//
//        var form = document.getElementById("location");
//        var resultsDiv = document.getElementById("location-results");
//        var searchField = form.search;
//
//       predictThis(lookFor, form, resultsDiv, searchField);
//
//     }
//
//   function predictTheme()
//    {
//      var lookFor = [
//          "Pub",
//          "Takeaway",
//          "Restaurant",
//      ];
//
//      var form = document.getElementById("theme");
//      var resultsDiv = document.getElementById("theme-results");
//      var searchField = form.search;
//
//     predictThis(lookFor, form, resultsDiv, searchField);
//    }
