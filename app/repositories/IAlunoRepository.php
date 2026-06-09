<?php
/**
 * Interface que define o contrato para o Repositório de Alunos
 * 
 * Todo repositório que implementar esta interface DEVE ter estes métodos.
 * Isso permite desacoplamento entre a lógica de negócio e a persistência.
 */
interface IAlunoRepository {
    /**
     * Salva um novo aluno no banco de dados
     * 
     * @param AlunoModel $aluno
     * @return int ID do aluno inserido
     */
    public function save(AlunoModel $aluno);

    /**
     * Busca um aluno pelo ID
     * 
     * @param int $id
     * @return AlunoModel|null
     */
    public function find($id);

    /**
     * Busca todos os alunos
     * 
     * @return array
     */
    public function findAll();

    /**
     * Deleta um aluno pelo ID
     * 
     * @param int $id
     * @return bool
     */
    public function delete($id);

    /**
     * Busca alunos por um critério
     * 
     * @param string $campo
     * @param mixed $valor
     * @return array
     */
    public function findBy($campo, $valor);
}
