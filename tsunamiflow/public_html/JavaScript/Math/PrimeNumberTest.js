let x = prompt("Enter a number to see if it is a prime number:");
let divisor = 2;
let y = divisor;

function isPrime(number, y) {
    if (number == 1) {
    console.log("Number is not a prime number");
        return false;
    }
    if (number == 2){
    console.log("Number is 2 ");
        return true;
    }
    if (number == y) {
    console.log("Number is equal to divisor --IS PRIME");
        return true;
    }
    if (number % y == 0){
    console.log("Number is divisible by "+ y);
        return false;
} else {
        console.log("number is " + number +"divisor is "+y);
        return isPrime(number, ++y);
}
}

let result = isPrime(x, y);

if (result) {
alert (x+" is prime! ");
} else {
alert (x+ "is not prime ");
}