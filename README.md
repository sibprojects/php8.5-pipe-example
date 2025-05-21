# PHP 8.5 Pipe Operator Example
### Overview

This repository demonstrates the usage of the new pipe operator (|>
) introduced in PHP 8.5. The pipe operator enables functional programming patterns by allowing you to create processing pipelines where the output of one function becomes the input to the next.
Requirements

    PHP 8.5 or higher
    Composer (optional, for dependency management)

### Features

This example showcases:

    Text processing with the pipe operator
    Data analysis and categorization
    Output formatting in different formats (JSON, HTML)
    Comparison between traditional approach and pipe operator approach

### Code Structure

The example consists of three main classes:

    TextProcessor: Handles text manipulation operations
        Removing special characters
        Converting text to lowercase
        Counting words

    DataAnalyzer: Performs analysis on processed text
        Categorizing text based on word count
        Generating reports with recommendations

    OutputFormatter: Formats the analysis results
        JSON output
        HTML output

### Usage

#### Example usage of the pipe operator

```
$result = $inputText 
    |> $textProcessor->removeSpecialChars(...)
    |> $textProcessor->toLowerCase(...)
    |> $textProcessor->countWords(...)
    |> $dataAnalyzer->categorizeCount(...)
    |> $dataAnalyzer->generateReport(...)
    |> $formatter->toJson(...);
```

#### Benefits of the Pipe Operator

    Improved Readability: Code flows from top to bottom in a logical sequence
    Reduced Variables: Eliminates the need for intermediate variables
    Cleaner Code: Reduces nesting and improves maintainability
    Functional Style: Encourages functional programming patterns

### Traditional vs Pipe Operator Approach

#### Traditional Approach

```
$cleanText = $textProcessor->removeSpecialChars($inputText);
$lowerText = $textProcessor->toLowerCase($cleanText);
$wordCount = $textProcessor->countWords($lowerText);
$category = $dataAnalyzer->categorizeCount($wordCount);
$report = $dataAnalyzer->generateReport($category);
$output = $formatter->toHtml($report);
```

#### Pipe Operator Approach

```
$result = $inputText 
    |> $textProcessor->removeSpecialChars(...)
    |> $textProcessor->toLowerCase(...)
    |> $textProcessor->countWords(...)
    |> $dataAnalyzer->categorizeCount(...)
    |> $dataAnalyzer->generateReport(...)
    |> $formatter->toJson(...);
```

### Running the Example

php example.php

### License

This project is licensed under the MIT License. See the LICENSE file for details.