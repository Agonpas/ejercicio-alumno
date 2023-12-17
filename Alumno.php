<?php
class Alumno {
    private string $nombre;
    private int $edad;
    private array $materias = array();

    public function __construct(String $nombre, int $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    /*setters*/
    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }

    public function setEdad(int $edad) {
        $this->edad = $edad;
    }

    public function inscribirMateria(string $materia) {
        if (in_array($materia, $this->materias)) {
            echo "Ya está inscrito en " . $materia . PHP_EOL;
        } else {
            $this->materias[] = $materia;
        }
    }
    /*getters*/
    public function getNombre(): string{
        return $this->nombre;
    }
    public function getEdad(): int{
        return $this->edad;
    }
    public function getMaterias(): array {
        return $this->materias;
    }

    public function mostrarInformacion(){
        echo PHP_EOL . "El alumno " . $this->getNombre() . " con " . $this->getEdad() . "años" . PHP_EOL;
        echo "Está inscrito en las siguientes materias: ";
        foreach ($this->getMaterias() as $materia) {
            echo PHP_EOL . $materia . PHP_EOL;

        }
    }
}
?>