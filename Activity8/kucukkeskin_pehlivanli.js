var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) {
    return document.getElementById(id);
};

window.onload = function () {
    $("display_results").onclick = displayResults;
    $("display_scores").onclick = displayScores;
    $("add").onclick = addScore;
};

function displayResults() {
    if (scores.length === 0) return;

    let total = 0;
    let highest = scores[0];
    let highestIndex = 0;

    for (let i = 0; i < scores.length; i++) {
        total += scores[i];
        if (scores[i] > highest) {
            highest = scores[i];
            highestIndex = i;
        }
    }

    let average = total / scores.length;

    let resultsDiv = $("results");
    resultsDiv.innerHTML = "<h2>Results</h2>";
    resultsDiv.innerHTML += "<p>Average score = " + average.toFixed(2) + "</p>";
    resultsDiv.innerHTML += "<p>High score = " + names[highestIndex] + " with a score of " + highest + "</p>";
}

function displayScores() {

    let table = $("scores_table");
    table.innerHTML = 
		"<h2>Scores<h2>"+
		"<tr><th>Name</th><th>Score</th></tr>";
    for (let i = 0; i < names.length; i++) {
        table.innerHTML += "<tr><td>" + names[i] + "</td><td>" + scores[i] + "</td></tr>";
    }
}

function addScore() {
    let name = $("name").value.trim();
    let score = parseInt($("score").value);

    if (name === "" || isNaN(score) || score < 0 || score > 100) {
        alert("You must enter a name and a valid score");
        return;
    }

    names.push(name);
    scores.push(score);

    $("name").value = "";
    $("score").value = "";
    $("name").focus();
}
