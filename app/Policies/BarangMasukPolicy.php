<?php

namespace App\Policies;

use App\Models\Barang_Masuk;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class BarangMasukPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Barang_Masuk $barangMasuk): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Barang_Masuk $barangMasuk): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Barang_Masuk $barangMasuk): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Barang_Masuk $barangMasuk): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Barang_Masuk $barangMasuk): bool
    {
        //
    }
}
