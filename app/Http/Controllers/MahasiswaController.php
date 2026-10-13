<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Data dummy (bisa dipindah ke Model nanti)
    private array $mahasiswa = [
        ['nama' => 'Bismo Diningrat',   'nim' => '242520102', 'ipk' => 3.35, 'prodi' => 'Teknologi Informasi'],
        ['nama' => 'Siti Nurhaliza', 'nim' => '2201002', 'ipk' => 3.42, 'prodi' => 'Sistem Informasi'],
        ['nama' => 'Budi Santoso',  'nim' => '2201003', 'ipk' => 2.95, 'prodi' => 'Informatika'],
        ['nama' => 'Dewi Lestari',  'nim' => '2201004', 'ipk' => 3.70, 'prodi' => 'Teknik Komputer'],
        ['nama' => 'Eko Prasetyo',  'nim' => '2201005', 'ipk' => 1.85, 'prodi' => 'Informatika'],
    ];

    /**
     * a. Method profil()
     */
    public function profil()
    {
        $nama  = 'Bismo Diningrat';
        $nim   = '242520102';
        $prodi = 'Teknologi Informasi';

        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }

    /**
     * b. Method daftar()
     */
    public function daftar()
    {
        $mahasiswa = $this->mahasiswa;

        // Cek apakah ada IPK < 2.0 (untuk alert di poin d)
        $adaIpkRendah = collect($mahasiswa)->contains(fn ($m) => $m['ipk'] < 2.0);

        return view('mahasiswa.daftar', compact('mahasiswa', 'adaIpkRendah'));
    }

    /**
     * c. Method detail($nim)
     */
    public function detail(string $nim)
    {
        $mhs = collect($this->mahasiswa)->firstWhere('nim', $nim);

        if (!$mhs) {
            abort(404);          // atau abort(404, 'Mahasiswa tidak ditemukan');
        }

        return view('mahasiswa.detail', ['mahasiswa' => $mhs]);
    }
}