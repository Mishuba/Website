//class = a blueprint for creating objects. Define properties and/or methods.Define

class Car {

    drive(){
        console.log("You drive the car!");

    }
    brake(){
        console.log("You step on the breaks!");

    }

}
let car = new Car();

car.drive();
car.brake();

let car2 = new Car();

car2.brake();
