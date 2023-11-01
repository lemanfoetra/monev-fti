@extends('template.template_tabler')
@section('title', $title ?? '-')

@section('style')
<link href="{{ url('template_tabler/dist/libs/datatable/datatables.css') }}" rel="stylesheet">

@endsection

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    {{ $title ?? '-' }}
                </h2>
                @if(isset($breadcrumb))
                <div style="margin-top: 5px">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" style="font-size: 13px; font-weight: 300;">
                            @foreach($breadcrumb as $i => $br)
                            @if(($i + 1) == count($breadcrumb))
                            <li class="breadcrumb-item">{{ $br['title'] ?? '-' }}</li>
                            @else
                            <li class="breadcrumb-item">
                                <a href="{{ $br['link'] ?? '#' }}">{{ $br['title'] ?? '-' }}</a>
                            </li>
                            @endif
                            @endforeach
                        </ol>
                    </nav>
                </div>
                @endif
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto">
                <div class="btn-list">
                    <?php if (permissionCreate()) { ?>
                        <a href="{{ url('user/create') }}" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            Tambah Data
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-12">
                @if ($message = Session::get('message'))
                <div class="alert alert-success  alert-block bg-white">
                    <strong>{{ $message }}</strong>
                </div>
                @endif

                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block  bg-white">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataku" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 20px;">#</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ url('template_tabler/dist/libs/datatable/datatables.js') }}"></script>
<script>
    $(document).ready(function() {
        load_data();
    });


    function load_data() {
        $('#dataku').DataTable().destroy();
        var dataTable = $('#dataku').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: '<?php echo url("user/list"); ?>',
                type: "GET",
                error: function() {}
            },
            "fnCreatedRow": function(nRow, aData, iDataIndex) {}
        });
    }
</script>
@endsection