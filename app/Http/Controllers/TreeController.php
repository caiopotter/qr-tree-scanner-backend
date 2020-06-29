<?php

namespace App\Http\Controllers;

use App\Tree;
use Illuminate\Http\Request;

class TreeController extends Controller
{
    public function registerTree(Request $request)
    {
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

    public function getTrees()
    {
        $trees = Tree::all();

        return response()->json($trees, 200);
    }

}
