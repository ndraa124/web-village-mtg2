<form class="user" action="{{ url('auth') }}" method="POST">
  @csrf

  <div class="form-group">
    <input type="text" name="nik" class="form-control form-control-user" id="nik" aria-describedby="nikHelp" placeholder="Masukkan NIK..." value="{{ old('nik') }}">

    @error('nik')
    <div class="text-danger small">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="form-group">
    <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password" value="{{ old('password') }}">

    @error('password')
    <div class="text-danger small">
      {{ $message }}
    </div>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary btn-user btn-block">Masuk</button>
</form>