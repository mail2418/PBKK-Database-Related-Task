<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FormController extends Controller
{
    public function formulir()
    {
        return view('formulir');
    }
    public function hasil(Request $request)
    {
        Alert::success('Data Telah Terkirim!, Selamat Anda Menjadi Mitra Shopee Sekarang');
        $messagesError = [
            'required' => ':attribute ini wajib diisi!',
            'min' => ':attribute harus diisi minimal :min karakter!',
            'max' => ':attribute harus diisi maksimal :max karakter!',
            'mimes' => ':foto harus berupa jpg,png,jpeg!',
            'numeric' => 'attribute harus diisi angka!',
            'email' => 'attribute harus berupa email'
        ];
        
        $this->validate($request,[
            'nama_depan' => 'required|min:5',
            'nama_belakang' => 'required|min:5|max:40',
            'tempat_lahir' => 'required|min:5|max:30',
            'tanggal_lahir'=> 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required|max:120',
            'email' => 'required|email',
            'nomor_ktp'=>'required|numeric',
            'nomor_telepon' => 'required|numeric',
            'pendidikan'=>'required|not_in:--Pilih--',
            'tinggi'=>'required|numeric',
            'berat'=>'required|numeric|between: 40.0, 110.0',
            'ktp' => 'required|mimes:jpg,png,jpeg|max:2048',
        ],$messagesError);
        $request->ktp = $this->SavePhoto($request);
        return view('hasil',['data' => $request]);
    }

    /* Untuk menyimpan foto di dalam storage, sebelumnya tulis command (php artisan storage:link) untuk membuat folder storage di dalam folder public*/
    public function SavePhoto(Request $request)
    {
        $photo = $request->ktp;
        $photo_name = ''; 
        $telephone = $request->nomor_telepon;
        if ($photo !== NULL)
        {
            $photo_name = 'Foto' . '_' . $telephone . "." . $photo->extension(); 
            $photo_name = str_replace(' ', '_', strtolower($photo_name)); //buat mengganti spasi menjadi _
            $photo_name = str_replace('+62', '0', $photo_name); //buat mengganti +62 menjadi 0
            $photo->storeAs(null, $photo_name, ['disk' => 'public']); //agar menyimpan di folder public
        }
        return asset('storage') . '/' . $photo_name;
    }
}