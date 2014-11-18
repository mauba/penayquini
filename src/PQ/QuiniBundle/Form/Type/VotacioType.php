<?php
namespace PQ\QuiniBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VotacioType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('resultat1', 'choice', array('choices' => array('1' => '1', '2' => 'X', '3' => '2',),	'expanded' => true, 'multiple' => false))
		->add('resultat2', 'choice', array('choices' => array('1' => '1', '2' => 'X', '3' => '2',),	'expanded' => true, 'multiple' => false))
		->add('resultat3', 'choice', array('choices' => array('1' => '1', '2' => 'X', '3' => '2',),	'expanded' => true, 'multiple' => false))
		->add('resultat4', 'choice', array('choices' => array('1' => '1', '2' => 'X', '3' => '2',),	'expanded' => true, 'multiple' => false))
		->add('resultat5', 'choice', array('choices' => array('1' => '1', '2' => 'X', '3' => '2',),	'expanded' => true, 'multiple' => false))
		->add('resultat6', 'choice', array('choices' => array('1' => '1', '2' => 'X', '3' => '2',),	'expanded' => true, 'multiple' => false))
		->add('resultat7', 'choice', array('choices' => array('1' => '1', '2' => 'X', '3' => '2',),	'expanded' => true, 'multiple' => false))
		->add('resultat8', 'choice', array('choices' => array('1' => '1', '2' => 'X', '3' => '2',),	'expanded' => true, 'multiple' => false))
		->add('resultat9', 'choice', array('choices' => array('1' => '1', '2' => 'X', '3' => '2',),	'expanded' => true, 'multiple' => false))
		->add('resultat10', 'choice', array('choices' => array('1' => '1', '2' => 'X', '3' => '2',),'expanded' => true, 'multiple' => false))
		->add('resultat11', 'choice', array('choices' => array('1' => '1', '2' => 'X', '3' => '2',),'expanded' => true, 'multiple' => false))
		->add('resultat12', 'choice', array('choices' => array('1' => '1', '2' => 'X', '3' => '2',),'expanded' => true, 'multiple' => false))
		->add('resultat13', 'choice', array('choices' => array('1' => '1', '2' => 'X', '3' => '2',),'expanded' => true, 'multiple' => false))
		->add('resultat14', 'choice', array('choices' => array('1' => '1', '2' => 'X', '3' => '2',),'expanded' => true, 'multiple' => false))
		->add('resultat15', 'choice', array('choices' => array('1' => '1', '2' => 'X', '3' => '2',),'expanded' => true, 'multiple' => false))
		->add('vota', 'submit');
	}

	public function getName()
	{
		return 'votacio';
	}
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
				'data_class' => 'PQ\QuiniBundle\Entity\Votacio'
		));
	}
	
}