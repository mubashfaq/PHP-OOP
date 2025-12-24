<?php
// Type Hinting prevent function occurance if not of type declare

class aggregate{
    public function mcat(string $name, int $mm,  $im, int $mcm){

        $calc = ($mm/1100 * 10) + ($im/1100 * 40) + ($mcm/180 * 50);
        echo $name .  " MCAT aggregate is " . $calc ;
    }
}

$person1 = new aggregate();

$person1->mcat("Mubashar", 1098, 987, 172); 

// class School
// {
//     public function getNames(Student $names)
//     {
//         echo "<ul>";
//         foreach ($names->Names() as $name) {
//             echo "<li>" . $name . "</li>";
//         }
//         echo "</ul>";
//     }
// }

// class Student
// {
//     public function Names()
//     {
//          $names=  ["Ali", "Ubaid", "Sami"];
//          return $names;
//     }
// }

// class Library{

// }

// $sch = new School();
// $stu = new Student();
// $lib = new Library();

// $sch->getNames($stu);
