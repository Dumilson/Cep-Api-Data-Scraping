<?php

namespace App\Console\Commands;

use App\Helpers\Helper;
use App\Models\Cep;
use App\Utils\GetApiCep;
use Illuminate\Console\Command;

class SaveCep extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'save:cep {cep?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this command is used to search and save the zip codes in the database';

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
     * @return int
     */
    public function handle()
    {
        $cep = $this->argument('cep');
        if(empty($cep)){
           return  $this->error('The Cep is required!');
        }
        $data = GetApiCep::getCep($cep);
        if(is_array($data)){
            $cep_stmt = new Cep();
            $stmt = $cep_stmt->store($data);
            if($stmt){
                return $this->info("CEP data: ".$cep." It was saved in the database");
            }
            return $this->error("Error saving CEP");
        }
        return $this->error($data);
    }
}
