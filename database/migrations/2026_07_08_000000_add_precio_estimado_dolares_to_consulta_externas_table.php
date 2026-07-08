<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('consulta_externas', function (Blueprint $table) {
            if (!Schema::hasColumn('consulta_externas', 'precio_estimado_dolares')) {
                $table->decimal('precio_estimado_dolares', 10, 2)->nullable()->after('precio_estimado');
            }
        });
    }

    public function down(): void
    {
        Schema::table('consulta_externas', function (Blueprint $table) {
            if (Schema::hasColumn('consulta_externas', 'precio_estimado_dolares')) {
                $table->dropColumn('precio_estimado_dolares');
            }
        });
    }
};
