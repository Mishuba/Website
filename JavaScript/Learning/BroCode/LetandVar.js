/*

    scope = where a variable is accessible

    let = declare variables with a block scoped {}
    var = declare variables with a function scoped ()

*/

for(let i = 1; i <= 3; i++) {
    console.log(i);
} // let will not be accessible outside of the for loop because of let

for(var j = 1; j <=3; j++) {
    console.log(j);
} // var will be accessible outside of the for loop. 

function doSomething() {
    for(let a=i; a<=3; a++) {
        console.log(a);
    }
} // test the function with the let and var

doSomething();

console.log();

// var will override names on accident let will not. so using let is better.


