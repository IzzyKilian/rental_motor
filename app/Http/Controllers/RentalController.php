<?php
namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index()
    {
        return Rental::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'motor' => 'required',
            'user' => 'required',
            'rental_date' => 'required|date',
        ]);

        return Rental::create($request->all());
    }

    public function show($id)
    {
        return Rental::find($id);
    }

    public function update(Request $request, $id)
    {
        $rental = Rental::find($id);
        $rental->update($request->all());

        return $rental;
    }

    public function destroy($id)
    {
        return Rental::destroy($id);
    }
}
