<x-app-layout title="Data Pengaduan">
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
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary mt-2">Table Pengaduan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Pengaduan</th>
                            <th>Nama Anggota</th>
                            <th>Tanggal</th>

                            <th>Status</th>
                            <th>Bukti</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengaduan as $dataPengaduan)
                            <tr>
                                <td>{{ $dataPengaduan->no_pengaduan }}</td>
                                <td>{{ $dataPengaduan->jenis_pengaduan }}</td>
                                <td>{{ $dataPengaduan->nama_anggota }}</td>
                                <td>{{ $dataPengaduan->tgl_pengaduan }}</td>
                                <td>{{ $dataPengaduan->status_aduan }}</td>
                                <td class="text-center"><img
                                        src="{{ url('storage/images/bukti_aduan/' . $dataPengaduan->bukti_aduan) }}"
                                        width="100">
                                </td>



                                <td class="d-flex">
                                    <a href="/pengaduan/{{ $dataPengaduan['no_pengaduan'] . '/edit' }}"
                                        class="btn btn-sm btn-success mr-1"><i class="fas fa-edit"></i>
                                        Perbarui</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
