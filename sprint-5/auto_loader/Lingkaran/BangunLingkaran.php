<?php 

/**
 * 
 */
class BangunLingkaran
{
	protected $rumus = [
		[
			'phi' => 3.14,
			'jari_jari' => 5,
		]
	];

	public function luasLingkaran()
	{
		echo $this->rumus[0]['phi'] * $this->rumus[0]['jari_jari'] * $this->rumus[0]['jari_jari']; 
	}

	public function kelilingLingkaran()
	{
		echo $this->rumus[0]['phi'] * $this->rumus[0]['jari_jari'] * 2;
	}
}