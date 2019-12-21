<?php

use Flarum\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;

return [
    'up' => function (Builder $schema) {
        $schema->table('discussions', function (Blueprint $table) {
            $table->tinyInteger('hide_me')->unsigned()->nullable()->default(1);
        });
        $schema->table('posts', function (Blueprint $table) {
            $table->tinyInteger('hide_me')->unsigned()->nullable()->default(1);
        });
    },
    'down' => function (Builder $schema) {
        $schema->table('discussions', function (Blueprint $table) {
            $table->dropColumn([
                'hide_me',
            ]);
        });
        $schema->table('posts', function (Blueprint $table) {
            $table->dropColumn([
                'hide_me',
            ]);
        });
    }
];
