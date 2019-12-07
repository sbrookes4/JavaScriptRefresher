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

    //create an array
    let colorArray = ["black", "white", "red", "orange", "yellow", "pink", "blue", "green"];
    let color = "";

    //simple get
    document.getElementById("index2").innerHTML = colorArray[2];

    //for loop listing

    for (let i = 0; i < colorArray.length; i++) {

        color += colorArray[i] + "<br>";
    }

    document.getElementById("colorLister").innerHTML = color;

    //push method example
    let colorArray2 = ["black", "white", "red", "orange", "yellow", "pink", "blue", "green"];
    let color2 = "";

    colorArray2.push("turquiose");

    for (let j = 0; j < colorArray2.length; j++) {

        color2 += colorArray2[j] + "<br>";
    }

    document.getElementById("colorLister2").innerHTML = color2;

    //sorting
    let colorArray3 = ["black", "white", "red", "orange", "yellow", "pink", "blue", "green"];
    let color3 = "";

    colorArray3.sort();

    for (let k = 0; k < colorArray3.length; k++) {

        color3 += colorArray3[k] + "<br>";
    }

    document.getElementById("sorted").innerHTML = color3;

}

function Literals() {

    let info = {
        image: "http://www.darkhorsedp.com/DarkHorse/ClientSites/LJ/ASSETS/IMAGES/INDEX/blkJacket.jpg", 
        year: 2019,
        productType: "Jackets",
        productLine: "Rain Jackets",
        color: "Black",
        details: [" Reversible ", " Waterproof ", " Gortex ", " Hooded "],
        location: {
            floor: 1,
            room: "Outerware",
            rack: "7B"
        }
    }

    document.getElementById("year").innerHTML = info.year;
    document.getElementById("productType").innerHTML = info.productType;
    document.getElementById("productLine").innerHTML = info.productLine;
    document.getElementById("details").innerHTML = info.details;
    document.getElementById("floor").innerHTML = info.location.floor;
    document.getElementById("room").innerHTML = info.location.room;
    document.getElementById("bin").innerHTML = info.location.rack;
    document.getElementById("prodImage").innerHTML = "<img src = " + info.image +" />";

}



