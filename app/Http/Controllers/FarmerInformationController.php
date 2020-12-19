<?php

namespace App\Http\Controllers;

use App\Models\agricultural_plants;
use App\Models\farmerinfo_element;
use App\Models\FarmerInformation;
use App\Models\greenhouse_plants;
use App\Models\States;
use App\Models\ValueOfElements;
use Illuminate\Http\Request;

class FarmerInformationController extends Controller
{
    public function index()
    {
        $states = States::all();
        $greenhouse_plants = greenhouse_plants::all();
        $agricultural_plants = agricultural_plants::all();
        $ValueOfElements = ValueOfElements::all();

        return view('farmer_information', compact('states', 'greenhouse_plants', 'agricultural_plants', 'ValueOfElements'));
    }


    private function countElements(Request $request, $values)
    {
        $count = count($values);
        $counter = 0;
        $loop = 0;

        foreach ($values as $id) {
            if ($request->element[$loop++] != null) {
                $counter++;
            }
        }

        if ($count == $counter) {
            return true;
        } else {
            return false;
        }
    }

    public function store(Request $request)
    {

        $messages = '';

       /* $validatedData = $request->validate([
            'state' => 'required',
            'year' => 'required',
            'month' => 'required',
            'day' => 'required',
            'has_soil_test' => 'required',
            'description' => 'required',
            'radio_cultivation_type' => 'required',
        ]);
  */


        if ($request->has_soiltest == '1') {
            $valueof_element_ids = ValueOfElements::select('id')->get();

            $is_valid = $this->countElements($request, $valueof_element_ids);
            if(!$is_valid){
                $messages .= "تمام عناصر را پر نکرده اید
";
            }
        }

        if ($request->state != 0) {


            $farmer = new FarmerInformation();
            $farmer->state_id = $request->state;
            if ($request->radio_cultivation_type == '1') {
                $farmer->cultivation_id = 1;
                $farmer->glasshouse_type_id = $request->radio_glasshouse_type;
                $farmer->glasshouse_list_id = $request->glasshouse_list;
                if ($request->glasshouse_list == 0) {
                    $messages .= "لیست گیاهان گلخانه ای را انتخاب نکرده اید
";
                }
            } else if ($request->radio_cultivation_type == '2') {
                $farmer->cultivation_id = 2;
                $farmer->agricultural_list_id = $request->agricultural_list;
                if ($request->agricultural_list == 0) {
                    $messages .= "لیست گیاهان زارعی را انتخاب نکرده اید
";
                }
            }
            $farmer->year = $request->plant_age[0];
            $farmer->month = $request->plant_age[1];
            $farmer->day = $request->plant_age[2];

            $farmer->has_soil_test = $request->has_soiltest;
            $farmer->description = $request->description;
            $farmer->save();


            if ($request->has_soiltest == '1') {
                $loop = 0;
                foreach ($valueof_element_ids as $id) {
                    $farmer_element = new farmerinfo_element();
                    $farmer_element->farmer_info_id = $farmer->id;
                    $farmer_element->element_id = $id->id;
                    $farmer_element->element_value = $request->element[$loop++];
                    $farmer_element->save();
                }
            }
        }else{
            $messages.='استان را انتخاب نکرده اید
';
        }

        if($messages!=''){
            return $messages."<br><a href='/farmer-information'>لطفا برای برگشت به صفحه قبل کلیک کنید</a>";
        }

        return redirect()->back();
    }
}
