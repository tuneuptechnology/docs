# Tuneup Technology API Docs

The API documentation for the Tuneup Technology platform.

[![Build Status](https://github.com/tuneuptechnology/docs/workflows/build/badge.svg)](https://github.com/tuneuptechnology/docs/actions)

This project aims to reuse the checked-in code examples from each client library as the code-snippets used to build our docs page. Why rewrite documentation in multiple places when you can have a community-maintained set of snippets that can be injected into the documentation.

## Usage

Visit at [tuneuptechnology-docs.localhost](tuneuptechnology-docs.localhost) locally or [docs.tuneuptechnology.com](https://docs.tuneuptechnology.com) in production.

## Deploy

```bash
# Deploy the site locally
docker compose up -d

# Deploy the site in production
docker compose -f docker-compose.yml -f docker-compose-prod.yml up -d
```

## Development

To create this project, we submoduled each client library into `src/docs/{language}` and then one-by-one enabled a `sparse-checkout` of each repo. Finally, we ignored all patterns of files except for the `examples` directory which contain all the client library example snippets we are using in the docs:

```bash
# Contents of `.git/info/sparse-checkout`
!/*
/examples
```

To bump to the latest versions of the code snippets, run the following:

```bash
# First time
git submodule update --init --recursive

# Updating submodules
git submodule update --recursive --remote
```
