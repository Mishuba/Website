var randNum;

randNum = Math.random(); // random between 0-1

randNum = Math.floor(Math.random() * 6); // random between 0-5

randNum = Math.floor(Math.random() *6) + 1; // random between 1-6


/*
function getRandomNum (min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min)
}

randNum = getRandomNum(1,6);

*/ 
// above is the function from of random numbers

console.log(randNum);