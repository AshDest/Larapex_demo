<div>
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-6">
                {!! $chart->container() !!}
                <script src="{{ $chart->cdn() }}"></script>
                {{ $chart->script() }}
            </div>
        </div>
    </div>
</div>
