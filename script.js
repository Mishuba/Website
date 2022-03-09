//  AJAX uses a combination of :
/* 
    - A browser built-in XMLHttpRequest object (to request data from a web server)
    - JavaScript and HTML DOM (to display or use the data)

AJAX allows web pages to be updated asynchronously by exchanging data with a web server behind the scenes.
    - This makes it possible to update a webpage without reloading the whole page.

HOW AJAX Works

    1.) An event occurs in a webpage (the pager is loaded, a button is clicked)
    2.) An XMLHttpRequest object is created byh JavaScript
    3.) The XMLHttpRequest object saends a request to a web server
    4.) The server processes the request.
    5.) The server sends a response back to the web page.
    6.) The response is read by JavaScript
    7.) Proper action (like page update) is performed by JavaScript

Modern Browser (Fetch API)
    -Modern Browsers can use Fetch API instead of the XMLHttpRequest Object.
    -The Fetch API interface allows web browser to make HTTP request to web servers. 
    If you use the XMLHttpRequest Object, Fetch can do the same in a simpler way.


The keystone of AJAX is the XMLHttpRequest object.
    1. Create an XMLHttpRequest object
    2. Define a callback function
    3. Open the XMLHttpRequest object
    4. Send a Request to a server

The XMLHttpRequest object can be used to exchange data with a web server behind the scenes. This means that it is possible to update parts of a web page, without reloading the whole page.

the Syntax for creating an XMLHttpRequest object:
    variable = new XMLHttpRequest();

Define a Callback Function
    A callback function is a function passed as a parameter to another function.

    xhttp.onload = function() {
        // What to do when the response is ready
    }

Send a Request
    to send a request to a server, you can use the open() and send() methods of the XMLHttpRequest object:

    xhttp.open("GET", "ajax_info.txt");
    xhttp.send();

        example
            (Create an XMLHttpRequest object)
            const xhttp = new XMLHttpRequest();
            
            (Define a callback function)
            xhttp.onload = function() {

            }

            (send a request)
            xhttp.open("GET", "ajax_info.txt");
            xhttp.send();

Access Across Domains
    For security reasons, modern browsers do not allow access across domains.
    This means that both the web page and the XML file it tries to load, must be located on the same server.
    The examples on W3Schools all open XML files located on the W3Schools domain.
    If you want to use the example above on one of your own web pages, the XML files you load must be located on your own server.

XMLHttpRequest Object Methods

- Method                                - Description
new XMLHttpRequest()                    Creates a new XMLHttpRequest object
abort()                                 Cancels the current request
getAllResponseHeaders()                 Returns header information
getResponseHeader()                     Returns specific header information
open(method, url, async, user, psw)     Specifies the request.   method: the request type GET or POST. url: the file location. async: true (asynchronous) or false (synchronous). user: optional user name. psw: optional password.
send()                                  Sends the request to the server. Used for GET requests
send(string)                            Sends the request to the server. Used for POST requests
setRequestHeader()                      Adds a label/value pair to the header to be sent

SMLHttpRequest Object Properties
- Property                              - Description
onload                                  Defines a function to be called when the request is recieved (loaded)
onreadystatechange                      Defines a function to be called when the readyState property changes
readyState                              Holds the status of the XMLHttpRequest.  0: request not initialized. 1: server connection established. 3: request received. 4: request finished and repsonse is ready.
responseText                            Returns the response data as a string.
responseXML                             Returns the response data as XML data
status                                  Returns the status-number of a request. 200: "OK". 403: "Forbidden". 404: "Not Found". (check your notebook your wrote these down already).
statusText                              Returns the status-text (e.g. "OK" or "Not Found").

The onload Property
- With the XMLHttpRequest object you can define a callback function to be executed when the request receives an answer.
    * The function is defined in the onload property of the XMLHttpRequest object:

Multiple Callback Functions
- If you have more than one AJAX task in a website, you should create one function for executing the XMLHttpRequest object, and one callback function for each AJAX task.
    - The function call should contain the URL and what function to call when the response is ready.

The onreadystatechange Property
-The readyState property holds the status of the XMLHttpRequest.
-The onreadystatechange property defines a callback function to be executed when the readyState changes.
-The status property and the statusText properties hold the status of the XMLHttpRequest object.
-The onreadystatechange function is called every time the readyState changes.
-When readyState is 4 and status is 200, the response is ready:

XMLHttpRequest
-The XMLHttpRequest object is used to request data from a server.

Send a Request To a Server
- To send a request to a server, we use the open() and send() methods of the XMLHttpRequest object:
    Method                      Description
    open(method, url, aysnc)    Specifies the type of request. method: the type of request: GET or POST. url: the server (file) location. async: true (asynchronous) or false (synchronous)
    send()                      Sends the request to the server (used for GET)
    send(string)                Sends the request to the server (used for POST)

The url - A File On a Server
- The url parameter of the open() method, is an address toa file on aserver:
    The file can be any kind of file or server scripting file (which can perform actions on the server before sending the reponse back).

Asynchoronous - True or False?
- Server requests should be sent asynchronously.
    * The async parameter of the open() method should be set to true:
            xhttp.open("GET", "filelink.txt", true);
    * By sending asynchronously, the JavaScript does not have to wait for the server response, but can instead:
        # execute other scripts while waitinf for server response
        # deal with the response after the response is ready
The default value for the async parameter is async = true.

AJAX - Server Response
-Server Response Properties
    Property                Description
    responseText            get the response data as a string
    responseXML             get the response data as XML data

The responseTextProperty
    The responseText property returns the server response as a JavaScript string, and you can use it accordingly:

The responseXML property
    The XMLHttpRequest object has an in-built XML parser.
    The responseXML property returns the server response as an XML DOM object.
    Using this property you can parse the response as an XML DOM object:

The getAllResponseHeaders() Method
    The getAllResponseHeaders() method returns all header information from the server response.

The getResponseHeader() Method
    The getResponseHeader() method returns specific header information from the server response.

*/

//function
/*
javascript function definitions do not specify data types for parameters
Javascript functions do not perform type chekcing on the passed arguments.
Javascript functions do not check the number of arguments received.
If a function is called with missing arguments (less than declared), the missing values are set to undefined.

Javascript functins have a built-in object called the argument object.
The argument object contains an array of the arguments used when the function was called (invoked).
    example
        x findMax(1, 123, 500, 115, 44, 88);
            function findMax() {
                let max = -Infinity;
                for (let i = 0; i < arguments.length; i++) {
                    if (arguments[i] > max) {
                        max = arguments[i];
                    }
                }
                return max;
            }


research
call()
apply()
use this with javascript functions.

global variables live until the page is discarded, like when you navigate to another page or close the window.
local variables have short lives. They are created when the funciton is invoked, and deletede when the function is finished.
*/


//  a javascript function can be defined using an expression. a function expression can be stored in a variable.
//      let x = function (a, b) {return a & b};
//          example 2
//          let y = function (a, b) {return a * b};
//          let z = x(4, 3);


// function constructor
//          let myFunction = function (a, b) {return a * b};
//          let f = myFunction(4, 3);

/* function hoisting

    myFunction(5);

    function myFUnction(y) {
        return y * y;
    }
*/

/* Self-Invoking Functions
    - a self-invoking expression is invoked (started) automatically, without being called.
     place () at the end of the function to do so
        example
         (function() {
             let x = "hello!!"; 
         })();

         functions are objects so you can use the . modifier with them.
*/

/*
Arrow FUnctions

         regular
         var x = function (x, y) {
             return x*y;
         }

         arrow
         var x = (x, y) => x * y;

         arrow functions od not have their own this. They are not well suited for defining object methods

         you can only omit the return keyword and the curly brackets if the function is a single sattement. Becauseo fthis it might be a good habit to always keep them.
    
*/

//web worker

/* if (typeof(Worker) !== "undefined") {
    // yes!. web worker support!
    // same code.......
} else {
    //sorry! no web worker support
}

//local storage starts here

/*
window.localStorage.setItem("name", "value");

window.localStorage.getItem("name")

window.localStorage.clear();


*/

//local storage ends here

//session storage starts here

window.sessionStorage.setItem("", "");
window.sessionStorage.getItem("");
window.sessionStorage.removeItem("");
window.sessionStorage.clear();

//session storage ends here

//

let x = document.getElementById("");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}

//track user location
let y = document.getElementById("");
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.watchPosition(showPosition);
        } else {
            y.innerHTML = "Geolocation is not supported by this browser.";
        }
    }
    function showPosition(position) {
        y.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;
    }

// track user location ends


//document stuff
//window stuff

// let ActualWindowHeight = window.innerHeight;
// let ActualWindowWidth = window.innerWidth;

/*
window tips

    window.open();
    window.close();
    window.moveTo();
    window.resizeTo();

Window Screen

    window.screen.width
            (example) document.getElementByTagName("head").innerHTML = 
            "Screen Width: " + window.screen.width;
           
        Repeat each with the same syntax to get the results of them.
    window.screen.height
    window.screen.availWidth
    window.screen.availHeight
    window.colorDepth
    window.screen.pixelDepth

Window Location

    window.location
        - object can be written without the window prefix

    window.location.href
        -returns the href (URL) of the current page

            (example)
                document.getElementByTagName("head").innerHTML =
                "Page location is " + window.location.href;
    window.location.hostname
        -returns the domain name of the web host

            (example)
                document.getElementByTagName("head").innerHTML =
                "Page hostname is " + window.location.hostname;            
    window.location.pathname
        -returns the path and filename of the current page

            (example)
                document.getElementByTagName("head").innerHTML =
                "Page path is " + window.location.pathname;
    window.location.protocol
        -returns the web protocol used (http: or https:)

            (example)
                document.getElementByTagName("head").innerHTML =
                "Page protocol is " + window.location.protocol;
    window.location.port
        - display the name of the host

            (example)
                document.getElementByTagName("head").innerHTML =
                "Port number is " + window.location.port;
    window.location.assign()
        -loads a new document

            (example)
                function newDoc() {
                    window.location.assign("http://www.tsunamiflow.club")
                }

Window History
    window.history
                
                window.history.back()
                    - same as clicking back in the browser
                        (example)
                            function goBack() {
                                window.history.back()
                            }

                window.history.forward()
                    - same as clicking forward in the browser
                        (example)
                            function goForward() {
                                window.history.forward()
                            }

Window Navigator
    window.navigator

        cookieEnabled 
            - returns true if cookies are enabled
                (example)
                    document.getElementByTagName("body").innerHTML =
                    "cookiesEnable is" + window.navigator.cookieEnabled;
        
        appName
            - returns the application name of the browser
                (example)
                    document.getElementByTagName("head").innerHTML = 
                    "navigator.appName is " + window.navigator.appName;
        
        appCodeName
            - returns the application code name of the browser
                (example)
                    document.getElementByTagName("head").innerHTML =
                    "navigator.appCodeName is " + window.navigator.appCodeName
        
        product
            - returns the product name of the browser engine:
                (example)
                    document.getElementByTagNamer("body").innerHTML =
                    "navigator.product is " + window.navigator.product;
            
        appVersion
            - returns version information about the browser
                (example)
                    document.getElementByTagName("body").innerHTML = window.navigator.appVersion;
        
        userAgent
            - Returns the user-agent header sent by the browser to the server:
                (example)
                    document.getElementByTagName("body").innerHTML = window.navigator.userAgent;

****************

The information from the navigator object can often be misleading, and should not be used to detect browser versions because:

    Different browsers can use the same name
    The navigator data can be changed by the browser owner
    Some browsers misidentify themselves to bypass site tests
    Browsers cannot report new operating systems, released later than the browser


****************

        platform
            - returns the browser platform (operating system):
                (example)
                    document.getElementByTagName("body").innerHTML = window.navigator.platform;

        language
            - returns the browser's language:
                (example)
                    document.getElementByTagName("body").innerHTML = window.navigator.language;
        
        onLine
            - returns true if the browser is online:
                (example)
                    document.getElementByTagName("body").innerHTML = window.navigator.onLine;

        javaEnable()
            - returns true if Java is enabled:
                (example)
                    document.getElementByTagName("body").innerHTML = window.navigator.javaEnabled();

Alert

window.alert("something");

Confirm
    - used to verify or accept something (comes back either true or false)
        window.confirm("something");
     
Prompt
    - used get the user to input a value before entering a page.
        window.prompt();

Line Breaks
    - line breaks inside a popup box, use a back-slash followed by the character n.
        window.alert("Hello\nHow are you?");

Timing Events
    -allows execution of code at specified time intervals

        setTimeout(function, milliseconds)
            - Executes a function, after waiting a specified number of milliseconds.

        setInterval(function, milliseconds)
            - Same as Timeout(), but repeats the execution of the function continously.
                    
            1000 milliseconds in 1 second.

        clearInterval() stop the executions of the function specified in the setInterval() method.
*/

//window Stuff ends here.

//brower API

//brower API ends here

//document

// document.write() can be used to write dirextly to the HTML output stream:


// document.forms

function validateForm() {
    let formSubber = document.forms["SubberTF"][" "].value;
    if (formsubber == " ") {
        alert("Name must be filled out");
        return false;
    }
}
//document ends here
//


//EventListeners
//      addEventListener() method attaches an event handler to the specified element without overwriting existing event handlers. 
        // you can add many event handlers to one elements
            // Syntax
            //      element.addEventListener(event, function, useCapture);
                    //event parameter = the type of event(click, mousedown, etc etc.) the function parameter is the function we want to call when the event occurs.  The useCapture parameter is boolean value specifying whether to use event bubbling or event capturing. 
                    // example
                    //      element.addEventListener("click", function(){ alert("Hello World!");});
                    // In bubbling the inner most element's event is handled first and then the outer: <p> then <div>
                    // In Capturing the outer most element's event is handled first and then the inner: <div> then <p> 
                    // the default value is false, which will use the bubbling propagation, when the value is true it will use the capturing propagation.
                    //
//cookies.

//main cookie

//guest cookie
let guest = document.cookie = "path=./Javascript/Cookies/Guest/";

//visitor cookie
function setCookie(cname, cvalue, exdays) {
    const VistorDate = new Date();
    VistorDate.setTime(d.getTime() + (exdays*24*60*60*1000));
    let VistorDateExpires = "expires="+ VistorDate.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + VistorDateExpires + ";path=/"
};

function getCookie(cname) {
    let VistorCookieName = cname + "="; // create variable with text to search
    let decodedCookie = decodeURIComponent(document.cookie); // decode string for special characters
    let caCookie = decodedCookie.split(';'); // split into an array
    for(let ViCLoop = 0; ViCLoop <caCookie.length; ViCLoop++) { //loop through array
        let ViC = caCookie[ViCLoop];
        while (ViC.charAt(0) == ' ') {
            ViC = ViC.substring(1);
        }
        if (ViC.indexOf(VistorCookieName) == 0) {
            return ViC.substring(VistorCookieName.length, ViC.length);
        }
    }
    return "";
};

let VisCookieVar = window.setTimeout(function checkCookie() {
    let VistorUserName = getCookie("username");
    if (VistorUserName != "") {
        alert("Welcome back " + VistorUserName + ". You should think about becoming a member of our community.");
    } else {
        VistorUserName = prompt("Please enter your name:", "");
        if (VistorUserName != "" && VistorUserName != null) {
            setCookie("username", VistorUserName, 365);
        }
    }
}, 3600000);

//vistor cookie ends here.


let allCookies = document.cookie;
// to delete a cookie set the expires parameter to a past date. Define the cookie path to ensure that you delete the right cookie.

// cookies end here.

//document stuff ends here

//header section//
let TFToday = document.getElementById("MiddleHeader").innerHTML = "Date : " + Date();
let logo = document.getElementById('ummm');

// navigation section

let nav = document.getElementById('Navigation');

//Working on the news sections

//news ticker/updater.



// new ticker/updater end.

// End of the news section ticker.

// Community post update section

// end of coummunity post update section

// music player section



// end of music player section

// random facts section


//Business info (The footer one) ticker in the footer.


// JavaScript Game code here

//Home page game (needs to fixed)
//Part 1 
var MishubaHomeGame = document.getElementById("MishubaHomeGame");
var block = document.getElementById("block");

//Part 2
function jump(){
    if(MishubaHomeGame.classList != "animate") {
    MishubaHomeGame.classList.add("animate");
    }
    setTimeout(function(){
        MishubaHomeGame.classList.remove("animate");
    },500);
}

//Part 3
//fix the numbers in this section so that the game works.
var checkDead = setInterval(function(){
    var MishubaHomeGameTop =
    parseInt(window.getComputedStyle(MishubaHomeGame).getPropertyValue("top"));
    var blockLeft =
    parseInt(window.getComputedStyle(block).getPropertyValue("left"));
    if(blockLeft<94 && blockleft>100 && MishubaHomeGameTop >= 40) {
        block.style.animation = "none";
        block.style.display = "none";
        alert("you lose.");
    }
},10);
//End of the javascript HomePageGame


//Javascript gamecode ends here


//footer section

//let subscribers = document.getElementById("TFsubbers");
document.getElementById("TFsubbersButton").onclick = function() {
    var SubberTest = document.getElementById("TFsubbers").value;
    console.log("Hello",SubberTest);
}

// validation check starts here
//      checkValidity()
            // Returns true if an input element contains valid data
//      setCustomValidity()
            // Sets the validationMessage property of an input element
function WhereNewSubName() {
    const WhoAreYouNewSub = document.getElementById("NewSubberName");
    if (!WhoAreYouNewSub.checkValidity()) {
        document.getElementById("NewMembershipSubscription").innerHTML = WhoAreYouNewSub.validationMessage;
    }
}
// these are the properties below
// validity (Contains boolean properties related to the validity of an input element), validationMessage (Contains the message a browser will display when ther validity is false), willValidate (indiciates if an input element will be validated)
// validation check ends here


//end subscribers here


// the shopping cart javascript below
function buy(name) {
    let cart = document.querySelector('#cart tbody');

    let newItem = cart.insertRow();
    let itemName = newItem.insertCell(0);
    itemName.innerHTML = name;

    let elementID = '#' + name.replaceAll(' ', '');

    let itemPrice = newItem.insertCell(1);
    itemPrice.innerHTML = document.querySelector(elementID + ' .price').innerHTML;

    let itemQuantity = newItem.insertCell(2);
    itemQuantity.innerHTML = document.querySelector(elementID + ' td .quantity').value;

    document.querySelector(elementID + ' td .quantity').value = '';
}

function checkout() 
{
    document.querySelectorAll('#cart tbody tr').forEach(row => row.remove());
}
// end of the shopping cart section


