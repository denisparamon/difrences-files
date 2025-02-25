<?php

declare(strict_types=1);

namespace Tests;

use JsonException;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

use function Differ\Differ\genDiff;

function testDiff(
    string $formatter,
    string $firstFileType,
    string $secondFileType
): void {
    $fixturesPath = __DIR__ . '/fixtures';

    $getExpectedPath = fn(string $formatter) => "{$fixturesPath}/{$formatter}-expected.txt";
    $getFirstFilePath = fn(string $fileType) => "{$fixturesPath}/file1.{$fileType}";
    $getSecondFilePath = fn(string $fileType) => "{$fixturesPath}/file2.{$fileType}";

    $diff = genDiff($getFirstFilePath($firstFileType), $getSecondFilePath($secondFileType), $formatter);

    Assert::assertStringEqualsFile($getExpectedPath($formatter), $diff);
}

function dataProvider(): array
{
    return [
        ['stylish', 'json', 'json'],
        ['stylish', 'yaml', 'json'],
        ['plain', 'yaml', 'yml'],
        ['json', 'json', 'json'],
        ['json', 'yaml', 'yml'],
    ];
}
