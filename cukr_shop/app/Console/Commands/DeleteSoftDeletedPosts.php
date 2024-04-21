<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\PostUser;


class DeleteSoftDeletedPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-soft-deleted-posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $postsUsersToDelete =PostUser::onlyTrashed()
        ->where('deleted_at', '<=', now()->subMonth())
        ->get();

    foreach ($postsUsersToDelete as $postsUsers) {
        $postsUsers->forceDelete();
    }

    $this->info('М’яко видалені дописи старше тижня видаляються назавжди.');
    }
}
