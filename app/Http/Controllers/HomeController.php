<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Modules\Page\Entities\HomePage;
use Modules\Brand\Entities\Brand;
use Modules\Testimonial\Entities\Testimonial;
use Modules\Blog\Entities\Blog;
use Modules\Blog\Entities\BlogCategory;
use Modules\Blog\Entities\BlogComment;
use Modules\Car\Entities\Car;
use Modules\Car\Entities\CarGallery;
use Modules\Feature\Entities\Feature;
use Modules\GeneralSetting\Entities\SeoSetting;
use Modules\Page\Entities\CustomPage;
use Modules\Page\Entities\AboutUs;
use Modules\Page\Entities\ContactUs;
use Modules\GeneralSetting\Entities\Setting;
use Modules\GeneralSetting\Entities\EmailTemplate;
use Modules\Page\Entities\TermAndCondition;
use Modules\Page\Entities\PrivacyPolicy;
use Modules\Page\Entities\Faq;
use Modules\City\Entities\City;
use Modules\Language\Entities\Language;
use App\Models\User;
use App\Models\AdsBanner;
use App\Models\Review;
use Modules\ContactMessage\Http\Requests\ContactMessageRequest;
use Modules\ContactMessage\Emails\SendContactMessage;
use DB;

use Modules\Subscription\Entities\SubscriptionPlan;
use Modules\Currency\app\Models\MultiCurrency;
use Modules\Imports\Entities\CarDataJpOp;
use Modules\DeliveryCharges\Entities\DeliveryCharge;

use App\Helpers\MailHelper;

use Str, Mail, Hash, Auth, Session,Config,Artisan;

use App\Rules\Captcha;

class HomeController extends Controller
{

    public function getNumberFromUrl($url) {
        $parsed_url = parse_url($url);
        parse_str($parsed_url['query'], $query_params);
        return isset($query_params['number']) ? (int)$query_params['number'] : null;
    }

    public function index(Request $request){


        // echo json_encode(Session::get('front_lang'));die();
       
        Artisan::call('optimize:clear');
        $setting = Setting::select('selected_theme')->first();
        // if($setting->selected_theme == 'all_theme'){
        //     if($request->has('theme')){
        //         $theme = $request->theme;
        //         if($theme == 'one'){
        //             Session::put('selected_theme', 'theme_one');
        //         }elseif($theme == 'two'){
        //             Session::put('selected_theme', 'theme_two');
        //         }elseif($theme == 'three'){
        //             Session::put('selected_theme', 'theme_three');
        //         }else{
        //             if(!Session::has('selected_theme')){
        //                 Session::put('selected_theme', 'theme_one');
        //             }
        //         }
        //     }else{
        //         Session::put('selected_theme', 'theme_one');
        //     }
        // }else{
        //     if($setting->selected_theme == 'theme_one'){
        //         Session::put('selected_theme', 'theme_one');
        //     }elseif($setting->selected_theme == 'theme_two'){
        //         Session::put('selected_theme', 'theme_two');
        //     }elseif($setting->selected_theme == 'theme_three'){
        //         Session::put('selected_theme', 'theme_three');
        //     }
        // }
          Session::put('selected_theme', 'theme_three');

        $seo_setting = SeoSetting::where('id', 1)->first();

        $homepage = HomePage::with('front_translate')->first();

        $brands = Brand::where('status', 'enable')->get();

        $top_sells=CarDataJpOp::where('top_sell','1')->get()->take(10);

       
 

        $used_cars = Car::with('dealer', 'brand')->where(function ($query) {
            $query->where('expired_date', null)
                ->orWhere('expired_date', '>=', date('Y-m-d'));
        })->where(['condition' => 'Used', 'status' => 'enable', 'approved_by_admin' => 'approved'])->get()->take(8);

        $new_cars = Car::with('dealer', 'brand')->where(function ($query) {
            $query->where('expired_date', null)
                ->orWhere('expired_date', '>=', date('Y-m-d'));
        })->where(['condition' => 'New', 'status' => 'enable', 'approved_by_admin' => 'approved'])->get()->take(8);

        $featured_cars = Car::with('dealer', 'brand')->where(function ($query) {
            $query->where('expired_date', null)
                ->orWhere('expired_date', '>=', date('Y-m-d'));
        })->where(['is_featured' => 'enable', 'status' => 'enable', 'approved_by_admin' => 'approved'])->get()->take(6);

        $testimonials = Testimonial::where('status', 'active')->orderBy('id','desc')->get();

        $blogs = Blog::where('status', 1)->orderBy('id','desc')->get()->take(4);

        $dealers = User::where(['status' => 'enable' , 'is_banned' => 'no', 'is_dealer' => 1])->where('email_verified_at', '!=', null)->orderBy('id','desc')->select('id','name','username','designation','image','status','is_banned','is_dealer', 'address', 'email', 'phone')->paginate(12);

        $subscription_plans = SubscriptionPlan::orderBy('serial', 'asc')->where('status', 'active')->get();

        $home1_ads = AdsBanner::where('position_key', 'home1_featured_car_sidebar')->first();
        $home2_ads = AdsBanner::where('position_key', 'home2_brand_sidebar')->first();
        $home3_ads = AdsBanner::where('position_key', 'home3_featured_sidebar')->first();

        $brands = Brand::where('status', 'enable')->get();

        $cities = City::with('translate')->get();

        $selected_theme = Session::get('selected_theme');

        if ($selected_theme == 'theme_one'){
        
            return view('index', [
                'seo_setting' => $seo_setting,
                'homepage' => $homepage,
                'brands' => $brands,
                'cities' => $cities,
                'new_cars' => $new_cars,
                'used_cars' => $used_cars,
                'featured_cars' => $featured_cars,
                'dealers' => $dealers,
                'testimonials' => $testimonials,
                'blogs' => $blogs,
                'subscription_plans' => $subscription_plans,
                'home1_ads' => $home1_ads,
                'home2_ads' => $home2_ads,
                'home3_ads' => $home3_ads,

            ]);
        }elseif($selected_theme == 'theme_two'){
          
            return view('index2', [
                'seo_setting' => $seo_setting,
                'homepage' => $homepage,
                'brands' => $brands,
                'cities' => $cities,
                'new_cars' => $new_cars,
                'used_cars' => $used_cars,
                'featured_cars' => $featured_cars,
                'dealers' => $dealers,
                'testimonials' => $testimonials,
                'blogs' => $blogs,
                'subscription_plans' => $subscription_plans,
                'home1_ads' => $home1_ads,
                'home2_ads' => $home2_ads,
                'home3_ads' => $home3_ads,
            ]);
        }elseif($selected_theme == 'theme_three'){
            foreach($top_sells as $cars){
                  $last_image=$this->last_image($cars->pictures);
                    $top_cars[]=array(
                        'company_en'=>$cars->company_en,
                        'company'=>$cars->company,
                        'model_name'=>$cars->model_name,
                        'model_name_en'=>$cars->model_name_en,
                        'start_price'=>$cars->start_price,
                        'start_price_num'=>$cars->start_price_num,
                        'end_price'=>$cars->end_price,
                        'end_price_num'=>$cars->end_price_num,
                        'picture'=>$last_image[0],
                        'id'=>$cars->id,
                        'mileage'=>$cars->mileage,
                        'mileage_en'=>$cars->mileage_en,
                    );
                // }
           
            }
            $current_year=Date('Y');
            $new_arrivals=CarDataJpOp::where('model_year_en',$current_year)->get()->take(5);
    
            foreach($new_arrivals as $cars){
                $last_image=$this->last_image($cars->pictures);
                  $new_arrived_cars[]=array(
                      'company_en'=>$cars->company_en,
                      'company'=>$cars->company,
                      'model_name'=>$cars->model_name,
                      'model_name_en'=>$cars->model_name_en,
                      'start_price'=>$cars->start_price,
                      'start_price_num'=>$cars->start_price_num,
                      'end_price'=>$cars->end_price,
                      'end_price_num'=>$cars->end_price_num,
                      'picture'=>$last_image[0],
                      'id'=>$cars->id,
                      'mileage'=>$cars->mileage,
                      'mileage_en'=>$cars->mileage_en
                  );    
          }
      
            return view('index3', [
                'seo_setting' => $seo_setting,
                'homepage' => $homepage,
                'brands' => $brands,
                'cities' => $cities,
                'new_cars' => $new_cars,
                'used_cars' => $used_cars,
                'featured_cars' => $featured_cars,
                'dealers' => $dealers,
                'testimonials' => $testimonials,
                'blogs' => $blogs,
                'subscription_plans' => $subscription_plans,
                'home1_ads' => $home1_ads,
                'home2_ads' => $home2_ads,
                'home3_ads' => $home3_ads,
                'top_sells'=>$top_cars,
                'new_arrived_cars'=>$new_arrived_cars
            ]);
        }else{
         
            return view('index', [
                'seo_setting' => $seo_setting,
                'homepage' => $homepage,
                'brands' => $brands,
                'cities' => $cities,
                'new_cars' => $new_cars,
                'used_cars' => $used_cars,
                'featured_cars' => $featured_cars,
                'dealers' => $dealers,
                'testimonials' => $testimonials,
                'blogs' => $blogs,
                'subscription_plans' => $subscription_plans,
                'home1_ads' => $home1_ads,
                'home2_ads' => $home2_ads,
                'home3_ads' => $home3_ads,
            ]);
        }

    }


    public function last_image($picture){
        $picture_array = explode("#",$picture);
                if(count($picture_array) > 0){
                    $image_array = [];
                    foreach ($picture_array as $picture) {
                        $image_array[] = [
                            'url' => $picture,
                            'number' =>$this->getNumberFromUrl($picture)
                        ];
                    }
                    usort($image_array, function($a, $b) {
                        return $b['number'] - $a['number'];
                    });
                    $sorted_image_array = array_column($image_array, 'url');
                    return $sorted_image_array;
                }    
    }

    public function about_us(){

        $seo_setting = SeoSetting::where('id', 3)->first();

        $about_us = AboutUs::first();

        $brands = Brand::where('status', 'enable')->get();

        $homepage = HomePage::first();

        $testimonials = Testimonial::where('status', 'active')->orderBy('id','desc')->get();

        return view('about_us')->with([
            'seo_setting' => $seo_setting,
            'about_us' => $about_us,
            'brands' => $brands,
            'homepage' => $homepage,
            'testimonials' => $testimonials,
        ]);
    }


    public function contact_us(){
        $seo_setting = SeoSetting::where('id', 4)->first();

        $contact_us = ContactUs::first();

        return view('contact_us')->with([
            'seo_setting' => $seo_setting,
            'contact_us' => $contact_us,
        ]);
    }


    public function shipment(){
         $seo_setting = SeoSetting::where('id', 4)->first();
        return view('shipment')->with([
            'seo_setting' => $seo_setting,
        ]);
    }

    public function terms_conditions(){
        $seo_setting = SeoSetting::where('id', 6)->first();

        $terms_condition = TermAndCondition::where('lang_code', Session::get('front_lang'))->first();

        return view('terms_conditions')->with([
            'seo_setting' => $seo_setting,
            'terms_condition' => $terms_condition,
        ]);
    }

    public function privacy_policy(){
        $seo_setting = SeoSetting::where('id', 7)->first();

        $privacy_policy = PrivacyPolicy::where('lang_code', Session::get('front_lang'))->first();

        return view('privacy_policy')->with([
            'seo_setting' => $seo_setting,
            'privacy_policy' => $privacy_policy,
        ]);
    }

    public function faq(){
        $seo_setting = SeoSetting::where('id', 5)->first();

        $faqs = Faq::latest()->get();

        $homepage = HomePage::first();

        return view('faq')->with([
            'seo_setting' => $seo_setting,
            'faqs' => $faqs,
            'homepage' => $homepage,
        ]);
    }

    public function blogs(Request $request){

        $seo_setting = SeoSetting::where('id', 2)->first();

        $blogs = Blog::with('author')->orderBy('id','desc')->where('status', 1);

        if($request->category){
            $blog_category = BlogCategory::where('slug', $request->category)->first();
            $blogs = $blogs->where('blog_category_id', $blog_category->id);
        }

        if($request->search){
            $blogs = $blogs->whereHas('translations', function ($query) use ($request) {
                            $query->where('title', 'like', '%' . $request->search . '%')
                                ->orWhere('description', 'like', '%' . $request->search . '%');
                        })
                        ->orWhere(function ($query) use ($request) {
                            $query->whereJsonContains('tags', ['value' => $request->search]);
                        });
        }

        $blogs = $blogs->paginate(9);

        $popular_blogs = Blog::where('is_popular', 'yes')->where('status', 1)->orderBy('id','desc')->get();

        $categories = BlogCategory::where('status', 1)->get();

        return view('blog')->with([
            'seo_setting' => $seo_setting,
            'blogs' => $blogs,
            'popular_blogs' => $popular_blogs,
            'categories' => $categories,
        ]);
    }

    public function blog_show(Request $request, $slug){
        $blog = Blog::where('status', 1)->where(['slug' => $slug])->first();
        $blog->views += 1;
        $blog->save();

        $blog_comments = BlogComment::orderBy('id','desc')->where('blog_id', $blog->id)->where('status', 1)->get();

        $popular_blogs = Blog::where('is_popular', 'yes')->where('status', 1)->orderBy('id','desc')->get();

        $categories = BlogCategory::where('status', 1)->get();

        return view('blog_detail')->with([
            'blog' => $blog,
            'blog_comments' => $blog_comments,
            'popular_blogs' => $popular_blogs,
            'categories' => $categories,
        ]);
    }

    public function store_comment(Request $request){
        $rules = [
            'blog_id'=>'required',
            'name'=>'required',
            'email'=>'required',
            'comment'=>'required',
            'g-recaptcha-response'=>new Captcha()
        ];
        $customMessages = [
            'name.required' => trans('translate.Name is required'),
            'email.required' => trans('translate.Email is required'),
            'comment.required' => trans('translate.Comment is required')
        ];
        $this->validate($request, $rules,$customMessages);

        $blog_comment = new BlogComment();
        $blog_comment->blog_id = $request->blog_id;
        $blog_comment->name = $request->name;
        $blog_comment->email = $request->email;
        $blog_comment->comment = $request->comment;
        $blog_comment->save();

        $notification= trans('translate.Blog comment has submited');
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->back()->with($notification);
    }

    public function custom_page($slug){

        $custom_page = CustomPage::where('slug', $slug)->first();

        return view('custom_page')->with([
            'custom_page' => $custom_page,
        ]);
    }


    function getPriceRangestart($selectedRanges, $priceRanges) {
        $start_price_num = null;
        $end_price_num = null;
    
        foreach ($selectedRanges as $range) {
            if (isset($priceRanges[$range])) {
                $start = $priceRanges[$range]['start'];
                $end = $priceRanges[$range]['end'];
    
                // Set the overall start and end prices based on the selected ranges
                if ($start_price_num === null || $start < $start_price_num) {
                    $start_price_num = $start; // Update if it's lower
                }
                if ($end_price_num === null || $end > $end_price_num) {
                    $end_price_num = $end; // Update if it's higher
                }
            }
        }
    
        return ['start_price_num' => $start_price_num, 'end_price_num' => $end_price_num];
    }
    

    public function listings(Request $request){

        $seo_setting = SeoSetting::where('id', 10)->first();
    $brands = Brand::where('status', 'enable')->get();


    // Initialize the query for cars
    $carsQuery = CarDataJpOp::query();

    // Apply filters based on request parameters
    if ($request->location) {
        $carsQuery->where('city_id', $request->location);
    }


    if ($request->brand) {
        $brand_arr = array_filter($request->brand); // Filter out any empty values
        if ($brand_arr) {
            $carsQuery->whereIn('company_en', $brand_arr); 
        }    
    }
    if ($request->tranmission) {
        $transmission_arr = array_filter($request->transmission_arr); // Filter out any empty values
        if ($transmission_arr) {
            $carsQuery->whereIn('transmission_en', $transmission_arr); 
        }    
    }

    // if($request->year){
    //     $carsQuery->whereIn('model_year_en', $request->year); 
    // }

    if($request->price_range){
        $priceRanges = [
            "Under $5000" => ["start" => 0, "end" => 5000],
            "$5000 - $50000" => ["start" => 5000, "end" => 50000],
            "$50000 - $100000" => ["start" => 50000, "end" => 100000],
            "$100000 - $200000" => ["start" => 100000, "end" => 200000],
            "$200000 - $300000" => ["start" => 200000, "end" => 300000],
            "Above $300000" => ["start" => 300000, "end" => null] // Use PHP_INT_MAX for "Above"
        ];

        $result = $this->getPriceRangestart($request->price_range, $priceRanges);
      

  
        if ($result['start_price_num'] === null) {
            // Count for "Above" range
            $carsQuery = $carsQuery->where('start_price_num', '>', $result['start_price_num'])
                           ->orWhere('end_price_num', '>', $result['start_price_num']);
        } else {
            // Count for other ranges
            $carsQuery = $carsQuery->where(function ($q) use ($result) {
                $q->whereBetween('start_price_num', [$result['start_price_num'], $result['end_price_num']])
                  ->orWhereBetween('end_price_num', [$result['start_price_num'], $result['end_price_num']]);
            });
        }  
    }

    if ($request->scores_en) {
        $score_arr = array_filter($request->scores_en); // Filter out any empty values
        if ($score_arr) {
            $carsQuery->whereIn('scores_en', $score_arr); 
        }
    }



    if ($request->condition) {
        $carsQuery->whereIn('condition', $request->condition);
    }

    if ($request->purpose) {
        $purpose_arr = array_filter($request->purpose);
        if ($purpose_arr) {
            $carsQuery->whereIn('purpose', $purpose_arr);
        }
    }

    if ($request->features) {
        $carsQuery->whereJsonContains('features', $request->features);
    }

    if ($request->price_filter) {
        if ($request->price_filter === 'low_to_high') {
            $carsQuery->orderBy('regular_price', 'asc');
        } elseif ($request->price_filter === 'high_to_low') {
            $carsQuery->orderBy('regular_price', 'desc');
        }
    }

    if ($request->search) {
        $carsQuery->whereHas('front_translate', function ($query) use ($request) {
            $query->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');
        });
    }

    if ($request->sort_by) {
        switch ($request->sort_by) {
            case 'dsc_to_asc':
                $carsQuery->orderBy('title', 'desc');
                break;
            case 'asc_to_dsc':
                $carsQuery->orderBy('title', 'asc');
                break;
            case 'price_low_high':
                $carsQuery->orderBy('regular_price', 'asc');
                break;
            case 'price_high_low':
                $carsQuery->orderBy('regular_price', 'desc');
                break;
        }
    }

    // Pagination
    $cars = $carsQuery->paginate(12);

    // Transform cars into an array for the view
    $cars_array = $cars->map(function ($car) {
    $car_image=$this->last_image($car->pictures);
        return [
            'company_en' => $car->company_en,
            'company' => $car->company,
            'model_name' => $car->model_name,
            'model_name_en' => $car->model_name_en,
            'start_price' => $car->start_price,
            'start_price_num' => $car->start_price_num,
            'end_price' => $car->end_price,
            'end_price_num' => $car->end_price_num,
            'picture' =>$car_image[0],
            'id' => $car->id,
            'mileage' => $car->mileage,
            'mileage_en' => $car->mileage_en,
        ];
    });

    // Get additional data
    $listing_ads = AdsBanner::where('position_key', 'listing_page_sidebar')->first();
    $cities = City::with('translate')->get();
    $features = Feature::with('translate')->get();

    $brand_count = CarDataJpOp::selectRaw('company_en,company,COUNT(*) as count')
        ->groupBy('company_en')
        ->having('count', '>', 1)
        ->get();

    $transmission = CarDataJpOp::selectRaw('transmission_en, COUNT(*) as count')
        ->groupBy('transmission_en')
        ->having('count', '>', 1)
        ->get();

    $scores = CarDataJpOp::selectRaw('scores_en, COUNT(*) as count')
        ->groupBy('scores_en')
        ->having('count', '>', 1)
        ->get();


    // echo json_encode($scores);die();    

    $price_range = $this->getPriceRange();


    return view('listing', [
        'seo_setting' => $seo_setting,
        'brands' => $brands,
        'cities' => $cities,
        'features' => $features,
        'cars_array' => $cars_array,
        'listing_ads' => $listing_ads,
        'cars' => $cars,
        'brand_count' => $brand_count,
        'price_range' => $price_range,
        'transmission' => $transmission,
        'scores' => $scores,
    ]);
    }



    public function getPriceRange(){
        $price_ranges = [
            'Under $5000' => ['min' => 0, 'max' => 5000],
            '$5000 - $50000' => ['min' => 5000, 'max' => 50000],
            '$50000 - $100000' => ['min' => 50000, 'max' => 100000],
            '$100000 - $200000' => ['min' => 100000, 'max' => 200000],
            '$200000 - $300000' => ['min' => 200000, 'max' => 300000],
            'Above $300000' => ['min' => 300000, 'max' => null],
        ];
        
        $counts = [];
        
        foreach ($price_ranges as $label => $range) {
            $query = CarDataJpOp::query();
        
            if ($range['max'] === null) {
                // Count for "Above" range
                $count = $query->where('start_price_num', '>', $range['min'])
                               ->orWhere('end_price_num', '>', $range['min'])
                               ->count();
            } else {
                // Count for other ranges
                $count = $query->where(function ($q) use ($range) {
                    $q->whereBetween('start_price_num', [$range['min'], $range['max']])
                      ->orWhereBetween('end_price_num', [$range['min'], $range['max']]);
                })->count();
            }
        
            $counts[$label] = $count;
        }
        return $counts;
        
    }


    private function parseCustomFormat($string)
    {
        // Remove CDATA wrapper if present
        $string = preg_replace('/<!\[CDATA\[(.*?)\]\]>/s', '$1', $string);
        
        // Remove outer curly braces if present
        $string = trim($string, '{}');
        
        // Split the string into key-value pairs
        $pairs = preg_split('/","|,(?=[^:]+:)/', $string);
        
        $result = [];
        foreach ($pairs as $pair) {
            // Split each pair into key and value
            list($key, $value) = array_pad(explode(':', $pair, 2), 2, null);
            
            // Clean up key and value
            $key = trim($key, '" ');
            $value = trim($value, '" ');
            
            // Unescape special characters
            $value = stripcslashes($value);
            
            $result[$key] = $value;
        }
        
        return $result;
    }

    public function listing($slug){
     
        // $car = Car::with('dealer', 'brand')->where(function ($query) {
        //     $query->where('expired_date', null)
        //         ->orWhere('expired_date', '>=', date('Y-m-d'));
        // })->where(['status' => 'enable', 'approved_by_admin' => 'approved'])->where('slug', $slug)->firstOrFail();


        // $car = CarDataJpOp::where('id',$slug)->firstOrFail();
        $car = CarDataJpOp::where('id','951283456')->firstOrFail();
        $process_data_en = $this->parseCustomFormat($car->parsed_data_en);
        // $displacement = $process_data_en['displacement'];
        // echo $displacement;

        // die();

        // $car->total_view +=1;
        // $car->save();

        $galleries = CarGallery::where('car_id', $car->id)->get();


        $images=$this->last_image($car->pictures);
      

        // $feature_json_array = array();
        // if($car->features != 'null'){
        //     $feature_json_array = json_decode($car->features);
        // }

        // $car_features = Feature::whereIn('id', $feature_json_array)->get();

        $related_listings = Car::with('dealer', 'brand')->where(function ($query) {
            $query->where('expired_date', null)
                ->orWhere('expired_date', '>=', date('Y-m-d'));
        })->where(['status' => 'enable', 'approved_by_admin' => 'approved'])->where('brand_id', $car->brand_id)->where('id', '!=', $car->id)->get()->take(6);

        $dealer = User::where(['status' => 'enable' , 'is_banned' => 'no', 'is_dealer' => 1])->where('email_verified_at', '!=', null)->orderBy('id','desc')->select('id','name','username','designation','image','status','is_banned','is_dealer', 'address', 'email', 'phone', 'created_at')->where('id', $car->agent_id)->first();

        $reviews = Review::with('user')->where('car_id', $car->id)->where('status', 'enable')->latest()->get();

        $total_dealer_rating = Review::where('agent_id', $car->agent_id)->where('status', 'enable')->count();

        $listing_ads = AdsBanner::where('position_key', 'listing_detail_page_banner')->first();

        $delivery_charges = DeliveryCharge::all();


        return view('listing_detail', [
            'car' => $car,
            'galleries' => $images,
            // 'car_features' => $car_features,
            'related_listings' => $related_listings,
            'dealer' => $dealer,
            'reviews' => $reviews,
            'total_dealer_rating' => $total_dealer_rating,
            'listing_ads' => $listing_ads,
            'delivery_charges'=>$delivery_charges,
            'process_data_en'=>$process_data_en
        ]);

    }

    public function dealers(Request $request){

        $seo_setting = SeoSetting::where('id', 11)->first();

        $dealers = User::where(['status' => 'enable' , 'is_banned' => 'no', 'is_dealer' => 1])->where('email_verified_at', '!=', null)->orderBy('id','desc')->select('id','name','username','designation','image','status','is_banned','is_dealer', 'address', 'email', 'phone');

        if($request->search){
            $dealers = $dealers->where('name', 'like', '%' . $request->search . '%');
        }

        if($request->location){
            $dealers = $dealers->whereHas('cars', function($query) use($request){
                $query->where('city_id', $request->location);
            });
        }

        $dealers = $dealers->paginate(12);

        $cities = City::with('translate')->get();

        return view('dealer')->with([
            'seo_setting' => $seo_setting,
            'dealers' => $dealers,
            'cities' => $cities,

        ]);

    }


    public function dealer(Request $request, $username){

        $dealer = User::where(['status' => 'enable' , 'is_banned' => 'no', 'is_dealer' => 1])->where('email_verified_at', '!=', null)->orderBy('id','desc')->select('id','name','username','designation','image','status','is_banned','is_dealer', 'address', 'email', 'phone','facebook','linkedin','twitter','instagram', 'about_me','created_at','sunday','monday','tuesday','wednesday','thursday','friday','saturday','google_map')->where('username', $username)->first();

        if(!$dealer) abort(404);

        $total_dealer_rating = Review::where('agent_id', $dealer->id)->where('status', 'enable')->count();

        $cars = Car::with('dealer', 'brand')->where(function ($query) {
            $query->where('expired_date', null)
                ->orWhere('expired_date', '>=', date('Y-m-d'));
        })->where(['status' => 'enable', 'approved_by_admin' => 'approved'])->where('agent_id', $dealer->id)->paginate(9);

        $dealer_ads = AdsBanner::where('position_key', 'dealer_detail_page_banner')->first();

        return view('dealer_detail', [
            'dealer' => $dealer,
            'cars' => $cars,
            'total_dealer_rating' => $total_dealer_rating,
            'dealer_ads' => $dealer_ads,
        ]);
    }

    public function send_message_to_dealer(ContactMessageRequest $request, $dealer_id){
        MailHelper::setMailConfig();

        $template = EmailTemplate::find(2);
        $message = $template->description;
        $subject = $template->subject;
        $message = str_replace('{{user_name}}',$request->name,$message);
        $message = str_replace('{{user_email}}',$request->email,$message);
        $message = str_replace('{{user_phone}}',$request->phone,$message);
        $message = str_replace('{{message_subject}}',$request->subject,$message);
        $message = str_replace('{{message}}',$request->message,$message);

        $dealer = User::findOrFail($dealer_id);

        Mail::to($dealer->email)->send(new SendContactMessage($message,$subject, $request->email, $request->name));

        $notification= trans('translate.Your message has send successfully');
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->back()->with($notification);
    }

    public function send_message_to_company(ContactMessageRequest $request){
        // MailHelper::setMailConfig();

        $template = EmailTemplate::find(2);
        $message = $template->description;
        $subject = $template->subject;
        $message = str_replace('{{user_name}}',$request->name,$message);
        $message = str_replace('{{user_email}}',$request->email,$message);
        $message = str_replace('{{user_phone}}',$request->phone,$message);
        $message = str_replace('{{message_subject}}',$request->subject,$message);
        $message = str_replace('{{message}}',$request->message,$message);

        // Mail::to(env('MAIL_FROM_ADDRESS'))->send(new SendContactMessage($message,$subject, $request->email, $request->name));
        Mail::to('vbjr317@gmail.com')->send(new SendContactMessage($message,$subject, $request->email, $request->name));

        $notification= trans('translate.Your message has send successfully');
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->back()->with($notification);
    }

    public function pricing_plan(){

        $subscription_plans = SubscriptionPlan::orderBy('serial', 'asc')->where('status', 'active')->get();

        return view('pricing_plan', ['subscription_plans' => $subscription_plans]);
    }

     public function join_as_dealer(){

        return redirect()->route('register');
    }

   public function compare(){

        $compare_array = Session::get('compare_array', []);

        $cars = Car::with('brand')->where(function ($query) {
            $query->where('expired_date', null)
                ->orWhere('expired_date', '>=', date('Y-m-d'));
        })->where(['status' => 'enable', 'approved_by_admin' => 'approved'])->whereIn('id', $compare_array)->get();

        $compare_qty = $cars->count();


        return view('compare', ['cars' => $cars, 'compare_qty' => $compare_qty]);
   }

   public function add_to_compare($id){

        $compare_array = Session::get('compare_array', []);

        if (!in_array($id, $compare_array)) {
            if(count($compare_array) < 4){
                $compare_array[] = $id;
                Session::put('compare_array', $compare_array);

                $notification= trans('translate.Item added successfully');
                $notification=array('messege'=>$notification,'alert-type'=>'success');
                return redirect()->back()->with($notification);
            }else{
                $notification= trans('translate.You can not added more then 4 items');
                $notification=array('messege'=>$notification,'alert-type'=>'error');
                return redirect()->back()->with($notification);
            }

        }else{
            $notification= trans('translate.Item already exist in compare');
            $notification=array('messege'=>$notification,'alert-type'=>'error');
            return redirect()->back()->with($notification);
        }
   }

    public function remove_to_compare($car_id){

        $compare_array = Session::get('compare_array', []);

        $update_compare_array = array_filter($compare_array, function ($id) use ($car_id) {
            return $id !== $car_id;
        });

        Session::put('compare_array', $update_compare_array);

        $notification= trans('translate.Compare item removed successfully');
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->back()->with($notification);
    }


    public function language_switcher(Request $request){

        $request_lang = Language::where('lang_code', $request->lang_code)->first();

        Session::put('front_lang', $request->lang_code);
        Session::put('front_lang_name', $request_lang->lang_name);
        Session::put('lang_dir', $request_lang->lang_direction);

        app()->setLocale($request->lang_code);

        $notification= trans('translate.Language switched successfully');
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->back()->with($notification);

    }

    public function currency_switcher(Request $request){

        $request_currency = MultiCurrency::where('currency_code', $request->currency_code)->first();

        Session::put('currency_name', $request_currency->currency_name);
        Session::put('currency_code', $request_currency->currency_code);
        Session::put('currency_icon', $request_currency->currency_icon);
        Session::put('currency_rate', $request_currency->currency_rate);
        Session::put('currency_position', $request_currency->currency_position);

        $notification= trans('translate.Currency switched successfully');
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->back()->with($notification);




    }







}
