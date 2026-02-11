Doce Guia: Plataforma de Receitas
Documento: DRF-001 Versão: 1.0 Status: Especificação Inicial Autor: Business Analyst (AI)

1. Contexto
Problema: A dificuldade de encontrar receitas de sobremesas confiáveis, organizadas e que possam ser filtradas pelos ingredientes disponíveis no momento.

Usuários:

Visitante: Navega pelas receitas, filtra por ingredientes, avalia e comenta de forma anônima.

Administrador: Responsável pela gestão completa das receitas, categorias e moderação de comentários.

Valor: Centralizar o conhecimento culinário de doces em uma interface intuitiva, facilitando a decisão do que cozinhar com base no que se tem em mãos.

2. Requisitos Funcionais (RF)
RF01 - Gestão de Receitas (CRUD)
Descrição: O Administrador deve poder cadastrar, ler, editar e excluir receitas. Regras:

Cada receita deve conter: Título, Descrição, Imagem, Tempo de Preparo, Rendimento, Ingredientes, Modo de Preparo e Dicas.

O sistema deve permitir o upload de múltiplas imagens por receita. Critério de Aceite:

[ ] Validar campos obrigatórios (Título e Modo de Preparo).

[ ] Garantir que apenas o Administrador autenticado acesse essas funções.

RF02 - Filtro por Ingredientes (Disponibilidade)
Descrição: O usuário seleciona ingredientes de uma lista e o sistema retorna receitas que os contenham. Regras:

A lista de ingredientes para seleção deve ser pré-definida pelo Admin.

A busca deve ser inclusiva (trazer receitas que contenham os itens selecionados + outros ingredientes extras). Critério de Aceite:

[ ] O filtro deve permitir seleção múltipla.

[ ] Exibir mensagem amigável caso nenhum resultado seja encontrado.

RF03 - Categorização Multicategoria
Descrição: O sistema deve permitir organizar receitas em categorias (ex: Tortas, Fit, Chocolate). Regras:

Uma única receita pode estar vinculada a várias categorias simultaneamente. Critério de Aceite:

[ ] Exibir as categorias como tags na página da receita.

RF04 - Avaliação e Comentários Anônimos
Descrição: Visitantes podem dar notas (estrelas) e escrever comentários sem necessidade de login. Regras:

Comentários ficam em status "Pendente" até a aprovação.

O sistema deve coletar o nome (opcional) e o texto do comentário. Critério de Aceite:

[ ] Impedir a exibição imediata de comentários não moderados.

RF05 - Moderação de Conteúdo
Descrição: Painel para o administrador aprovar ou reprovar comentários. Regras:

O administrador deve visualizar uma lista de comentários pendentes. Critério de Aceite:

[ ] Opção de "Aprovar" ou "Excluir" em lote ou individualmente.

RF06 - Versão para Impressão / PDF
Descrição: Botão na página da receita para gerar um arquivo PDF ou layout de impressão. Regras:

O layout deve ser limpo, focando em texto para facilitar a leitura física. Critério de Aceite:

[ ] O PDF deve conter o título, ingredientes e modo de preparo de forma legível.

3. Regras de Negócio (RN)
RN01: Apenas usuários administradores autenticados podem publicar receitas.

RN02: Um comentário só será visível ao público após a validação manual do administrador.

RN03: A lista de ingredientes do filtro "O que tenho em casa" deve ser alimentada dinamicamente com base nos ingredientes cadastrados nas receitas ativas.

4. Requisitos Não-Funcionais (RNF)
Usabilidade: A interface deve ser responsiva (funcionar bem em celulares e tablets).

Performance: O carregamento das imagens deve ser otimizado (ex: WebP) para não pesar a navegação.

Segurança: O painel administrativo deve ser protegido por autenticação forte e não ser indexável por motores de busca.

Confiabilidade: O sistema deve ter rotinas de backup do banco de dados de receitas.
