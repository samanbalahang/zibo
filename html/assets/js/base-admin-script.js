
let humburgur = document.querySelector(".humburgur");
let desktopHeader = document.querySelector(".desktop-header");
let humburgurMenu = document.querySelector(".menu"); 
let gholi = document.querySelector(".gholi");
console.log(humburgur);
console.log(desktopHeader);
console.log(humburgurMenu);
if (humburgur) {
    console.log("humburgur", humburgur);
    humburgur.addEventListener("click", function (e) {
        console.log("assb");
        e.preventDefault();
        desktopHeader.classList.toggle("open");
        humburgurMenu.classList.toggle("active");
        console.log(desktopHeader);
        console.log(humburgurMenu);

    })
}
gholi.addEventListener("click",e=>{
    e.preventDefault();
   console.log("DDDD");
   
})