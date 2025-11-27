document.addEventListener("DOMContentLoaded", () => {
    const toggle = document.getElementById("themeToggle");
    const html = document.documentElement;

    if (!toggle) {
        console.error("Botão themeToggle não encontrado!");
        return;
    }

    toggle.addEventListener("click", () => {
        let mode = html.getAttribute("data-theme");
        if (mode === "dark") {
            html.setAttribute("data-theme", "light");
            toggle.textContent = "🌙";
        } else {
            html.setAttribute("data-theme", "dark");
            toggle.textContent = "☀";
        }
    });

    console.log("Modo claro/escuro carregado com sucesso.");
});


// ===============================
//  PROJETOS → MODAL COM AUTO-SCROLL
// ===============================

const projectSingleImages = {
    1: "assets/img/projeto1-big.png",
    2: "assets/img/projeto2-big.png",
    3: "assets/img/projeto3-big.png"
};

const modal = document.getElementById("projectModal");
const modalImg = document.getElementById("modalProjectImage");

let autoScrollAnimation;
let translateY = 0;
let direction = 1; // 1 = descendo | -1 = subindo

document.querySelectorAll(".project-btn").forEach(btn => {
    btn.addEventListener("click", () => {
        const imgSrc = projectSingleImages[btn.dataset.project];
        modalImg.src = imgSrc;

        modal.classList.add("active");

        // Reinicia posição
        translateY = 0;
        modalImg.style.transform = "translateY(0px)";

        setTimeout(() => startImageAutoScroll(), 500);
    });
});


function startImageAutoScroll() {
    cancelAnimationFrame(autoScrollAnimation);
    animateImageScroll();
}

function animateImageScroll() {
    translateY += 0.70 * direction; // velocidade da animação
    modalImg.style.transform = `translateY(${-translateY}px)`;

    const imgHeight = modalImg.scrollHeight;
    const boxHeight = modalImg.parentElement.clientHeight;

    // desceu tudo → sobe
    if (translateY >= imgHeight - boxHeight) {
        direction = -1;
    }

    // subiu tudo → desce
    if (translateY <= 0) {
        direction = 1;
    }

    autoScrollAnimation = requestAnimationFrame(animateImageScroll);
}


function stopImageAutoScroll() {
    cancelAnimationFrame(autoScrollAnimation);
}


// ===============================
// Fechar modal
// ===============================

const closeBtn = document.querySelector(".close-modal");

if (closeBtn) {
    closeBtn.addEventListener("click", () => {
        modal.classList.remove("active");
        stopImageAutoScroll();
    });
}

// Ao clicar fora
modal.addEventListener("click", e => {
    if (e.target === modal) {
        modal.classList.remove("active");
        stopImageAutoScroll();
    }
});

// ===============================
// MOBILE MENU
// ===============================

const mobileMenuBtn = document.querySelector(".mobile-menu-btn");
const mobileMenu = document.querySelector(".mobile-menu");
const closeMobileMenu = document.querySelector(".close-mobile-menu");
const overlay = document.querySelector(".mobile-overlay");

mobileMenuBtn.addEventListener("click", () => {
    mobileMenu.classList.add("active");
    overlay.classList.add("active");
});

closeMobileMenu.addEventListener("click", () => {
    mobileMenu.classList.remove("active");
    overlay.classList.remove("active");
});

overlay.addEventListener("click", () => {
    mobileMenu.classList.remove("active");
    overlay.classList.remove("active");
});

// FECHAR DEPOIS DE CLICAR EM ALGUMA OPÇÃO
document.querySelectorAll(".mobile-menu a").forEach(link => {
    link.addEventListener("click", () => {
        mobileMenu.classList.remove("active");
        overlay.classList.remove("active");
    });
});
