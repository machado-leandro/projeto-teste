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
	public function getProprietario(){
		return $this->proprietario;
}
	public function setProprietario($Proprietario){
		$this->proprietario=$proprietario;
}

//2. declare os segintes atributos
	private $nome;
	public function getNome(){
		return $this->nome;
	}
	public function setnome($nome){
		$this->nome=$nome;
	}
	
	private $CPF;
	public function getCPF(){
		return $this->cpf;
	}
	public function setCPF($CPF){
		$this->CPF = $CPF;
	}

	private $RG;
	public function getRG(){
		return $this->RG;
	}
	public function setRG($RG){
		$this->RG = $RG;
	}

	private $dt_Nasc;
	public function getdt_nasc(){
		return $this->dt_Nasc;
	}
	public function setdt_nasc($dt_Nasc){
		$this->dt_Nasc=$dt_Nasc;
	}

	private $rua;
	public function getRua(){
		return $this->rua;
	}
	public function setRua($rua){
		$this->rua=$rua;
	}

	private $bairro;
	public function getbairro(){
		return $this->bairro;
	}
	public function setbairro($bairro){
		$this->bairro=$bairro;
	}

	private $estado;
	public function getestado(){
		return $this->estado;
	}
	public function setestado($estado){
		$this->Estado=$estado;
	}

	private $CEP;
	public function getCEP(){
		return $this->CEP;
	}
	public function setCEP($CEP){
		$this->CEP=$CEP;
	}

	private $complemento;
	public function __construct($nome, $CPF, $RG){
		$this-> nome = $nome;
		$this-> cpf = $CPF;
		$this-> rg = $RG;
	}


}

class carro{
	private $modelo;
	public function getmodelo(){
		return $this->modelo;
	}
	public function setmodelo($modelo){
		$this->modelo=$modelo;
	}

	private $cor;
	public function getCor(){
		return $this->cor;
	}
	public function setCor($cor){
		$this->cor=$cor;
	}

	private $ano;
	public function getAno(){
		return $this->ano;
	}
	public function setAno($ano){
		$this->ano=$ano;
	}
	
	private $marca;
	public function getMarca(){
		return $this->marca;
	}
	public function setMarca($marca){
		$this->marca=$marca;
	}

	private $chassi;
	public function getChassi(){
		return $this->chassi;
	}
	public function setChassi($chassi){
		$this->Chassi=$chassi;
	}

	private $proprietario;
	public function getProprietario(){
		return $this->proprietario;
	}
	public function setProprietario($proprietario){
		$this->proprietario=$proprietario;
	}

	private $vel_max;
	public function getVel_max(){
		return $this->vel_max;
	}
	public function setVel_max($vel_max){
		$this->vel_max=$vel_max;
	}

	private $vel_atual;
	public function getVel_atual(){
		return $this->vel_atual;
	}
	public function setVel_atual($vel_atual){
		$this->vel_atual=$vel_atual;
	}

	private $nr_portas;
	public function setNr_portas(){
		return $this->nr_portas;
	}
	public function getNr_portas($nr_portas){
		$this->nr_portas=$nr_portas;
	}

	private $tetosolar;
	public function getTetosolar(){
		return $this->tetosolar;
	}
	public function setTetosolr($tetosolar) {
		$this->tetosolar=$tetosolar;
	}

	private $cambio_aut;
	public function getCambio_aut(){
		return $this->$cambio_aut;
	}
	public function setCambio_aut($cambio_aut){
		$this->cambio_aut=$cambio_aut;
	}

	private $vol_combustivel;
	public function getvol_Combustivel(){
		return $this->vol_combustivel;
	}
	public function setvol_Combustivel($vol_combustivel){
		$this->vol_combustivel=$vol_combustivel;
	}

}
?>


</body>