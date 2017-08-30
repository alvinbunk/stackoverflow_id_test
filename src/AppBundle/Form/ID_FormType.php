<?php
//	src/AppBundle/Form/ID_FormType.php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ID_FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
	{
        $builder
            ->add('referred', TextType::class, array(
					'mapped' => true,
					'label' => 'Enter Referred by:',
					'label_attr' => array(
							'id' => 'referred_label',
							//'style' => 'display:none',
					),
					'attr' => array(
							//'style' => 'display:none',
							'id' => 'referred',
							'size' => 8,
					),
			))
		;
    }
}