<x-app-layout title="Tambah Data Admin">
    <div class="col-10">
        <form class="" method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
            @csrf
            <label for="exampleFormControlInput1" class="form-label">Nama Lengkap Admin</label>
            <input type="text" class="form-control" name="nama_admin" value="{{ old('nama_admin') }}">
            @if ($errors->has('nama_admin'))
                <p class="text-danger">{{ $errors->first('nama_admin') }} </p>
            @endif
            <div class="row mt-3">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <p class="text-danger">{{ $errors->first('email') }} </p>
                        @endif
                    </div>
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="text" class="form-control" name="password" value="{{ old('password') }}">
                    @if ($errors->has('password'))
                        <p class="text-danger">{{ $errors->first('password') }} </p>
                    @endif
                </div>
            </div>
            <button class="btn btn-primary ps-5 mt-5" type="submit"><i class="fas fa-save"></i> &nbsp;Simpan</button>
        </form>
    </div>


</x-app-layout>
