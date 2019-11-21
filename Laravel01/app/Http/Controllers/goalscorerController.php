<?php

namespace App\Http\Controllers;

use App\goalscorer;

use Illuminate\Http\Request;

class goalscorerController extends Controller
{
    public function index ()
    {
  
          $goalscorer= goalscorer::where('owner_id', auth()->id())->get();
          
        return view ('goalscorers/index', compact('goalscorer'));
    }
    
    public function create ()
    {
         return view ('goalscorers/create');
    }
     public function store ()
    {
      $atributes = request()->validate([
         'title' => ['required','min:3'],
         
         'description' => ['required','min:3']
         
          
       ]);
       
       $atributes['owner_id'] = auth()->id();
        
        Goalscorer::create($atributes);
                
        return redirect('/goalscorers');
         
    }
      public function show (Goalscorer $goalscorer)
    {
     
      if ($goalscorer->owner_id !== auth()->id()) {
          abort(403);
      }
      return view ('goalscorers/show', compact('goalscorer')); 
    }
      public function edit (Goalscorer $goalscorer)
    {
        
         return view ('goalscorers.edit',compact('goalscorer'));
    }
      public function update (Goalscorer $goalscorer)
    {
      $goalscorer->update(request(['title','description']));
      
      return redirect("/goalscorers");
    }
      public function destroy (Goalscorer $goalscorer)
    {
         $goalscorer->delete();
         return redirect("/goalscorers");
    }
}
