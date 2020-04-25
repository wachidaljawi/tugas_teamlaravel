<?php

namespace App\Http\Controllers\data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tunjanganController extends Controller
{
    public function tampilan()
    {
        $pegawai = [
            ['Jubaedah', 'Receptionist', 4200000, 2],
            ['Sukirman', 'Security', 4200000, 3],
            ['Bejo', 'Full Stack Developer', 7000000, 4],
            ['Indah', 'Admin Logistik', 4200000, 3],
            ['Endang', 'Admin Payroll', 5000000, 5]
        ];
        return view('karyawan.thr')->with('pegawai' . $pegawai);
    }
}
