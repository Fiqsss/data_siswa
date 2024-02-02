<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        $query = Siswa::query();

        if ($request->has('search')) {
            $query->where('nama_siswa', 'LIKE', '%' . $request->search . '%');
        }

        if ($request->has('lembaga') && in_array($request->lembaga, ['latiseducation', 'tutorindonesia'])) {
            $query->where('lembaga', $request->lembaga);
        }

        $dataSiswa = $query->latest()->paginate(3);

        return view('siswa.index', ['dataSiswa' => $dataSiswa]);
    }


    public function createSiswa()
    {
        return view('createsiswa.index');
    }

    // tambah siswa
    public function addSiswa(Request $request)
    {
        $validate = $request->validate([
            'lembaga' => 'required',
            'nis' => 'required',
            'namasiswa' => 'required',
            'email' => 'nullable|email',
            'foto' => 'nullable',
        ]);

        if ($validate) {
            $data = Siswa::create([
                'lembaga' => $request->lembaga,
                'nis' => $request->nis,
                'nama_siswa' => $request->namasiswa,
                'email' => $request->email,
                'foto' => $request->foto,
            ]);

            if ($request->hasFile('foto')) {
                $request->file('foto')->move('fotosiswa/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }
            return redirect()->route('home')->with('success', 'Data siswa berhasil ditambahkan.');
        }
        return redirect()->back()->with('error', 'Gagal menambahkan data siswa. Silakan coba lagi.');
    }

    // delete siswa
    public function deleteSiswa($id)
    {
        try {
            $siswa = Siswa::findOrFail($id);
            $siswa->delete();
            session()->flash('alert', [
                'type' => 'success',
                'message' => 'Data siswa berhasil dihapus.',
            ]);
            return redirect()->route('home')->with('success', 'Data siswa berhasil Dihapus.');
        } catch (\Exception $e) {
            session()->flash('alert', [
                'type' => 'error',
                'message' => 'Gagal menghapus data siswa. Silakan coba lagi.',
            ]);
        }

        return redirect()->back();
    }

    // edit view
    public function formEditSiswa($id)
    {
        $findId = Siswa::findOrFail($id);
        return view('editsiswa.index', ['siswa' => $findId]);
    }

    // edit function
    public function editSiswa(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);

        $validate = $request->validate([
            'lembaga' => 'required',
            'nis' => 'required',
            'namasiswa' => 'required',
            'email' => 'nullable|email',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024', // Sesuaikan validasi foto
        ]);

        if ($validate) {
            // Hapus foto lama jika ada perubahan pada file foto
            if ($request->hasFile('foto')) {
                if ($siswa->foto && file_exists(public_path('fotosiswa/' . $siswa->foto))) {
                    unlink(public_path('fotosiswa/' . $siswa->foto));
                }
            }

            // Update data siswa
            $siswa->update([
                'lembaga' => $request->lembaga,
                'nis' => $request->nis,
                'nama_siswa' => $request->namasiswa,
                'email' => $request->email,
            ]);

            // Upload foto baru jika ada
            if ($request->hasFile('foto')) {
                $request->file('foto')->move('fotosiswa/', $request->file('foto')->getClientOriginalName());
                $siswa->foto = $request->file('foto')->getClientOriginalName();
                $siswa->save();
            }

            return redirect()->route('home')->with('success', 'Data siswa berhasil diubah.');
        }

        return redirect()->back()->with('error', 'Gagal mengubah data siswa. Silakan coba lagi.');
    }

}
