let button = document.querySelectorAll("main section header nav button");
//sectionGen4[0] => typeEau, sectionGen4[1] => typeFeu, sectionGen4[2] => typePlante
let sectionGen4 = document.querySelectorAll(".gen4 section");
let sectionGen5 = document.querySelectorAll(".gen5 section");
let sectionGen6 = document.querySelectorAll(".gen6 section");
let sectionGen7 = document.querySelectorAll(".gen7 section");
let sectionGen8 = document.querySelectorAll(".gen8 section");

function makeVisible(check, elemList){
    let selectedSection = 0;
    if(check === "Eau"){
        selectedSection = 1;
    }else if(check === "Feu"){
        selectedSection = 2;
    }else{
        selectedSection = 3;
    }

    elemList.forEach((e) =>{
        e.style.display = "none";
    })
    elemList[selectedSection-1].style.display = "block";

}

button.forEach((elem) =>{
    elem.addEventListener('click', (e) => {
        console.log("vide")
        let check = parseInt(e.target.getAttribute("data-pos"))
        if(check === 1){
            //sectionGen4
            makeVisible(e.target.getAttribute("data-content"), sectionGen4);
        }else if(check === 2){
            //sectionGen5
            makeVisible(e.target.getAttribute("data-content"), sectionGen5);
        }else if(check === 3){
            //sectionGen6
            makeVisible(e.target.getAttribute("data-content"), sectionGen6);
        }else if(check === 4){
            //sectionGen7
            makeVisible(e.target.getAttribute("data-content"), sectionGen7);
        }else{
            //sectionGen8
            makeVisible(e.target.getAttribute("data-content"), sectionGen8);
        }
    })
})


let audio = document.querySelectorAll("main section section article audio");

audio.forEach(element => {
    element.volume=0.2;
});