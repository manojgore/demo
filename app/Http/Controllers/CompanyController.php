<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Company;
// use App\Rules\UniqueCompany;

class CompanyController extends Controller
{
    public function RegisterCompany(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'regex:/^[\pL\s\-]+$/u'],
            'email' => 'required|string|email|max:255',
            // 'username' => 'required|string|max:255|unique:users',
            'phone' => ['required'],
            // We can use unique rule for phone from UniqueCompany.php "new UniqueCompany" use this in validation
            'city' => 'required|string|max:255',
            'cname' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'adminemail' => 'required|string|max:255',
            'reportingaddress' => 'required|string|max:255',
            'vehicalcategory' => 'required|string|max:255',
            'journeytype' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'reportingdate' => 'required|string|max:255',
            'reportingtime' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            're-password' => 'required|same:password',
       ]);

       // Create a new Customer record in the database
       $company = Company::create([
        'name' => $request->name,
        'cname' => $request->cname,
        'city' => $request->city,
        'email' => $request->email,
        'phone' => $request->phone,
        'designation' => $request->designation,
        'department' => $request->department,
        'adminemail' => $request->adminemail,
        'reportingaddress' => $request->reportingaddress,
        'vehicalcategory' => $request->vehicalcategory,
        'journeytype' => $request->journeytype,
        'state' => $request->state,
        'reportingdate' => $request->reportingdate,
        'reportingtime' => $request->reportingtime,
        'password' => Hash::make($request->password),
    ]);

       return redirect(route('showcompany.login'))->with("success", "Registration Success, register to Access the app");
    }

    public function logincompany(Request $request)
{
    $request->validate([
        'email' => 'required|string|email|max:255',
        'password' => 'required',
    ]);
    return redirect(route('companies.dashboard'))->with("success", "Registration Success, Login to Access the app"); 
}

    public function companysignup(){
        return view('companies.signup');
    }
    public function companylogin(){
        return view('companies.login');
    }

    public function showcompanydashboard()
{
    $user = Auth::user();

    if ($user && $user->company) {
        // If the user has a company, fetch the company information
        $company = $user->company;

        // Share the $company variable with the view
        view()->share('company', $company);
    }

    return view('companies.dashboard');
}

    public function showcompanyorders(){
        return view('companies.orders');
    }

    
    public function showcompanyprofile(Request $request)
{
    // Get the authenticated user
    $user = auth()->user();

    $companies = Company::get();
    // Return the view for the profile
    return view('companies.page-dashboard-profile', compact('companies'));
}

    public function updatecompanyprofile(Request $request, $id)
    {
        $company = Company::find($id);

        if (!$company) {
            return redirect()->back()->with('error', 'Company not found with the specified ID.');
        }

        // Validate the form data
        $validatedData = $request->validate([
            'field1' => 'required',
            'field2' => 'required',
            // Add more validation rules as needed
        ]);

        // Update the company data
        $company->update($validatedData);

        return redirect()->route('companies.profile', ['id' => $id])->with('success', 'Profile updated successfully');
    }
}
