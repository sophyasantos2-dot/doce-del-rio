<?php
/**
 * Controlador de Matrícula
 * 
 * Responsabilidade: Orquestrar requisição → Service → View/Redirecionamento
 * 
 * REGRA FUNDAMENTAL: Controller recebe todas as dependências via construtor.
 * Controller NUNCA instancia suas dependências.
 * Controller contém apenas try-catch e chamada ao Service.
 */
class MatriculaController {
    private $matriculaService;

    /**
     * Construtor com Injeção de Dependência
     * 
     * @param MatriculaService $matriculaService
     */
    public function __construct(MatriculaService $matriculaService) {
        $this->matriculaService = $matriculaService;
    }

    /**
     * Processa a matrícula de um novo aluno
     * 
     * Fluxo simples:
     * 1. Sanitiza entrada via Middleware
     * 2. Tenta executar o Service
     * 3. Se sucesso, redireciona
     * 4. Se erro de negócio, exibe mensagem
     * 5. Se erro desconhecido, exibe erro genérico
     * 
     * @param array $dadosRequisicao Dados brutos do formulário
     */
    public function store($dadosRequisicao) {
        try {
            // Passo 1: Validar e sanitizar entrada
            $validacao = Middleware::validarEsanitizar($dadosRequisicao);
            
            if (!$validacao['valido']) {
                $this->renderView('matricula/form', [
                    'erros' => $validacao['erros']
                ]);
                return;
            }

            $dadosSanitizados = $validacao['dados'];

            // Passo 2: Tentar processar a matrícula
            $alunoId = $this->matriculaService->matricular($dadosSanitizados);

            // Passo 3: Se chegou aqui, foi sucesso!
            $this->renderView('matricula/sucesso', [
                'alunoId' => $alunoId,
                'nome' => $dadosSanitizados['nome']
            ]);

        } catch (BusinessRuleException $e) {
            // Passo 4: Erro de regra de negócio (esperado)
            $this->renderView('matricula/form', [
                'erros' => [$e->getMessage()]
            ]);

        } catch (Exception $e) {
            // Passo 5: Erro desconhecido (não esperado)
            // Em produção, logar este erro!
            $this->renderView('erro', [
                'mensagem' => 'Ocorreu um erro ao processar sua solicitação. Tente novamente mais tarde.'
            ]);
        }
    }

    /**
     * Exibe o formulário de matrícula
     */
    public function show() {
        $this->renderView('matricula/form', [
            'erros' => []
        ]);
    }

    /**
     * Lista todos os alunos
     */
    public function index() {
        try {
            $alunos = $this->matriculaService->listarAlunos();
            $this->renderView('matricula/listagem', [
                'alunos' => $alunos
            ]);
        } catch (Exception $e) {
            $this->renderView('erro', [
                'mensagem' => 'Erro ao listar alunos: ' . $e->getMessage()
            ]);
        }
    }

    /**
     * Renderiza uma view
     * 
     * @param string $view Caminho relativo da view (ex: 'matricula/form')
     * @param array $dados Dados para passar à view
     */
    private function renderView($view, $dados = []) {
        extract($dados);
        $viewPath = __DIR__ . '/../view/' . $view . '.php';
        
        if (!file_exists($viewPath)) {
            die("View não encontrada: " . $viewPath);
        }

        require $viewPath;
    }
}
?>

