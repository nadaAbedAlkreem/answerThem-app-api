<?php

namespace App\Console\Commands;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;

class MarkInactiveUsersOffline extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:mark-offline';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mark users as offline if they are inactive';

    /**
     * Execute the console command.
     */

    public function handle()
    {
        $inactiveThreshold = Carbon::now()->subMinutes(5); // 5 minutes inactivity
        User::where('is_online', true)
            ->where('last_active_at', '<', $inactiveThreshold)
            ->update(['is_online' => false]);
        $this->info('Marked inactive users as offline.');
    }
}
