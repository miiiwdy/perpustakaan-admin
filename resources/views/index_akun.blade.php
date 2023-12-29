@extends('layouts.main_index_akun')
@section('main_index')
    {{-- content --}}
    <div class="container-fluid py-4">
        <div class="container-fluid py-4">
            <!-- Button trigger modal -->
            <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#createAkun">
                Tambah siswa
            </button>
            @include('partials.akun.create_akun')
            <div class="row">
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-header pb-0">
                    <h6>Akun Siswa</h6>
                  </div>
                  <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelas</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Password</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                          </tr>
                        </thead>
                        <tbody class="pe-2">
                          @foreach ($siswas as $siswa)
                          <tr>
                            <td>
                                <p class="text-xs text-secondary mb-0 ps-3">{{ $siswa->nama }}</p>
                            </td>
                              <td>
                                <p class="text-xs text-secondary mb-0 ps-3">{{ $siswa->kelas }}</p>
                            </td>
                            <td>
                                <p class="text-xs text-secondary mb-0 ps-3">{{ $siswa->email }}</p>
                            </td>
                            <td>
                                <p class="text-xs text-secondary mb-0 ps-3">{{ $siswa->password }}</p>
                              </td>
                            <td class="d-flex">
                                <form action="{{ route("akun.delete", $siswa->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mx-1">Delete</button>

                                </form>
                                 <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editAkun_{{ $siswa->id }}" data-book-id={{ $siswa->id }}>
                                    Edit Akun
                                </button>
                                @include('partials.akun.edit_akun')
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection
