<?php
namespace App\Http\Controllers;

use App\Models\Illnesses;
use Exception;

use Faker\Provider\Base;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class IllnessesController extends Controller {


  public function index()
  {
    try{
      $allillnes=  Illnesses::all();
      return $allillnes;
    }catch (Exception $e){
      Log::error($e);
    }
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    try{

    }catch (Exception $e){
      Log::error($e);
    }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    try{
      $request->validate([
        'name'=>'required'
      ]);
      Illnesses::create($request->all());
      return redirect()->route('illnesses.index');
    }catch (Exception $e){
      Log::error($e);
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    try{

    }catch (Exception $e){
      Log::error($e);
    }
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    try{
      $illedit =  Illnesses::find($id);
      return  $illedit;
    }catch (Exception $e){
      Log::error($e);
    }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id)
  {
    try{
      $request->validate([
        'name'=>'required'
      ]);
      $aa = Illnesses::findOrFail($id);
      $aa->name=$request->input('name');
      $aa->save();
    }catch (Exception $e){
      Log::error($e);
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    try{
      $deletedata=Illnesses::findorFail($id);
      $deletedata->delete();
    }catch (Exception $e){
      Log::error($e);
    }
  }

}

?>
