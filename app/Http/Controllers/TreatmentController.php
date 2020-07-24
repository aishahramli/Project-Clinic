<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Treatment;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $treatments = Treatment::all(); 
        //select * from projects where owner_id = 4
        return view('treatments.index', compact('treatments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Treatment $treatment)
    {
        //

        //$communities = Community::all();
        //$courts = Court::all();

        return view('treatments.create', compact('treatments', 'courts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        

        $treatments = Treatment::Create([
            'user_id'=> auth()->user()->id,
            'patient_name' => $request['patient_name'],
            'treatment_name' => $request['treatment_name'],
            'description' => $request['description'],
            'treatment_date' => $request['treatment_date'],
           
        ]);
        dd($treatments);


        $user = auth()->user();
        //dd($user);
       
   
        return redirect("treatments"); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Treatment $treatment)
    {
        //
        $users= $treatment->users;
        //id dkt parameter method so find($id) kirenya function tu akan kasi users yg dah join game based on id kau send
        //dd($game->users); //ambik users based on game id
        return view('treatments.show', compact('treatments', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Treatment $treatment)
    {
        //
        
        return view ('treatments.edit', compact ('treatment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'patient_name'=>'required',
            'treatment_name'=>'required',
            'description'=>'required',
            'treatment_date'=>'required',
            
        ]);

        $treatment = Treatment::find($id);
        $treatment->patient_name =  $request->get('patient_name');
        $treatment->treatment_name =  $request->get('treatment_name');
        $treatment->description =  $request->get('description');
        $treatment->treatment_date = $request->get('treatment_date');
        $treatment->save();

        return redirect('/treatments')->with('success', 'Treatment updated!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treatment $treatment)
    {
        //
       
        $treatment->delete();

        return redirect()->route('treatments.index') ->with('success', 'Treatment deleted successfully');

        // $treatment = Treatment::find($id);
        // $treatment->delete();

        // return redirect('/treatments')->with('success', 'Contact deleted!');
    }
}
