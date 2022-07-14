// super = Reference to the parent class (super class) Very similar to "this" Keyword. Can use a super classes: constructor, methods

class Person {
    constructor(name, age){
    this.name = name;
    this.age = age;
    }
    hello(){
        console.log("Hello",this.name);
        console.log("You are",this.age,"years old");
    }
}

class Student extends Person {

    constructor(name, age, gpa) {
        super(name, age);
        this.gpa = gpa;
    }
    hello(){
        super.hello();
        console.log("Your gap is",this.gpa);
    }
}

class Teacher extends Person {

    constructor(name, age, classSize) {
        super(name, age);
        this.classSize = classSize;
    }
    hello(){
        super.hello();
        console.log("Your class is",this.classSize);
    }

}

let student = new Student("Steve", 21, 2.0);
let teacher = new Teacher("Bob", 45, 30);

console.log(student.age);
console.log(teacher.age);

student.hello;
teacher.hello;
