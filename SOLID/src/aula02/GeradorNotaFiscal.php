<?php

namespace Alura\Solid;

class GeradorNotaFiscal
{

    private $acoes;

    public function __construct() {
        $this->acoes = array();
    }

    public function addAcao(AcaoAposGerarNota $acao) {
        $this->acoes[]= $acao;
    }
    public function gera(Fatura $fatura) {

        $valor = $fatura->getValorMensal();

        $nf = new NotaFiscal($valor,$this->impostoSobreValor($valor));

        foreach($this->acoes as $acao) {
            $acao->executa($nf);
        }
        
    }

    private function impostoSobreValor($valor) {
        return $valor * 0.06;
    }
}