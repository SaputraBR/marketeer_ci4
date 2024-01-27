<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table      = 'produk';
    protected $primaryKey = 'id_produk';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['id_produk', 'barcode', 'nama', 'kategori', 'kondisi', 'dibuat', 'plu', 'dimensi', 'berat', 'hpp', 'harga_jual', 'gambar', 'stok'];
}