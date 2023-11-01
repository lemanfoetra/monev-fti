<option value="">Pilih</option>
@foreach($kelas ?? [] as $kel)
<option value="{{ $kel->id }}" {{ $id == $kel->id ? 'selected' : '' }}>
    {{ $kel->kode }} - {{ $kel->kelas_jenis->nama ?? '-' }}
</option>
@endforeach