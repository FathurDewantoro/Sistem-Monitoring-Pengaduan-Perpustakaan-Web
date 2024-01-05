<x-app-layout title="Edit Data User">
    <div class="col-10">
        <form class="" method="POST" action="{{ route('user.update', $user->no_anggota) }}"
            enctype="multipart/form-data">
            @method('put')
            @csrf
            <label for="exampleFormControlInput1" class="form-label">Nama Lengkap Anggota</label>
            <input type="text" class="form-control" name="nama" value="{{ $user->nama_anggota }}">
            @if ($errors->has('nama'))
                <p class="text-danger">{{ $errors->first('nama') }} </p>
            @endif
            <div class="row mt-3">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="{{ $user->email }}">
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
            <div class="row mt-3">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">ID Anggota</label>
                    <input type="text" class="form-control" name="id_anggota" value="{{ $user->id_anggota }}">
                    @if ($errors->has('id_anggota'))
                        <p class="text-danger">{{ $errors->first('id_anggota') }} </p>
                    @endif
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">Telepon</label>
                        <input type="number" class="form-control" name="telepon" value="{{ $user->no_telp }}">
                        @if ($errors->has('telepon'))
                            <p class="text-danger">{{ $errors->first('telepon') }} </p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Alamat Lengkap</label>
                    <textarea name="alamat" cols="30" rows="2" class="form-control">{{ $user->alamat }}</textarea>
                </div>
            </div>
            <button class="btn btn-primary ps-5 mt-5" type="submit"><i class="fas fa-save"></i> &nbsp;Simpan</button>
        </form>
    </div>
</x-app-layout>
