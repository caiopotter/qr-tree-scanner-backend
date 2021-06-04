<?php

namespace App\Http\Controllers;

use App\QRCode;
use App\Tree;
use App\User;
use App\TreePicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TreeController extends Controller{
    public function registerTree(Request $request){
        $treeData = ([
            'common_name' => $request->common_name,
            'scientific_name' => $request->scientific_name,
            'feature' => $request->feature,
            'origin' => $request->origin,
            'wood_type' => $request->wood_type,
            'utility' => $request->utility,
        ]);

        $tree = Tree::create($treeData);

        return response()->json($tree, 200);
    }

    public function getTreesNumber(){
        $treesNumber = Tree::all()->count();
        return response()->json($treesNumber, 200);
    }

    public function getTreeByCode(Request $request){
        $codeId = DB::table('q_r_codes')->where('code', $request->code)->value('id');    
        return QRCode::find($codeId)->tree;
    }

    public function setUserDiscoveredTree(Request $request){
        $tree = Tree::find($request->treeId);
        $tree->users()->attach($request->userId);

        return 'Árvore descoberta com sucesso';
    }

    public function getTreeComments(Request $request){
        $tree = Tree::find($request->treeId);
        $treeComments = $tree->comments()->get();
        foreach($treeComments as $comment){
            $comment->user = User::find($comment->user_id, 'name');
        }
        return $treeComments;
    }

    public function getTreeShortFeatures(Request $request){
        $tree = Tree::find($request->treeId);
        $treeShortFeatures = $tree->shortFeatures()->get();
        return $treeShortFeatures;
    }

    public function getTreePictures(Request $request){
        $treesPictures = TreePicture::where('tree_id', $request->treeId)->get();
        return response()->json($treesPictures, 200);
    }

    public function getTreesCoverPictures(){
        return response()->json(DB::table('tree_pictures')->where('is_cover', 1)->get(), 200);
    }

}
