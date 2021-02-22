<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Resources\Configuration as ConfigurationResource;
use App\Http\Resources\ConfigurationCollection;


class ConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ConfigurationCollection(Configuration::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->created_at=Carbon::now();
        $request->validate([
            'name' => 'required|max:20',
            'value' => 'required',
            'id_related' => 'required|max:11'
        ]);

        $configuration = Configuration::create($request->all());

        return (new ConfigurationResource($configuration))
                ->response()
                ->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new ConfigurationResource(Configuration::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function edit(Configuration $configuration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $configuration = Configuration::where("id", $id)->update([
            "name" => $request->name,
            "value" => $request->value,
            "type_related" => $request->type_related,
            "description" => $request->description,
            "updated_at" => Carbon::now()
        ]);

        return response()->json(["configuration" => $configuration]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $configuration = Configuration::findOrFail($id);
        $configuration->delete();

        return response()->json(null, 204);
    }
}
