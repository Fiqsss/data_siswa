<?php
namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Exports\SiswaExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelExportController extends Controller
{
    public function export(Request $request)
    {
        $query = Siswa::query();

        // Filter berdasarkan nama siswa
        if ($request->has('search')) {
            $query->where('nama_siswa', 'LIKE', '%' . $request->search . '%');
        }

        // Filter berdasarkan lembaga
        if ($request->has('lembaga') && in_array($request->lembaga, ['latiseducation', 'tutorindonesia'])) {
            $query->where('lembaga', $request->lembaga);
        }

        $dataSiswa = $query->get();

        return Excel::download(new SiswaExport($dataSiswa), 'siswa.xlsx');
    }
}
