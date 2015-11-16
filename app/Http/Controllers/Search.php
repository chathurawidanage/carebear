<?php
/**
 * Created by PhpStorm.
 * User: chathura widanage
 * Date: 11/14/15
 * Time: 3:40 PM
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Search extends Controller
{
    /**
     * search with the plane method
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function searchP(Request $request)
    {
        if ($request->has('zip')) {
            $zip=$request->input('zip');
            return view('search',['zip'=>$zip]);
        } else {
            return view('welcome');
        }
    }

    public function searchK($keyword){

    }
}