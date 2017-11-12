<?php
class adminController extends controller {

	function __construct()
	{
		$this->usuario = new Usuario();
		$this->categoria = new Categoria();
		$this->anuncio = new Anuncio();
		$this->tags = new Tag();
		$this->anunciosGaleria = new Categoria();

	}
	public function index() {

		if ($this->isauth()) {
			$this->loadTemplate('admin','admin.home', []);
		}else{
			$this->auth();
		}
		
	}

	public function register()
	{
		$dados = array();
		
		$this->loadView('admin.register', $dados);
	}

	public function createUser()
	{	
		$data = $_POST;

		$cadastro = $this->usuario->cadastrar($data);

		if ($cadastro) {
			$this->loadTemplate('admin','admin.home', []);
		}else{
			$dados = array(
				'erros' => 'Usuario já foi cadastrado',
			);
			$this->loadView('admin.register', $dados);
		}

	}

	public function login()
	{
		$dados = array();
		if ($this->isauth()) {
			header('Location: '.BASE_URL.'admin/');
		}else{
			$this->loadView('admin.login', $dados);
		}
		
	}

	public function loginuser()
	{
		$data = $_POST;

		$cadastro = $this->usuario->login($data['email'],$data['senha']);

		if ($cadastro) {
			header('Location: '.BASE_URL.'admin/');
		}else{
			$dados = array(
				'erros' => 'Dados incorretos',
			);
			$this->loadView('admin.login', $dados);
		}
	}

	public function logout()
	{	
		session_destroy();
		header('Location: '.BASE_URL.'admin/');
	}


	public function categorias()
 	{
 		if ($this->isauth()) {
 			$dados['categorias']  = $this->categoria->all();
			$this->loadTemplate('admin','admin.categoria.index', $dados);
		}else{
			$this->auth();
		}
 	}

	public function createCategoria()
 	{
 		$nome = $_POST['nome'];
 		$icon = $_FILES['icon'];
 		$this->categoria->create($nome,$icon);
		$data = $this->categoria->all();
		echo json_encode($data);
		exit;
 	}

 	public function anuncios()
 	{
 		if ($this->isauth()) {
 			$dados = [];
 			$dados['categorias']  = $this->categoria->all();
 			$dados['anuncios']  = $this->anuncio->all();
 			$dados['tags']  = $this->tags->all();
			$this->loadTemplate('admin','admin.anuncio.index', $dados);
		}else{
			$this->auth();
		}
 	}

	public function createAnuncio()
 	{
 		$titulo = $_POST['titulo'];
 		$usuario = $_SESSION['auth']['id'];
 		$categoria = $_POST['categoria'];
 		$descricao = $_POST['descricao'];
 		$valor = $_POST['valor'];
 		$estado = $_POST['estado'];
 		$this->anuncio->create($titulo,$usuario,$categoria,$descricao,$valor,$estado);
		$data = $this->anuncio->all();
		echo json_encode($data);
		exit;
 	}
	


}