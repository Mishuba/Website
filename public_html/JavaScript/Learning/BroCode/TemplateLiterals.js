// template literals = another way of formatting output, can cotain placeholders for formatting and inserting: strings/values/variables/etc.  backticks $() placeholder can use multiple lines embed expressions

let firstName = "Bro";

let lastName = "Fam";

let price = 10;
let taxRate = 0.05;
let total;

console.log(`Hello ${firstName} ${lastName}!`)

console.log(`The price is: ${price}`);
console.log(`tax rate: ${taxRate}`);
console.log(`tax is: $${price * taxRate}`);
console.log(`Total is: $${total = price + (price * taxRate)}`);



