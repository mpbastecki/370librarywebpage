//Create a navbar and footer that can load on every page without copying and pasting it //
window.addEventListener("load", loadHTML);

//makes the js wait to load until page loads blah blah blah
async function loadHTML() {
    let myObject = await fetch('../VIEW/Nav.html');
    let myText = await myObject.text();
    document.getElementById('nav-placeholder').innerHTML = myText;
    let myFooter = await fetch('../VIEW/Footer.html');
    let myText2 = await myFooter.text();
    document.getElementById('footer-placeholder').innerHTML = myText2;
}