

function makeSize(size){

    return function(){

        document.body.style.fontSize = size + "px";
    }
}

let size20 = makeSize(20);
let size30 = makeSize(30);
let size40 = makeSize(40);

size20();
size30();// test
size40();//test

function makeFont(font) {
    return function() {

        document.body.style.fontFamily =font;

    }
}

let fontInkFree = makeFont("Ink Free");
let fontConsolas = makeFont("consolas");


fontInkFree();
