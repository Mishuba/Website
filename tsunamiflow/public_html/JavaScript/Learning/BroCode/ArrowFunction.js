// arrow function =>
// shortcut for a function expression

let hello;
let x = "Yo";
let y = "Mishuba"

// function expression

hello = function (x, y) {
    console.log(x);
    console.log(y);
}

console.log(hello(x, y));


// arrow function

hello = (x, y) => {
console.log(x);
console.log(y);
};
hello(x, y);



//map(), filter(), reduce()

let storeUSD = [5, 6, 7, 8, 9];
let storeEUR;

storeEUR = storeUSD.map(value => value*=0.84);
console.log(storeEUR);


let students = [16, 17, 18, 19, 20];
let adultStudents;

adultStudents = students.filter(age => age >= 18);
console.log(adultStudents);

let letters = ["H", "E", "L", "P"];
let word;

word = letters.reduce((total, nextLetter) => total + nextLetter);
console.log(word);
