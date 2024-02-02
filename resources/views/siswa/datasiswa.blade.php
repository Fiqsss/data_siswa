<div class="siswacontainer " style="padding-top: 6rem">
    <div class="search mb-5">
        <form action="{{ route('home') }}" method="GET" class="position-relative d-flex justify-content-center px-4"
            style="width: 100%; ">
            @csrf
            <input name="search" class="form-control shadow" type="search" placeholder="cari siswa">
            <button class="btn position-absolute bg-success text-white px-2" style="right:0">Search</button>
        </form>
    </div>

    <div class="buton-select d-flex justify-content-start">
        <div class="dropdown me-4">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Lembaga
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('home', ['lembaga' => '']) }}">All data</a></li>
                <li><a class="dropdown-item" href="{{ route('home', ['lembaga' => 'latiseducation']) }}">Latiseducation</a></li>
                <li><a class="dropdown-item" href="{{ route('home', ['lembaga' => 'tutorindonesia']) }}">Tutorindonesia</a></li>
            </ul>
        </div>
        <a href="{{ route('createsiswa') }}" class="btn btn-primary me-3">Tambah Siswa</a>
        <a href="{{ route('export.siswa', ['search' => request('search'), 'lembaga' => request('lembaga')]) }}" class="btn btn-success">Export to Excel</a>

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
                        <a href="/formeditsiswa/{{ $siswa->id }}" class="btn btn-warning ">Edit</a>
                        <a href="/deletesiswa/{{ $siswa->id }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $dataSiswa->links() }}

</div>
