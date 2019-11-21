<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    protected $guarded =[];
    public function goalscorer()
{
    
return $this->belongsTo(goalscorer::class);

}
}
