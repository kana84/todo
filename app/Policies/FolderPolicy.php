<?php

namespace App\Policies;

use App\Folder;
use App\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Log;

class FolderPolicy
{
    /**
     * フォルダの閲覧権限
     * @param User $user
     * @param Folder $folder
     * @return bool
     */
    public function view(User $user, Folder $folder)
    {
        //echo(var_export($user->id == $folder->user_id));
        //echo(gettype($user->id));
       // echo(gettype($folder->user_id));
       // Log::info('An informational message.');
        return $user->id == $folder->user_id;
    }
}
