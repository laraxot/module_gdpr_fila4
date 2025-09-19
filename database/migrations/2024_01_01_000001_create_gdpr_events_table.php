<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Gdpr\Models\Event;
use Modules\Xot\Database\Migrations\XotBaseMigration;

return new class extends XotBaseMigration {
<<<<<<< HEAD
<<<<<<< HEAD
    protected null|string $model_class = Event::class;
=======
    protected ?string $model_class = Event::class;
>>>>>>> 0c1819a (.)
=======
    protected null|string $model_class = Event::class;
>>>>>>> ceb9f4f (.)

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ceb9f4f (.)
        $this->tableCreate(function (Blueprint $table): void {
            $table->uuid('id')->primary();
            $table->uuid('treatment_id')->nullable();
            $table->uuid('consent_id')->nullable();
            $table->string('subject_id');
            $table->string('ip');
            $table->string('action');
            $table->text('payload');

            // $table->foreignId('treatment_id')->nullable();
            /*
             * $table
             * ->foreign('treatment_id')
             * ->references('id')
             * ->on('gdpr_treatment');
             */
            // $table->foreignId('consent_id')->nullable();
            /*
             * $table
             * ->foreign('consent_id')
             * ->references('id')
             * ->on('gdpr_consent')
             * ->onDelete('set null');
             */
        });

        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
            // if (! $this->hasColumn('email')) {
            //    $table->string('email')->nullable();
            // }
            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        });
<<<<<<< HEAD
=======
        $this->tableCreate(
            function (Blueprint $table): void {
                $table->uuid('id')->primary();
                $table->uuid('treatment_id')->nullable();
                $table->uuid('consent_id')->nullable();
                $table->string('subject_id');
                $table->string('ip');
                $table->string('action');
                $table->text('payload');

                // $table->foreignId('treatment_id')->nullable();
                /*
                $table
                    ->foreign('treatment_id')
                    ->references('id')
                    ->on('gdpr_treatment');
                */
                // $table->foreignId('consent_id')->nullable();
                /*
                $table
                    ->foreign('consent_id')
                    ->references('id')
                    ->on('gdpr_consent')
                    ->onDelete('set null');
                */
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                // if (! $this->hasColumn('email')) {
                //    $table->string('email')->nullable();
                // }
                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
            }
        );
>>>>>>> 0c1819a (.)
=======
>>>>>>> ceb9f4f (.)
    }
};
