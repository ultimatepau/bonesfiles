<?php

use Illuminate\Database\Seeder;

class UploadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	$data = [
    		'nama_file'=>'Dota Update Patch 7.04',
    		'ukuran_file'=>400,
    		'tanggal_upload'=>'2017-03-12',
    		'jumlah_download'=>100,
    	];
    	DB::table('t_upload')->insert($data);

    }
}
