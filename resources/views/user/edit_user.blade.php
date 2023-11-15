<x-app-layout title="Edit Data User">
    <div class="col-10">
        <form class="" method="POST" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" value="{{ $user->nama }}">
            @if ($errors->has('nama'))
                <p class="text-danger">{{ $errors->first('nama') }} </p>
            @endif
            <div class="row mt-3">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" value="{{ $user->username }}">
                        @if ($errors->has('username'))
                            <p class="text-danger">{{ $errors->first('username') }} </p>
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
            <div class="row ">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">Hak Akses</label>
                        <div class="input-group mb-3">
                            <select name="role" class="form-control " id="inputGroupSelect01">
                                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="pelanggan" {{ $user->role != 'admin' ? 'selected' : '' }}>Pelanggan
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">Telepon</label>
                        <input type="number" class="form-control" name="telepon" value="{{ $user->telepon}}">
                        @if ($errors->has('telepon'))
                            <p class="text-danger">{{ $errors->first('telepon') }} </p>
                        @endif
                    </div>
                </div>
            </div>
            <button class="btn btn-primary ps-5" type="submit"><i class="fas fa-edit"></i> &nbsp;Perbarui Data</button>
        </form>
    </div>
</x-app-layout>
