<?php

namespace App\Http\Controllers\data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class thrController extends Controller
{
    public function thr()
    {
        $pegawai1 = collect([
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
        return view('karyawan.thr')->with('pegawai1' . $pegawai1);
    }
}
