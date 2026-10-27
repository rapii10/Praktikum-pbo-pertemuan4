<?php
declare(strict_types=1);

class LaporanMahasiswa {
    public function __construct(private string $nama) {}

    public function __call(string $method, array $args): mixed {
        if ($method === 'cetakRingkas' && count($args) === 0) {
            return 'Mahasiswa: ' . $this->nama;
        }
        throw new BadMethodCallException('Method tidak tersedia atau argumen tidak sesuai: ' . $method);
    }
}

$laporan = new LaporanMahasiswa('Rafy Adilaputra');

echo "<h2>Percobaan Overloading Method</h2>";
echo "<b>1. Method yang diizinkan</b><br>";
echo htmlspecialchars($laporan->cetakRingkas(), ENT_QUOTES, 'UTF-8') . "<br><br>";

echo "<b>2. Method tidak dikenal</b><br>";
try {
    echo $laporan->cetakLengkap();
} catch (BadMethodCallException $e) {
    echo "Exception: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . "<br><br>";
}

echo "<b>3. Method diizinkan tetapi memakai argumen</b><br>";
try {
    echo $laporan->cetakRingkas('tambahan');
} catch (BadMethodCallException $e) {
    echo "Exception: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . "<br>";
}
