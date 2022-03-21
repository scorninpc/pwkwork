<?php

namespace PWKWork;

/**
 * 
 */
class View extends \Smarty
{

	static $instance;
	protected $vars;
	protected $template_file;

	/**
	 * 
	 */
	public function __construct()
	{
		parent::__construct();

		// @todo Buscar configuração do arquivo de configuração
		$this->force_compile = TRUE;
		$this->debugging = FALSE;
		$this->caching = FALSE;
		$this->cache_lifetime = 3600;
		$this->compile_check = FALSE;

		$this->setTemplateDir(APPLICATION_PATH . "/Tmp/template_c");
		$this->setCompileDir(APPLICATION_PATH . "/Tmp/template_c");
		$this->setCacheDir(APPLICATION_PATH . "/Tmp/template_c");
	}

	/**
	 * 
	 */
	static public function getInstance()
	{
		if(!self::$instance) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * 
	 */
	public function getHtml($template, $data=[])
	{
		$this->assign($data);

		$html = $this->fetch($template);

		return $html;
	}

	/**
	 * 
	 */
	public function render()
	{
		$vars = $this->getVars();
		$template = $this->getTemplateFile();

		$html = $this->getHtml($template, $vars);

		return $html;
	}

	/**
	 * Recupera caminho do template
	 */
	public function getTemplateFile()
	{
		return $this->template_file;
	}

	/**
	 * Seta caminho do template
	 */
	public function setTemplateFile($template)
	{
		$this->template_file = $template;
	}

	/**
	 * Assina uma variavel pro template
	 */
	public function __set($name, $value)
	{
		$this->vars[$name] = $value;
	}

	/**
	 * Recupera uma variavel assinada
	 */
	public function __get($name)
	{
		return $this->vars[$name];
	}

	/**
	 * Recupera as variaveis assinadas
	 */
	public function getVars()
	{
		return $this->vars;
	}

	/**
	 * Assina uma variavel pro template
	 */
	// public function assign($name, $value=NULL, $nocache=FALSE)
	// {

	// 	var_dump($name);
	// 	$this->vars[$name] = $value;
	// }

}