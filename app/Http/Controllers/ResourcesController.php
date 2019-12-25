<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Resources;
use File;
class ResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights = Resources::all();
        return view('admin.resource.view', compact('flights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //'book_image' => 'required|mimes:png',
      $request->validate([

           'file_name' => 'required|mimes:pdf,zip',

       ]);

          if ($file = $request->file('book_image')){
            $photo = time().'_'.$request->file('book_image')->getClientOriginalName();
            $photo = str_replace(' ', '_', $photo);
            $file->move('assets/uploads/cover_images',$photo);
            }
          if ($r_file = $request->file('file_name')){
             $file_size=$request->file('file_name')->getSize();
             $file_size = number_format($file_size / 1048576,2);
              $name_file = time().'_'.$request->file('file_name')->getClientOriginalName();
              $name_file = str_replace(' ', '_', $name_file);
              $r_file->move('assets/uploads/resources',$name_file);

              }

          $add = new Resources;
          $add->book_catagory = $request->book_catagory;
          $add->book_sub_catagory = $request->book_sub_catagory;
          $add->book_name = $request->book_name;
          $add->book_des = $request->book_des;
          $add->book_author = $request->book_author;
          $add->book_image =$photo;
          $add->file_name =$name_file;
          $add->file_size =$file_size ;
          $add->save();
          return redirect('/resource/view')->with('success','Resource Successfully Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $userdata = Resources::findOrFail($id);
      return view('admin.resource.edit', compact('userdata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $id=$request->book_id;
      // //delete existing image and file
      $userdata = Resources::findOrFail($id);

      $image_name = $userdata->book_image;
      $image_name='assets/uploads/cover_images/'.$image_name;
      File::delete($image_name);

      $file_name = $userdata->file_name;
      $file_name='assets/uploads/resources/'.$file_name;
      File::delete($file_name);

      //update all data
      $request->validate([
           
            'file_name' => 'required|mimes:pdf,zip',

       ]);

          if ($file = $request->file('book_image')){
            $photo = time().'_'.$request->file('book_image')->getClientOriginalName();
            $photo = str_replace(' ', '_', $photo);
            $file->move('assets/uploads/cover_images',$photo);
            }
          if ($r_file = $request->file('file_name')){
             $file_size=$request->file('file_name')->getSize();
             $file_size = number_format($file_size / 1048576,2);
              $name_file = time().'_'.$request->file('file_name')->getClientOriginalName();
              $name_file = str_replace(' ', '_', $name_file);
              $r_file->move('assets/uploads/resources',$name_file);

              }
              $userdata->book_catagory = $request->book_catagory;
              $userdata->book_sub_catagory = $request->book_sub_catagory;
              $userdata->book_name = $request->book_name;
              $userdata->book_des = $request->book_des;
              $userdata->book_author = $request->book_author;
              $userdata->book_image =$photo;
              $userdata->file_name =$name_file;
              $userdata->file_size =$file_size ;
              $userdata->save();
              return redirect('/resource/view')->with('success','Resource Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //delete existing image and file
      $userdata = Resources::findOrFail($id);

      $image_name = $userdata->book_image;
      $image_name='assets/uploads/cover_images/'.$image_name;
      File::delete($image_name);

      $file_name = $userdata->file_name;
      $file_name='assets/uploads/resources/'.$file_name;
      File::delete($file_name);
      $userdata->delete();
      return redirect('/resource/view')->with('success','Resource Successfully Deleted');

    }

}
