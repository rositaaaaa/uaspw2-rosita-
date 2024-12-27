<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBooksTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'NamaJilbab' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'JenisJilbab' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'Warna' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'JumlahStok' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'Gambar' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 16,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('books');
    }

    public function down()
    {
        $this->forge->dropTable('books');
    }
}
