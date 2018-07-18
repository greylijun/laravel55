<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CompanyData extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'company:data';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = '企业数据更新';

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
	public function handle()
	{
		//
	}
}
