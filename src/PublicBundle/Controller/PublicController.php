<?php 
	namespace PublicBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Request;

	/**
	* 
	*/
	class PublicController extends Controller{

		public function indexAction(){
			return $this->render("PublicBundle:Public:index.html.twig");
		}
	}
 ?>