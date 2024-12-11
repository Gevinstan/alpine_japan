<?php

function html_decode($text){
    $after_decode =  htmlspecialchars_decode($text, ENT_QUOTES);
    return $after_decode;
}

function admin_lang(){
    return Session::get('admin_lang');
}

function front_lang(){
    return Session::get('front_lang');
}

function amount($amount) {
    $amount = number_format($amount, 2, '.', ',');

    return $amount;
}

function calculate_percentage($regular_price, $offer_price){

    $offer = (($regular_price - $offer_price) / $regular_price) * 100;
    $offer = round($offer, 2);
    return $offer;

}




    // @codingStandardsIgnoreLine
    function countries()
    {
        if (!cache()->has('countries')) {
            cache(['countries' => \App\Models\Country::all()]);
        }

        return cache('countries');
    }





function currency($price){
    // currency information will be loaded by Session value

    $currency_icon = Session::get('currency_icon');
    $currency_code = Session::get('currency_code');
    $currency_rate = Session::get('currency_rate');
    $currency_position = Session::get('currency_position');

    $price = $price * $currency_rate;
    $price = amount($price, 2, '.', ',');

    if($currency_position == 'before_price'){
        $price = $currency_icon.$price;
    }elseif($currency_position == 'before_price_with_space'){
        $price = $currency_icon.' '.$price;
    }elseif($currency_position == 'after_price'){
        $price = $price.$currency_icon;
    }elseif($currency_position == 'after_price_with_space'){
        $price = $price.' '.$currency_icon;
    }else{
        $price = $currency_icon.$price;
    }

    return $price;
}


function getAllResourceFiles($dir, &$results = array()) {
    $files = scandir($dir);
    foreach ($files as $key => $value) {
        $path = $dir ."/". $value;
        if (!is_dir($path)) {
            $results[] = $path;
        } else if ($value != "." && $value != "..") {
            getAllResourceFiles($path, $results);
        }
    }
    return $results;
}

function getRegexBetween($content) {

    preg_match_all("%\{{ __\(['|\"](.*?)['\"]\) }}%i", $content, $matches1, PREG_PATTERN_ORDER);
    preg_match_all("%\@lang\(['|\"](.*?)['\"]\)%i", $content, $matches2, PREG_PATTERN_ORDER);
    preg_match_all("%trans\(['|\"](.*?)['\"]\)%i", $content, $matches3, PREG_PATTERN_ORDER);
    $Alldata = [$matches1[1], $matches2[1], $matches3[1]];
    $data = [];
    foreach ($Alldata as  $value) {
        if(!empty($value)){
            foreach ($value as $val) {
                $data[$val] = $val;
            }
        }
    }
    return $data;
}

function generateLang($path = ''){

    // user panel
    $paths = getAllResourceFiles(resource_path('views'));

    $paths = array_merge($paths, getAllResourceFiles(app_path()));

    $paths = array_merge($paths, getAllResourceFiles(base_path('Modules')));

    // end user panel

    // user validation
    $paths = getAllResourceFiles(app_path());

    $paths = array_merge($paths, getAllResourceFiles(app_path('Http/Controllers/test')));
    $paths = array_merge($paths, getAllResourceFiles(app_path('Http/Controllers/Auth')));
    // end user validation

    // admin panel
    $paths = getAllResourceFiles(resource_path('views/admin'));
    // end admin panel

    // admin validation
    $paths = getAllResourceFiles(app_path('Http/Controllers/Admin'));
    // end validation
    $AllData= [];
    foreach ($paths as $key => $path) {
    $AllData[] = getRegexBetween(file_get_contents($path));
    }
    $modifiedData = [];
    foreach ($AllData as  $value) {
        if(!empty($value)){
            foreach ($value as $val) {
                $modifiedData[$val] = $val;
            }
        }
    }

    $modifiedData = var_export($modifiedData, true);

    file_put_contents('lang/en/translate.php', "<?php\n return {$modifiedData};\n ?>");

}

if (!function_exists('hasCheckedModels')) {
    function hasCheckedModels($brandSlug, $brand_arr, $selectedModels) {
        if (!array_key_exists($brandSlug, $brand_arr) || empty($selectedModels)) {
            return false;
        }
        
        foreach ($brand_arr[$brandSlug] as $model) {
            if (in_array(trim($model['model']), array_map('trim', (array) $selectedModels))) {
                return true;
            }
        }
        
        return false;
    }
}

if (!function_exists('hasCheckedModelsCar')) {
    function hasCheckedModelsCar($brandSlug, $brand_arr, $selectedModels) {
        // Ensure the brand exists in the provided brand array
        if (!array_key_exists($brandSlug, $brand_arr) || empty($selectedModels)) {
            return false;
        }

        // Check if models for this brand exist in the selected models
        if (!array_key_exists($brandSlug, $selectedModels) || empty($selectedModels[$brandSlug])) {
            return false;
        }

        // Iterate through the brand's models and compare with selected models for this brand
        foreach ($brand_arr[$brandSlug] as $model) {
            if (in_array(trim($model['model']), array_map('trim', (array) $selectedModels[$brandSlug]))) {
                return true;
            }
        }

        return false;
    }
}


function parseCustomFormat($string)
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
 
    // vehicle  location
    
    return $result;
}
