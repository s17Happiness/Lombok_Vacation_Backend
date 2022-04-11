@push('styles')
   <link rel="stylesheet" href={{asset('css/kelola_user.css')}}>
@endpush
@extends("layout.main")
@section('content')
    <div class="row">
        {{-- <img class="Logo" src="./asset/logo2revisi.png" alt=""> --}}
        <h3><span class="title">Lombok Vacation Property Detail</span></h3>
        <h3><span class="head">{{ $title }}</span></h3>
{{-- 
        <form>
            <div class="mb-2">
                <input type="cari" class="form-control" id="myInput" placeholder="Cari">
            </div>
        </form> --}}

        <div class="header_fixed table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Role</th>
                        <th>Tgl Dibuat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results as $key => $result)
                        <tr>
                            <td>{{ $result->id}}</td>
                            <td>{{ $result->name }}</td>
                            <td>{{ $result->email }}</td>
                            <td>{{ $result->no_hp }}</td>
                            <td>{{ $result->role }}</td>
                            <td>{{ $result->created_at }}</td>
                            <td>
                                {{-- <form action="{{ url('admin/kelola-user/' . $result->id) }}" method="POST">
                                    @csrf
                                    <a href="{{ url('property/' . $id . '/update-unit' . '/' . $result->id) }}"><button type="button" class="btn1 btn-warning"><i class="fas fa-edit"></i></button></a>
                                    <button type="submit" class="btn1 btn-danger"><i class="far fa-trash-alt"></i></button>
                                    <a href="#" id="tambahFacilities" data-toggle="modal" data-target="#tambahModal"><button type="button" class="btn1 btn-success"><i class="fa-solid fa-plus"></i></button></a>
                                </form> --}}
                                <a href="#" id="editUser" data-toggle="modal" data-target="#editModal" data-id="{{ $result->id }}"><button type="button" class="btn1 btn-warning"><i class="fas fa-edit"></i></button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <img class="gambar1" src="/image/Decore.png" alt="">


    {{-- <div>
        <select name="cars" id="cars">
            @foreach ($facilities as $key => $facility)
                <option value="{{ $facility->facility_name }}">{{ $facility->facility_name }}</option>
            @endforeach
        </select>
    </div> --}}
    <!-- The Modal -->
    {{-- <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Some text in the Modal..</p>
        </div>
  
    </div> --}}
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">User Edit</h5>
            </div>
            <form id=editUserForm method="post">
                <div class="modal-body" style="padding-bottom: 5px">
                    @csrf
                    @method("PUT")
                    <form>
                        <div class="form-group row mb-4">
                            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" readonly id="nama" name="nama" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="inputNama" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" readonly id="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="inputNoHp" class="col-form-label">No. HP</label>
                            <div class="col-sm-12">
                                <input name="noHP" id="noHP" readonly class="form-control"></input>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="update-role" class="col-form-label">Role:</label>
                            {{-- <div class="col-sm-5"> --}}
                            <select class="form-select" name="role" id="role">
                                <option value="user">user</option>
                                <option value="mitra">mitra</option>
                                <option value="admin">admin</option>
                            </select>
                            {{-- </div> --}}
                        </div>
                        <div class="form-group row">
                            <label for="btnSimpan" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-1">
                                <input class="btn btn-success text-center mb-3" type="submit" value="Simpan">
                            </div>
                        </div>
                    </form>
                </div>
            </form>
          </div>
        </div>
      </div>
    @push('script')
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('body').on('click', '#editUser', function (e) {
                e.preventDefault();
                var id = $(this).data('id');
                // console.log(id);
    
                $.get('user/' + id, function (data) {
                    $('#editModal').modal('show');
                    console.log(data);
                    $('#nama').val(data.name);
                    $('#email').val(data.email);
                    $('#noHP').val(data.no_hp);
                    $('#role').val(data.role).change();
                    $('#editUserForm').attr('action', '/admin/kelola-user/role-update/' + id);
                    // $('#editUserForm').attr('action', 'user/' + id);
                })
            });
        });
    </script>
    @endpush
@endsection