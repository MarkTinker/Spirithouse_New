<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    // Download a file with path
    public function getDownload(Request $request)
    {

        $filetype = $request->filetype;
        $filename = $request->filename;

        if($filetype == 1)
        {
            $basedir = 'files/';
            $filetype = 'pdf';
            $filename = $basedir.preg_replace("[^A-Za-z0-9]", "", $filename).".".$filetype;
        } 
        else if ($filetype == 2)
        {
            $basedir='files/';
            $filetype='zip';
            $filename = $basedir.preg_replace("[^A-Za-z0-9]", "",$filename).".".$filetype;
        }
        else
        {

        }

        $file_extension = strtolower(substr(strrchr($filename,"."),1));
        if (! file_exists( $filename ) )
        {
        };

        switch( $file_extension )
        {
        case "pdf": $ctype="application/pdf"; break;
        case "exe": $ctype="application/octet-stream"; break;
        case "zip": $ctype="application/zip"; break;
        case "doc": $ctype="application/msword"; break;
        case "xls": $ctype="application/vnd.ms-excel"; break;
        case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
        case "gif": $ctype="image/gif"; break;
        case "png": $ctype="image/png"; break;
        case "jpe":
        case "jpeg":
        case "jpg": $ctype="image/jpg"; break;
        default: $ctype="application/force-download";
        }
        header("Pragma: public"); // required
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: private",false); // required for certain browsers
        header("Content-Type: $ctype");
        header("Content-Disposition: attachment; filename=".str_replace(" ", "_", basename($filename)).";" );
        header("Content-Transfer-Encoding: binary");
        header("Content-Length: ".@filesize($filename));
        @readfile("$filename") or die("File not found.");
    }

}
