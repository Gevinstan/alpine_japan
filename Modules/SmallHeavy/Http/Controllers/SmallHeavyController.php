<?php

namespace Modules\SmallHeavy\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Categories\Entities\ProductCategories;
use Modules\SmallHeavy\Entities\SmallHeavy;
use  Modules\SmallHeavy\Http\Requests\SmallHeavyRequest;
use File;

class SmallHeavyController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $smallHeavies = SmallHeavy::all();
        return view('smallheavy::index',compact('smallHeavies'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $category=ProductCategories::get();
        return view('smallheavy::create')->with('category',$category);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(SmallHeavyRequest $request)
    {

        $smallHeavy=new SmallHeavy();
        $smallHeavy->category=$request->category;
        $model_image=$request->file('image');
        if(!empty($model_image)){
          $org_filename = $model_image->getClientOriginalName();
          $org_extension = $model_image->getClientOriginalExtension();
          $image_name = 'small-heavy-'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$org_extension;
          $org_path = public_path() . '/Small-Heavy';
          File::isDirectory($org_path) or File::makeDirectory($org_path, 0777, true, true);
          $model_image->move($org_path, $image_name);
        } else {
            $image_name = '';
        }
        $smallHeavy->image=$image_name;
        $smallHeavy->title=$request->title;
        $smallHeavy->make=$request->maker;
        $smallHeavy->model=$request->model;
        $smallHeavy->year_of_reg=$request->year_of_registration;
        // $smallHeavy->grade
        $smallHeavy->chassis=$request->chassis_number;
        $smallHeavy->serial=$request->serial_number;
        $smallHeavy->yom=$request->year_of_made;
        $smallHeavy->kms=$request->kilometers;
        $smallHeavy->hrs=$request->hours_work_engine;
        $smallHeavy->engine=$request->engine_type;
        $smallHeavy->transmission=$request->transmission_type;
        $smallHeavy->fuel=$request->fuel;
        $smallHeavy->dimensions=$request->dimensions;
        $smallHeavy->price=$request->price_dollar;
        $smallHeavy->price_ru=$request->price_rupees;
        $smallHeavy->price_jpy=$request->price_yen;
        $smallHeavy->sell_points=$request->sell_points;
        $smallHeavy->is_active=$request->active == 'on' ? '1' : '0';
        $smallHeavy->is_ru_market=$request->russia_market == 'on' ? '1' : '0';
        $smallHeavy->is_na_market=$request->north_america_market == 'on' ? '1' : '0';
        $smallHeavy->hooks=$request->hooks;
        $smallHeavy->boom=$request->boom;
        $smallHeavy->jib=$request->jib;
        $smallHeavy->outrigger=$request->outrigger;
        $smallHeavy->save();
        $notification= trans('translate.Created Successfully');
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.small-heavy.index',)->with($notification);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('smallheavy::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $category=ProductCategories::get();
        $smallHeavy=SmallHeavy::find($id);
        return view('smallheavy::edit',compact('category','smallHeavy'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(SmallHeavyRequest $request, $id)
    {
        $smallHeavy=SmallHeavy::find($id);
        $smallHeavy->category=$request->category;
        $model_image=$request->file('image');
        if(!empty($model_image)){
          $org_filename = $model_image->getClientOriginalName();
          $org_extension = $model_image->getClientOriginalExtension();
          $image_name = 'small-heavy-'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$org_extension;
          $org_path = public_path() . '/Small-Heavy';
          File::isDirectory($org_path) or File::makeDirectory($org_path, 0777, true, true);
          $model_image->move($org_path, $image_name);
          $smallHeavy->image=$image_name;
        }
        $smallHeavy->title=$request->title;
        $smallHeavy->make=$request->maker;
        $smallHeavy->model=$request->model;
        $smallHeavy->year_of_reg=$request->year_of_registration;
        $smallHeavy->grade=$request->grade;
        $smallHeavy->chassis=$request->chassis_number;
        $smallHeavy->serial=$request->serial_number;
        $smallHeavy->yom=$request->year_of_made;
        $smallHeavy->kms=$request->kilometers;
        $smallHeavy->hrs=$request->hours_work_engine;
        $smallHeavy->engine=$request->engine_type;
        $smallHeavy->transmission=$request->transmission_type;
        $smallHeavy->fuel=$request->fuel;
        $smallHeavy->dimensions=$request->dimensions;
        $smallHeavy->price=$request->price_dollar;
        $smallHeavy->price_ru=$request->price_rupees;
        $smallHeavy->price_jpy=$request->price_yen;
        $smallHeavy->sell_points=$request->sell_points;
        $smallHeavy->is_active=$request->active == 'on' ? '1' : '0';
        $smallHeavy->is_ru_market=$request->russia_market == 'on' ? '1' : '0';
        $smallHeavy->is_na_market=$request->north_america_market == 'on' ? '1' : '0';
        $smallHeavy->hooks=$request->hooks;
        $smallHeavy->boom=$request->boom;
        $smallHeavy->jib=$request->jib;
        $smallHeavy->outrigger=$request->outrigger;
        $smallHeavy->save();
        $notification= trans('translate.Updated Successfully');
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.small-heavy.index',)->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        SmallHeavy::find($id)?->delete();
        $notification= trans('translate.Deleted Successfully');
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.small-heavy.index',)->with($notification);
    }

    public function deleteSmallHeavy(Request $request){
        $ids = $request->input('ids', []);
    
        // Validate input
        if (empty($ids)) {
            return response()->json(['success' => false, 'message' => 'No IDs provided.']);
        }
        
        // Delete records
        SmallHeavy::whereIn('id', $ids)->delete();
    
        return response()->json(['success' => true, 'message' => 'Records deleted successfully.']);
    }
}
