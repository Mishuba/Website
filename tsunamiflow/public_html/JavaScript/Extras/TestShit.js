var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange= function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("").innerHTML = xhttp.responseText;
}
};
xhttp.open("GET", "filename", true);
xhttp.send();


text = "<Some> simlpe </Some>" +
"<Shit> forreal </Shit> " +
"<Bet> That Up </Bet>";

parser = new DOMParser();

docIguess = parser.parseFromString(text, "text/xml");
