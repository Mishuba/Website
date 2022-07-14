// this = A reference to the object that we're currently working with

class Car {
    constructor (make, model, year, color) {
        this.make = make;
        this.model = model;
        this.year = year;
        this.color = color;
    }

    drive() {
        console.log("You are driving!",this.model);
    }
    brake() {
        console.log("You are using the brakes in ",this.model);

    }
    WhatIsTHis() {
        return this;
    }
}

let car1 = new Car("Mazda", "626", 2000, "Red");

console.log(car1.WhatIsTHis());
