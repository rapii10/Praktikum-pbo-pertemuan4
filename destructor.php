<?php
declare(strict_types=1);

class Buku {
    public function __construct(
        public string $judul,
        public string $penulis,
        public int $tahun
    ) {
        echo "[Constructor] Buku '" . htmlspecialchars($this->judul, ENT_QUOTES, 'UTF-8') . "' dibuat<br>";
    }

    public function tampilInfo(): string {
        return "Judul: $this->judul | Penulis: $this->penulis | Tahun: $this->tahun";
    }

    public function __destruct() {
        echo "[Destructor] Buku '" . htmlspecialchars($this->judul, ENT_QUOTES, 'UTF-8') . "' dihancurkan<br>";
    }
}

echo "<h2>Skenario A: unset tanpa alias</h2>";
$bukuA = new Buku('Laskar Pelangi', 'Andrea Hirata', 2005);
unset($bukuA);
echo "Setelah unset(\$bukuA), destructor berjalan jika tidak ada referensi lain.<br><br>";

echo "<h2>Skenario B: unset dengan alias</h2>";
$bukuB = new Buku('Bumi Manusia', 'Pramoedya Ananta Toer', 1980);
$alias = $bukuB;
unset($bukuB);
echo "Setelah unset(\$bukuB), objek masih dapat diakses melalui alias:<br>";
echo htmlspecialchars($alias->tampilInfo(), ENT_QUOTES, 'UTF-8') . "<br>";
unset($alias);
echo "Setelah unset(\$alias), referensi terakhir dilepas.<br><br>";

echo "<h2>Skenario C: tanpa unset</h2>";
$bukuC = new Buku('Perahu Kertas', 'Dee Lestari', 2009);
echo "Destructor untuk objek ini biasanya berjalan saat skrip berakhir.<br>";
