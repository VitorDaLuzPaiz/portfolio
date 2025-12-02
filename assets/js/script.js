// ===============================
//  TEMA (DARK / LIGHT)
// ===============================
document.addEventListener("DOMContentLoaded", () => {
    const toggle = document.getElementById("themeToggle");
    const html = document.documentElement;

    toggle.addEventListener("click", () => {
        const mode = html.getAttribute("data-theme");
        const isDark = mode === "dark";

        html.setAttribute("data-theme", isDark ? "light" : "dark");
        toggle.textContent = isDark ? "🌙" : "☀";
    });
});

// ===============================
//  PROJETOS → MODAL COM NAVEGAÇÃO + AUTO-SCROLL
// ===============================

const projectImages = {
    1: ["assets/img/projeto1-1.png", "assets/img/projeto1-2.png"],
    2: ["assets/img/projeto2-1.png"],
    3: ["assets/img/projeto3-1.png"]
};

const modal = document.getElementById("projectModal");
const modalImg = document.getElementById("modalProjectImage");
const closeBtn = document.querySelector(".close-modal");
const nextBtn = document.getElementById("nextImg");
const prevBtn = document.getElementById("prevImg");

let currentProject = null;
let currentIndex = 0;

let autoScrollAnimation = null;
let translateY = 0;
let direction = 1;


// Abrir modal
document.querySelectorAll(".project-btn").forEach(btn => {
    btn.addEventListener("click", () => {
        currentProject = btn.dataset.project;
        currentIndex = 0;

        openImage();

        modal.classList.add("active");

        startAutoScroll();
    });
});


// Função que troca de imagem
function openImage() {
    modalImg.src = projectImages[currentProject][currentIndex];

    stopAutoScroll();
    translateY = 0;
    direction = 1;
    modalImg.style.transform = "translateY(0px)";

    setTimeout(() => startAutoScroll(), 400);
}


// Botão próximo
nextBtn.addEventListener("click", () => {
    currentIndex++;
    if (currentIndex >= projectImages[currentProject].length) {
        currentIndex = 0;
    }
    openImage();
});

// Botão anterior
prevBtn.addEventListener("click", () => {
    currentIndex--;
    if (currentIndex < 0) {
        currentIndex = projectImages[currentProject].length - 1;
    }
    openImage();
});


// Auto-scroll
function startAutoScroll() {
    cancelAnimationFrame(autoScrollAnimation);
    animateScroll();
}

function animateScroll() {
    translateY += 0.90 * direction;
    modalImg.style.transform = `translateY(${-translateY}px)`;

    const imgHeight = modalImg.scrollHeight;
    const boxHeight = modalImg.parentElement.clientHeight;

    if (translateY >= imgHeight - boxHeight) direction = -1;
    if (translateY <= 0) direction = 1;

    autoScrollAnimation = requestAnimationFrame(animateScroll);
}

function stopAutoScroll() {
    cancelAnimationFrame(autoScrollAnimation);
}

// Fechar modal
function closeModal() {
    modal.classList.remove("active");
    stopAutoScroll();
}

closeBtn.addEventListener("click", closeModal);
modal.addEventListener("click", e => {
    if (e.target === modal) closeModal();
});

// ===============================
//  MENU MOBILE
// ===============================

const mobileMenuBtn = document.querySelector(".mobile-menu-btn");
const mobileMenu = document.querySelector(".mobile-menu");
const closeMobile = document.querySelector(".close-mobile-menu");
const overlay = document.querySelector(".mobile-overlay");

// abrir menu
mobileMenuBtn.addEventListener("click", () => {
    mobileMenu.classList.add("active");
    overlay.classList.add("active");
});

// fechar menu
function closeMobileMenu() {
    mobileMenu.classList.remove("active");
    overlay.classList.remove("active");
}

closeMobile.addEventListener("click", closeMobileMenu);
overlay.addEventListener("click", closeMobileMenu);

// fechar após clicar em um link
document.querySelectorAll(".mobile-menu a").forEach(link => {
    link.addEventListener("click", closeMobileMenu);
});
