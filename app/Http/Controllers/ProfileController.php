<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;
use App\Models\{User, Order};
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function show(User $user){

        return view('profile.show',[
            'user' => $user,
        ]);
    }

    public function info(User $user) {
        return view('profile.info',[
            'user' => $user,
        ]);
    }

    public function infoUpdate(UpdateUserRequest $request, User $user){

        try {
            $user->update([
                'firm' => $request->firm,
                'identification_num' => $request->identification_num,
                'name' => $request->name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'street' => $request->street,
                'add_address' => $request->add_address,
                'post_code' => $request->post_code,
                'city' => $request->city,
                'firm_bill' => $request->firm_bill,
                'identification_num_bill' => $request->identification_num_bill,
                'name_bill' => $request->name_bill,
                'last_name_bill' => $request->last_name_bill,
                'email_bill' => $request->email_bill,
                'phone_bill' => $request->phone_bill,
                'street_bill' => $request->street_bill,
                'add_address_bill' => $request->add_address_bill,
                'post_code_bill' => $request->post_code_bill,
                'city_bill' => $request->city_bill,
                'same_address' => $request->filled('same_address') ? 1 : 0,
            ]);

            toastr()->success('Your profile has been updated successfully!');
            return redirect()->back();

        } catch (\Exception $e) {

            toastr()->error('An error has occurred please try again later.');
            return redirect()->back()->withInput();
        }

    }

    public function orders(User $user) {

        return view('profile.orders',[
            'user' => $user,
        ]);
    }

    public function return(Request $request, User $user) {

        return view('profile.return',[
            'user' => $user,
        ]);
    }

    public function password(User $user) {

        return view('profile.password',[
            'user' => $user,
        ]);
    }

    public function passwordUpdate(Request $request, User $user) {

        // # Validation
        // $request->validate([
        //     'old_password' => 'required',
        //     'new_password' => 'required|confirmed',
        // ]);


        // #Match The Old Password
        // if(!Hash::check($request->old_password, auth()->user()->password)){
        //     return back()->with("error", "Old Password Doesn't match!");
        // }


        // #Update the new Password
        // User::whereId(auth()->user()->id)->update([
        //     'password' => Hash::make($request->new_password)
        // ]);

        // return back()->with("status", "Password changed successfully!");



        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
            'new_password_confirmation' => 'required|confirmed',
        ]);

        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }

        // if (!Hash::check($request->new_password != $request->new_password_confirmation)) {
        //     return back()->with("error", "New Password Doesn't match!");
        // }

        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");


        // toastr()->success('Your password has been updated successfully!');

    }


    public function orderShow(User $user, Order $order) {

        return view('profile.orderShow',[
            'user' => $user,
            'order' => $order,
        ]);
    }



}
