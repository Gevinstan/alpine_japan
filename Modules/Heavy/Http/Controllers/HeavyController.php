<?php

namespace Modules\Heavy\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Categories\Entities\ProductCategories;
use Modules\Heavy\Entities\Heavy;
use File;
use Modules\Brand\Entities\Brand;
use Modules\Models\Entities\ModelsCars;

class HeavyController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $heavies = Heavy::all();
        return view('heavy::index',compact('heavies'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $category=ProductCategories::get();
        $brands=Brand::get();
        $models=ModelsCars::get();
        return view('heavy::create',compact('category','brands','models'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $Heavy=new Heavy();
        $Heavy->category=$request->category;
        $model_image=$request->file('image');
        if(!empty($model_image)){
          $org_filename = $model_image->getClientOriginalName();
          $org_extension = $model_image->getClientOriginalExtension();
          $image_name = 'heavy-'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$org_extension;
          $org_path = public_path() . '/Heavy';
          File::isDirectory($org_path) or File::makeDirectory($org_path, 0777, true, true);
          $model_image->move($org_path, $image_name);
        } else {
            $image_name = '';
        }
        $Heavy->image=$image_name;
        $Heavy->title=$request->title;
        $Heavy->make=$request->maker;
        $model=ModelsCars::whereId($request->model)->value('model');
        if(!empty($model)){
            $Heavy->model=$model;
          } else {
              $notification= trans('translate.Model Not Found');
              $notification=array('messege'=>$notification,'alert-type'=>'error');
              return redirect()->route('admin.heavy.index',)->with($notification); 
          }
          $brand=Brand::whereId($request->brand)->value('slug');
          if(!empty($brand)){
            $Heavy->brand=$brand;
          } else {
              $notification= trans('translate.Brand Not Found');
              $notification=array('messege'=>$notification,'alert-type'=>'error');
              return redirect()->route('admin.heavy.index',)->with($notification); 
          }
     
        $Heavy->year_of_reg=$request->year_of_registration;
        // $Heavy->grade
        $Heavy->chassis=$request->chassis_number;
        $Heavy->serial=$request->serial_number;
        $Heavy->yom=$request->year_of_made;
        $Heavy->kms=$request->kilometers;
        $Heavy->hrs=$request->hours_work_engine;
        $Heavy->engine=$request->engine_type;
        $Heavy->transmission=$request->transmission_type;
        $Heavy->fuel=$request->fuel;
        $Heavy->dimensions=$request->dimensions;
        $Heavy->price=$request->price_dollar;
        $Heavy->price_ru=$request->price_rupees;
        $Heavy->price_jpy=$request->price_yen;
        $Heavy->sell_points=$request->sell_points;
        $Heavy->remarks=$request->remarks;
        $Heavy->is_active=$request->active == 'on' ? '1' : '0';
        $Heavy->is_ru_market=$request->russia_market == 'on' ? '1' : '0';
        $Heavy->is_na_market=$request->north_america_market == 'on' ? '1' : '0';
        $Heavy->hooks=$request->hooks;
        $Heavy->boom=$request->boom;
        $Heavy->jib=$request->jib;
        $Heavy->outrigger=$request->outrigger;
        $Heavy->save();
        $notification= trans('translate.Created Successfully');
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.heavy.index',)->with($notification);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('heavy::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $Heavy=Heavy::find($id);
        $category=ProductCategories::get();
        $brands=Brand::get();
        $models=ModelsCars::get();
        return view('heavy::edit',compact('Heavy','category','brands','models'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $Heavy=Heavy::find($id);
        $Heavy->category=$request->category;
        $model_image=$request->file('image');
        if(!empty($model_image)){
          $org_filename = $model_image->getClientOriginalName();
          $org_extension = $model_image->getClientOriginalExtension();
          $image_name = 'heavy-'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$org_extension;
          $org_path = public_path() . '/Heavy';
          File::isDirectory($org_path) or File::makeDirectory($org_path, 0777, true, true);
          $model_image->move($org_path, $image_name);
          $Heavy->image=$image_name;
        }
        $Heavy->title=$request->title;
        $Heavy->make=$request->maker;
        $Heavy->model=$request->model;
        $model=ModelsCars::whereId($request->model)->value('model');    
        if(!empty($model)){
            $Heavy->model=$model;
          } else {
              $notification= trans('translate.Model Not Found');
              $notification=array('messege'=>$notification,'alert-type'=>'error');
              return redirect()->route('admin.heavy.index',)->with($notification); 
          }
        $brand=Brand::whereId($request->brand)->value('slug');
        if(!empty($brand)){
          $Heavy->brand=$brand;
        } else {
            $notification= trans('translate.Brand Not Found');
            $notification=array('messege'=>$notification,'alert-type'=>'error');
            return redirect()->route('admin.heavy.index',)->with($notification); 
        }
        $Heavy->year_of_reg=$request->year_of_registration;
        // $Heavy->grade
        $Heavy->chassis=$request->chassis_number;
        $Heavy->serial=$request->serial_number;
        $Heavy->yom=$request->year_of_made;
        $Heavy->kms=$request->kilometers;
        $Heavy->hrs=$request->hours_work_engine;
        $Heavy->engine=$request->engine_type;
        $Heavy->transmission=$request->transmission_type;
        $Heavy->fuel=$request->fuel;
        $Heavy->dimensions=$request->dimensions;
        $Heavy->price=$request->price_dollar;
        $Heavy->price_ru=$request->price_rupees;
        $Heavy->price_jpy=$request->price_yen;
        $Heavy->sell_points=$request->sell_points;
        $Heavy->remarks=$request->remarks;
        $Heavy->is_active=$request->active == 'on' ? '1' : '0';
        $Heavy->is_ru_market=$request->russia_market == 'on' ? '1' : '0';
        $Heavy->is_na_market=$request->north_america_market == 'on' ? '1' : '0';
        $Heavy->hooks=$request->hooks;
        $Heavy->boom=$request->boom;
        $Heavy->jib=$request->jib;
        $Heavy->outrigger=$request->outrigger;
        $Heavy->save();
        $notification= trans('translate.Created Successfully');
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.heavy.index',)->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Heavy::find($id)?->delete();
        $notification= trans('translate.Deleted Successfully');
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.heavy.index',)->with($notification);
    }
    public function deleteHeavy(Request $request){
        $ids = $request->input('ids', []);
    
        // Validate input
        if (empty($ids)) {
            return response()->json(['success' => false, 'message' => 'No IDs provided.']);
        }
        
        // Delete records
        Heavy::whereIn('id', $ids)->delete();
    
        return response()->json(['success' => true, 'message' => 'Records deleted successfully.']);
    }
}
