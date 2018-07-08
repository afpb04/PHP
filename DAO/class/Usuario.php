<?php 
class Usuario {
	private $idusuario;
	private $deslogin;
	private $dessenha;
    private $dtcadastro;
    
	public function getIdusuario(){
		return $this->idusuario;
	}
	public function setIdusuario($value){
		$this->idusuario = $value;
	}
	public function getDeslogin(){
		return $this->deslogin;
	}
	public function setDeslogin($value){
		$this->deslogin = $value;
	}
	public function getDessenha(){
		return $this->dessenha;
	}
	public function setDessenha($value){
		$this->dessenha = $value;
	}
	public function getDtcadastro(){
		return $this->dtcadastro;
	}
	public function setDtcadastro($value){
		$this->dtcadastro = $value;
	}
	public function loadById($id){
		$sql = new Sql();
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(

			":ID"=>$id

		));

		if (count($results) > 0) {
			$this->setData($results[0]);
		}
	}

	public function setData($data){
		$this->setIdusuario($data['idusuario']);
		$this->setDeslogin($data['deslogin']);
		$this->setDessenha($data['dessenha']);
		$this->setDtcadastro(new DateTime($data['dtcadastro']));

	}	

	public function __toString(){
		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")

		));

	}



} 	

 ?>