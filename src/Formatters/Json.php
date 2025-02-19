<?php

namespace Differ\Formatters\Json;

function format(mixed $data): string
{
    return json_encode($data, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR);
}
