
// constructor = a Special method fora ssigning properties. Automatically called when creating an object.

class Car{
    constructor (make, model, year, color) {
        this.make = make;
        this.model = model;
        this.year = year;
        this.color = color;
    }
    drive() {
        console.log("You drive the car!");
    
    }
    brake() {
        console.log("You are using the brakes!");

    }
}

let car1 = new Car("Ford", "Mustang", 2000, "Green");

console.log(car1.make);
