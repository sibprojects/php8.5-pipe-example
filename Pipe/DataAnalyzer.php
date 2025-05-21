<?php

namespace Pipe;

class DataAnalyzer
{
    public function categorizeCount(int $count): string
    {
        if ($count < 5) return 'Short text';
        if ($count < 20) return 'Medium text';
        return 'Long text';
    }

    public function generateReport(string $category): array
    {
        return [
            'category'       => $category,
            'timestamp'      => date('Y-m-d H:i:s'),
            'recommendation' => $this->getRecommendation($category)
        ];
    }

    private function getRecommendation(string $category): string
    {
        return match ($category) {
            'Short text' => 'Recommended to expand',
            'Medium text' => 'Optimal length',
            'Long text' => 'Recommended to shorten',
            default => 'No recommendations'
        };
    }
}
