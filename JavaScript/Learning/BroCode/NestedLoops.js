var symbol = window.prompt("Enter a symbol to use");
var rows = window.prompt("Enter # symbol to use rows");
var columns = window.prompt("Enter  # symbol to use columns");

for (let i = 0; i < rows; i++) {

    for (let j = 0; j < columns; j++) {
        document.getElementById("nested").innerHTML += symbol;
    
    }
    document.getElementById("nested").innerHTML += "<br>";
}

// a nested loop is a loop inside of a loop.

