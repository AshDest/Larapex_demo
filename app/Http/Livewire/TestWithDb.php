<?php

namespace App\Http\Livewire;

use App\Models\Vente;
use Livewire\Component;
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;

class TestWithDb extends Component
{
    public function render()
    {
        $products = Vente::selectRaw('MONTH(date) as month, produit, SUM(prix) as total')
            ->groupBy('month')->groupBy('produit')
            ->get();
        $data = [];
        foreach ($products as $product) {
            $data['produit'][] = $product->produit;
            $data['data'][] = $product->total;
            $data['labels'][] = date('M', mktime(0, 0, 0, $product->month, 1));
        }
        foreach ($data['data'] as $item => $value) {
            $dataset[] = [
                'data' => $value
            ];
        }
        dd($dataset);
        $chart = LarapexChart::lineChart()
            ->setTitle('Sales during 2021.')
            ->setSubtitle('Physical sales vs Digital sales.')
            ->setDataset(
                [$dataset]
            )
            ->setXAxis($data['labels']);
        return view('livewire.test-with-db', compact('chart'));
    }
}
