let x = prompt("Enter a first number to add:");
let y = prompt("Enter a first number to add:");

function peanoAddition(x, y) {
    if (x == 0) {
   return y;
    }
    if (y == 0) {
        return x;
    }
}

console.log(peanoAddition(x, y));