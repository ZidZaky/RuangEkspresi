<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Karya;


class AccountController extends Controller
{
    //Pages

    public function index()
    {
        $pengguna = Account::all();
        return view('pages.listUser', ['penggunas' => $pengguna]);
    }

    public function AccountRegister()
    {
        return view('pages.register');
    }

    //save
    public function store(Request $request)
    {
        // dd($request);
        $valdata = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'email' => 'required'
        ]);
        $valdata['password'] = Hash::make($valdata['password']);

        $cek = Account::where('username', $valdata['username'])->first();
        if ($cek) {
            return redirect('/register')->with('error', 'username telah digunakan');
        }

        $account = new Account();
        $account->username = $valdata['username'];
        $account->password = $valdata['password'];
        $account->email = $valdata['email'];
        // dd($account);
        $berhasil = DB::insert('INSERT INTO `penggunas` (`id`, `username`, `password`, `email`, `role`,`status`,`profile`, `created_at`, `updated_at`) VALUES (NULL, ?, ?, ?, "User","Active",NULL, ?,?);', [
            $account->username,
            $account->password,
            $account->email,
            now(),
            now()
        ]);
        if ($berhasil) {
            return redirect('/login');
        } else {
            return redirect('/regist')->with('error', 'regist gagal');
        }
    }

    public function Accountlogin()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        // Lakukan validasi kredensial pengguna secara manual
        if ($this->validateCredentials($username, $password)) {
            // Kredensial valid, lakukan sesuatu seperti menyimpan sesi dan redirect
            $account = $this->getUserByUsername($username);
            session(['account' => $account]);
            return redirect('/dashboard');
        }

        // Kredensial tidak valid, redirect kembali ke halaman login
        return redirect('/login')->with('error', 'Login failed');
    }

    // Fungsi untuk memvalidasi kredensial
    private function validateCredentials($username, $password)
    {
        // Implementasi validasi kredensial sesuai kebutuhan aplikasi, misalnya dengan query ke database
        $user = Account::where('username', $username)->first();

        if ($user && Hash::check($password, $user->password)) {
            return true; // Kredensial valid
        }

        return false; // Kredensial tidak valid
    }

    // Fungsi untuk mendapatkan pengguna berdasarkan nama pengguna (username)
    private function getUserByUsername($username)
    {
        return Account::where('username', $username)->first();
    }

    public function show($id)
    {
        $pengguna = Account::findOrFail($id);
        return view('listUser', ['pengguna' => $pengguna]);
    }

    // public function edit($id)
    // {
    //     $pengguna = Account::findOrFail($id);
    //     return view('form.editAccount', ['pengguna' => $pengguna]);
    // }

    public function update(Request $request, $id)
    {
        // dd($id);
        $validatedData = $request->validate([
            'status' => 'required|string|max:255',
        ]);

        $pengguna = Account::findOrFail($id);
        $pengguna->status = $validatedData['status'];

        $berhasil = $pengguna->save();

        if ($berhasil) {
            return redirect('account')->with('success', 'Pengguna updated successfully!');
        } else {
            return redirect('account')->with('error', 'Update pengguna failed!');
        }
    }

    public function updateProfile(Request $request, $id)
    {
        // dd($request);
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'profile' => 'nullable'
        ]);
        // dd($validatedData);

        $pengguna = Account::findOrFail($id);
        $pengguna->username = $validatedData['username'];
        $pengguna->email = $validatedData['email'];
        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
            $filename = $validatedData['username'] . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('profile', $filename, 'public');
            $pengguna->profile = $filePath;
        }

        $berhasil = $pengguna->save();
        session(['account' => $pengguna]);
        if ($berhasil) {
            return redirect('/account/' . $id . '/detailProfile')->with('success', 'Pengguna updated successfully!');
        } else {
            return redirect('/account/' . $id . '/detailProfile')->with('error', 'Update pengguna failed!');
        }
    }



    public function logout()
    {
        if (session()->has('account')) {
            session()->flush();
        }
        return redirect('/');
    }

    public function detail($id)
    {
        $pengguna = Account::findOrFail($id);
        $karya = Karya::orderBy('created_at', 'desc')->get();
        return view('read.detailProfile', [
            'pengguna' => $pengguna,
            'karyas' => $karya
        ]);
    }

}