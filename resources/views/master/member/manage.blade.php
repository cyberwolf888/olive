@extends('layouts.master')

@push('plugin_css')
<link href="{{ url('assets/master') }}/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
<link href="{{ url('assets/master') }}/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush

@section('content')
    <main class="mn-inner">
        <div class="row">
            <div class="col s12">
                <div class="page-title">Member</div>
            </div>
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Manage Member</span>
                        <a class="waves-effect waves-light btn" href="{{ url('master/member/create') }}"><i class="material-icons left">open_in_new</i>Add New Data</a><br>
                        <table id="example" class="display responsive-table datatable-example">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>No. Handphone</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>No. Handphone</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php $no = 1; ?>
                            @foreach($model as $member)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $member->fullname }}</td>
                                <td>{{ $member->user->email }}</td>
                                <td>{{ $member->phone }}</td>
                                <td>{{ \App\User::getStatus($member->user->status) }}</td>
                                <td>
                                    <a href="{{ url(route('member.show', ['id' => $member->id])) }}" class="btn-floating blue" style="opacity: 1;"><i class="material-icons">subject</i></a>
                                    <a href="{{ url(route('member.edit', ['id' => $member->id])) }}" class="btn-floating orange" style="opacity: 1;"><i class="material-icons">mode_edit</i></a>
                                </td>
                            </tr>
                            <?php $no++; ?>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('plugin_scripts')
<script src="{{ url('assets/master') }}/plugins/sweetalert/sweetalert.min.js"></script>
<script src="{{ url('assets/master') }}/plugins/datatables/js/jquery.dataTables.min.js"></script>
@endpush

@push('scripts')
<script src="{{ url('assets/master') }}/js/pages/table-data.js"></script>
<script>
    @if (session('success'))
        $(document).ready(function () {
            swal("Success!", "{{ session('success') }}", "success");
        })
    @endif
</script>
@endpush