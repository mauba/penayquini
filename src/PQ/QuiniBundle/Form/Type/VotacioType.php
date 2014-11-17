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
		->add('resultat1', 'text')
		->add('resultat2', 'text')
		->add('resultat3', 'text')
		->add('resultat4', 'text')
		->add('resultat5', 'text')
		->add('resultat6', 'text')
		->add('resultat7', 'text')
		->add('resultat8', 'text')
		->add('resultat9', 'text')
		->add('resultat10', 'text')
		->add('resultat11', 'text')
		->add('resultat12', 'text')
		->add('resultat13', 'text')
		->add('resultat14', 'text')
		->add('resultat15', 'text')
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