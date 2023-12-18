<?php

abstract class Pessoa
{
    protected $nome;
    protected $idade;
    protected $sexo;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**A palavra final dentro de um método diz que o método não pode ser sobreposto
     * A palavra final dentro de uma classe diz que a classe não pode ter filhas.
     */
    public final function fazerAniversario()
    {
        $this->idade++;
    }
}
