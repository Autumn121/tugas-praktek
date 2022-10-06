<?php
class motor {
    public $name, $id_machine, $type;

    public function __construct($name, $id_machine, $type)
    {
        $this->name = $name;
        $this->id_machine = $id_machine;
        $this->type = $type;
    }

}

$obj1 = new motor(name: "vario", id_machine: "1245", type: "automatic");
$obj2 = new motor(name: "CB 250", id_machine: "3421", type: "sport");

echo "Nama: " . $obj1->name . "<br>";
echo "ID mesin; " . $obj1->id_machine . "<br>";
echo "Type Motor: " . $obj1->type . "<hr>";

echo "Nama: " . $obj2->name . "<br>";
echo "ID mesin; " . $obj2->id_machine . "<br>";
echo "Type Motor: " . $obj2->type;


/* // output
// Nama: vario
// ID mesin; 1245
// Type Motor: automatic
// Nama: CB 250
// ID mesin; 3421
// Type Motor: sport */