<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'institusi'=>['required'],
            'role'=>['required'],
            'phone'=>['required','min:8', 'max:15'],
            'bukti'=>['required','mimes:jpeg,jpg,'],
            'nama_pembayar' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'g-recaptcha-response' => 'required|captcha',

        ],
        [
            'name.required' => 'Nama lengkap harus diisi',
            'name.max' => 'Nama lengkap berisi maksimal 255 huruf',

            'institusi.required' => 'Institusi harus diisi',
            'role.required' => 'Kluster pendaftaran harus dipilih',

            'phone.required' => 'Nomor telepon harus diisi',
            'phone.min' => 'Nomor telepon minimum 8 digit angka',
            'phone.max' => 'Nomor telepon maksimal 15 digit angka',

            'bukti.required' => 'Diharuskan upload bukti pembayaran',
            'bukti.mimes' => 'gambar bukti pembayaran berformat .jpg',
            
            'nama_pembayar.required' => 'Nama pembayar harus diisi',
            'nama_pembayar.max' => 'Nama pembayar berisi maksimal 255 huruf',

            'email.required' => 'email harus diisi',
            'email.max' => 'email maksimal 255 karakter',

            'password.required' => 'Password harus diisi',
            'password.min' => 'password minimum 8 karakter',

            'g-recaptcha-response.required' => 'Klik captcha',
            'g-recaptcha-response.captcha' => 'Klik captcha',
        ]
        
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $request = request();
        $gambar = $request->file('bukti');
        // $file_gambar = \Carbon\Carbon::now()->format('d-m-Y') . '_' .  $gambar->getClientOriginalName();
        $file_gambar = $data['name'] . '_' . $data['nama_pembayar'] . '_' . $data['institusi'] . '_' . $data['role'] . '_' . \Carbon\Carbon::now()->format('d-m-Y') . ".jpg";
        $request->file('bukti')->storeAs('public/upload_bukti_bayar', $file_gambar);
        return User::create([
            'name' => $data['name'],
            'institusi'=>$data['institusi'],
            'role'=>$data['role'],
            'phone'=>$data['phone'],
            'bukti'=>$file_gambar,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);


    }
}
