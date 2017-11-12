<?php
class Usuario extends model {

	public function getTotalUsuarios() {
		$sql = $this->db->query("SELECT COUNT(*) as c FROM usuarios");
		$row = $sql->fetch();

		return $row['c'];
	}

	public function cadastrar($data) {
		$sql = $this->db->prepare("SELECT id FROM usuarios WHERE email = :email");
		$sql->bindValue(":email", $data['email']);
		$sql->execute();

		if($sql->rowCount() == 0) {

			$sql = $this->db->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha");
			$sql->bindValue(":nome", $data['nome']);
			$sql->bindValue(":email", $data['email']);
			$sql->bindValue(":senha", md5($data['senha']));
			$sql->execute();

			$_SESSION = array(
				'auth' => array(
					'id' => $dado['id'],
					'nome' => $dado['nome'],
					'email' => $dado['email'],
				)
			);

			return true;

			} 
		else {
			return false;
		}
	}

	public function login($email, $senha) {
		$sql = $this->db->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", md5($senha));
		$sql->execute();

		if($sql->rowCount() > 0) {
			$dado = $sql->fetch();

			$_SESSION = array(
				'auth' => array(
					'id' => $dado['id'],
					'nome' => $dado['nome'],
					'email' => $dado['email'],
				)
			);

		return true;
		} else {
			return false;
		}

	}

	














}
?>