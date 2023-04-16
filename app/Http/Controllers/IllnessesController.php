<?php

namespace App\Http\Controllers;
use App\Models\Illnesses;
use Illuminate\Http\Request;
class IllnessesController extends Controller {
  public function index()
  {
    $allillnes=  Illnesses::all();
      return $allillnes;
  }
  public function store(Request $request)
  {
      $request->validate([
          'name'=>'required'
      ]);
      Illnesses::create($request->all());
      return redirect()->route('illnesses.index');

  }
  public function edit($id)
  {
   $illedit =  Illnesses::find($id);
    return  $illedit;

  }

  public function update(Request $request,$id)
  {
      $request->validate([
          'name'=>'required'
      ]);
      $aa = Illnesses::findOrFail($id);
      $aa->name=$request->input('name');
      $aa->save();
  }


  public function destroy($id)
  {
      $deletedata=Illnesses::findorFail($id);
      $deletedata->delete();
  }

}

?>
