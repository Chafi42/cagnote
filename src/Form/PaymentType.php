<?php

namespace App\Form;

use App\Entity\Participant;
use App\Entity\Payment;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PaymentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('amount')
            
            // ->add('createdAt')
            // ->add('updatedAt')
    //       ->add('participant', EntityType::class, [
    //   'class' => Participant::class,
    //         'choice_label' => 'name',
    //         'multiple' => true,
    //       ])
            ->add('oneParticipant', ParticipantType::class, [
                'data_class' => Participant::class
            ])
        ;
        
        
        }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Payment::class,
        ]);
    }
}
