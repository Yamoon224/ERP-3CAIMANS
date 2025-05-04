<?php

namespace App\Http\Controllers;

use App\Models\Quantity;
use Illuminate\Http\Request;

class QuantityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quantities = Quantity::all();
        return view('admins.quantities', compact('quantities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['created_by'] = $data['updated_by'] = auth()->id();
        Quantity::create($data);
        return back()->with(['message'=>__('locale.save', [
            'param'=>__('locale.quantity', ['prefix'=>'', 'suffix'=>(app()->getLocale() == 'en' ? 'y' : '')])
        ])]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->except(['_token', '_method']);
        $quantity = Quantity::find($id);

        $quantity->update($data);
        return back()->with(['message'=>__('locale.update', [
            'param'=>__('locale.quantity', ['prefix'=>'', 'suffix'=>(app()->getLocale() == 'en' ? 'y' : '')])
        ])]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $quantity = Quantity::find($id);

        $quantity->update(['deleted'=>1]);
        return back()->with(['message'=>__('locale.delete', [
            'param'=>__('locale.quantity', ['prefix'=>'', 'suffix'=>(app()->getLocale() == 'en' ? 'y' : '')])
        ])]);
    }
}
