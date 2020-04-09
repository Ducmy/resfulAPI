<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Animals;
use Validator;

class PhotoController extends Controller
{
    //Define API here
    public function index()
    {
        $datas = Animals::all();
         // return response
         $response = [
            'success' => true,
            'message' => 'Books retrieved successfully.',
            'mv_animal' => $datas,
        ];
        return response()->json($response, 200);
    }

    public function store(Request $request)
    {
        $input = $request->all();
 
        $validator = Validator::make($input, [
            'name' => 'required',
            'name_en' => 'required',
            'image' => 'required',
            'date' => 'required',
            'image' => 'required',
        ]);
 
        if ($validator->fails()) {
            // return response
            $response = [
                'success' => false,
                'message' => 'Validation Error.', $validator->errors(),
            ];
            return response()->json($response, 404);
        }
 
        $data = Animals::create($input);
 
        // return response
        $response = [
            'success' => true,
            'message' => 'Book created successfully.',
        ];
        return response()->json($response, 200);
    }

    public function update($id)
    {
    }

    public function destroy($id)
    {
    }
}
