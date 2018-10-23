<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin {email?} {password?} {firstname?} {lastname?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create admin user from input user cmd ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * This command create admin user from input user cmd
     *
     * @return mixed
     */
    public function handle()
    {
        $input = $this->arguments();
        $email = is_null($input['email']) ? $this->ask('What is your email ?') : $input['email'];
        $password = is_null($input['email']) ? $this->ask('What is your password ?') : $input['password'];
        $firstName = is_null($input['email']) ? $this->ask('What is your first name ?') : $input['firstname'];
        $lastName = is_null($input['email']) ? $this->ask('What is your last name ?') : $input['lastname'];

        User::create([
            'email' => $email,
            'password' => bcrypt($password),
            'first_name' => $firstName,
            'last_name' => $lastName,
            'is_super_admin' => true,
        ]);

        $this->info('Admin user '.$email.' was created');
    }
}
