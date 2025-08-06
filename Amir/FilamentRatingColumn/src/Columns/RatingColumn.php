<?php

namespace Amir\FilamentRatingColumn\Columns;

use Filament\Tables\Columns\Column;

class RatingColumn extends Column
{
    protected string $view = 'filament-rating-column::columns.rating-column';
    protected int $maxStars = 5;

    public function maxStars(int $max): static
    {
        $this->maxStars = $max;
        return $this;
    }

    public function getStars(): array
    {
        $value = (float) $this->getState();

        $value = max(0, min($value, $this->maxStars));

        $full = (int) floor($value);
        $half = ($value - $full) >= 0.5 ? 1 : 0;

        return [
            'full' => $full,
            'half' => $half,
        ];
    }
}
