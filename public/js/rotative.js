document.addEventListener("DOMContentLoaded", function () {
    const frases = [
        "Cultos aos Domingos",
        "Pela manhã: Escola Dominical",
        "À noite: Louvor e Palavra",
        "Celebre com sua família"
    ];

    let i = 0;
    const el = document.getElementById("frase-rotativa");

    setInterval(() => {
        el.classList.remove("animate__fadeInDown");
        el.classList.add("animate__fadeOutUp");

        setTimeout(() => {
            i = (i + 1) % frases.length;
            el.textContent = frases[i];
            el.classList.remove("animate__fadeOutUp");
            el.classList.add("animate__fadeInDown");
        }, 500);
    }, 4000);
});
