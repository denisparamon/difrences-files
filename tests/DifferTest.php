<?php

declare(strict_types=1);

namespace Tests;

use JsonException;
use PHPUnit\Framework\Assert;

use function Differ\Differ\genDiff;

$fixturesPath = __DIR__ . '/fixtures';

function getExpectedPath(string $formatter): string
{
    global $fixturesPath;
    return "{$fixturesPath}/{$formatter}-expected.txt";
}

function getFirstFilePath(string $fileType): string
{
    global $fixturesPath;
    return "{$fixturesPath}/file1.{$fileType}";
}

function getSecondFilePath(string $fileType): string
{
    global $fixturesPath;
    return "{$fixturesPath}/file2.{$fileType}";
}

/**
 * @throws JsonException
 */
function testDiff(string $formatter, string $firstFileType, string $secondFileType): void
{
    $diff = genDiff(getFirstFilePath($firstFileType), getSecondFilePath($secondFileType), $formatter);

    // Исправлен вызов статического метода
    Assert::assertStringEqualsFile(getExpectedPath($formatter), $diff);
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

// Запуск тестов вручную
foreach (dataProvider() as $testCase) {
    testDiff(...$testCase);
}
