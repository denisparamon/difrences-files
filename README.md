<h1 align="">Вычислитель отличий</h1>

[![Actions Status](https://github.com/denisparamon/php-project-48/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/denisparamon/php-project-48/actions)
[![Maintainability](https://api.codeclimate.com/v1/badges/cb5e367abe6100c53ad7/maintainability)](https://codeclimate.com/github/denisparamon/difrences-files/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/cb5e367abe6100c53ad7/test_coverage)](https://codeclimate.com/github/denisparamon/difrences-files/test_coverage)
[![Lint](https://github.com/denisparamon/difrences-files/actions/workflows/lint.yml/badge.svg)](https://github.com/denisparamon/difrences-files/actions/workflows/lint.yml)

# Difrences Files

**difrencesFiles** — Наша программа сравнивает два конфигурационных файла

## Системные требования

- PHP версии **8.3.3composer -V** или выше
- Composer версии **2.8.5** или выше
- ОС: Linux, macOS или Windows с поддержкой Bash

## Начало работы
Чтобы развернуть проект локально, выполните последовательно несколько действий:

1. Клонируйте репозиторий:

    ```bash
    git https://github.com/denisparamon/difrencesFiles
    ```
2. Перейдите в директорию проекта:

    ```bash
    cd braingames
    ```
3. Установите зависимости:

    ```bash
    make install
    ```
4. Установите права на выполнение файлов в директории `bin`:

    ```bash
    chmod +x ./bin/*
    ```
### Демонстрация

- help:  
 `./bin/gendiff -h` 
 [![asciinema](https://asciinema.org/a/FR0BRcBqPSvZLftzqHeuDZFfL.svg)](https://asciinema.org/a/FR0BRcBqPSvZLftzqHeuDZFfL)  
- stylish-json-json:  
`./bin/gendiff tests/fixtures/file1.json tests/fixtures/file2.json` 
 [![asciinema](https://asciinema.org/a/R86HQ1dCBlmWwWgJCRqHmYFqW.svg)](https://asciinema.org/a/R86HQ1dCBlmWwWgJCRqHmYFqW)  
- stylish-json-yaml:  
`./bin/gendiff tests/fixtures/file1.json tests/fixtures/file2.yaml` 
 [![asciinema](https://asciinema.org/a/6YUODODsFU33qtjjZgQgEUOW6.svg)](https://asciinema.org/a/6YUODODsFU33qtjjZgQgEUOW6)
- plain-json-json:  
`./bin/gendiff tests/fixtures/file1.json tests/fixtures/file2.json --format=plain`  
 [![asciinema](https://asciinema.org/a/hHLlgoSrVhAP0tDHc0MIt6ZKm.svg)](https://asciinema.org/a/hHLlgoSrVhAP0tDHc0MIt6ZKm)  
- plain-yaml-yaml:  
`./bin/gendiff tests/fixtures/file2.yaml tests/fixtures/file1.yaml --format=plain`  
 [![asciinema](https://asciinema.org/a/su7yTWWhHT9STxbQSrp3TwFsG.svg)](https://asciinema.org/a/su7yTWWhHT9STxbQSrp3TwFsG)  
- json-json-json:  
`./bin/gendiff tests/fixtures/file1.json tests/fixtures/file2.json --format=json` 
 [![asciinema](https://asciinema.org/a/AWtOu4g2OfcQ0xIYDqzCpO3Zp.svg)](https://asciinema.org/a/AWtOu4g2OfcQ0xIYDqzCpO3Zp)  
- json-yaml-yaml:  
`./bin/gendiff tests/fixtures/file1.yaml tests/fixtures/file2.yaml --format=json` 
 [![asciinema](https://asciinema.org/a/Se1AHhCGodEPK70SxlQIj8RBE.svg)](https://asciinema.org/a/Se1AHhCGodEPK70SxlQIj8RBE)  
  
  

  

  

  

  






  
