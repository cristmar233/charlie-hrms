<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\EmpAcc;

class HashExistingPasswords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hash:passwords';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hash all existing plain text passwords in the emp_acc table';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = EmpAcc::all();

        foreach ($users as $user) {
            if (!password_get_info($user->emppass)['algo']) {
                $user->emppass = bcrypt($user->emppass);
                $user->save();
                $this->info("Password hashed for user: {$user->empuser}");
            } else {
                $this->info("Password already hashed for user: {$user->empuser}");
            }
        }

        return 0;
    }
}
