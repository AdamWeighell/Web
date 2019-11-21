<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class goalscorer extends Model
{
    protected $guarded =[];
    


public function fixture()
{
  return $this->hasMany(Fixture::class);
}

public function addFixture($fixtures)
{
    
    Fixture::create([
    
    'goalscorers_id' => $goalscorer->id,
    
    'description' => request('description')
    
    ]);
}

    
}


