<?php

namespace App\Actions\Program;

class DeleteProgram
{
    public function handle($program): bool
    {
        return $program->delete();
    }
}