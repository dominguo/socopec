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
    public function index()
    {
        $photos = Photo::all();

        return view('photos.index', ['photos' => $photos]);
    }

    public function add($vehicule) {
            $file = Request::file('photo');
            $extension = $file->getClientOriginalExtension();
            $path = "photos/vehicule/$vehicule/".$file->getClientOriginalName();

            Storage::disk('local')->put($path,  File::get($file));
            $photo = new Photo();
            $photo->nom = $file->getClientOriginalName();
            $photo->lien = $path;

            $photo->save();

        return redirect('photos/index');
    }

    public function delete() {
            $file = Request::file('photo');
            $extension = $file->getClientOriginalExtension();
            Storage::disk('local')->put("photos/vehicule/".$vehicule."/".$file->getClientOriginalName().'.'.$extension,  File::get($file));

        return redirect('photos/index');
    }

}
