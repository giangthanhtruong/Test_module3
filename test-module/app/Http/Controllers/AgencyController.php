<?php

namespace App\Http\Controllers;

use App\Models\Agency;


use Illuminate\Http\Request;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agencies = Agency::paginate(5);

        return view('backend.list', compact('agencies'));
    }


    public function create()
    {
        return view('backend.create');
    }


    public function store(Request $request)
    {
        $agency = new Agency();
        $agency->name = $request->name;
        $agency->phone = $request->phone;
        $agency->email = $request->email;
        $agency->address = $request->address;
        $agency->nameManager = $request->nameManager;
        $agency->status = $request->status;
        $agency->save();
        return redirect()->route('agencies.list');
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agency = Agency::findOrFail($id);
        return view('backend.edit', compact('agency'));
    }

    public function update(Request $request, $id)
    {
        $agency = Agency::findOrFail($id);
        $agency->name = $request->name;
        $agency->phone = $request->phone;
        $agency->email = $request->email;
        $agency->address = $request->address;
        $agency->nameManager = $request->nameManager;
        $agency->status = $request->status;

        $agency->save();
        return redirect()->route('agencies.list');
    }


        public function delete(Request $request)
    {

        try {
            $agencyId = $request->deleteId;
            Agency::destroy($agencyId);
            $data = [
                'status' => 'success',
                'message' => 'Xoá thành công!'
            ];
        } catch (\Exception $exception) {
            $data = [
                'status' => 'error',
                'message' => 'Lỗi hệ thống!'
            ];
        }
        return response()->json($data);
    }
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('agencies.list');
        }
        $agencies = Agency::where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);
        $agency = Agency::all();
        return view('backend.search',compact('agencies','agency'));
    }

}
