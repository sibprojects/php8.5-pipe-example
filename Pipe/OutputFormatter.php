<?php

namespace Pipe;

class OutputFormatter
{
    public function toJson(array $data): string
    {
        return json_encode($data, JSON_PRETTY_PRINT);
    }

    public function toHtml(array $data): string
    {
        $html = "<div class='report'>\n";
        $html .= "  <h2>Text Analysis Report</h2>\n";
        $html .= "  <p>Category: <strong>{$data['category']}</strong></p>\n";
        $html .= "  <p>Time: {$data['timestamp']}</p>\n";
        $html .= "  <p>Recommendation: {$data['recommendation']}</p>\n";
        $html .= "</div>";
        return $html;
    }
}
