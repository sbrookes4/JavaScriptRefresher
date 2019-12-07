//JavaScript Refresher & ES 6 tutorial

//alert("test");
//console.log("test");

function Reveal() {
    document.getElementById("textReveal").innerHTML = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
}

function Toggle() {

    var x = document.getElementById("textToggle");
    if (x.innerHTML === "") {
        x.innerHTML = "Toggled Text Visible";
    } else {
        x.innerHTML = "";
    }
    
}

function LetConst() {

    const C_Name = "Leslie Jordan"
    const Year = 1986;
    let L_Name = "Portland";

    document.getElementById("let").innerHTML = C_Name;
    document.getElementById("const").innerHTML = L_Name;
    document.getElementById("est").innerHTML = Year;

}

function OldMethod() {

    const A_Name = "Leslie Jordan"
    const A_Year = 1986;
    let A_City = "Portland";

    document.getElementById("concatOld").innerHTML = A_Name + " was founded in " + A_City + " in " + A_Year + ".";
}

function NewMethod() {

    const B_Name = "Leslie Jordan"
    const B_Year = 1986;
    let B_City = "Portland";

    document.getElementById("concatNew").innerHTML = `${B_Name} was founded in ${B_Year} in ${B_City}.`;
}

function StringMethods() {

    let s = "This is a String.";
    let t = typeof (s);

    document.getElementById("string").innerHTML = s;
    document.getElementById("length").innerHTML = s.length + " characters";
    document.getElementById("type").innerHTML = ` "${s}" is a ${t} data type.`;
    document.getElementById("upper").innerHTML = s.toUpperCase();
    document.getElementById("subString").innerHTML = s.substring(0,7);
    document.getElementById("trimmed").innerHTML = s.trim();
    //document.getElementById("").innerHTML = ;

}

function Arrays() {


}


