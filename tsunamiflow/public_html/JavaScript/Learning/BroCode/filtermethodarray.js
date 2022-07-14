// filter() = Returns the elements of an array that meets a condition specified in a function.

let students = [16, 17, 18, 19, 20];

function checkAge(age, index, array){
    if(value >= 18){
        return age;
    }
}

let adultStudents = students.filter(checkAge);

console.log(adultStudents);
