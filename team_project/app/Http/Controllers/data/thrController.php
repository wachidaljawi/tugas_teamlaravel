<?php

namespace App\Http\Controllers\data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class thrController extends Controller
{
    public function thr()
    {
        $karyawan1 = collect([
            ['Andi', 'Admin', 4200000, 2],
            ['Albert', 'Marketing', 4200000, 3],
            ['Ujang', 'Office boy', 3800000, 3],
            ['Siti', 'UI Design', 5500000, 5],
            ['Gina', 'HRD', 5000000, 4],
            ['Irsyad', 'Backend', 6000000, 5],
            ['Zainab', 'Front end', 6000000, 10],
            ['Kurnia', 'Sopir', 4200000, 10],
            ['Kiki', 'Acounting', 5000000, 2],
            ['Giman', 'CTO', 9000000, 10]
        ]);

        $pegawai = [
            "pegawai1" => ['Jubaedah', 'Receptionist', 4200000, 2],
            "pegawai2" => ['Sukirman', 'Security', 4200000, 3],
            "pegawai3" => ['Bejo', 'Full Stack Developer', 7000000, 4],
            "pegawai4" => ['Indah', 'Admin Logistik', 4200000, 3],
            "pegawai5" => ['Endang', 'Admin Payroll', 5000000, 5]
        ];
        // $karyawan = $karyawan->combine($pegawai);
        // dd($karyawan);
        // return view('data.thr')->with('karyawan', $karyawan);
        $karyawan = $karyawan1->all() + $pegawai;
        return view('data.thr', compact('karyawan'), compact('karyawan'))->with("karyawan1", $karyawan1);

    }
}
