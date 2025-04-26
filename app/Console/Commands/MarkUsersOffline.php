<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Carbon\Carbon;

class MarkUsersOffline extends Command
{
    protected $signature = 'users:mark-offline';
    protected $description = 'Mark users as offline if inactive';

    public function handle()
    {
        $timeout = Carbon::now()->subMinutes(30); // 30 minutes inactivity
        User::where('isOnline', 1)
            ->where('updated_at', '<', $timeout)
            ->update(['isOnline' => 0]);
    }
}
