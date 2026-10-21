# Contributing to Patlabor API

Thank you for considering contributing to Patlabor API! You can help by:

- Sending information about characters or labors that have not been added yet.
- Suggesting improvements to the project, the code or the endpoints.
- Reporting bugs.

In any case, feel free to create [a new issue](https://github.com/lmendev/patlabor-api/issues) with a detailed explanation.

## Adding a character or a labor

The data lives in two files: `src/data/characters.json` and `src/data/labors.json`.

1. Add a new object at the end of the file, with the next `id` and the same fields as the others. Use `null` for anything you don't know.
2. Save its image as `public/images/characters/{id}.jpg` (or `public/images/labors/{id}.jpg`) and set `"image"` to the same path without `public`, for example `"/images/characters/13.jpg"`.
3. Start the project and check the new item at http://localhost:8787/api/v1/characters/13.

## Development

You need Git, Node.js 22.13 or later and [pnpm](https://pnpm.io/installation).

```sh
git clone https://github.com/lmendev/patlabor-api
cd patlabor-api
pnpm install
pnpm run dev
```

The API starts on http://localhost:8787/api/v1. Run `pnpm typecheck` before opening a pull request; GitHub Actions runs it too, and deploys the API when the pull request is merged.
