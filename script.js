console.log("O JavaScript está funcionando! 🧁");

const botaoReceita = document.getElementById("botaoReceita");
const areaRecomendacao = document.getElementById("recomendacao");

const receitas = [
    { nome: "Brigadeiro Gourmet", tempo: "20 min", dificuldade: "Fácil" },
    { nome: "Pudim de Leite Condensado", tempo: "1h 30min", dificuldade: "Média" },
    { nome: "Mousse de Maracujá", tempo: "15 min", dificuldade: "Fácil" },
    { nome: "Brownie de Chocolate", tempo: "40 min", dificuldade: "Média" },
    { nome: "Pavê de Baunilha", tempo: "30 min", dificuldade: "Fácil" }
];

botaoReceita.addEventListener("click", mostrarRecomendacao);

function mostrarRecomendacao() {
    const indiceAleatorio = Math.floor(Math.random() * receitas.length);
    const receitaSorteada = receitas[indiceAleatorio];

    areaRecomendacao.innerHTML = `
        <h3>Que tal fazer: ${receitaSorteada.nome}?</h3>
        <p><strong>Tempo:</strong> ${receitaSorteada.tempo}</p>
        <p><strong>Dificuldade:</strong> ${receitaSorteada.dificuldade}</p>
    `;
}