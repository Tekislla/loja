<?php

class Conexao
{
    const SERVIDOR  = "localhost";
    const NOMEBANCO = "bd_loja_2info2";
    const USUARIO   = "root";
    const SENHA     = "root";

    public function getConexao()
    {
        $conexao = new PDO("mysql:host=" . self::SERVIDOR . ";dbname=" . self::NOMEBANCO , self::USUARIO, self::SENHA);

        //MOSTRAR OS ERROS OCORRIDOS NO BANCO
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conexao;
    }

}
//TESTE CONEXÃO

//$conexao = new Conexao();
//$conexao->getConexao();