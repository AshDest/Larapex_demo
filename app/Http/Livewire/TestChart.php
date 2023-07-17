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

        $chart2 = LarapexChart::donutChart()
            ->setTitle('Top 3 scorers of the team.')
            ->setSubtitle('Season 2021.')
            ->addData([20, 24, 30])
            ->setLabels(['Player 7', 'Player 10', 'Player 9']);
        $chart3 = LarapexChart::radialChart()
            ->setTitle('Top 3 scorers of the team.')
            ->setSubtitle('Season 2021.')
            ->addData([20, 24, 30])
            ->setLabels(['Player 7', 'Player 10', 'Player 9']);
        $chart4 = LarapexChart::radarChart()
            ->setTitle('Individual Player Stats.')
            ->setSubtitle('Season 2021.')
            ->addData('Stats', [70, 93, 78, 97, 50, 90])
            ->setXAxis(['Pass', 'Dribble', 'Shot', 'Stamina', 'Long shots', 'Tactical'])
            ->setMarkers(['#303F9F'], 7, 10);
        $chart5 = LarapexChart::barChart()
            ->setTitle('San Francisco vs Boston.')
            ->setSubtitle('Wins during season 2021.')
            ->addData('San Francisco', [6, 9, 3, 4, 10, 8])
            ->addData('Boston', [7, 3, 8, 2, 6, 4])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
        $chart6 = LarapexChart::areaChart()
            ->setTitle('Sales during 2021.')
            ->setSubtitle('Physical sales vs Digital sales.')
            ->addData('Physical sales', [40, 93, 35, 42, 18, 82])
            ->addData('Digital sales', [70, 29, 77, 28, 55, 45])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
        $chart7 = LarapexChart::lineChart()
            ->setTitle('Sales during 2021.')
            ->setSubtitle('Physical sales vs Digital sales.')
            ->addData('Physical sales', [40, 93, 35, 42, 18, 82])
            ->addData('Digital sales', [70, 29, 77, 28, 55, 45])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
        $chart8 = LarapexChart::polarAreaChart()
            ->setTitle('Top 3 scorers of the team.')
            ->setSubtitle('Season 2021.')
            ->addData([20, 24, 30])
            ->setLabels(['Player 7', 'Player 10', 'Player 9']);
        return view('livewire.test-chart', compact('chart', 'chart2', 'chart3', 'chart4', 'chart5', 'chart6', 'chart7', 'chart8'));
    }
}
