var myNum;

myNum = Math.round(3.5);
// .round follows the basic math rule of rounding numbers.

myNum = Math.floor(3.9);
// the .floor will always round a number down.

myNum = Math.ceil(3.1);
// the .ceil will always round up.

myNum = Math.pow(3, 3);
// the .pow is like 3 to the 3 power or 3^3. this is how create exponents in javascript using the math's dot modifier.

myNum = Math.sqrt(64);
// the .sqrt is how you find the sqrt of a number using javascript.

myNum = Math.abs(-1);
// the .abs find the absolute number of any number 

myNum = Math.min(1, 5, 2, 4, 3);
// the .min find the minimum number which is 1 for this example

myNum = Math.min(1, 5, 2, 4, 3);
// the .max find the maximum number which is 5 for this example

myNum = Math.PI
// .pi stand for the pi equation 3.14 blah blah blah

myNum = Math.E;
// .E stands for euler's number which is 2.71 blah blah blah blah

console.log(myNum);


//solve for hyp
// 
var a = window.prompt("Enter side A");
var b = window.prompt("Enter side B");
var c;

c = Math.sqrt(Math.pow(a,2) + Math.pow(b,2))

console.log("side c = ",c);
