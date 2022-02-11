

// innerHTML
// innerText

const h4 = document.createElement("h4");
const underline = document.createElement("u");

underline.innerText= "Hello World1";
h4.append(underline);
document.body.append(h4);


const h3 = document.createElement("h2");
const italic = document.createElement("i");
italic.innerText = "sup?";
h3.append(italic);
document.body.append(h3);

const p = document.createElement("p");
const bold = document.createElement("b");

bold.innerText= "bye";

p.append(bold);
document.body.append(p);

