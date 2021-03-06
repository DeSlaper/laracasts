<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class UserCreatorCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'user-create';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Rapidly create a new user.';

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
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$username = $this->ask('Which username should i use? ');
		$password = $this->ask('Which password? ');

		// $username = $this->argument('username');
		// $password = $this->argument('password');

		$user = new User;
		$user->username = $username;
		$user->password = Hash::make($password);
		$user->save();

		$this->info('User created!');

	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			// array('username', InputArgument::REQUIRED, 'Desired username.'),
			// array('password', InputArgument::REQUIRED, 'Desired password.'),
		);
	}

}
