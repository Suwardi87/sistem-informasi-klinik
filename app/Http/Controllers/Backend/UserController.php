<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Pasien;
use App\Models\Pegawai;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Http\Services\Backend\UserService;

class UserController extends Controller
{
    public function __construct(
        private UserService $userService,
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->userService->select();
        return view('backend.user.index', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
{
    $request->validate([
        'name' => ['required', 'string'],
        'email' => ['required', 'email', 'unique:users'],
        'role' => ['required', 'in:admin,pasien,dokter,kasir,petugasPendaftaran'],
    ]);

    try {
        // Buat password acak 5 karakter
        $plainPassword = Str::upper(Str::random(5));

        // Simpan user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($plainPassword), // versi hash
            'visible_password' => $plainPassword,
            'role' => $request->role
        ]);

        // Jika role adalah pasien
        if ($user->role === 'pasien') {
            Pasien::create([
                'user_id' => $user->id,
                'uuid' => (string) Str::uuid(),
                'nama' => $user->name,
                'nik' => $request->nik ?? null,
                'jenis_kelamin' => $request->jenis_kelamin ?? null,
                'tanggal_lahir' => $request->tanggal_lahir ?? null,
                'alamat' => $request->alamat ?? null,
                'provinsi_id' => $request->provinsi_id ?? null,
                'kabupaten_id' => $request->kabupaten_id ?? null,
                'telepon' => $request->telepon ?? null,
                'slug' => Str::slug($user->name),
            ]);
        } elseif (in_array($user->role, ['dokter', 'kasir', 'petugasPendaftaran'])) {
            Pegawai::create([
                'uuid' => (string) Str::uuid(),
                'user_id' => $user->id,
                'nama' => $user->name,
                'nip' => $request->nip ?? null,
                'jabatan' => match($user->role) {
                    'dokter' => 'Dokter',
                    'kasir' => 'Kasir',
                    default => 'Petugas Pendaftaran'
                },
                'telepon' => $request->telepon ?? null,
                'alamat' => $request->alamat ?? null,
                'slug' => Str::slug($user->name),
            ]);
        }

        // Kirim password asli di response
        return response()->json([
            'message' => 'User berhasil dibuat.',
            'password_user' => $plainPassword
        ]);

    } catch (\Exception $e) {
        return response()->json([
            'message' => 'Gagal membuat user: ' . $e->getMessage()
        ], 500);
    }
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            return view('backend.kabupaten.show', [
                'kabupaten' => $this->userService->getFirstBy('id', $id)
            ]);
        } catch (\Exception $err) {
            return response()->json(['message' => $err->getMessage()], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend.kabupaten.edit', [
            'kabupaten' => $this->userService->getFirstBy('id', $id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'string', 'max:255', 'in:admin, pasien, dokter, kasir,petugasPendaftaran'],
        ]);

        $user = User::update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make(substr($request->password, 0, 15), [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
            'role' => $request->role
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('backend.user.index', absolute: false));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = $this->userService->getFirstBy('id', $id);

        $this->userService->delete($id);

        return response()->json(['message' => 'Data User Berhasil Dihapus...']);
    }
}
