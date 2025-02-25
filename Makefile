install:
	composer install

validate:
	composer validate

dump:
	composer dump-autoload -o

lint:
	composer exec -v phpcs src bin tests
	vendor/bin/phpstan analyse

lint-fix:
	composer exec -v phpcbf -- --standard=PSR12 --colors src bin tests

test:
	composer exec --verbose phpunit tests

test-coverage:
	composer test:coverage

test-coverage-text:
	composer test:coverage-text

test-coverage-html:
	composer test:coverage-html

cmp-stylish-json-json:
	./bin/gendiff tests/fixtures/file1.json tests/fixtures/file2.json

cmp-stylish-json-yaml:
	./bin/gendiff tests/fixtures/file1.json tests/fixtures/file2.yaml

cmp-plain-json-json:
	./bin/gendiff tests/fixtures/file1.json tests/fixtures/file2.json --format=plain

cmp-plain-yaml-yaml:
	./bin/gendiff tests/fixtures/file2.yaml tests/fixtures/file1.yaml --format=plain

cmp-json-json-json:
	./bin/gendiff tests/fixtures/file1.json tests/fixtures/file2.json --format=json

cmp-json-yaml-yaml:
	./bin/gendiff tests/fixtures/file1.yaml tests/fixtures/file2.yaml --format=json

.PHONY: tests
