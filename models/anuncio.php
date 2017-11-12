<?php 
/**
 * 
 */
 class Anuncio extends model
 {
 	
 	public function create($titulo,$usuario,$categoria,$descricao,$valor,$estado)
 	{	

		$sql = $this->db->prepare("INSERT INTO anuncios (titulo,id_usuario,id_categoria,descricao,valor,estado) values(:titulo,:id_usuario,:id_categoria,:descricao,:valor,:estado)");
		$sql->bindValue(":titulo", $titulo );
		$sql->bindValue(":id_usuario", $usuario);
		$sql->bindValue(":id_categoria", $categoria );
		$sql->bindValue(":descricao", $descricao );
		$sql->bindValue(":valor", $valor );
		$sql->bindValue(":estado", $estado );
		if ($sql->execute()) {
			return true;
		};


 	}

 	public function all()
 	{

		$sql = $this->db->query("SELECT * ,
			(select categorias.nome from categorias where categorias.id = anuncios.id_categoria) as categoria,
			(select usuarios.nome from usuarios where usuarios.id = anuncios.id_usuario) as usuario
			FROM anuncios");

		if($sql->rowCount() > 0) {
			$anuncios = $sql->fetchAll(PDO::FETCH_OBJ);
		}

		return $anuncios;
 	}
 } 