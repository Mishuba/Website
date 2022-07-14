//anonymous functions = FUnction w/o a name. Often not accessible after its initial creation.

// benefits = Doesn't clutter global namespace, Usable once, Can be passed as arguments.

(function(){
    document.getElementById("myH1").innerHTML = "hey!";
})();

// setTimeout(function, milliseconds);


setTimeout(function(){
    document.getElementById("myH1").innerHTML = "crazy!"
    ;},
     1000);

