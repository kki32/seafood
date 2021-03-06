/// <reference path="typings/globals/jquery/jquery.d.ts" />
/// <reference path="typings/globals/jquery/progressBar.d.ts" />
function progressBar() {
    $("#progressbar-4").progressbar({
        value: 0
    });
    var progressbar = $("#progressbar-4");
    $("#progressbar-4").progressbar("option", "max", 100);
    function progress() {
        var val = progressbar.progressbar("value") || 0;
        progressbar.progressbar("value", val + 30);
        if (val < 99) {
            setTimeout(progress, 800);
        }
        else {
            translate();
        }
    }
    progress();
}
;
function translate() {
    // Retrieve users custom sentence from URL query string
    var inputText = document.getElementById("yoda-input").value;
    ;
    // Make API call using custom sentence
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "https://yoda.p.mashape.com/yoda?sentence=" + inputText, false);
    xhr.setRequestHeader("X-Mashape-Authorization", "5f5D6e1Zk1mshEndw7phB6lBps5ep1w9UrOjsncnIPJyKS18Ez");
    xhr.send();
    // Save response body (response minus response header)
    var result = xhr.responseText;
    // Modify text of HTML paragraph to display text returned by the API
    document.getElementById("yoda-text").innerHTML = result;
}
;
