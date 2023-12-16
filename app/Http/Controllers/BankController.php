<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function form($id){
        $bankuser = User::find($id);
          //dd( $bankuser);
        return view('Bank.viewuser',compact('bankuser'));
    } 
    public function depositpage(){
       
        return view('Bank.deposit');
    } 
    
    public function createdeposit(Request $request){
        //dd("hi");
        $request->validate([
            'amount' => 'required',
            'type' => 'required',
           
        ]);
        //$data = $request->all();
       //dd ($data );
       Bank::create($request->all());
        return redirect()->route('depositpage')->with('success','Amount Deposit Successfully');
    }
    public function withdrawpage(){
       
        return view('Bank.withdraw');
    } 
    public function createwithdraw(Request $request){
        //dd("hi");
        $request->validate([
            'amount' => 'required',
            'type' => 'required',
           
        ]);
        //$data = $request->all();
       //dd ($data );
       Bank::create($request->all());
        return redirect()->route('withdrawpage')->with('success','Amount Withdraw Successfully');
    }
        
    } 

