<?php
namespace Tests\AppBundle\Form;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Component\Form\Test\TypeTestCase;

class UserTypeTest extends TypeTestCase
{
    public function testSubmitValidData()
    {
        $formData = [
            'username' => 'johndoe',
            'password' => '123',
            'email' => 'johndoe@gmail.com',
            'role' => User::ROLE_USER,
        ];
        
        $form = $this->factory->create(UserType::class);
        
        $form->submit($formData);
        $this->assertTrue($form->isSynchronized());
        
        $view = $form->createView();
        $children = $view->children;
        
        foreach(array_keys($formData) as $key) {
            $this->assertArrayHasKey($key, $children);
        }
        
    }
}