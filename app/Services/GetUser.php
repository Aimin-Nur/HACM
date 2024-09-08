<?php

// app/Services/GetUser.php
namespace App\Services;

use Illuminate\Support\Facades\Auth;

class GetUser
{
    /**
     * Mengambil informasi pengguna yang sedang login.
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function getCurrentUser()
    {
        return Auth::user();
    }
}
