<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    //

	public $primaryKey = 'id_upload';
	protected $table = 't_upload';
	protected $fillable = [
		'nama_file','ukuran_file','tanggal_upload','jumlah_download','file'
	];
	public $timestamps = false;

}
