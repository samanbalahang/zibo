window.addEventListener("DOMContentLoaded", () => {
    let onlogin                 = document.querySelector(".onlogin");
    let onsignup                = document.querySelector(".onsignup");
    let login                   = document.getElementById("login");
    let modalopeners            = document.querySelectorAll("a[data-targer]");
    var loginSwiper             = document.querySelector(".loginSwiper");
    let url                     = document.location.origin;
    let mobileinputs            = document.querySelectorAll(".mobileinput");
    let inputCodeNumber         = document.getElementById("inputCodeNumber");
    let inputPhoneNumber        = document.getElementById("inputPhoneNumber");
    let getValidationcode       = document.getElementById("getValidationcode");
    let logedIn                 = document.getElementById("logedIn");
    let validationCodeInput     = document.getElementById("validationCode");
    let humburgur               = document.querySelector(".humburgur");
    let desktopHeader           = document.querySelector(".desktop-header");  
    let humburgurMenu           = document.querySelector(".menu");
    let modalopenersTargets, linkedmodal, x, input, numbersOnly, createInput, boxtext;
    if (url.includes(".ir")) {
        end = url.includes(".ir");
        url = url.substring(0, end);
    } else if (url.includes(".com")) {
        end = url.includes(".com");
        url = url.substring(0, end);
    }else{
        url = ".";
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
                    console.log("x : ",x);
                    x.src = `${url}/assets/images/x.png`;
                    x.alt = "xicon";
                    x.classList.add("modal-closer");
                    x.addEventListener("click", () => {
                        linkedmodal.classList.remove("open");
                        x.remove();
                    })
                    linkedmodal.append(x);
                }
            })
        })
    }
    if (mobileinputs.length > 0) {
        mobileinputs.forEach((box, index) => {
            box.addEventListener("click", () => {
                const input = createInput(box, index);
                input.focus();
                input.select();
            });
        });
    }
    createInput = (box, index) => {
        let input = box.querySelector("input");
        if (input) {
            input.focus();
            input.select();
            return input;
        }
        boxtext = box.innerText;
        if (boxtext != "") {
            box.innerText = "";
        }
        input = document.createElement("input");
        input.type = "text";
        input.maxLength = 11;
        input.classList.add("text-center");
        input.addEventListener("input", function () {
            const digits = this.value.replace(/\D/g, "");
            if (!digits.length) return;
            for (let i = 0; i < digits.length; i++) {
                const targetIndex = index + i;
                if (!mobileinputs[targetIndex]) break;
                let targetInput =
                    mobileinputs[targetIndex].querySelector("input");
                if (!targetInput) {
                    targetInput = createInput(
                        mobileinputs[targetIndex],
                        targetIndex
                    );
                }

                targetInput.value = digits[i];
            }

            const nextIndex = Math.min(
                index + digits.length,
                mobileinputs.length - 1
            );

            let nextInput =
                mobileinputs[nextIndex].querySelector("input");

            if (!nextInput) {
                nextInput = createInput(
                    mobileinputs[nextIndex],
                    nextIndex
                );
            }

            nextInput.focus();
            nextInput.select();

            this.value = digits[0];
        });

        input.addEventListener("keydown", function (e) {

            if (
                e.key === "Backspace" &&
                !this.value &&
                index > 0
            ) {

                const prevInput =
                    mobileinputs[index - 1].querySelector("input");

                if (prevInput) {
                    prevInput.focus();
                    prevInput.select();
                }
            }
        });

        box.append(input);

        return input;
    }
    if (getValidationcode) {
        getValidationcode.addEventListener("click", e => {
            inputPhoneNumber.classList.add("hidden");
            inputCodeNumber.classList.remove("hidden");
            validationCodeInput.focus();
        })
    }
    if (validationCodeInput) {
        validationCodeInput.addEventListener('keypress', function (e) {
            if (!/[0-9]/.test(e.key)) {
                e.preventDefault();
            }
            if(validationCodeInput.value.length > 4 ){
                  e.preventDefault();
            }
        });
    }
    if(logedIn){
        logedIn.addEventListener("click",e=>{
            e.preventDefault();
            onlogin.classList.remove("hidden");
            onsignup.classList.add("hidden");
            logedIn.closest(".modal").classList.remove("open");
        })
    }
    if(humburgur){
        humburgur.addEventListener("click",e=>{
            e.preventDefault();
            desktopHeader.classList.toggle("open");
            humburgurMenu.classList.toggle("active");
        })
    }
    numbersOnly = (value) => {
        return value.replace(/\D/g, '');
    }


})