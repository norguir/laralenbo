<?php

namespace App\Http\Controllers;

use App\User;
use App\Iou;
use Illuminate\Http\Request;
use App\Http\Requests\IouRequest;

class IouController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function new_()
    {
        return view('ious.new');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // Initial default data
        $iou = factory('App\Iou')->make( [
            'accepted_at' => null,
            'amount' => 500,
            'borrower_id' => User::whereName('anonymous_borrower')->first(),
            'lender_id' => User::whereName('anonymous_lender')->first(),
            'compensation' => '',
            'initiated_by' => 'borrower',
            'money_released' => false,
            'pdf' => null,
            'repayment_repeat' => 'monthly',
            'repayment_delay_value' => 1,
            'repayment_delay_unit' => 'months',
            'subject' => ''
        ]);
        
        return view('ious.create',compact('iou'));
    }

    /**
     * Create an installments sheet
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IouRequest $request)
    {
        return 'Passed';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\iou  $iou
     * @return \Illuminate\Http\Response
     */
    public function show(iou $iou)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\iou  $iou
     * @return \Illuminate\Http\Response
     */
    public function edit(iou $iou)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\iou  $iou
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, iou $iou)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\iou  $iou
     * @return \Illuminate\Http\Response
     */
    public function destroy(iou $iou)
    {
        //
    }
}
