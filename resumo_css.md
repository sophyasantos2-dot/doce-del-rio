Resumo de CSS
 1. A Utilidade do CSS e o Arquivo Externo
O **CSS** (Cascading Style Sheets, ou Folhas de Estilo em Cascata) é a linguagem que usamos para dar "vida" e visual ao nosso site. Enquanto o HTML constrói o
esqueleto e a estrutura (textos, imagens, botões), o CSS é responsável por toda a estética: cores, tamanhos, posicionamentos e animações.

**Por que usar um arquivo externo (`style.css`)?**
A forma mais recomendada de aplicar CSS é criando um arquivo separado exclusivo para os estilos (geralmente chamado `style.css`) e "linká-lo" dentro do 
documento HTML usando a tag `<link>`. Isso é fundamental por três motivos:
* **Organização:** Separa a estrutura (HTML) do visual (CSS), deixando o código muito mais limpo e fácil de ler.
* **Reaproveitamento:** Você pode usar o mesmo arquivo `style.css` em várias páginas HTML diferentes do seu site.
* **Manutenção:** Se você quiser mudar a cor de fundo de todo o site, basta alterar uma única linha no arquivo externo, em vez de mexer página por página.


2. O Modelo de Caixa (Box Model): Margin vs. Padding

Para entender o CSS, é crucial entender que todo elemento HTML é visto como uma "caixa" (Box Model). O tamanho e o respiro dessa caixa são controlados 
principalmente por duas propriedades:

Padding (Preenchimento interno): É o espaço que fica *dentro* da borda do elemento, entre o conteúdo (como um texto) e o limite da caixa. Ele "incha" o 
elemento por dentro.
Margin (Margem externa): É o espaço que fica *fora* da borda do elemento. Ele serve para empurrar os outros elementos para longe, criando distância entre 
caixas diferentes na tela.

3. Glossário de Propriedades Principais

Aqui estão as propriedades essenciais que utilizamos para estilizar os elementos:

`color`: Muda a cor do texto de um elemento (ex: `color: white;`).
`background-color`: Altera a cor de fundo de um elemento (ex: `background-color: #333333;`).
`margin`: Define o espaçamento externo do elemento, afastando-o dos elementos vizinhos.
`padding`: Define o espaçamento interno do elemento, dando espaço entre o limite da caixa e o seu conteúdo.
`display: flex`: Transforma o elemento em um "container flexível" (Flexbox). É uma das ferramentas mais poderosas do CSS atual para alinhar itens, 
centralizá-los e distribuí-los na tela de forma inteligente, lado a lado ou em colunas, sem complicação.

4. O Poder das "Classes" no CSS

No HTML, podemos ter vários elementos iguais, como muitos parágrafos (`<p>`) ou vários botões (`<button>`). Se estilizarmos diretamente a tag `p` no CSS, 
**todos** os parágrafos do site vão receber aquele estilo.

É aí que entram as **classes**. 

Uma classe funciona como um "nome" ou "etiqueta" personalizada que damos a um elemento específico no HTML (ex: `<p class="texto-destaque">`). 
No arquivo CSS, selecionamos essa classe colocando um ponto antes do nome (ex: `.texto-destaque { color: red; }`). 

Vantagem: Isso nos permite estilizar de forma única apenas aquele elemento ou um pequeno grupo de elementos que compartilham a mesma classe, sem bagunçar ou 
alterar o restante da página. É a forma mais segura e organizada de construir o design de um site.
