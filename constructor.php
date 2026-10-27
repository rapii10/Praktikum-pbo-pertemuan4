<?php
declare(strict_types=1);

class Mahasiswa {
    public function __construct(
        public string $nim,
        public string $nama,
        public int $semester = 1,
        public string $fakultas = "Belum diisi"
    ) {}

    public function profil(): string {
        return "$this->nim - $this->nama (Semester $this->semester) | Fakultas: $this->fakultas";
    }
}

$m1 = new Mahasiswa('2530521060', 'Rafy Adilaputra', 1);
$m2 = new Mahasiswa('2530521060', 'Rafy Adilaputra', 1, 'Sains dan Teknologi');

echo "<h2>Percobaan Constructor</h2>";
echo "Objek 1 (tanpa argumen fakultas): " . htmlspecialchars($m1->profil(), ENT_QUOTES, 'UTF-8') . "<br>";
echo "Objek 2 (dengan argumen fakultas): " . htmlspecialchars($m2->profil(), ENT_QUOTES, 'UTF-8') . "<br>";
