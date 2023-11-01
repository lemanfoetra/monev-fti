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
                    <form method="POST" action="{{ url('user/store') }}">
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
                                <label class="col-3 col-form-label required">Nama Lengkap</label>
                                <div class="col">
                                    <input type="text" class="form-control" id="input1" value="{{ $data->name ?? old('name') }}" name="name" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-3 col-form-label required">Email</label>
                                <div class="col">
                                    <input type="text" class="form-control" id="input2" value="{{ $data->email ?? old('email') }}" name="email" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-3 col-form-label required">Role</label>
                                <div class="col">
                                    <select class="form-control" name="role_code" required>
                                        <option value="">Pilih Role</option>
                                        @if(count($roles) > 0)
                                        @foreach($roles as $role)
                                        <option value="{{ $role->role_code }}" {{ ($data->role_code ?? '') == $role->role_code ? 'selected' : '' }}>
                                            {{ $role->name }}
                                        </option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-3 col-form-label required">Fakultas</label>
                                <div class="col">
                                    <select class="form-control" name="id_fakultas" onchange="list_prodi(this.value)" required>
                                        <option value="">Pilih</option>
                                        @if(count($fakultas) > 0)
                                        @foreach($fakultas as $fkl)
                                        <option value="{{ $fkl->id }}" {{ ($data->id_fakultas ?? '') == $fkl->id ? 'selected' : '' }}>
                                            {{ $fkl->nama }}
                                        </option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-3 col-form-label">Prodi</label>
                                <div class="col">
                                    <select class="form-control" id="id_prodi" name="id_prodi" onchange="list_kelas(this.value)">
                                        <option value="">Pilih</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-3 col-form-label">Kelas</label>
                                <div class="col">
                                    <select class="form-control" id="id_kelas" name="id_kelas">
                                        <option value="">Pilih</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-3 col-form-label">Kode Dosen</label>
                                <div class="col">
                                    <input type="text" class="form-control" id="input2" value="{{ $data->kode ?? old('kode') }}" name="kode">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-3 col-form-label">NIDN</label>
                                <div class="col">
                                    <input type="text" class="form-control" id="input2" value="{{ $data->nidn ?? old('nidn') }}" name="nidn">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-3 col-form-label">NPM</label>
                                <div class="col">
                                    <input type="number" class="form-control" id="input2" value="{{ $data->npm ?? old('npm') }}" name="npm">
                                </div>
                            </div>

                            @if(isset($data->password))
                            <br>
                            <div class="alert alert-danger" role="alert">
                                Kosongkan bagian input password bila tidak ingin merubah password.
                            </div>
                            @endif

                            <div class="mb-3 row">
                                <label class="col-3 col-form-label required">Pasword</label>
                                <div class="col">
                                    <input type="text" class="form-control" id="password" name="password">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-3 col-form-label required">Password Konfirmasi</label>
                                <div class="col">
                                    <input type="text" class="form-control" id="password_confirmation" name="password_confirmation">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $(function() {
        if ("{{ $data->id ?? '' }}" != '') {
            $("#password").attr("autocomplete", "off");
        }

        if ("{{ $data->id_fakultas ?? '' }}" != '') {
            list_prodi("{{ $data->id_fakultas ?? '' }}");
        }

        if ("{{ $data->id_prodi ?? '' }}" != '') {
            list_kelas("{{ $data->id_prodi ?? '' }}");
        }
    });

    function list_prodi(id_fakultas) {
        $.ajax({
            type: 'GET',
            url: "{{ route('requestdata.prodi') }}",
            data: {
                'id_fakultas': id_fakultas,
                'id': "{{ $data->id_prodi ?? '' }}",
            },
            success: function(response) {
                $('#id_prodi').html(response);
            },
            error: function(data) {
                alert('bermasalah saat memproses data.');
            }
        });
    }

    function list_kelas(id_prodi) {
        $.ajax({
            type: 'GET',
            url: "{{ route('requestdata.kelas') }}",
            data: {
                'id_prodi': id_prodi,
                'id': "{{ $data->id_kelas ?? '' }}",
            },
            success: function(response) {
                $('#id_kelas').html(response);
            },
            error: function(data) {
                alert('bermasalah saat memproses data.');
            }
        });
    }
</script>
@endsection