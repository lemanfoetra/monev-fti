<option value="">Pilih</option>
@foreach($prodies ?? [] as $prodi)
<option value="{{ $prodi->id }}" {{ $id == $prodi->id ? 'selected' : '' }}>
    {{ $prodi->kode }} - {{ $prodi->nama }}
</option>
@endforeach