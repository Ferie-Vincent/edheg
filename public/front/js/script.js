document
    .getElementById("dateForm")
    .addEventListener("submit", function (event) {
        event.preventDefault();

        var endDate = document.getElementById("endDate").value;
        localStorage.setItem("endDate", endDate);
        makeTimer(); // Appelle la fonction pour mettre à jour le timer
    });

function makeTimer() {
    var endDate = localStorage.getItem("endDate");
    if (!endDate) return; // Si aucune date n'est définie, ne rien faire

    var endTime = new Date(endDate).getTime() / 1000;
    var now = new Date().getTime() / 1000;
    var timeLeft = endTime - now;
    var days = Math.floor(timeLeft / 86400);
    var hours = Math.floor((timeLeft - days * 86400) / 3600);
    var minutes = Math.floor((timeLeft - days * 86400 - hours * 3600) / 60);
    var seconds = Math.floor(
        timeLeft - days * 86400 - hours * 3600 - minutes * 60
    );

    if (hours < 10) hours = "0" + hours;
    if (minutes < 10) minutes = "0" + minutes;
    if (seconds < 10) seconds = "0" + seconds;

    document.getElementById("days").innerHTML = days + "<span>Jours</span>";
    document.getElementById("hours").innerHTML = hours + "<span>Heures</span>";
    document.getElementById("minutes").innerHTML =
        minutes + "<span>Minutes</span>";
    document.getElementById("seconds").innerHTML =
        seconds + "<span>Secondes</span>";
}

setInterval(function () {
    makeTimer();
}, 1000); // Met à jour toutes les secondes

function obfuscateEmail(email) {
    var encodedEmail = "";
    for (var i = 0; i < email.length; i++) {
        encodedEmail += "&#" + email.charCodeAt(i) + ";";
    }
    return encodedEmail;
}

var obfuscatedEmail = obfuscateEmail("infos@gpeedheg-abidjan.ci");
console.log(obfuscatedEmail);
