<x-app-layout title="Perbarui Data Pengaduan">
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            {{ session('info') }}
        </div>
    @endif
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <!-- DataTales Example -->
    <hr>
    <div class="row">
        <div class="col">
            <p class="mb-0 mt-1">Nomor Pengaduan</p>
            <h5>{{ $pengaduan->no_pengaduan }}</h5>

            <p class="mb-0 mt-4">Jenis Pengaduan</p>
            <h5>{{ $pengaduan->jenis_pengaduan }}</h5>

            <p class="mb-0 mt-5">Tanggal Pengaduan</p>
            <h5>{{ $pengaduan->tgl_pengaduan }}</h5>


        </div>
        <div class="col">
            <p class="mb-0 mt-1">Nama Anggota</p>
            <h5>{{ $pengaduan->nama_anggota }}</h5>

            <p class="mb-0 mt-4">ID Anggota</p>
            <h5>{{ $pengaduan->no_anggota }}</h5>

            <p class="mb-0 mt-5">Tanggal Pengaduan</p>
            <h5>{{ $pengaduan->tgl_pengaduan }}</h5>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-8">
            <p>Aduan</p>
            <textarea name="" disabled id="" cols="10" rows="2" class="form-control">{{ $pengaduan->aduan }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-5">
            <p class="mt-4 mb-2">Status Aduan</p>
            <form action="/pengaduan/{{ $pengaduan->no_pengaduan }}" method="POST">
                @csrf
                @method('put')

                <select name="status_aduan" id="" class="form-control">
                    <option value="Menunggu Konfirmasi Petugas"
                        {{ $pengaduan->status_aduan == 'Menunggu Konfirmasi Petugas' ? 'selected' : '' }}>Menunggu
                        Konfirmasi Petugas</option>
                    <option value="Pengaduan Sudah Dikonfirmasi Petugas"
                        {{ $pengaduan->status_aduan == 'Pengaduan Sudah Dikonfirmasi Petugas' ? 'selected' : '' }}>
                        Pengaduan Sudah Dikonfirmasi Petugas</option>
                </select>

                <button class="btn btn-primary mt-2" type="submit">Perbarui Status </button>
            </form>
        </div>
    </div>
    <p class="mt-5">Bukti Aduan</p>
    <img src="{{ url('storage/images/bukti_aduan/' . $pengaduan->bukti_aduan) }}" width="400">



</x-app-layout>
