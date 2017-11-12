<?php
class controller {

	public function loadView($viewName, $viewData = array()) {
		extract($viewData);
		$viewName = str_replace('.', '/', $viewName);
		require 'views/'.$viewName.'.php';
	}

	public function loadTemplate($template,$viewName, $viewData = array()) {
		require 'views/layouts/'.$template.'.php';
	}

	public function loadViewInTemplate($viewName, $viewData = array()) {
		extract($viewData);
		$viewName = str_replace('.', '/', $viewName);
		require 'views/'.$viewName.'.php';
	}

	public function asset($path)
	{
		echo BASE_URL.'app/'.$path;
	}

	public function url($url)
	{
		echo BASE_URL.$url;
	}

	public function auth()
	{
		if ($this->isAuth()) {
			return true;
		}else{
			header('Location: '.BASE_URL.'admin/login');
		}
	}

	public function isAuth($value='')
	{
		if (isset($_SESSION['auth'])) {
			return true;
		}else{
			return false;
			exit;	
		}
	}

	public function slug($title, $separator = '-')
    {
        // Convert all dashes/underscores into separator
        $flip = $separator == '-' ? '_' : '-';

        $title = preg_replace('!['.preg_quote($flip).']+!u', $separator, $title);

        // Remove all characters that are not the separator, letters, numbers, or whitespace.
        $title = preg_replace('![^'.preg_quote($separator).'\pL\pN\s]+!u', '', mb_strtolower($title));

        // Replace all separator characters and whitespace by a single separator
        $title = preg_replace('!['.preg_quote($separator).'\s]+!u', $separator, $title);

        return trim($title, $separator);
    }
}