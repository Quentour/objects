<?php
	class Personne{
	//properties
		public $nom;
		public $prenom;
		public $adresse;
		public $dateDeNaissance;


	//attributes
		public function Info(){
			echo $this->$nom;
			echo $this->$prenom;
			echo $this->$adresse;
			echo $this->$dateDeNaissance;
		}

		public function ChangeAdresse($change){
			$this->$adresse=$change;
			echo "l'adresse est maintenant".$adresse;

		}

		public function Age(){
			echo 2019-$this->dateDeNaissance;


		}

}

$toto= new Personne();

$toto->nom="jesaipa";
$toto->prenom="toto";
$toto->adresse="quelque part";
$toto->dateDeNaissance="1998";

print_r ($toto);
echo "<br>Age:";
echo $toto->Age();
