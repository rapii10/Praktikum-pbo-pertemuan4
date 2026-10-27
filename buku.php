<?php
declare(strict_types=1);

class Buku {
    public function __construct(
        public string $judul,
        public string $penulis,
        public int $tahun
    ) {}

    public function tampilInfo(): string {
        return "Judul: $this->judul | Penulis: $this->penulis | Tahun: $this->tahun";
    }
}

$buku1 = new Buku('Laskar Pelangi', 'Andrea Hirata', 2005);
$buku2 = new Buku('Bumi Manusia', 'Pramoedya Ananta Toer', 1980);
$buku3 = new Buku('Perahu Kertas', 'Dee Lestari', 2009);

echo "<h2>Percobaan Class Buku</h2>";
foreach ([$buku1, $buku2, $buku3] as $i => $buku) {
    echo ($i + 1) . ". " . htmlspecialchars($buku->tampilInfo(), ENT_QUOTES, 'UTF-8') . "<br>";
}
