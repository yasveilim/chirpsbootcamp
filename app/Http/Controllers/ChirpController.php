<?php
namespace App\Http\Controllers;

use App\Events\ChirpCreated;
use App\Models\Chirp;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('chirps', [
            //
        ]);
    }

   
    public function store(Request $request)
    {
        $chirp = Chirp::create($request->all());
        ChirpCreated::dispatch($chirp);

        // ...existing code...
    }
}