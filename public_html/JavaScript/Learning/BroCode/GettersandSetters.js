// Ways to get/set the properties of an object. Secures better data quality. Does extra things behind-the-scenes

class User {
    constructor(first, last){
        this.first = first;
        this.last= last;
    }
    set first(value){
        this.firstName = value.toUpperCase();
    }
    set last(value){
        this.lastName=value.toUpperCase();
    }
    get fullName() {
    return this.firstName+" "+this.lastName;
    }
};

let user = new User("spongebob", "squarepants");
let user2 = new User("patrick", "Star");

console.log(user.fullName);

