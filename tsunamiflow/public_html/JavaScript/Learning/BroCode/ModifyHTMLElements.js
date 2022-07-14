// document.getElementById() (older)
// document.querySelector() (newer, more powerful)

document.querySelector("#myButton").onclick = function() {
    const h1 = document.querySelector("#myH1");
    const underline = document.createElement("u");
    underline.innerText = "Bye World";
    h1.innerText= "";
    h1.append(underline);

    const p = document.querySelectorAll(".myP");
  //  p[0].innerText = "Whoaaaa!";
    p.forEach(element => element.innerText = "Qhoaosh");

    const button = document.querySelectorAll("button");
    button.forEach(element => element.remove());

}
