<?php
namespace Tests\AppBundle\Form;

use AppBundle\Form\TaskType;
use Symfony\Component\Form\Test\TypeTestCase;

class TaskTypeTest extends TypeTestCase
{
    public function testSubmitValidData()
    {
        $formData = [
            'title' => 'une tâche',
            'content' => 'le contenu de ma tâche',
        ];
        
        $form = $this->factory->create(TaskType::class);
        
        $form->submit($formData);
        $this->assertTrue($form->isSynchronized());
        
        $view = $form->createView();
        $children = $view->children;
        
        foreach (array_keys($formData) as $key) {
            $this->assertArrayHasKey($key, $children);
        }
    }
}