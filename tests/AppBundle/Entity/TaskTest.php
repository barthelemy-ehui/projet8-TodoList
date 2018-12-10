<?php
namespace Tests\AppBundle\Entity;

use AppBundle\Entity\Task;
use AppBundle\Entity\User;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    public function testIsTaskBelongToUser()
    {
           $task = new Task();
           $user = new User();
           $task->setUser($user);
           
           $this->assertInstanceOf(User::class, $task->getUser());
    }
    
}