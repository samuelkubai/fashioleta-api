<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Return the collection of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Fetch the vendors.
        $vendors = Vendor::all();
        // Format the data in the proper form.
        // Return the response as json.
        return response()->json($vendors);
    }
}
