<?php

namespace App\Http\Controllers\AppControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AppModels\AppForm;
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
        $lastFormInfo = AppForm::orderBy('id', 'DESC')->first();
        $L_FID = 0;
        if ($lastFormInfo == null) {
            $L_FID = 1;
        } else {
            $L_FID = $lastFormInfo->id + 1;
        }
        $AppFormInfo = new AppForm();
        $AppFormInfo->UserName = $request->UserName;
        $AppFormInfo->UserEmail = $request->UserEmail;
        $AppFormInfo->UserPhone = $request->UserPhone;
        $AppFormInfo->UserCNIC = $request->UserCNIC;

        if ($AppFormInfo->save()) {
            $Form_ID = $AppFormInfo->id;
            $AppFormInfo = AppForm::find($Form_ID);
            $AppFormImages = new AppFormImages();

            foreach ($request->file('UserImages') as $key => $ImageFile) {
                $imageGalleryName = $ImageFile->getClientOriginalName();
                $ImageFile->move(public_path('Uploads/AppInfo/'.$L_FID.'/'), $imageGalleryName);
                if ($ImageFile) {
                    $insertQuery = "INSERT INTO `app_form_images`(`UserImages`, `form_id`) VALUES ('". $imageGalleryName ."','".$Form_ID."')";
                    DB::insert($insertQuery);
                }
            }
            return response()->json([$request->UserName." Thank You For Contacting Us. We'll response ASAP."]);
        }
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
