window.addEventListener("DOMContentLoaded", () => {
    let onlogin = document.querySelector(".onlogin");
    let onsignup = document.querySelector(".onsignup");
    let login = document.getElementById("login");
    let modalopeners = document.querySelectorAll("a[data-targer]");
    var loginSwiper = document.querySelector(".loginSwiper");
    let url = document.location.origin
    let modalopenersTargets, linkedmodal, x;
    if (url.includes(".ir")) {
        end = url.includes(".ir");
        url = url.substring(0, end);
    } else if (url.includes(".com")) {
        end = url.includes(".com");
        url = url.substring(0, end);
    }
    if (loginSwiper) {
        new Swiper(".loginSwiper", {
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    }
    if (modalopeners.length > 0) {
        modalopeners.forEach(modalopener => {
            modalopener.addEventListener("click", e => {
                e.preventDefault();
                modalopenersTargets = modalopener.getAttribute("data-targer");
                linkedmodal = document.getElementById(modalopenersTargets);
                if (linkedmodal) {
                    linkedmodal.classList.add("open");
                    x = document.createElement("img");
                    x.src = "url/assets/images/x.png";
                    x.alt = "xicon";
                    x.addEventListener("click",()=>{
                        
                    })
                }
            })
        })
    }


})