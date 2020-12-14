<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Image;
use App\Datapemohon;

class PemohonController extends Controller
{
    public function store(Request $request)
    {
        $fields = [
            'name'          => $request->name,
            'nik'           => $request->nik,
            'kecamatan'     => $request->kecamatan,
            'desa'          => $request->desa,
            'alamat'        => $request->alamat,
            'tgl_pengajuan' => $request->tgl_pengajuan,
            'ktp'           => $request->ktp,
            'kk'            => $request->kk,
            'pekerjaan'     => $request->pekerjaan,
            'gaji'          => $request->gaji,
            'rekening'      => $request->rekening,
            'wa'            => $request->wa,
        ];

        if ($request->hasFile('ktp') and $request->hasFile('kk')) {
            $image    = $request->file('ktp');
            $kk    = $request->file('kk');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $filenamekk = 'kk' . time() . '.' . $kk->getClientOriginalExtension();
            $location = public_path('img/' . $filename);
            $locationkk = public_path('img/' . $filenamekk);
            Image::make($image)->save($location);
            Image::make($kk)->save($locationkk);

            $fields['ktp'] = $filename;
            $fields['kk']  = $filenamekk;
        }

        Datapemohon::create($fields);
        return redirect()->back()->with('success', 'Data Berhasil Dikirim. Permohonan Anda Sedang Diproses. Terimakasih');
    }
}
