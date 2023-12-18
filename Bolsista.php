<?php
require_once "Aluno.php";
class Bolsista extends Aluno
{
    private $bolsa;

    public function getBolsa()
    {
        return $this->bolsa;
    }

    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;
    }

    public function renovarBolsa()
    {
        echo "<p>Bolsa renovada.</p>";
    }

    // Sobrepondo o método da classe Aluno.
    public function pagarMensalidade()
    {
        echo "<p>Sobrepondo pagamento de mensalidade do bolsista $this->nome.</p>";
    }
}
