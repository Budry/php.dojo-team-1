# print help
help: ## List available targets (this page)
	 @awk 'BEGIN {FS = ":.*?## "} /^[0-9a-zA-Z_-]+:.*?## / {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)

install: ## Install dependencies
	composer install

test-all: ## Run tests
	vendor/bin/phpunit tests

test-one: ## Run one test - example path: tests/MainTest.php
	vendor/bin/phpunit $(filter-out $@,$(MAKECMDGOALS))

test-cov: ## XDebug generate code coverage html
	vendor/bin/phpunit --coverage-html coverage tests
