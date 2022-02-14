<?php
// PHP is an acronym for "PHP: Hypertext Preprocessor"

// Connect to Database, MySQL

// connect to database ends here

// XML starts here

/* 
XML language is a ways to structure data for sharing across websites.

What is an XML Parser
- To read and update, create and manipulate an XML document, you will need an XML parser.
        * Tree-Based Parsers
                # Tree-based parsers holds the entire document in Memory and tansforms the XML document into a Tree structure. It analyzes the whole document, and provides access to the Tree Elements(DOM).
        * Event-Based Parsers
                # Event-based parsers do not hold the entire document in Memory, instead, they read in one node at a time and allow you to interact with in real time. Once you move onto the next node, the old one is thrown away.

SimpleXML is a PHP extension that allows us to easily manipulate and get XML data.
        - SimpleXML turns an XML document into a data structure you can iterate through like a collection of arrays and objects.

    
The PHP simplexml_load_string() function is used to read XML data from a string.
        - Use the libxml functionality to retrieve all XML errors when loading the document and then iterate over the errors. The following example tries to load a broken XML string:
                    Go look back to w3schools and look over what the above sentence is talking about.

The PHP simplexml_load_file() function is used to read XML data from a file.


The XML Expat Parser
- The Expat parser is an event-based parser.
    An event-based parser reports the XML as a series of three events:
        <from>Jani</from>
            -Start element: from
            -Start CDATA section, value: Jani
            -Close element: from
         
1.) Initalize the XML parser with the xml_parser_create() function
2.) Create functions to use with the different events handlers
3.) Add the xml_set_element_handler() function to specify which function will be executed when the parser encounters the opening and closing tags.
4.) Add the xml_set_character_data_handler() function to specify which function will execute when the parser encounters character data.
5.) Parse the file "note.xml" with the xml_parse() function
6.) In case of an error, add xml_error_string() function to convert an XML error to a textual description
7.) Call the xml_parser_free() function to release the memory allcoated with the xml_parser_create() function

The XML DOM Parser
    The DOM parser is a tree-based parser.

Load and Output XML
    - We want to initialize the XML parser, load the xml, and output it:
        <?php
        $xmlDoc = new DOMDocument();
        $xmlDoc->load("note.xml");

        print $xmlDoc->saveXML();
        ?>

*/

//XML ends here


//AJAX starts here

/* AJAX is about updating parts of a web page, without reloading the whole page.

AJAX = Asynchronous JavaScript and XML.
AJAX allows web pages to be updated asynchronously by exchanging small amounts of data with the server behind the scenes. This means that it is possible to update parts of a web page, without reloading the whole page.
AJAX is based on internet standards, and uses a combination of:
        - XMLHttpRequest object (to exchange data asynchronously with a server)
        - JavaScript/DOM (to display/interact with the information)
        - CSS (to style the data)
        - XML (often used as the format for transferring data)
    AJAX applications are browser- and platform independent!



//AJAX ends here


// PHP is not case-sensitive
// the variable names in php are case-sensitive though

// in PHP variables begin with $.  for example $variable = "Hello world";
// A variable is created the moment you first assign a value to it.
/* 

a variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9 and _)
Variable names are case-sensitive ($age and $AGE are two different variables)
*/

// a variable declared outside a function has a GLOBAL SCOPE and can only be accessed outsidde a function:

// a variable declared withihn a function has a LOCAL SCOPE and can only be accessedf within that function:
// local variables are only recognized by the function in which they are declared.

// the global keyword is used to access a global variable from within a function.
// use the global keyword before the variables (inside the function):

// PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.


// the static keyword

//Normally, when a function is completed/executed, all of its variables are deleted.  However, sometimes we want a local variable NOT to be deleted. We need it for a further job. To do this, use the static keyword when you first declare the variable. Each time the function is called, that variable will still have the information it contained from the last time the function was called.

// the two basic wasy to get output are: echo and print
// echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.
// can be used like echo; or like echo();
// multiple parameters are like this echo "this", "string", "uses", "commas";

// use a . when using variables for example echo "<h2>" . $variable1 . "</h2>";

// print or print() you can use both.
// print "<h2> Php is alright I guess</h2>";
// print and echo are basically wrote the same. print is for argument expressions shit and echo can use multiple parameters.

// php datatypes are String, Integer, Float, Boolean, Array, Object, NULL, Resource

// var_dump() returns the data type and value

// $cars = array("", "", "");
// echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
// use count() to return the length of an array: echo count($cars);
// loop through an array like this $arrlength = count($cars); for($x = 0; $x < $arrlength; $x++) { echo $cars[$x]; echo "<br>";}


// Null is a special data type which can have only one value: NULL.
// a variable of data type NULL is a variable that has no value assigned to it.
// Variables can also be emptied by setting the value to NULL:

// to create a constant use the define() function

//  define(name, value, case-insensitive)       define("GREETING", "Welcome to Tycadome", true); echo GREETING;
//            case-insesitive: specifies whether the constant name should be case-insensitive. Default is false
// name: Specifies the name of the constant.  Value: Specifies the value of the constant

// define("cars", ["alfa Romeo", "BMW", Toyota"]); echo cars[0];

// to force php to use datatypes that are the same put declare(strict_types=1); at the beginning of the php


//Global Variables

/*
$GLOBALS
        access variables that are anywhere

$_SERVER
    - holds information about headers, paths, and script locations.


$_REQUEST
    - used to collect data after submitting an HTML form
    

$_POST
    - used to collect form data after submitting an HTML form with method="post. $_POST is also widely used to pass variables.



$_GET

$_FILES

$_ENV

$_COOKIE
    setcookie(name, value, expire, path, domain, secure, httponLy);

    set a cookie first and then check to see if cookies are enabled
        setcookie(name, value, expire, path, domain, secure, httponLy);
        if(count($_COOKIE) > 0) {
            echo "Cookies are enabled.";
        } else {
            echo "Cookies are disabled."'
        }

$_SESSION
    session_start()

    set a session variable like this
        $_SESSION[" "] = " ";
        
    retreive a session variable like this
        echo "favorite something is " . $_SESSION[" "] . ".";
        

    use session_unset(); to remove all session variables
    use session_destory(); to destory the session


EXCEPTION
    The Exception Object
        - contains information about the error or unexpected behaviour that the function encountered.

            new Exception(message, code, previous)

        parameter values exceptions
            Message: A string describing why the exception was thrown
            Code: An integer that can be used to easily distinguish this exception from others of the same type
            Previous: If this exception was thrown in a catch block of another exception, it is recommended to pass that exception into this parameter.
        
        Methods
            getMessage()
                -Returns a string describing why the exception was thrown
            getPrevious()
                -If this exception was triggered by another one, this method returns the previous exception. If not, then it returns null
            getCode()
                -Returns the exception code
            getFile()
                -Returns the full path of the file in which the exception was thrown
            getLine()
                -Returns the line number of the line of code which threw the exception
        
                
*/


//$_REQUEST


