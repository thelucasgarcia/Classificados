<?php 
/**
 * 
 */
 class Categoria extends model
 {
 	
 	public function create($nome , $icon = [])
 	{	

		$sql = $this->db->prepare("INSERT INTO categorias (nome,icon) values(:nome,:icon)");
		$sql->bindValue(":nome", $nome );
		$sql->bindValue(":icon", $icon['name']);
		if ($sql->execute()) {
			move_uploaded_file($icon['tmp_name'], 'app/storage/categorias/'.$icon['name']);
			return true;
		};


 	}

 	public function all()
 	{

		$sql = $this->db->query("SELECT * FROM categorias");

		if($sql->rowCount() > 0) {
			$categorias = $sql->fetchAll(PDO::FETCH_OBJ);
		}

		return $categorias;
 	}
 } 