<?php
namespace App\Http\Controllers;

use App\Models\SalesTax;
use Illuminate\Http\Request;

class SalesTaxcontroller extends Controller
{
    public function index(){
        $name = auth()->user()->name;
        $email = auth()->user()->email;
        $phone = auth()->user()->phone;
        $cnic = auth()->user()->cnic;

        return view('/registration/salestax' , ['name'=>$name, 'email'=>$email, 'phone'=>$phone, 'cnic'=>$cnic]);
    }
    public function registerSalesTax(Request $request){
        
        $user_id = auth()->user()->id;
        $tax_month = $request->input('taxmonth');
        $country = $request->input('country');
        $monthlysalary = $request->input('monthlysalary');
        $address = $request->input('address');
        
        SalesTax::create(['user_id'=>$user_id, 'tax_month'=>$tax_month, 'country'=>$country,'monthlysalary'=>$monthlysalary, 'address'=>$address]);

        

        return redirect('/');
    }
}
