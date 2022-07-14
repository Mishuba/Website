date = new Date(0); // this find teh epoch date aka the reference point date

date = new Date(); // this find the current date.

date = new Date();
// you can add up to 7 arguments starting with (year, month, day, hour, mins, seconds, milliseconds )
// the months goes from 0-11
// hours are in military time
// minutes, seconds and milliseconds are the same.

date = new Date("April 20, 2022 16:20:01:02")
// you can use the above to create a string represenation of a date or time

let year = date.getFullYear();
let month = datre.getMonth();
let dayofweek = date.getDay();
let dayofMonth = date.getDate();
let hours = date.getHours();
let minutes = date.getMinutes();
let second = date.getSeconds();
let milliseconds = date.getMilliseconds();

// use the .get plus whatever to get what you need for the date 

date.setFullYear(2023);
date.setMonth(11);
date.setDate(25);
date.setHours(0);
date.setMinutes(0);
date.setSeconds(0);
date.setMilliseconds(0);
//use the above to set the date or adjust

console.log(date);
