<?php
namespace Tests\AppBundle\Entity;

use AppBundle\Entity\Task;
use AppBundle\Entity\User;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    public $task;
    
    public function setUp()
    {
        $this->task = new Task();
        $this->task->setTitle('This is a new task');
        $this->task->setContent('Put some content in it');
        $this->task->setCreatedAt(new \DateTime('now'));
    }
    
    public function testIsTaskHasIdNull(){
        $this->assertNull($this->task->getId());
    }
    
    public function testIsTaskHasTitle()
    {
        $this->assertNotEmpty($this->task->getTitle());
    }
    
    public function testIsTaskHasContent()
    {
        $this->assertNotEmpty($this->task->getContent());
    }
    
    public function testIsTaskHasCreatedAt()
    {
        $this->assertNotEmpty($this->task->getCreatedAt());
    }
    
    public function testIsTaskHasDone()
    {
        $this->task->toggle(true);
        $this->assertTrue($this->task->isDone());
    }
    
    public function testIsTaskBelongToUser()
    {
           $user = new User();
           $this->task->setUser($user);
           $this->assertInstanceOf(User::class, $this->task->getUser());
    }
    
}