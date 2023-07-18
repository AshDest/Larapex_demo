<?php

namespace App\Http\Livewire;

use App\Models\Vente;
use Livewire\Component;
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;

class TestWithDb extends Component
{
    public function render()
    {
        $products = Vente::select('produit')->get();
        $values = Vente::select('prix')->get();
        $prod[] = $products->pluck('produit');
        $price[] = $values->pluck('prix');
        // dd($date);
        // $values =
        $chart = LarapexChart::pieChart()
            ->setTitle('Top Scrore des ventes')
            ->setSubtitle('Season 2021.')
            ->addData([$price])
            ->setLabels([$prod]);
        return view('livewire.test-with-db', compact('chart'));
    }
}
