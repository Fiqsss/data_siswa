<div class="siswacontainer ">
    <div class="search mb-5">
        <form action="{{ route('home') }}" method="GET" class="position-relative d-flex justify-content-center px-4"
            style="width: 100%; ">
            @csrf
            <input name="search" class="form-control shadow" type="search" placeholder="cari siswa">
            <button class="btn position-absolute bg-success text-white px-2" style="right:0">Search</button>
        </form>
    </div>

    <div class="buton-select d-flex justify-content-start mb-3">
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle  me-4 " href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Lembaga
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('home', ['lembaga' => '']) }}">All data</a></li>
                <li><a class="dropdown-item" href="{{ route('home', ['lembaga' => 'latiseducation']) }}">Latiseducation</a></li>
                <li><a class="dropdown-item" href="{{ route('home', ['lembaga' => 'tutorindonesia']) }}">Tutorindonesia</a></li>
            </ul>
        </div>
        <a href="{{ route('createsiswa') }}" class="btn btn-primary mx-3"><i class="fas fa-plus-circle"></i> Add</a>
        <a href="{{ route('export.siswa', ['search' => request('search'), 'lembaga' => request('lembaga')]) }}" class="btn btn-success"><i class="fas fa-file-export"> Excel </i></a>

    </div>
    <table class="table mx-auto text-center shadow">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Lembaga</th>
                <th scope="col">NIS</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Email</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php $i = 1; ?>
            @foreach ($dataSiswa as $siswa)
                <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{ $siswa->lembaga }}</td>
                    <td>{{ $siswa->nis }}</td>
                    <td>{{ $siswa->nama_siswa }}</td>
                    <td>{{ $siswa->email }}</td>
                    <td><img style="width: 5rem; height:5rem;" src="{{ asset('fotosiswa/' . $siswa->foto) }}"
                            alt=""></td>
                    <td>
                        <a href="/formeditsiswa/{{ $siswa->id }}" class="btn btn-warning "><i class="fas fa-edit"></i></a>
                        <a href="/deletesiswa/{{ $siswa->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                        <a href="/detailsiswa/{{ $siswa->id }}" class="btn btn-success"><i class="fas fa-eye"></i></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $dataSiswa->links() }}

</div>
