<?php

namespace Modules\Cars\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Categories\Entities\ProductCategories;
use Modules\Cars\Entities\Cars;
use File;
use Modules\Brand\Entities\Brand;
use Modules\Models\Entities\ModelsCars;
class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Cars::all();
        return view('cars::index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=ProductCategories::get();
        $brands=Brand::get();
        $models=ModelsCars::get();
        return view('cars::create')->with([
            'category' => $category,
            'brands' => $brands,
            'models'=>$models,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cars=new Cars();
        $cars->category=$request->category;
        $model_image=$request->file('image');
        if(!empty($model_image)){
          $org_filename = $model_image->getClientOriginalName();
          $org_extension = $model_image->getClientOriginalExtension();
          $image_name = 'cars-'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$org_extension;
          $org_path = public_path() . '/Cars';
          File::isDirectory($org_path) or File::makeDirectory($org_path, 0777, true, true);
          $model_image->move($org_path, $image_name);
        } else {
            $image_name = '';
        }
        $cars->image=$image_name;
        $cars->title=$request->title;
        // $cars->make=$request->maker;
        $model=ModelsCars::whereId($request->model)->value('model');
        if(!empty($model)){
            $cars->model=$model;
          } else {
              $notification= trans('translate.Model Not Found');
              $notification=array('messege'=>$notification,'alert-type'=>'error');
              return redirect()->route('admin.car.index',)->with($notification); 
          }
        $brand=Brand::whereId($request->brand)->value('slug');
        if(!empty($brand)){
          $cars->make=$brand;
        } else {
            $notification= trans('translate.Brand Not Found');
            $notification=array('messege'=>$notification,'alert-type'=>'error');
            return redirect()->route('admin.car.index',)->with($notification); 
        }
        $cars->grade=$request->grade;
        $cars->color=$request->color;
        $cars->int_col=$request->interial_color;
        $cars->year_of_reg=$request->year_of_registration;
        $cars->chassis=$request->chassis_number;
        // $cars->score=$request->score;
        $cars->yom=$request->year_of_made;
        $cars->kms=$request->kilometers;
        $cars->engine=$request->engine_captibility;
        $cars->engine_type=$request->engine_type;
        $cars->transmission=$request->transmission;
        $cars->fuel=$request->fuel;
        $cars->has_video=$request->video_link;
        $cars->has_video=$request->video_link;
        $cars->has_video=$request->video_link;
        $cars->inside=$request->inside;
        $cars->outside=$request->outside;
        // $cars->dimensions=$request->dimensions;
        $cars->price=$request->price_dollar;
        $cars->price_ru=$request->price_rupees;
        $cars->price_jpy=$request->price_yen;
        $cars->sell_points=$request->sell_points;
        $cars->is_active=$request->active == 'on' ? '1' : '0';
        $cars->is_ru_market=$request->russia_market == 'on' ? '1' : '0';
        $cars->is_na_market=$request->north_america_market == 'on' ? '1' : '0';
        $cars->abs=$request->abs == 'on' ? '1' : '0';
        $cars->aw=$request->aw == 'on' ? '1' : '0';
        $cars->pw=$request->pw_power_windows == 'on' ? '1' : '0';
        $cars->ps=$request->ps_power_steering == 'on' ? '1' : '0';
        $cars->ab=$request->ab_air_bag == 'on' ? '1' : '0';
        $cars->sr=$request->sr_sunroof == 'on' ? '1' : '0';
        $cars->save();
        $notification= trans('translate.Created Successfully');
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.car.index',)->with($notification);
    }

    public function storeCarComission(Request $request){
        Cars::where('is_active', 1)
        ->whereIn('id',$request->selectedIds)
        ->update(['commission_value' => $request->commission]);
        $notification= trans('translate.Success');
        $notification=array('message'=>$notification,'alert-type'=>'success');
        return response()->json(['success' => true, 'message' => 'Stored Successfully']);
    }
    public function newArrivalCars(Request $request){
        $test=Cars::where('is_active', 1)
        ->where('id',$request->selectedIds)
        ->update(['new_arrival' => $request->check]);
        $notification= trans('translate.Success');
        $notification=array('message'=>$notification,'alert-type'=>'success');
        return response()->json(['success' => true, 'message' => 'Stored Successfully']);
    }

    

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('cars::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cars=Cars::find($id);
        $category=ProductCategories::get();
        $brands=Brand::get();
        $models=ModelsCars::get();
        return view('cars::edit',compact('cars','category','brands','models'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $cars=Cars::find($id);
        $cars->category=$request->category;
        $model_image=$request->file('image');
        if(!empty($model_image)){
          $org_filename = $model_image->getClientOriginalName();
          $org_extension = $model_image->getClientOriginalExtension();
          $image_name = 'cars-'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$org_extension;
          $org_path = public_path() . '/Cars';
          File::isDirectory($org_path) or File::makeDirectory($org_path, 0777, true, true);
          $model_image->move($org_path, $image_name);
          $cars->image=$image_name;
        } 
        $cars->title=$request->title;   
        // $cars->make=$request->maker;
        $model=ModelsCars::whereId($request->model)->value('model');    
        if(!empty($model)){
            $cars->model=$model;
          } else {
              $notification= trans('translate.Model Not Found');
              $notification=array('messege'=>$notification,'alert-type'=>'error');
              return redirect()->route('admin.car.index',)->with($notification); 
          }
        $brand=Brand::whereId($request->brand)->value('slug');
        if(!empty($brand)){
          $cars->make=$brand;
        } else {
            $notification= trans('translate.Brand Not Found');
            $notification=array('messege'=>$notification,'alert-type'=>'error');
            return redirect()->route('admin.car.index',)->with($notification); 
        }
        $cars->grade=$request->grade;
        $cars->color=$request->color;
        $cars->int_col=$request->interial_color;
        $cars->year_of_reg=$request->year_of_registration;
        $cars->chassis=$request->chassis_number;
        $cars->score=$request->score;
        $cars->yom=$request->year_of_made;
        $cars->kms=$request->kilometers;
        $cars->engine=$request->engine_captibility;
        $cars->engine_type=$request->engine_type;
        $cars->transmission=$request->transmission_type;
        $cars->fuel=$request->fuel;
        $cars->has_video=$request->video_link;
        $cars->has_video=$request->video_link;
        $cars->has_video=$request->video_link;
        $cars->inside=$request->inside;
        $cars->outside=$request->outside;
        // $cars->dimensions=$request->dimensions;
        $cars->price=$request->price_dollar;
        $cars->price_ru=$request->price_rupees;
        $cars->price_jpy=$request->price_yen;
        $cars->sell_points=$request->sell_points;
        $cars->is_active=$request->active == 'on' ? '1' : '0';
        $cars->is_ru_market=$request->russia_market == 'on' ? '1' : '0';
        $cars->is_na_market=$request->north_america_market == 'on' ? '1' : '0';
        $cars->abs=$request->abs == 'on' ? '1' : '0';
        $cars->aw=$request->aw == 'on' ? '1' : '0';
        $cars->pw=$request->pw_power_windows == 'on' ? '1' : '0';
        $cars->ps=$request->ps_power_steering == 'on' ? '1' : '0';
        $cars->ab=$request->ab_air_bag == 'on' ? '1' : '0';
        $cars->sr=$request->sr_sunroof == 'on' ? '1' : '0';
        $cars->save();
        $notification= trans('translate.Created Successfully');
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.car.index',)->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Cars::find($id)?->delete();
        $notification= trans('translate.Deleted Successfully');
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.car.index',)->with($notification);
    }
    public function deleteCar(Request $request){
        $ids = $request->input('ids', []);
    
        // Validate input
        if (empty($ids)) {
            return response()->json(['success' => false, 'message' => 'No IDs provided.']);
        }
        
        // Delete records
        Cars::whereIn('id', $ids)->delete();
    
        return response()->json(['success' => true, 'message' => 'Records deleted successfully.']);
    }
}
