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
	public $dt_Nasc;
	public $rua;
	public $bairro;
	public $estado;
	public $CEP;
	public $complemento;
	public function __construct($nome, $CPF, $RG){
		$this-> nome = $nome;
		$this-> cpf = $CPF;
		$this-> rg = $RG;
	}
}

class carro{
	public $modelo;
	public $cor;
	public $ano;
	public $marca;
	public $chassi;
	private $proprietario;
	public $vel_max;
	public $vel_atual;
	public $nr_portas;
	public $tetosolar;
	public $cambio_aut;
	public $vol_combustivel;
}

//3. encapsulamento

	?>

</body>