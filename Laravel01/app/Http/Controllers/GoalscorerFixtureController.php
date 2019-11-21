<?php

namespace App\Http\Controllers;

use App\goalscorer;

use App\Fixture;

use Illuminate\Http\Request;

class GoalscorerFixtureController extends Controller
{
    
    public function store(goalscorers $goalscorer)
    
    {
        
       $goalscorer->addFixture(request('fixture'));
       
        
        return back();     
    }
        
     
    public function update(Fixture $fixtures)
    {
        
      $fixtures->update([
      'completed' => request()->has('completed')
]);

return back();
    }
}
