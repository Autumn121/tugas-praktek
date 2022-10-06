<?php

Class Human
{
    public $name;
    public $familyname;
    public $age;
    public $major;
    public $is_active;

    public function __construct($name, $familyname, $age, $major, $is_active)
    {
        $this->name = $name;
        $this->familyname = $familyname;
        $this->age = $age;
        $this->major = $major;
        $this->is_active= $is_active;
    }
}

$obj1 = new Human(name: "Denis",familyname: "Tzy", age: 17, major: "Rekayasa Perangkat Lunak", is_active: "TRUE");

echo "Nama: " . $obj1->name . "<br>";
echo "Marga: " . $obj1->familyname . "<br>";
echo "Umur: " . $obj1->age . "<br>";
echo "Jurusan: " . $obj1->major . "<br>";
echo "Active: " . $obj1->is_active;

/* output
Nama: Denis
Marga: Tzy
Umur: 17
Jurusan: Rekayasa Perangkat Lunak
Active: TRUE */