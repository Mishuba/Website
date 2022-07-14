class Vehicle{
    drive() {
        console.log("You drive the vehicle");

    }
}

class Car extends Vehicle {
    drive () {
        console.log("You drive the car");

    }
}

class RaceCar extends Car{
     drive () {
         console.log(" You drive the fastest racecar");
     }
}

let car = new Car();
let raceCar = new RaceCar();

car.drive

raceCar.drive


