<?php

namespace App\Http\Livewire;

use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;
use Livewire\Component;

class TestChart extends Component
{
    public function render()
    {
        $chart = LarapexChart::pieChart()
            ->setTitle('Top 3 scorers of the team.')
            ->setSubtitle('Season 2021.')
            ->addData([40, 50, 30])
            ->setLabels(['Player 7', 'Player 10', 'Player 9']);
        return view('livewire.test-chart', compact('chart'));
    }
}
