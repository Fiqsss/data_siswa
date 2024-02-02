<?php

namespace App\Exports;
use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SiswaExport implements FromCollection,WithHeadings
{
    protected $dataSiswa;

    public function __construct($dataSiswa)
    {
        $this->dataSiswa = $dataSiswa;
    }

    public function collection()
    {
        return $this->dataSiswa->map(function ($siswa) {
            unset($siswa['created_at'], $siswa['updated_at']);
            return $siswa;
        });
    }

    public function headings(): array
    {
        // Sesuaikan dengan kolom-kolom yang ingin Anda masukkan
        return [
            'ID',
            'Lembaga',
            'NIS',
            'Nama Siswa',
            'Email',
            'Foto',
        ];
    }
}
