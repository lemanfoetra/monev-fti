@extends('template.template_tabler')
@section('title', $title ?? '-')

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
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            {{ $title_form ?? '-' }}
                        </h4>
                    </div>
                    <form method="POST" action="{{ url('role/store') }}">
                        <div class="card-body">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <input type="hidden" name="id" value="{{ $data->id ?? '' }}">
                            @csrf

                            <div class="mb-3 row">
                                <label class="col-3 col-form-label">Role Code</label>
                                <div class="col">
                                    <input type="text" class="form-control" id="input1" value="{{ $data->role_code ?? old('role_code') }}" placeholder="Role code harus unik" name="role_code">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-3 col-form-label required">Nama Role</label>
                                <div class="col">
                                    <input type="text" class="form-control" id="input2" value="{{ $data->name ?? old('name') }}" name="name" placeholder="Misalnya : Admin, Sales ...">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('role.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection