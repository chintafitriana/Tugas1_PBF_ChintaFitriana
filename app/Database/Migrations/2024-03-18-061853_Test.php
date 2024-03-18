<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Test extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('test');

        // Menambahkan kolom baru ke tabel test
        $fields = [
            'new_column' => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
                'null'       => true,
            ],
        ];
        $this->forge->addColumn('test', $fields);
    }

    public function down()
    {
        $this->forge->dropTable('test');
    }
}