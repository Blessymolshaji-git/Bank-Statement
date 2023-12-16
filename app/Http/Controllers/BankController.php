<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function form($id){
        $bankuser = User::find($id);
    
        return view('Bank.viewuser',compact('bankuser'));
    } 
    public function depositpage(){
       
        return view('Bank.deposit');
    } 
    
    public function createdeposit(Request $request){
   
        $request->validate([
            'amount' => 'required',
            'type' => 'required',
           
        ]);
    
       Bank::create($request->all());
        return redirect()->route('depositpage')->with('success','Amount Deposit Successfully');
    }
    public function withdrawpage(){
       
        return view('Bank.withdraw');
    } 
    public function createwithdraw(Request $request){
   
        $request->validate([
            'amount' => 'required',
            'type' => 'required',
           
        ]);
       
       Bank::create($request->all());
        return redirect()->route('withdrawpage')->with('success','Amount Withdraw Successfully');
    }
    public function transferpage(){
       
        return view('Bank.transfer');
    } 
    public function createtransfer(Request $request){

        $request->validate([
            'amount' => 'required',
            'type' => 'required',
           
        ]);

       Bank::create($request->all());
        return redirect()->route('transferpage')->with('success','Amount Transfer Money Successfully');
    }
    public function liststatment( ){
    
        $bankstatement = Bank::latest()->paginate(2);
        return view('bank.statement',compact('bankstatement'))
            ->with('i', (request()->input('page', 1) - 1) * 2);
    
        
    }
        
    } 

