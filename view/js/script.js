// ===========================
//  DOCE DELÍRIO — app.js
// ===========================

const RECIPES = [
  // ─── FITNESS ───
  { id:1,  cat:'fitness',   name:'Bolo Fit de Banana com Aveia',        emoji:'🍌', img:'https://images.unsplash.com/photo-1586985289906-406988974504?w=400&q=60', time:'40 min',
    ing:['3 bananas maduras amassadas','2 ovos','1 xícara de aveia em flocos','2 colheres de sopa de mel','1 colher de chá de canela','1 colher de chá de fermento','1 pitada de sal'],
    steps:['Preaqueça o forno a 180°C e unte uma forma.','Amasse bem as bananas com um garfo até virar um purê.','Adicione os ovos e misture bem.','Acrescente a aveia, mel, canela e sal. Misture até incorporar.','Por último, adicione o fermento e misture levemente.','Despeje na forma e leve ao forno por 30–35 minutos.','Espete um palito — se sair limpo, está pronto! Espere esfriar.'] },
  { id:2,  cat:'fitness',   name:'Bolo de Cenoura Fit sem Farinha',     emoji:'🥕', img:'https://images.unsplash.com/photo-1571115177098-24ec42ed204d?w=400&q=60', time:'50 min',
    ing:['2 cenouras médias raladas','3 ovos','½ xícara de açúcar de coco','1 xícara de farinha de amêndoas','1 colher de sopa de óleo de coco','1 colher de chá de fermento','Canela a gosto'],
    steps:['Preaqueça o forno a 180°C.','Bata os ovos com o açúcar de coco até espumar.','Adicione o óleo de coco e as cenouras raladas.','Incorpore a farinha de amêndoas e a canela.','Adicione o fermento e misture delicadamente.','Asse por 35–40 minutos. Teste com palito.'] },
  { id:3,  cat:'fitness',   name:'Bolo de Chocolate Proteico',          emoji:'💪', img:'https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=400&q=60', time:'45 min',
    ing:['1 xícara de farinha de aveia','2 scoops de whey chocolate','2 ovos','1 banana amassada','¼ xícara de cacau em pó','½ xícara de leite desnatado','1 colher de chá de fermento'],
    steps:['Misture todos os ingredientes secos em uma tigela.','Em outra tigela, bata os ovos com a banana e o leite.','Junte as misturas e mexa até homogeneizar.','Despeje em forma untada e asse a 180°C por 30 minutos.'] },
  { id:4,  cat:'fitness',   name:'Bolo de Maçã com Nozes Zero Açúcar',  emoji:'🍎', img:'https://images.unsplash.com/photo-1568571780765-9276df3f6c2e?w=400&q=60', time:'55 min',
    ing:['2 maçãs sem casca, picadas','2 ovos','½ xícara de nozes picadas','1 xícara de farinha integral','1 colher de sopa de eritritol','Canela e cravo a gosto','1 colher de chá de fermento'],
    steps:['Preaqueça o forno a 170°C.','Bata os ovos com o eritritol.','Adicione as maçãs, nozes e especiarias.','Incorpore a farinha e o fermento.','Asse por 40–45 minutos.'] },
  { id:5,  cat:'fitness',   name:'Bolo Fit de Coco com Chia',           emoji:'🥥', img:'https://images.unsplash.com/photo-1562440499-64c9a111f713?w=400&q=60', time:'40 min',
    ing:['1 xícara de farinha de coco','3 ovos','½ xícara de leite de coco','2 colheres de sopa de chia','2 colheres de sopa de mel','1 colher de chá de baunilha','1 colher de chá de fermento'],
    steps:['Hidrate a chia no leite de coco por 10 minutos.','Bata os ovos com o mel e a baunilha.','Misture com a chia hidratada.','Adicione a farinha de coco e o fermento.','Asse em forma untada a 180°C por 30 minutos.'] },
  { id:6,  cat:'fitness',   name:'Bolo de Iogurte com Morango',         emoji:'🍓', img:'https://images.unsplash.com/photo-1559620192-032c4bc4674e?w=400&q=60', time:'50 min',
    ing:['1 xícara de iogurte grego natural','2 ovos','1 xícara de farinha integral','½ xícara de eritritol','1 xícara de morangos fatiados','1 colher de sopa de óleo','1 colher de chá de fermento'],
    steps:['Bata os ovos com o eritritol.','Adicione o iogurte e o óleo.','Incorpore a farinha e o fermento.','Por último, adicione os morangos com cuidado.','Asse a 180°C por 35–40 minutos.'] },
  { id:7,  cat:'fitness',   name:'Bolo Fit de Abóbora com Canela',      emoji:'🎃', img:'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=400&q=60', time:'55 min',
    ing:['1 xícara de purê de abóbora','2 ovos','½ xícara de farinha de aveia','½ xícara de farinha integral','2 colheres de sopa de mel','1 colher de chá de canela','1 colher de chá de fermento'],
    steps:['Cozinhe e amasse a abóbora até virar purê.','Bata os ovos com o mel.','Misture com o purê de abóbora.','Adicione as farinhas, canela e fermento.','Asse a 180°C por 40 minutos.'] },
  { id:8,  cat:'fitness',   name:'Bolo de Espinafre Fit',               emoji:'🥬', img:'https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?w=400&q=60', time:'45 min',
    ing:['1 xícara de espinafre cozido','2 ovos','1 xícara de farinha de aveia','½ xícara de leite','2 colheres de sopa de azeite','1 colher de sopa de fermento','Sal e noz-moscada a gosto'],
    steps:['Bata o espinafre com os ovos e o leite no liquidificador.','Transfira para uma tigela e adicione o azeite.','Acrescente a farinha, sal e noz-moscada.','Por último, adicione o fermento.','Asse a 180°C por 30–35 minutos.'] },

  // ─── DOCES ───
  { id:9,  cat:'doces',     name:'Bolo de Morango com Chantilly',       emoji:'🍓', img:'https://images.unsplash.com/photo-1565958011703-44f9829ba187?w=400&q=60', time:'1h 20min',
    ing:['3 ovos','2 xícaras de farinha de trigo','1 xícara de açúcar','1 xícara de leite','½ xícara de manteiga','1 colher de sopa de fermento','500g de morangos frescos','1 caixinha de chantilly batido'],
    steps:['Bata os ovos com açúcar até dobrar de volume.','Adicione o leite e a manteiga derretida.','Peneire a farinha e o fermento e incorpore.','Asse a 180°C por 35 minutos.','Deixe esfriar completamente.','Corte ao meio, recheie com chantilly e morangos.','Cubra com mais chantilly e decore com morangos inteiros.'] },
  { id:10, cat:'doces',     name:'Bolo Ninho com Frutas Vermelhas',     emoji:'🫐', img:'https://images.unsplash.com/photo-1588195538326-c5b1e9f80a1b?w=400&q=60', time:'1h 30min',
    ing:['3 ovos','1½ xícara de farinha','1 xícara de leite Ninho','½ xícara de manteiga','1 xícara de açúcar','1 colher de chá de baunilha','1 colher de sopa de fermento','Morangos e mirtilos para decorar'],
    steps:['Bata a manteiga com o açúcar até obter creme.','Adicione os ovos um a um.','Alterne farinha e leite Ninho diluído.','Adicione a baunilha e o fermento.','Asse a 175°C por 40 minutos.','Recheie com creme de Ninho e frutas vermelhas.'] },
  { id:11, cat:'doces',     name:'Bolo de Paçoca com Brigadeiro',       emoji:'🥜', img:'https://images.unsplash.com/photo-1571506165871-ee72a35bc9d4?w=400&q=60', time:'1h',
    ing:['4 ovos','2 xícaras de farinha','1 xícara de açúcar','1 xícara de leite','½ xícara de óleo','100g de paçoca esfarelada','1 lata de leite condensado','2 colheres de manteiga','4 colheres de cacau'],
    steps:['Bata ovos, açúcar e óleo na batedeira por 5 minutos.','Adicione alternadamente a farinha e o leite.','Acrescente a paçoca esfarelada.','Asse a 180°C por 35 minutos.','Prepare o brigadeiro: cozinhe leite condensado, manteiga e cacau até engrossar.','Cubra o bolo frio com o brigadeiro e decore com paçoca.'] },
  { id:12, cat:'doces',     name:'Bolo de Churros com Doce de Leite',   emoji:'🍯', img:'https://images.unsplash.com/photo-1551024601-bec78aea704b?w=400&q=60', time:'1h 10min',
    ing:['3 ovos','2 xícaras de farinha','1 xícara de açúcar','1 xícara de leite quente','½ xícara de manteiga','1 colher de canela em pó','1 colher de fermento','1 lata de doce de leite'],
    steps:['Bata manteiga e açúcar até virar creme.','Adicione os ovos um a um.','Alterne farinha e leite. Adicione canela e fermento.','Asse a 180°C por 40 minutos.','Recheie com doce de leite.','Polvilhe açúcar com canela por cima.'] },
  { id:13, cat:'doces',     name:'Bolo de Limão com Merengue',          emoji:'🍋', img:'https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?w=400&q=60', time:'1h 20min',
    ing:['3 ovos','2 xícaras de farinha','1 xícara de açúcar','Suco e raspa de 2 limões','½ xícara de óleo','1 xícara de leite','1 colher de fermento','3 claras + 6 colheres de açúcar para merengue'],
    steps:['Bata os ovos com açúcar, adicione limão, óleo e leite.','Incorpore a farinha e o fermento. Asse a 180°C por 35 min.','Prepare a calda: aqueça suco de limão com açúcar.','Regue o bolo ainda quente com a calda.','Bata as claras com açúcar até ponto de neve firme.','Cubra o bolo com o merengue e doure no maçarico ou forno.'] },
  { id:14, cat:'doces',     name:'Bolo de Coco Delírio',                emoji:'🥥', img:'https://images.unsplash.com/photo-1535141192574-5d4897c12636?w=400&q=60', time:'1h',
    ing:['3 ovos','2 xícaras de farinha','1 xícara de açúcar','1 xícara de leite de coco','½ xícara de coco ralado','½ xícara de manteiga','1 colher de fermento'],
    steps:['Bata a manteiga com açúcar, adicione os ovos.','Alterne farinha e leite de coco. Adicione o coco ralado.','Asse a 180°C por 35 minutos.','Regue com calda de leite de coco adoçado.','Cubra com coco ralado tostado.'] },
  { id:15, cat:'doces',     name:'Bolo de Maracujá com Cobertura',      emoji:'🌻', img:'https://images.unsplash.com/photo-1602351447937-745cb720612f?w=400&q=60', time:'1h',
    ing:['4 ovos','2 xícaras de farinha','1½ xícara de açúcar','½ xícara de suco de maracujá','½ xícara de óleo','1 colher de fermento','1 lata de leite condensado + ½ xícara suco maracujá para cobertura'],
    steps:['Bata tudo no liquidificador exceto o fermento.','Adicione o fermento e misture com colher.','Asse a 180°C por 40 minutos.','Prepare a cobertura aquecendo leite condensado com suco de maracujá.','Fure o bolo e regue com a cobertura quente.'] },
  { id:16, cat:'doces',     name:'Bolo Pão de Mel Caseiro',             emoji:'🍯', img:'https://images.unsplash.com/photo-1606890658317-7d14490b76fd?w=400&q=60', time:'50 min',
    ing:['2 ovos','1 xícara de mel','½ xícara de açúcar mascavo','2 xícaras de farinha','1 xícara de leite','1 colher de canela','1 colher de cravo em pó','1 colher de fermento','200g de chocolate meio amargo para cobertura'],
    steps:['Misture ovos, mel e açúcar mascavo.','Adicione o leite e as especiarias.','Incorpore a farinha e o fermento.','Asse a 170°C por 30 minutos.','Derreta o chocolate e cubra o bolo frio.'] },

  // ─── CHOCOLATE ───
  { id:17, cat:'chocolate', name:'Bolo de Chocolate com Brigadeiro',    emoji:'🍫', img:'https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=400&q=60', time:'1h 20min',
    ing:['3 ovos','2 xícaras de farinha','1½ xícara de açúcar','½ xícara de cacau em pó','1 xícara de leite','½ xícara de óleo','1 colher de fermento','1 lata de leite condensado + 4 col. sopa cacau + 1 col. manteiga'],
    steps:['Misture todos os ingredientes do bolo e asse a 180°C por 40 minutos.','Prepare o brigadeiro: cozinhe leite condensado, cacau e manteiga.','Espere o bolo esfriar completamente.','Cubra com o brigadeiro ainda morno.','Decore com granulado ao chocolate.'] },
  { id:18, cat:'chocolate', name:'Bolo Vulcão de Chocolate',            emoji:'🌋', img:'https://images.unsplash.com/photo-1606313564200-e75d5e30476c?w=400&q=60', time:'30 min',
    ing:['200g de chocolate meio amargo','150g de manteiga','4 ovos + 2 gemas','½ xícara de açúcar','3 colheres de farinha'],
    steps:['Derreta o chocolate com a manteiga em banho-maria.','Bata os ovos, gemas e açúcar até espumar.','Misture o chocolate derretido.','Incorpore a farinha delicadamente.','Distribua em forminhas untadas e refrigere por 30 minutos.','Asse a 220°C por apenas 8–10 minutos. Sirva imediatamente.'] },
  { id:19, cat:'chocolate', name:'Bolo de Chocolate com Nutella',       emoji:'🍫', img:'https://images.unsplash.com/photo-1571115177098-24ec42ed204d?w=400&q=60', time:'1h 10min',
    ing:['3 ovos','2 xícaras de farinha','1 xícara de açúcar','½ xícara de cacau','1 xícara de leite quente','½ xícara de óleo','1 colher de fermento','300g de Nutella para recheio e cobertura'],
    steps:['Bata ovos, açúcar e óleo. Adicione leite quente com cacau dissolvido.','Acrescente farinha e fermento. Asse a 180°C por 40 minutos.','Corte o bolo ao meio.','Espalhe Nutella generosamente no recheio.','Cubra com mais Nutella ligeiramente aquecida.'] },
  { id:20, cat:'chocolate', name:'Torta Mousse de Chocolate',           emoji:'🍮', img:'https://images.unsplash.com/photo-1571506165871-ee72a35bc9d4?w=400&q=60', time:'2h (geladeira)',
    ing:['200g de biscoito de chocolate triturado','80g de manteiga','300g de chocolate meio amargo','4 ovos separados','3 colheres de açúcar','1 caixinha de creme de leite'],
    steps:['Misture biscoito e manteiga. Forre a forma. Leve à geladeira.','Derreta o chocolate. Misture as gemas e o creme de leite.','Bata as claras em neve com açúcar.','Incorpore delicadamente as claras ao chocolate.','Despeje sobre a base. Refrigere por no mínimo 4 horas.'] },
  { id:21, cat:'chocolate', name:'Bolo de Chocolate com Laranja',       emoji:'🍊', img:'https://images.unsplash.com/photo-1602351447937-745cb720612f?w=400&q=60', time:'1h',
    ing:['3 ovos','2 xícaras de farinha','1 xícara de açúcar','½ xícara de cacau','Suco de 2 laranjas','Raspa de 1 laranja','½ xícara de óleo','1 colher de fermento'],
    steps:['Bata os ovos com açúcar até espumar.','Adicione o suco e as raspas de laranja e o óleo.','Incorpore a farinha e o cacau.','Adicione o fermento e misture levemente.','Asse a 180°C por 40 minutos.','Cubra com ganache de chocolate com raspas de laranja.'] },
  { id:22, cat:'chocolate', name:'Brownie Bolo Denso de Chocolate',     emoji:'🟫', img:'https://images.unsplash.com/photo-1606890658317-7d14490b76fd?w=400&q=60', time:'45 min',
    ing:['200g de chocolate 70%','120g de manteiga','3 ovos','1 xícara de açúcar','¾ xícara de farinha','1 colher de cacau','100g de nozes picadas'],
    steps:['Derreta chocolate com manteiga.','Bata ovos com açúcar. Misture com o chocolate.','Adicione farinha, cacau e nozes.','Asse em forma baixa a 180°C por 25–30 minutos.','Deixe firmar antes de cortar.'] },
  { id:23, cat:'chocolate', name:'Bolo Zero Açúcar de Chocolate',       emoji:'💪', img:'https://images.unsplash.com/photo-1565958011703-44f9829ba187?w=400&q=60', time:'50 min',
    ing:['3 ovos','1½ xícara de farinha integral','½ xícara de cacau 100%','½ xícara de eritritol','1 xícara de leite','½ xícara de óleo de coco','1 colher de fermento'],
    steps:['Misture os ingredientes secos.','Bata os ovos com óleo de coco e leite.','Junte tudo até homogeneizar.','Asse a 180°C por 35–40 minutos.'] },
  { id:24, cat:'chocolate', name:'Bolo Crunch de Chocolate',            emoji:'✨', img:'https://images.unsplash.com/photo-1621303837174-89787a7d4729?w=400&q=60', time:'1h 30min',
    ing:['3 ovos','1½ xícara de farinha','1 xícara de açúcar','½ xícara de cacau','¾ xícara de leite','½ xícara de óleo','1 colher de fermento','1 xícara de chocolate crunch'],
    steps:['Prepare a massa: misture tudo e asse a 180°C por 35 minutos.','Deixe esfriar e recheie com ganache de chocolate.','Cubra com ganache por fora.','Finalize com chocolate crunch por toda a superfície.'] },

  // ─── CASEIROS ───
  { id:25, cat:'caseiros',  name:'Bolo de Fubá com Erva-doce',          emoji:'🌾', img:'https://images.unsplash.com/photo-1559620192-032c4bc4674e?w=400&q=60', time:'55 min',
    ing:['2 xícaras de fubá','1 xícara de farinha de trigo','3 ovos','1 xícara de açúcar','1 xícara de leite','½ xícara de óleo','1 colher de sopa de erva-doce','1 colher de sopa de fermento'],
    steps:['Bata no liquidificador os ovos, açúcar, leite e óleo.','Em tigela, misture o fubá com a farinha.','Junte as misturas e adicione a erva-doce.','Por último, o fermento.','Asse em forma untada e enfarinhada a 180°C por 40 minutos.'] },
  { id:26, cat:'caseiros',  name:'Bolo Caseiro de Mandioca',            emoji:'🫚', img:'https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?w=400&q=60', time:'1h',
    ing:['500g de mandioca crua ralada','2 xícaras de açúcar','3 ovos','1 xícara de coco ralado','100g de manteiga derretida','1 colher de sopa de fermento'],
    steps:['Rale a mandioca e esprema bem para retirar o excesso de líquido.','Misture todos os ingredientes.','Despeje em forma untada.','Asse a 180°C por 45 minutos.','Espere esfriar para cortar.'] },
  { id:27, cat:'caseiros',  name:'Bolo de Milho Verde',                 emoji:'🌽', img:'https://images.unsplash.com/photo-1547826039-bfc35e0f1ea8?w=400&q=60', time:'50 min',
    ing:['1 lata de milho verde (com a água)','3 ovos','1 xícara de açúcar','½ xícara de óleo','1 xícara de fubá','1 colher de sopa de fermento','100g de queijo minas (opcional)'],
    steps:['Bata no liquidificador o milho, ovos, açúcar e óleo.','Adicione o fubá e bata mais um pouco.','Adicione o queijo ralado se desejar.','Adicione o fermento e misture com colher.','Asse a 200°C por 35–40 minutos.'] },
  { id:28, cat:'caseiros',  name:'Bolo de Cenoura com Cobertura',       emoji:'🥕', img:'https://images.unsplash.com/photo-1571115177098-24ec42ed204d?w=400&q=60', time:'1h',
    ing:['3 cenouras médias','3 ovos','1½ xícara de açúcar','½ xícara de óleo','2 xícaras de farinha','1 colher de fermento','4 col. sopa cacau + 4 col. sopa açúcar + 2 col. leite para cobertura'],
    steps:['Bata no liquidificador as cenouras, ovos e óleo.','Transfira para tigela. Adicione açúcar e farinha.','Por último, o fermento.','Asse a 180°C por 40 minutos.','Prepare a cobertura: cozinhe cacau, açúcar e leite até engrossar.','Cubra o bolo ainda quente.'] },
  { id:29, cat:'caseiros',  name:'Bolo de Banana com Canela',           emoji:'🍌', img:'https://images.unsplash.com/photo-1568571780765-9276df3f6c2e?w=400&q=60', time:'1h',
    ing:['4 bananas maduras','3 ovos','1½ xícara de açúcar','½ xícara de manteiga','2 xícaras de farinha','1 colher de canela','1 colher de fermento','Rodelas de banana para decorar'],
    steps:['Amasse as bananas. Bata com manteiga e açúcar.','Adicione os ovos um a um.','Incorpore farinha, canela e fermento.','Despeje na forma, arrume rodelas de banana por cima.','Polvilhe açúcar com canela.','Asse a 180°C por 45 minutos.'] },
  { id:30, cat:'caseiros',  name:'Bolo Inglês com Passas',              emoji:'☕', img:'https://images.unsplash.com/photo-1551024601-bec78aea704b?w=400&q=60', time:'1h 20min',
    ing:['200g de manteiga','1½ xícara de açúcar','4 ovos','2½ xícaras de farinha','1 xícara de leite','1 xícara de uvas-passas','1 colher de baunilha','1 colher de fermento'],
    steps:['Passe as passas na farinha para não afundarem.','Bata manteiga com açúcar até obter creme claro.','Adicione os ovos um a um.','Alterne farinha e leite. Adicione baunilha.','Incorpore as passas e o fermento.','Asse a 170°C por 50–60 minutos.'] },
  { id:31, cat:'caseiros',  name:'Bolo de Laranja Cremoso',             emoji:'🍊', img:'https://images.unsplash.com/photo-1535141192574-5d4897c12636?w=400&q=60', time:'55 min',
    ing:['3 ovos','1½ xícara de açúcar','Suco de 2 laranjas','Raspa de 2 laranjas','½ xícara de óleo','2 xícaras de farinha','1 colher de fermento'],
    steps:['Bata os ovos com açúcar.','Adicione o óleo, o suco e as raspas de laranja.','Incorpore a farinha e o fermento.','Asse a 180°C por 40 minutos.','Regue com calda de laranja (suco + açúcar) enquanto quente.'] },
  { id:32, cat:'caseiros',  name:'Bolo de Natal com Frutas',            emoji:'🎄', img:'https://images.unsplash.com/photo-1606890658317-7d14490b76fd?w=400&q=60', time:'2h',
    ing:['200g de frutas cristalizadas','100g de uvas-passas','3 ovos','1 xícara de açúcar mascavo','½ xícara de manteiga','2 xícaras de farinha','½ xícara de vinho tinto','Canela, cravo e noz-moscada','1 colher de fermento'],
    steps:['Marine as frutas no vinho por pelo menos 1 hora.','Bata manteiga com açúcar. Adicione os ovos.','Incorpore a farinha alternando com as especiarias.','Adicione as frutas marinadas.','Asse a 160°C por 1 hora e meia.'] },
];

// ─── LABELS E BADGES ───
const catLabels = {
  all:       { text: 'Todas as receitas' },
  fitness:   { text: 'Bolos Fitness'     },
  doces:     { text: 'Bolos Doces'       },
  chocolate: { text: 'Bolos de Chocolate'},
  caseiros:  { text: 'Bolos Caseiros'    },
};
const catBadges = { fitness:'Fitness', doces:'Doce', chocolate:'Chocolate', caseiros:'Caseiro' };

let curCat = 'all';

// ─── DRAWER ───
function toggleDrawer() {
  document.getElementById('drawer').classList.toggle('show');
  document.getElementById('overlay').classList.toggle('show');
}

// ─── FILTER ───
function filterCat(cat) {
  curCat = cat;
  document.querySelectorAll('.pill').forEach(p =>
    p.classList.toggle('active', p.dataset.cat === cat)
  );
  document.getElementById('heading-text').textContent = catLabels[cat].text;
  const list = cat === 'all' ? RECIPES : RECIPES.filter(r => r.cat === cat);
  document.getElementById('heading-count').textContent = list.length + ' receitas';
  renderCards(list);
}

// ─── RENDER CARDS ───
function renderCards(list) {
  const grid = document.getElementById('grid');
  grid.innerHTML = '';
  list.forEach((r, i) => {
    const card = document.createElement('div');
    card.className = 'recipe-card';
    card.style.animationDelay = (i * 0.05) + 's';
    // Só as 4 primeiras imagens carregam de imediato; o resto é lazy
    const loadingAttr = i < 4 ? 'eager' : 'lazy';
    card.innerHTML = `
      <div class="card-thumb">
        <img src="${r.img}" alt="${r.name}" loading="${loadingAttr}" decoding="async"
             onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
        <div class="card-thumb-emoji" style="display:none">${r.emoji}</div>
        <span class="card-badge">${catBadges[r.cat]}</span>
        <span class="card-num">#${r.id}</span>
      </div>
      <div class="card-body">
        <p class="card-name">${r.name}</p>
        <p class="card-time">${r.time}</p>
        <button class="card-btn" onclick="openRecipe(${r.id})">ver a receita</button>
      </div>
    `;
    grid.appendChild(card);
  });
}

// ─── OPEN DETAIL ───
function openRecipe(id) {
  const r = RECIPES.find(x => x.id === id);
  if (!r) return;

  const img   = document.getElementById('d-img');
  const emoji = document.getElementById('d-emoji');

  img.src = r.img.replace('w=400&q=60', 'w=800&q=75'); // detalhe usa resolução maior
  img.style.display = 'block';
  emoji.style.display = 'none';
  img.onerror = () => {
    img.style.display  = 'none';
    emoji.style.display = 'flex';
    emoji.textContent   = r.emoji;
  };

  document.getElementById('d-name').textContent = r.name;
  document.getElementById('d-time').textContent = '◷ ' + r.time;

  document.getElementById('d-ings').innerHTML =
    r.ing.map(i => `<li><span class="ing-dot"></span>${i}</li>`).join('');

  document.getElementById('d-steps').innerHTML =
    r.steps.map((s, i) =>
      `<li><span class="step-num">${i + 1}</span><span>${s}</span></li>`
    ).join('');

  document.getElementById('page-home').style.display   = 'none';
  document.getElementById('page-detail').style.display = 'block';
  window.scrollTo(0, 0);
}

// ─── GO HOME ───
function goHome() {
  document.getElementById('page-home').style.display   = 'block';
  document.getElementById('page-detail').style.display = 'none';
  window.scrollTo(0, 0);
}

// ─── INIT ───
window.addEventListener('DOMContentLoaded', () => {
  filterCat('all');

  const ls = document.getElementById('loading');

  const showApp = () => {
    ls.classList.add('out');
    setTimeout(() => {
      ls.style.display = 'none';
      document.getElementById('app').style.display = 'block';
    }, 400);
  };

  // Mostra o app em até 1s, sem depender de fontes externas
  setTimeout(showApp, 800);
});