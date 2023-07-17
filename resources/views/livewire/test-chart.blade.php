<div>
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-6">
                {!! $chart->container() !!}
                <script src="{{ $chart->cdn() }}"></script>
                {{ $chart->script() }}
            </div>
            <div class="col-lg-6">
                {!! $chart2->container() !!}
                <script src="{{ $chart2->cdn() }}"></script>
                {{ $chart2->script() }}
            </div>
        </div>
    </div>



</div>
