<?php 

namespace Src;

/**
 * 
 */
class Controller
{
	
	protected $rumus = [
		[
			'alas' => 30,
			'tinggi' => 15,
		],
		
		[
			'sisi_a' => 20,
			'sisi_b' => 30,
			'sisi_c' => 25,
		],

		[
			'phi' => 3.14,
			'jari_jari' => 5,
		]
	];

	public function luasSegitiga()
	{
		echo $this->rumus[0]['alas'] * $this->rumus[0]['tinggi'] / 2;
	}

	public function kelilingSegitiga()
	{
		echo $this->rumus[1]['sisi_a'] + $this->rumus[1]['sisi_b'] + $this->rumus[1]['sisi_c']; 
	}

	public function luasLingkaran()
	{
		echo $this->rumus[2]['phi'] * $this->rumus[2]['jari_jari'] * $this->rumus[2]['jari_jari']; 
	}

	public function kelilingLingkaran()
	{
		echo $this->rumus[2]['phi'] * $this->rumus[2]['jari_jari'] * 2;
	}
}