<?php

namespace App\Policies;

use App\Models\User;
use App\Models\About;
use Illuminate\Auth\Access\HandlesAuthorization;

class AboutPolicy
{
    use HandlesAuthorization;

    public function create(User $user): bool
    {
        return About::count() === 0;
    }

    public function update(User $user, About $about): bool
    {
        return true;
    }

    public function delete(User $user, About $about): bool
    {
        return true;
    }

    public function view(User $user, About $about): bool
    {
        return true;
    }
}