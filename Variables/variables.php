<?php

class Variables {
    // Deklarasi variabel
    private $nama;
    private $umur;
    private $gender;
    private $gpa;
    private $isStudent;

    // Constructor untuk menginisialisasi variabel
    public function __construct($nama, $umur, $gender, $gpa) {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->gender = $gender;
        $this->gpa = $gpa;
        $this->isStudent = true; // Fix true
    }

    // Getter untuk nama
    public function getNama() {
        return $this->nama;
    }

    // Getter untuk umur
    public function getUmur() {
        return $this->umur;
    }

    // Getter untuk gender
    public function getGender() {
        return $this->gender;
    }

    // Getter untuk gpa
    public function getGpa() {
        return $this->gpa;
    }

    // Getter untuk isStudent
    public function isStudent() {
        return $this->isStudent;
    }
}

// Contoh penggunaan class Variables
$student = new Variables("Edrick", 19, "Laki-laki", 5.5);

echo "Nama: " . $student->getNama() . "<br>";
echo "Umur: " . $student->getUmur() . "<br>";
echo "Gender: " . $student->getGender() . "<br>";
echo "GPA: " . $student->getGpa() . "<br>";
echo "Is Student: " . ($student->isStudent() ? "True" : "False") . "<br>";
?>
