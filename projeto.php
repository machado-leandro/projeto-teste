<!DOCTYPE html></DOCTYPE>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>projeto I</title>
</head>
<body>
	<?php
		/*
1. Implemente uma classe PROPRIETARIO
2. DECLARE os seguintes atributos(nome,cpf, dt nascimento, rua, bairro, cidade, cep, complemento)
3. faça o encapsulamento dos atributos da classe proprietario
4. os atributos nome, cpf e rg são obrigatorios (crie um construtor com esse paramentros)
5. Implemnte uma classe carro
6. declare os seguinte atributos na classe (carro): modelo, cor, ano, marca, chassi, proprietario, vel_max., vel_atual, nr.portas,
tetosolar (s/n), cambio aut(s/n), vol_combustivel
7. faça o encapsulamento da classe carro e seus atributos
*/
//1.implemente uma classe proprietario
class Proprietario{
//2. declare os segintes atributos
	private $nome;
	private $CPF;
	private $RG;
	private $dt_Nasc;
	private $rua;
	private $bairro;
	private $estado;
	private $CEP;
	private $complemento;
	private function __construct($nome, $CPF, $RG){
		$this-> nome = $nome;
		$this-> cpf = $CPF;
		$this-> rg = $RG;
	}
}

class carro{
	private $modelo;
	private $cor;
	private $ano;
	private $marca;
	private $chassi;
	private $proprietario;
	private $vel_max;
	private $vel_atual;
	private $nr_portas;
	private $tetosolar;
	private $cambio_aut;
	private $vol_combustivel;
}

//3. encapsulamento
function setProprietario($Proprietario){
	
}

function GetProprietario(){
	echo"proprietario é: {$this->Proprietario}";
}

?>


</body>