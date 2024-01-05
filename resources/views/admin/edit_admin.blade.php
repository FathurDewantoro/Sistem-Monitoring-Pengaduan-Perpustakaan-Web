<x-app-layout title="Edit Data Admin">
    <div class="col-10">
        <form class="" method="POST" action="{{ route('admin.update', $admin->no_admin) }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama_admin" value="{{ $admin->nama_admin }}">
            @if ($errors->has('nama_admin'))
                <p class="text-danger">{{ $errors->first('nama_admin') }} </p>
            @endif
            <div class="row mt-3">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">Username</label>
                        <input type="text" class="form-control" name="email" value="{{ $admin->email }}">
                        @if ($errors->has('email'))
                            <p class="text-danger">{{ $errors->first('email') }} </p>
                        @endif
                    </div>
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="text" class="form-control" name="password">
                    <p style="font-style: italic; font-size: 12px;" class="text-warning">*Kosongkan password jika tidak ingin merubah password</p>
                    @if ($errors->has('password'))
                        <p class="text-danger">{{ $errors->first('password') }} </p>
                    @endif
                </div>
            </div>

            <button class="btn btn-primary ps-5" type="submit"><i class="fas fa-edit"></i> &nbsp;Perbarui Data</button>
        </form>
    </div>
</x-app-layout>
