// forEach() = Performs a function for each element in an Array.

let total = 0;
let cart = [5, 6, 7, 8, 9];

function checkout(element, index, array){
    
    total += element;
}

cart.forEach(checkout);

console.log("Your total is : $" + total);

//checkout();

