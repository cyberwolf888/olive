@extends('layouts.master')

@section('content')
asdad
@endsection

@push('plugin_scripts')
<script src="{{ url('assets/master') }}/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="{{ url('assets/master') }}/plugins/counter-up-master/jquery.counterup.min.js"></script>
<script src="{{ url('assets/master') }}/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="{{ url('assets/master') }}/plugins/chart.js/chart.min.js"></script>
<script src="{{ url('assets/master') }}/plugins/flot/jquery.flot.min.js"></script>
<script src="{{ url('assets/master') }}/plugins/flot/jquery.flot.time.min.js"></script>
<script src="{{ url('assets/master') }}/plugins/flot/jquery.flot.symbol.min.js"></script>
<script src="{{ url('assets/master') }}/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="{{ url('assets/master') }}/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="{{ url('assets/master') }}/plugins/curvedlines/curvedLines.js"></script>
<script src="{{ url('assets/master') }}/plugins/peity/jquery.peity.min.js"></script>
@endpush

@push('scripts')
<script src="{{ url('assets/master') }}/js/pages/dashboard.js"></script>
@endpush