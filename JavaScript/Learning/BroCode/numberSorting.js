
let numbers = [3, 4, 1, 2, 5];

numbers.sort();

numbers.sort(function(x, y) {
    return x - y;

});


console.log(numbers);

numbers.sort((x, y) => x - y);

console.log(numbers);
