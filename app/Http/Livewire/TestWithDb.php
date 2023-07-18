<?php

namespace App\Http\Livewire;

use App\Models\Vente;
use Livewire\Component;
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;

class TestWithDb extends Component
{
    public function render()
    {
        $products = Vente::selectRaw('MONTH(date) as month, SUM(prix) as total')
            ->groupBy('month')
            ->get();
        $data = [];
        foreach ($products as $product) {
            $data['data'][] = $product->total;
            $data['labels'][] = date('M', mktime(0, 0, 0, $product->month, 1));
        }
        $chart = LarapexChart::pieChart()
            ->setTitle('Top Scrore des ventes')
            ->setSubtitle('Season 2021.')
            ->addData($data['data'])
            ->setLabels($data['labels']);
        return view('livewire.test-with-db', compact('chart'));
    }
}
