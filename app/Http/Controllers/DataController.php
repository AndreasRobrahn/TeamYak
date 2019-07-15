<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DataController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  
    public function SaveNewUser(Request $request)
    {
      //$user -> New User;
      //$user->name = $request->Name;
    }

    public function ShowAllVideos()
    {
        $arrayWithVideos = array();
        $directory = "./videos";
        // Test, ob es sich um ein Verzeichnis handelt
        if(is_dir( $directory ))
        {
            // öffnen des Verzeichnisses
          if ( $handle = opendir($directory) )
          {
          // einlesen der Verzeichnisses
            while (($file = readdir($handle)) !== false)
            {
                if($file != '.' &&  $file !='..')
                {
                  $arrayWithVideos[] = $file;
                }

            }
            closedir($handle);
          }
        }
        else {
          die('falsches Verzeichnis');
        }
      return view('allvideos', compact('arrayWithVideos'));
    }
}
