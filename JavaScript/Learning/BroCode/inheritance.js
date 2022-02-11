// inheritance = useful for code reusabilityu. reuse properties and methods of an existing class. Children classes inherit from parent classes.

class Animal{
    constructor(){
        this.alive = true;
    }
    eat(){
        console.log("This animal is eating");
    }
}

class Rabbit extends Animal {

    run() {
        console.log("this rabbit is running");
    }
}

class fish extends Animal {

    swim() {
        console.log("this fish is swimming");
    }
}

class Hawk extends Animal {
    fly() {
     console.log("this hawk is flying");

    }

}

let rabbit = new Rabbit();
let Fish = new fish();
let hawk = new Hawk();

hawk.fly
Fish.swim
rabbit.run




