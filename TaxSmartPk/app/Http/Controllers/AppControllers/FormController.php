<?php

namespace App\Http\Controllers\AppControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\AppModels\AppFormImages;

class FormController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        // $lastFormInfo = AppForm::orderBy('id', 'DESC')->first();
        // $L_FID = 0;
        // if ($lastFormInfo == null) {
        //     $L_FID = 1;
        // } else {
        //     $L_FID = $lastFormInfo->id + 1;
        // }

        // $AppFormImages = new AppFormImages();
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
        if (!$request->hasFile('UserImages')) {
            return response()->json(['upload_file_not_found'], 400);
        }

        $flag = false;
        $lastFormInfo = User::orderBy('id', 'DESC')->first();
        $L_FID = 0;
        if ($lastFormInfo == null) {
            $L_FID = 1;
        } else {
            $L_FID = $lastFormInfo->id + 1;
        }

        foreach ($request->file('UserImages') as $ImageFile) {
            $imageGalleryName = $ImageFile->getClientOriginalName();
            $ImageFile->move(public_path('Uploads/AppInfo/'.$L_FID.'/'), $imageGalleryName);

            if ($ImageFile) {
                $insertQuery = "INSERT INTO `app_form_images`(`UserImages`, `user_id`) VALUES ('". $imageGalleryName ."', '". $L_FID ."')";
                DB::insert($insertQuery);
                $flag = true;
            } else {
                return response()->json(["Files are not Save on Server. Error!"], 400);
            }
        }

        // return response()->json($request->all());

        if (!$flag) {
            return response()->json(["Files are not Uploaded. Error!"], 400);
        }

        return response()->json([" Thank You For Contacting Us. We'll response ASAP."], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
