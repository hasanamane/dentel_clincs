<?php
namespace App\Http\Controllers;

use App\Models\Illnesses;


use App\Models\Patients;

use App\Models\Users;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class PatientsController extends Controller {

  /**
   * Display a listing of the resource.
   *
   *
   */
  public function index(Request $request)
  {

    $patients=Patients::all();
    try{
        return $patients;
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
              'FullName'=>'required',
              'PhoneNumber'=>'required',
              'age'=>'required',
          ]);
          Patients::create([
              'FullName'=>$request->FullName,
              'PhoneNumber'=>$request->PhoneNumber,
              'age'=>$request->age,
              'id_user'=>$request->id_user,
              'id_case'=>$request->id_case,
              'id_illness'=>$request->id_illness,
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
          $editpatients=Patients::find($id);
          return $editpatients;
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
              'FullName'=>'required',
              'PhoneNumber'=>'required',
              'age'=>'required',
          ]);
        $updatepatients=Patients::findOrFail($id);
          $updatepatients->FullName=$request->input('FullName');
          $updatepatients->age=$request->input('age');
          $updatepatients->PhoneNumber=$request->input('PhoneNumber');
          $updatepatients->id_user=$request->input('id_user');
          $updatepatients->id_case=$request->input('id_case');
          $updatepatients->id_illness=$request->input('id_illness');
          $updatepatients->save();
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
          $deletecase=Patients::findorFail($id);
          $deletecase->delete();
      }catch (Exception $e){
          Log::error($e);
      }
  }

}
