<x-app-layout title="Daftar Admin">
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            {{ session('info') }}
        </div>
    @endif
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary mt-2">Table Admin</h6>
            <a href="{{ route('admin.create') }}" class="btn btn-primary">Tambah Data &nbsp; <i
                    class="fas fa-plus"></i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Admin</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admin as $dataadmin)
                            <tr>
                                <td>{{ $dataadmin->nama_admin }}</td>
                                <td>{{ $dataadmin->email }}</td>
                                <td class="d-flex">
                                    <a href="/admin/{{ $dataadmin['no_admin'] . '/edit' }}"
                                        class="btn btn-sm btn-success mr-1"><i class="fas fa-edit"></i> Edit</a>
                                    <form method="post" action="{{ route('admin.destroy', $dataadmin->no_admin) }}">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-sm btn-danger mr-1" type="submit"><i
                                                class="fas fa-trash"></i> Hapus</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
