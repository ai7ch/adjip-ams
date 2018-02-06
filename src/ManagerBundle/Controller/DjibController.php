<?php 

	namespace ManagerBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Request;
	use ManagerBundle\Entity\Djiboutians;
	use ManagerBundle\Form\DjibType;

	/**
	* 
	*/
	class DjibController extends Controller{

		public function indexAction(){
			return $this->render("ManagerBundle:Djib:index.html.twig");
		}

		public function detailsAction($id){
			return $this->render("ManagerBundle:Djib:details.html.twig", [
				"id" => $id
			]);
		}

		public function addAction(){
			$djibEntities = new Djiboutians();

			$form = $this->createForm(new DjibType(), $djibEntities, [
				"action" => $this->generateUrl("djib_new"),
				"method" => "POST"
			]);

			$form->add("submit", "submit", [
				"label" => "Enregistrer"
			]);

			/**************************************
				Assign default value to 
				RegisteredDate & LastUpdate Fields
			***************************************/
			$form->get('registeredDate')->setData(new \DateTime);
			$form->get('lastUpdate')->setData(new \DateTime);

			return $this->render("ManagerBundle:Djib:add.html.twig", [
				"form" => $form->createView()
			]);
		}

		public function addNewAction(Request $request){

		}

		public function editAction($id){

		}

		public function editUpdateAction(Request $request, $id){

		}

		public function deleteAction(Request $request, $id){

		}

	}

 ?>