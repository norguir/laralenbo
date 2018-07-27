<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Iou;
use Illuminate\Http\Request;

class IousController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $iou = Iou::where('repayment_delay_unit', 'LIKE', "%$keyword%")
                ->orWhere('repayment_delay_value', 'LIKE', "%$keyword%")
                ->orWhere('repayment_repeat', 'LIKE', "%$keyword%")
                ->orWhere('accepted_at', 'LIKE', "%$keyword%")
                ->orWhere('subject', 'LIKE', "%$keyword%")
                ->orWhere('amount', 'LIKE', "%$keyword%")
                ->orWhere('borrower_id', 'LIKE', "%$keyword%")
                ->orWhere('compensation', 'LIKE', "%$keyword%")
                ->orWhere('currency', 'LIKE', "%$keyword%")
                ->orWhere('initiated_by', 'LIKE', "%$keyword%")
                ->orWhere('lender_id', 'LIKE', "%$keyword%")
                ->orWhere('money_released', 'LIKE', "%$keyword%")
                ->orWhere('pdf', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $iou = Iou::latest()->paginate($perPage);
        }

        return view('admin.iou.index', compact('iou'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.iou.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Iou::create($requestData);

        return redirect('admin/iou')->with('flash_message', 'Iou added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $iou = Iou::findOrFail($id);

        return view('admin.iou.show', compact('iou'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $iou = Iou::findOrFail($id);

        return view('admin.iou.edit', compact('iou'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $iou = Iou::findOrFail($id);
        $iou->update($requestData);

        return redirect('admin/iou')->with('flash_message', 'Iou updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Iou::destroy($id);

        return redirect('admin/iou')->with('flash_message', 'Iou deleted!');
    }
}
