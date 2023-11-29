<?php
class superHeroe{
    public $nombre;
    public $capa=true;
    public $debilidad=true;
    public $poder;
    public $esrobot=true;
    public $tecnologia = true;
    public $aleta = true;

    function volar($capa,$tecnologia){
        if($capa == true || $tecnologia == true){
            echo "El super heroe vuela" ;
        }else{
            echo "El super heroe no vuela";
        }
    }

    function nadar($aleta){
        if($aleta == true){
            echo "El super heroe sabe nadar" ;
        }else{
            echo "El super heroe no sabe nadar";
        }
    }
   

    function humano($esrobot){
        if($esrobot==false){
            echo "El super heroe es humano";
        }else{
            echo "El super heroe es robot";
        }

    }

    function recargar($debilidad){
        if($debilidad==true){
            echo "El super heroe debe dormir";
        }else{
            echo "El super heroe esta activo";
        }

    }

}
//objeto superman
$superman = new superHeroe();
$superman->nombre = "Superman";
$superman->capa = true;
$superman->debilidad= true;
$superman->poder= "fuerza";
$superman->esrobot = false;
$superman->tecnologia = false;
$superman->aleta = false;

echo "El nombre del Superheroe es: " . $superman->nombre . "<br>";
echo $superman->volar(true,false) . "<br>";
echo $superman->recargar(true) . "<br>";
echo "El poder del superheroe es: " . $superman->poder. "<br>";
echo $superman->humano(false) . "<br>";
echo $superman->nadar(false);

echo "<h2> Este es el objeto 2 </h2> <br>";
//objeto batman
$batman = new superHeroe();
$batman->nombre = "Batman";
$batman->capa = true;
$batman->debilidad= false;
$batman->poder= "agilidad";
$batman->esrobot = false;
$batman->tecnologia = true;
$batman->aleta= false;

echo "El nombre del Superheroe es: " . $batman->nombre . "<br>";
echo $batman->volar(true,true) . "<br>";
echo $batman->recargar(false) . "<br>";
echo "El poder del superheroe es: " . $batman->poder. "<br>";
echo $batman->humano(false) . "<br>";
echo $batman->nadar(false);

echo "<h2> Este es el objeto 3 </h2> <br>";
//objeto acuaman
$acuaman = new superHeroe();
$acuaman->nombre = "Acuaman";
$acuaman->capa = false;
$acuaman->debilidad= false;
$acuaman->poder= "Dominar el Agua";
$acuaman->esrobot = false;
$acuaman->tecnologia = false;
$acuaman->aleta= true;

echo "El nombre del Superheroe es: " . $acuaman->nombre . "<br>";
echo $acuaman->volar(false,false) . "<br>";
echo $acuaman->recargar(false) . "<br>";
echo "El poder del superheroe es: " . $acuaman->poder. "<br>";
echo $acuaman->humano(false) . "<br>";
echo $acuaman->nadar(true);


echo "<h2> Este es el objeto 4 </h2> <br>";
//objeto aironman
$aironman = new superHeroe();
$aironman->nombre = "Aironman";
$aironman->capa = false;
$aironman->debilidad= false;
$aironman->poder= "Dominar tecnologia";
$aironman->esrobot = false;
$aironman->tecnologia = true;
$aironman->aleta= false;

echo "El nombre del Superheroe es: " . $aironman->nombre . "<br>";
echo $aironman->volar(false,true) . "<br>";
echo $aironman->recargar(false) . "<br>";
echo "El poder del superheroe es: " . $aironman->poder. "<br>";
echo $aironman->humano(false) . "<br>";
echo $aironman->nadar(false);


echo "<h2> Este es el objeto 5 </h2> <br>";
//objeto Mujer Maravilla
$maravilla = new superHeroe();
$maravilla->nombre = "Mujer Maravilla";
$maravilla->capa = true;
$maravilla->debilidad= false;
$maravilla->poder= "Fuerza, volar, agilidad";
$maravilla->esrobot = false;
$maravilla->tecnologia = false;
$maravilla->aleta= false;

echo "El nombre del Superheroe es: " . $maravilla->nombre . "<br>";
echo $maravilla->volar(true,false) . "<br>";
echo $maravilla->recargar(false) . "<br>";
echo "El poder del superheroe es: " . $maravilla->poder. "<br>";
echo $maravilla->humano(false) . "<br>";
echo $maravilla->nadar(false);

?>