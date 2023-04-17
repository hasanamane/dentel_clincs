<?php
namespace App\Http\Controllers;

use App\Models\Cases;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Exception;

class CasesController extends Controller {

  /**
   * Display a listing of the resource.
   *
   *
   */
  public function index()
  {
    try{
      $allcase = Cases::all();
      return $allcase;
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
        'casename'=>'required',
      ]);
      Cases::create([
          'casename'=>$request->casename,
          'description'=>$request->description,
          'Time'=>$request->Time,
            'place'=>$request->place,
      ]);
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
      $editcase=Cases::find($id);
      return $editcase;
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
        'namecase'=>'required'
      ]);
      $aa = Cases::findOrFail($id);
      $aa->namecase=$request->input(' namecase');
      $aa->description=$request->input(' description');
      $aa->place=$request->input(' place');
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
      $deletecase=Cases::findorFail($id);
      $deletecase->delete();
    }catch (Exception $e){
      Log::error($e);
    }
  }

}
