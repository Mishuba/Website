

function jump() {
    console.log("you Jump");

}

function punch() {
    console.log("you punch");

}

function kick() {
    console.log("You kick");
}

function block() {
    console.log("you block");
}

let actions = [];

actions =[jump, punch, kick, block];
/*
for(let i = 0; i < actions.length; i ++) {

    actions[i]();

};
*/

actions.forEach(func => func());
