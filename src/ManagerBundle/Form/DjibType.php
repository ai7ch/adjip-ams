<?php 

	namespace ManagerBundle\Form;

	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilderInterface;
	use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
	use Symfony\Component\Form\Extension\Core\Type\HiddenType;
	use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
	use Symfony\Component\Form\Extension\Core\Type\FileType; //For Fileuploader
	use Symfony\Component\OptionsResolver\OptionsResolverInterface;

	/**
	* 
	*/
	class DjibType extends AbstractType
	{
		public function buildForm(FormBuilderInterface $builder, array $options){
			$builder->add("firstName")
					->add("lastName")
					->add("surname")
					->add("gender", ChoiceType::class, [
							"expanded" => true,
							"multiple" => false,
							"choices"  => [
								0  =>  "Femme",
								1  =>  "Homme"
							]
						])
					->add("houseNumber")
					->add("city")
					->add("zipCode")
					->add("country")
					->add("geoLocation")
					->add("email")
					->add("phoneMobile")
					->add("phoneLandline")
					->add("dateOfBirth", DateTimeType::class, [
							"widget" => "single_text",
							"format" => "yyyy-MM-dd"
						])
					->add("profession")
					->add("comment")
					->add("avatar", FileType::class)
					->add("registeredDate", DateTimeType::class, [
							"widget"	=>	"single_text",
							"format"	=>	"yyyy-MM-dd HH:mm:ss",
							"attr"	=>	[ "readonly" => true ]
						])
					->add("lastUpdate", DateTimeType::class, [
							"widget"	=>	"single_text",
							"format"	=>	"yyyy-MM-dd HH:mm:ss",
							"attr"	=>	["readonly" => true]
						]);
		}

		public function setDefaultOptions(OptionsResolverInterface $resolver){
			$resolver->setDefaults(array("data_class" => "ManagerBundle\Entity\Djiboutians"));
		}

		public function getName(){
			return "managerbundle_djiboutians";
		}

	}

?>