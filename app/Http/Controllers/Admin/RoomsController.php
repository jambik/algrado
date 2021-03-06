<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BackendController;
use App\Room;
use Illuminate\Http\Request;
use Image;

class RoomsController extends BackendController
{
    protected $resourceName = null;

    protected $model = null;

    public function __construct()
    {
        $this->resourceName = 'rooms';
        $this->model = new Room();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $items = $this->model->all();

        return view('admin.'.$this->resourceName.'.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.'.$this->resourceName.'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $item = $this->model->create($request->all());

        if (request()->hasFile('image'))
        {
            $imageFile = Image::make($item->imagePath() . DIRECTORY_SEPARATOR . $item->image);
            $imageFile->fit(1600, 900)->save();
        }

        return redirect(route('admin.'.$this->resourceName.'.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $item = $this->model->findOrFail($id);

        return view('admin.'.$this->resourceName.'.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $item = $this->model->findOrFail($id);

        $item->update($request->all());

        if (request()->hasFile('image'))
        {
            $imageFile = Image::make($item->imagePath() . DIRECTORY_SEPARATOR . $item->image);
            $imageFile->fit(1600, 900)->save();
        }

        return redirect(route('admin.'.$this->resourceName.'.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $item = $this->model->findOrFail($id);

        $item->delete();

        return redirect(route('admin.'.$this->resourceName.'.index'));
    }
}
