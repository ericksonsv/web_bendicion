<?php

namespace App\Http\Controllers;

use App\Models\LinkCategory;
use Exception;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $linkCategories = LinkCategory::query()
            ->where('is_active', true)
            ->get();
        return view('dashboard', compact('linkCategories'));
    }

    public function links($id)
    {
        $linkCategory = LinkCategory::query()->where('id',$id)->with('links')->first();
        if ($linkCategory != null) {
            return view('dashboard.links', compact('linkCategory'));
        } else {
            return abort(404);
        }
        
    }
}
