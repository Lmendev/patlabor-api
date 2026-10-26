# Contributing to Patlabor API

Thank you for considering contributing to Patlabor API! You can help by:

- Sending information about characters or labors that have not been added yet.
- Suggesting improvements to the project, the code or the endpoints.
- Reporting bugs.

In any case, feel free to create [a new issue](https://github.com/lmendev/patlabor-api/issues) with a detailed explanation.

## Adding a character or a labor

The data lives in two files: `src/data/characters.json` and `src/data/labors.json`.

1. Add a new object at the end of the file, with the next `id` and the same fields as the others. Use `null` for anything you don't know.
2. Save its image as `public/images/characters/{id}.jpg` (or `public/images/labors/{id}.jpg`) and set `"image"` to the same path without `public`, for example `"/images/characters/28.jpg"`. If there is no image yet, leave `"image": null`.
3. Start the project and check the new item at http://localhost:8787/api/v1/characters/28.

### Data formats

- `age` is the character's age in the original TV series, and `birth_date` uses `YYYY-MM-DD`.
- `rank` is the police or military rank in lowercase (`officer`, `sergeant`, `assistant inspector`…), and `occupation` is the role, for example `Unit 1 pilot`.
- `release_date` uses `YYYY-MM`, or `YYYY` when only the year is known.
- Sizes are in meters and weights in tonnes, written with the unit: `"8.02 m"`, `"6.00 t"`.
- `armour_materials` and the equipment fields are arrays of strings.
- `pilots` is an array of character ids. The API returns it as links to the characters, and gives each character the links to the labors they pilot.
- Please mention your source in the pull request, so the data can be checked.

## Development

You need Git, Node.js 22.13 or later and [pnpm](https://pnpm.io/installation).

```sh
git clone https://github.com/lmendev/patlabor-api
cd patlabor-api
pnpm install
pnpm run dev
```

The API starts on http://localhost:8787/api/v1. Run `pnpm typecheck` before opening a pull request; GitHub Actions runs it too, and deploys the API when the pull request is merged.
