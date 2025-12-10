<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
return new class() extends XotBaseMigration {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
return new class() extends XotBaseMigration {
=======
return new class() extends XotBaseMigration
{
>>>>>>> a12f125f4a (.)
=======
return new class() extends XotBaseMigration {
>>>>>>> b93ef594b4 (.)
=======
return new class extends XotBaseMigration {
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 5562af7 (.)
        $this->tableCreate(function (Blueprint $table): void {
            $table->uuid('id')->primary();
            $table->uuid('treatment_id');
            // $table->foreignId('treatment_id')->nullable()->index();
            $table->string('subject_id');
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5562af7 (.)

            // $table->unique(['subject_id', 'treatment_id']);
            // $table->foreign('treatment_id')->references('id')->on('gdpr_treatment');
        });

        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
            if (!$this->hasColumn('user_id')) {
                $table->morphs('user');
            }
            if (!$this->hasColumn('type')) {
                $table->string('type')->nullable();
            }

            if (!$this->hasColumn('accepted_at')) {
                $table->timestamp('accepted_at')->nullable();
            }
            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        });
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $this->tableCreate(
            function (Blueprint $table): void {
                $table->uuid('id')->primary();
                $table->uuid('treatment_id');
                // $table->foreignId('treatment_id')->nullable()->index();
                $table->string('subject_id');
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)

            // $table->unique(['subject_id', 'treatment_id']);
            // $table->foreign('treatment_id')->references('id')->on('gdpr_treatment');
        });

        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
            if (!$this->hasColumn('user_id')) {
                $table->morphs('user');
            }
<<<<<<< HEAD
        );
>>>>>>> a12f125f4a (.)
=======
            if (!$this->hasColumn('type')) {
                $table->string('type')->nullable();
            }

            if (!$this->hasColumn('accepted_at')) {
                $table->timestamp('accepted_at')->nullable();
            }
            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        });
>>>>>>> b93ef594b4 (.)
=======

                // $table->unique(['subject_id', 'treatment_id']);

                // $table->foreign('treatment_id')->references('id')->on('gdpr_treatment');
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                if (! $this->hasColumn('user_id')) {
                    $table->morphs('user');
                }
                if (! $this->hasColumn('type')) {
                    $table->string('type')->nullable();
                }
                
                if (! $this->hasColumn('accepted_at')) {
                    $table->timestamp('accepted_at')->nullable();
                }
                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
            }
        );
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
    }
};
