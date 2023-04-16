<?php
namespace App\Http\Controllers;

use App\Models\Cases;
use Illuminate\Http\Request;
class CasesController extends Controller {
  public function index()
  {
  $allcase = Cases::all();
  return $allcase;
  }
  public function create()
  {

  }
  public function store(Request $request)
  {
$request->validate([
    'casename'=>'required',
]);
Cases::create([
    'casename'=>$request->casename,
    'description'=>$request->description,
    'Time'=>$request->Time,
      'place'=>$request->place,
]);
  }


  public function edit($id)
  {
    $editcase=Cases::find($id);
    return $editcase;
  }
  public function update(Request $request, $id)
  {
      $request->validate([
          'namecase'=>'required'
      ]);
      $aa = Cases::findOrFail($id);
      $aa->namecase=$request->input(' namecase');
      $aa->description=$request->input(' description');
      $aa->place=$request->input(' place');
      $aa->save();
  }
  public function destroy($id)
  {
 $deletecase=Cases::findorFail($id);
      $deletecase->delete();
  }
  

}

?>
