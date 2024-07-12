<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdatePasswordResetTokensTable extends Migration
{
    public function up()
    {
        $this->forge->modifyColumn('password_reset_tokens', [
            'create_at' => [
                'name' => 'created_at',
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->modifyColumn('password_reset_tokens', [
            'created_at' => [
                'name' => 'create_at',
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
    }
}
