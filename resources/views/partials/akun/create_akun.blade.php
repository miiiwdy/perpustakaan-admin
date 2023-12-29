<!-- Modal -->
<div class="modal fade" id="createAkun" tabindex="-1" role="dialog" aria-labelledby="createAkunLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createAkunLabel">Tambah Buku</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('akun.create') }}" method="POST"> 
            @csrf 
            <div class="modal-body container-fluid"> 
                <div class="mb-3"> 
                    <label for="nama" class="form-label">nama Buku</label> 
                    <input autocomplete="off" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}"> 
                    @error('nama') 
                        <div class="invalid-feedback">{{ $message }}</div> 
                    @enderror 
         
                    <label for="kelas" class="form-label">kelas</label> 
                    <input autocomplete="off" type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" name="kelas" value="{{ old('kelas') }}"> 
                    @error('kelas') 
                        <div class="invalid-feedback">{{ $message }}</div> 
                    @enderror 
         
                    <label for="email" class="form-label">email</label> 
                    <input autocomplete="off" type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}"> 
                    @error('email') 
                        <div class="invalid-feedback">{{ $message }}</div> 
                    @enderror 

                    <label for="password" class="form-label">password</label> 
                    <input autocomplete="off" type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}"> 
                    @error('password') 
                        <div class="invalid-feedback">{{ $message }}</div> 
                    @enderror 
        
                </div> 
            </div> 
            <div class="modal-footer"> 
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn bg-gradient-primary">Save changes</button> 
            </div> 
        </form>
      </div>
      
    </div>
  </div>
</div>