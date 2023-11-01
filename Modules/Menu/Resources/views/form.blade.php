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
                    <form method="POST" action="{{ url('menu/store') }}">
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
                                <label class="col-3 col-form-label">Parrent Menu</label>
                                <div class="col">
                                    <select class="form-control select2" name="parrent_menu_id" required>
                                        <option value="0">Posisi Utama</option>
                                        <?= ($menus ?? '') ?>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-3 col-form-label required">Nama Menu</label>
                                <div class="col">
                                    <input type="text" class="form-control" id="input2" value="{{ $data->name ?? '' }}" name="name" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-3 col-form-label">Link Menu</label>
                                <div class="col">
                                    <input type="text" class="form-control" id="input3" value="{{ $data->link ?? '' }}" name="link">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-3 col-form-label required">Urutan Menu</label>
                                <div class="col">
                                    <input type="number" min="0" class="form-control" id="input4" value="{{ $data->urutan ?? '' }}" name="urutan" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-3 col-form-label">Icon (SVG Code)</label>
                                <div class="col">
                                    <textarea class="form-control" name="icon">{{ $data->icon ?? old('icon')}}</textarea>
                                </div>
                            </div>

                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('menu.index') }}" class="btn btn-secondary">Kembali</a>
                            </div>
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

</script>
@endsection