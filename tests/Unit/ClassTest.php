<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Repositories\ClassRepository;

class ClassTest extends TestCase
{
	
    /** @test */
    public function a_user_can_create_a_class()
    {
    	$faker = \Faker\Factory::create();
        $data = [
            'name' => $faker->name,
            'description' => $faker->word,            
        ];
      
        $classRepo = new ClassRepository();
        $class = $classRepo->store($data);
      
        $this->assertInstanceOf(\App\Models\SchoolClass::class, $class);
        $this->assertEquals($data['name'], $class->name);
        $this->assertEquals($data['description'], $class->description);
        
    }

    /** @test */
    public function a_user_can_view_all_the_classes()
    {
    	$this->actingAs(factory('App\Models\User')->create());
    	
        $class = factory('App\Models\SchoolClass')->make();

        $response = $this->get('/class/all');
        
        $response->assertSee($class->name);
    }

    /** @test */
	public function unauthorized_user_cannot_delete_the_class(){
	    
	    $this->actingAs(factory('App\Models\User')->create());
	    
	    $class = factory('App\Models\SchoolClass')->create();
	    
	    $response = $this->get('/class/'.$class->id);

	    
	}
}
