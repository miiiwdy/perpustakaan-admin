<!-- Modal -->
<div class="modal fade" id="editAkun_{{ $siswa->id }}" tabindex="-1" role="dialog" aria-labelledby="editAkunLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editAkunLabel">Edit Siswa</h5> 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('akun.edit', ['id' => $siswa->id]) }}" method="POST"> 
            @csrf
            @method('PUT')
            <input type="hidden" id="editAkunId" value="{{ $siswa->id }}"> 
            <div class="modal-body container-fluid"> 
                <div class="mb-3"> 
                    <label for="nama" class="form-label">nama Buku</label> 
                    <input autocomplete="off" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $siswa->nama) }}"> 
                    @error('nama') 
                        <div class="invalid-feedback">{{ $message }}</div> 
                    @enderror 
         
                    <label for="kelas" class="form-label">kelas</label> 
                    <input autocomplete="off" type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" name="kelas" value="{{ old('kelas', $siswa->kelas) }}"> 
                    @error('kelas') 
                        <div class="invalid-feedback">{{ $message }}</div> 
                    @enderror 
         
                    <label for="email" class="form-label">email</label> 
                    <input autocomplete="off" type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $siswa->email) }}"> 
                    @error('email') 
                        <div class="invalid-feedback">{{ $message }}</div> 
                    @enderror 
         
                    <label for="password" class="form-label">Stok Buku</label> 
                    <input autocomplete="off" type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password', $siswa->password) }}"> 
                    @error('password') 
                        <div class="invalid-feedback">{{ $message }}</div> 
                    @enderror 
                </div> 
            </div> 
            <div class="modal-footer"> 
                <button type="submit" class="btn bg-gradient-primary">Save changes</button> 
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div> 
        </form>
      </div>
    </div>
  </div>
</div>