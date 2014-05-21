<?php
namespace PQ\QuiniBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class LoginType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('usuari', 'text')
		->add('contrasenya', 'password')
		->add('entra', 'submit');
	}

	public function getName()
	{
		return 'login';
	}
	
	public function getUsuari()
	{
		return '';
	}
	
	public function getContrasenya()
	{
		return '';
	}
	
	public function getEntra()
	{
		return '';
	}
	
}