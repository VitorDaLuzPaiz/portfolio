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
