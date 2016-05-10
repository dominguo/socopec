<?php
namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\Photo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

class PhotosController extends Controller
{
/**
 * Liste des Photos
 *
 * @return \Illuminate\Http\Response
 */
    public function index($vehicule)
    {
        $photos = Photo::where('vehicule_id', $vehicule)->get();
        return view('photos.index', compact('photos','vehicule'));
    }

    public function add($vehicule) {
            $file = Request::file('photo');
            if($file){
                $extension = $file->getClientOriginalExtension();
                $path = "photos/vehicule/$vehicule/".$file->getClientOriginalName();

                Storage::disk('local')->put($path,  File::get($file));
                $photo = new Photo();
                $photo->nom = $file->getClientOriginalName();
                $photo->lien = $path;
                $photo->vehicule_id = $vehicule;

                $photo->save();
            }
            return redirect("/photos/$vehicule");
    }

    public function delete($vehicule,$id) {
            $photo = Photo::find($id);
            $path = $photo->lien;
            if (Storage::exists($path)){
                Storage::delete($path);
            }else{
                //die('taz:'.$path);
            }
            $photo->delete();
            return redirect("/photos/$vehicule");
    }

}
