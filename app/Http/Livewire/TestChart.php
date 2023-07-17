<?php

namespace App\Http\Livewire;

use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;
use Livewire\Component;

class TestChart extends Component
{
    public function render()
    {
        $chart = LarapexChart::lineChart()
            ->setTitle('Test Chart')
            ->addData('Test 1', [40, 50, 30, 60, 50, 70, 40])
            ->addData('Test 2', [10, 30, 40, 50, 20, 80, 10])
            ->setXAxis(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']);
        return view('livewire.test-chart', compact('chart'));
    }
}