const body = document.querySelector("body"),
    slidebar = body.querySelector(".slidebar"),
    toggle = body.querySelector(".toggle");

    toggle.addEventListener("click", () => {
        slidebar.classList.toggle("close");
    });
