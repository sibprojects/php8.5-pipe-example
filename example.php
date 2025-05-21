<?php

use Pipe\DataAnalyzer;
use Pipe\OutputFormatter;
use Pipe\TextProcessor;

$inputText = "Hello, world! This is an example of using the |> operator in PHP 8.5. It makes code more readable.";

$textProcessor = new TextProcessor();
$dataAnalyzer = new DataAnalyzer();
$formatter = new OutputFormatter();

// Traditional way (without the |> operator)
$cleanText = $textProcessor->removeSpecialChars($inputText);
$lowerText = $textProcessor->toLowerCase($cleanText);
$wordCount = $textProcessor->countWords($lowerText);
$category = $dataAnalyzer->categorizeCount($wordCount);
$report = $dataAnalyzer->generateReport($category);
$output = $formatter->toHtml($report);

echo "Result without the |> operator:\n";
echo $output . "\n\n";

// Using the |> operator (PHP 8.5)
$result = $inputText
    |> $textProcessor->removeSpecialChars(...)
    |> $textProcessor->toLowerCase(...)
    |> $textProcessor->countWords(...)
    |> $dataAnalyzer->categorizeCount(...)
    |> $dataAnalyzer->generateReport(...)
    |> $formatter->toJson(...)
;

echo "Result with the |> operator:\n";
echo $result;
