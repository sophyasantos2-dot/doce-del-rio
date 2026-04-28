<?php
require_once 'service.php';
require_once 'model.php';

class MatriculaController {
    public function processarMatricula($dadosRequisicao) {
        try {
            // 1. Manda para o Service avaliar as regras
            $service = new MatriculaService();
            $dadosAprovados = $service->processarRegras($dadosRequisicao);

            // 2. Se o Service não lançou erro, instancia o Model
            $aluno = new AlunoModel();
            $aluno->setNome($dadosAprovados['nome']);
            $aluno->setIdade($dadosAprovados['idade']);
            $aluno->setCurso($dadosAprovados['curso']);
            
            // 3. Pede para salvar e exibe a tela de sucesso
            if ($aluno->save()) {
                echo "<h2>Sucesso! Aluno {$dadosAprovados['nome']} matriculado.</h2>";
                echo "<a href='/'>Fazer nova matrícula</a>";
            }

        } catch (Exception $e) {
            // Se o Service lançou um erro, cai aqui
            echo "<h2>Aviso de Regra de Negócio: " . $e->getMessage() . "</h2>";
            echo "<a href='/'>Voltar</a>";
        }
    }
}
?>

