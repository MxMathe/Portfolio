document.querySelectorAll(".especialidades-box").forEach(box => {
    box.addEventListener("mouseenter", function() {
        let iconsContainer = this.querySelector(".icons-container");

        document.querySelectorAll(".especialidades-box").forEach(b => {
            if (b !== this) b.classList.add("collapsed");
        });

        this.classList.add("expanded");
        iconsContainer.style.display = "flex";
    });

    box.addEventListener("mouseleave", function() {
        let iconsContainer = this.querySelector(".icons-container");

        document.querySelectorAll(".especialidades-box").forEach(b => {
            b.classList.remove("collapsed", "expanded");
        });

        iconsContainer.style.display = "none";
    });
});



//setas 

document.addEventListener("DOMContentLoaded", function () {
    window.scrollCarrossel = function (direction) {
        const carrossel = document.getElementById("carrosselProjetos");
        const scrollAmount = 550;

        carrossel.scrollBy({
            left: direction * scrollAmount,
            behavior: 'smooth'
        });
    };
});


