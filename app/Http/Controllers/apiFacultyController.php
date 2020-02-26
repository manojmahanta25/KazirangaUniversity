<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\Http\Resources\FacultyResource;
use Illuminate\Http\Request;
use GuzzleHttp;

class apiFacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculty = Faculty::orderBy('priority')->paginate(15);
        return FacultyResource::collection($faculty);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $client = new GuzzleHttp\Client();
//        try{
//            $response = $client->request('GET', 'http://localhost:8000/api/school',
//                ['headers' => ['Auth_KEY' => 'AAAAAAAAAB']]);
//            $response->getHeaderLine('content-type');
//            $obe = json_decode($response->getBody(), true);
//            foreach ($obe['data'] as $el)
//            {
//                echo $el['school_name'].'</br>';
//            }
//        }catch (GuzzleHttp\Exception\ClientException $e)
//        {
//            echo $e->getCode();
//            echo $e->getMessage();
//        }catch (GuzzleHttp\Exception\ServerException $e)
//        {
//            echo $e->getCode();
//            echo $e->getMessage();
//        }


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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faculty= Faculty::where('faculty_id',$id)
            ->with('departments')
            ->with('designations')
            ->with('isDean')
            ->with('isHod')
            ->with('facultyDet')
            ->firstOrFail();
        return new FacultyResource($faculty);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
