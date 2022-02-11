//static = a method or property that belongs to a class and not any one Object


class Car{

    static numberOfCars = 0;

    static beginRace(){
        console.log("The race has begun");
    }

    constructor(model){
        this.model = model;
        Car.numberOfCars += 1;
    }
}
let car1 = new Car("Dart SXT");
let car2 = new Car("Mustang");

console.log(Car.numberOfCars);

Car.beginRace();


Math.PI; //static 
Math.round(); // static
