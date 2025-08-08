<?php

namespace App\Http\Controllers;

use App\Models\Fitness;
use IcehouseVentures\LaravelChartjs\Facades\Chartjs;
use Illuminate\Http\Request;

class FitnessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chart = Chartjs::build()
            ->name('Weight')
            ->type('line')
            ->size(['width' => 400, 'height' => 200])
            ->labels(['January', 'February', 'March', 'April', 'May', 'June', 'July'])
            ->datasets([
                [
                    "label" => "Weight",
                    'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                    'borderColor' => "rgba(38, 185, 154, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    "data" => [65, 59, 80, 81, 56, 55, 40],
                    "fill" => false,
                ]
            ])
            ->options([]);

        return view('fitness.index', compact('chart'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Fitness $fitness)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fitness $fitness)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fitness $fitness)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fitness $fitness)
    {
        //
    }
}
