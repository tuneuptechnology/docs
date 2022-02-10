# Tuneup Technology API Docs

The API documentation for the Tuneup Technology platform.

This project is an experiment in reusing the checked-in code examples from each client library as the code-snippets used to build the docs page. Why rewrite documentation in multiple places when you can have a community-maintained set of snippets that can be injected into the documentation.

**NOTE:** In its current form, this is a very crude example.

## Usage

```bash
docker compose up -d
```

Visit the site at `localhost:8080` in your browser.

## Development

To create this project, we submoduled each client library into `src/docs/{language}` and then one-by-one enabled a `sparse-checkout` of each repo. Finally, we ignored all patterns of files except for the `examples` directory which contain all the client library example snippets we are using in the docs.

To bump to the latest versions of the code snippets, run the following:

```bash
# First time
git submodule update --init --recursive

# Updating submodules
git submodule update --recursive --remote
```
