<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{

	# MASS ASSIGNMENT
	# Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
	protected $fillable = array('nama', 'nim', 'id_dosen');
	public $timestamps = true;

	public function wali(){
		return $this->hasOne('App\Wali', 'id_mahasiswa');

	}
	public function dosen(){
		return $this->belongsTo('App\Dosen', 'id_dosen');
	}

	public function hobi(){
		return $this->belongsToMany(
			'App\Hobi',
			'mahasiswa_hobi',
			'id_mahasiswa',
			'id_hobi'
			
		);
	}

	/*
	 * Relasi One-to-One
	 * =================
	 * Buat function bernama wali(), dimana model 'Mahasiswa' memiliki relasi One-to-One
	 * terhadap model 'Wali' sebagai 'id_mahasiswa'
	 */
}
