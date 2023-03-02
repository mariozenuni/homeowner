<?php

namespace Tests\Feature;
// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Http\Controllers\Imports\ImportsController;
use Tests\TestCase;

class ImportTest extends TestCase
{
    /**
     * A basic test constroller has import action.
     */
    public function testImportControllerHasImportAction(): void
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/import');

        $response->assertStatus(200);
    }
     /**
     * A basic test constroller return correct view import/index.blade.php
     */
    public function testIdexActionReturnCorrectimportView(): void
    {
        $this->withoutExceptionHandling();
        $response = $this->get(route('import.index'));
        $response->assertSuccessful();
        $response->assertViewIs('import.index');      
    }
    /**
     * A basic test constroller return correct view import/index.blade.php
     */
    public function testUploadCsvFile(): void
    {   
        
    
        $this->withoutExceptionHandling();
        $response =  $this->post('upload',$this->data());
           
     $response->assertOk();
     $person = Person::all();
     $this->assertCount(1,Person::all());
     //$this->assertInstanceOf(Carbon::class, $authors->first()->dob);
    $this->assertEquals($person,$this->data());

    }

public function data(){
        return [
          'title'=> 'Mr',
          'first_name' => 'John',
          'initial'=>null,
          'last_name'=>'Smith'
         ];
      }
    
}
