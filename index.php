<?php
	class Personne{
	//properties
		public $nom;
		public $prenom;
		public $adresse;
		public $dateDeNaissance;


	//attributes
		public function Info(){
			echo $this->nom."<br>";
			echo $this->prenom."<br>";
			echo $this->adresse."<br>";
			echo $this->dateDeNaissance."<br>";
		}

		public function ChangeAdresse($change){
			$this->adresse=$change;
			echo "l'adresse est maintenant ".$this->adresse;

		}

		public function Age(){
			echo floor(abs((strtotime(date("Y-m-d"))- strtotime($this->dateDeNaissance)) / (24*60*60*365)));


		}

}

$toto= new Personne();

$toto->nom="jesaipa";
$toto->prenom="toto";
$toto->adresse="quelque part";
$toto->dateDeNaissance="1998-04-25";

$toto->Info();

$toto->ChangeAdresse("autre part");
echo "<br>Age:";
echo $toto->Age();
