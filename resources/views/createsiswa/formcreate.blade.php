<div class="content-form d-flex justify-content-center" style="padding: 6rem 0 6rem 0;">
    <form action="{{ route('addsiswa') }}" enctype="multipart/form-data" method="POST" class="shadow py-3"
        style="padding: 0 8rem 0 8rem ; width: 50rem;">
        @csrf
        <legend>Tambah Data Siswa</legend>
        <div class="mb-3">
            <label for="lembaga" class="form-label">Nama Siswa</label>

            <select class="form-control" id="lembaga" name="lembaga">
                <option value="">-- Pilih Lembaga--</option>
                <option value="latiseducation">Latis Education</option>
                <option value="tutorindonesia">Tutor Indonesia</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nis" class="form-label">Nis</label>
            <input name="nis" type="number" id="nis" class="form-control" placeholder="Nis">
        </div>
        <div class="mb-3">
            <label for="mahasiswa" class="form-label">Nama Siswa</label>
            <input name="namasiswa" type="text" id="mahasiswa" class="form-control" placeholder="Nama Siswa">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" id="email" class="form-control" placeholder="Email@email.com">
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input name="foto" type="file" id="foto" class="form-control" placeholder="Foto">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
