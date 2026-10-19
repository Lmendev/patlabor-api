<h1 align="center">Patlabor API</h1>

<p align="center">
API with information of Mobile Police Patlabor 🤖
<img src=".assets/patlabor_banner.webp" alt="Patlabor banner">
</p>

<p align="center">
    <img alt="GitHub release (latest by date including pre-releases)" src="https://img.shields.io/github/v/release/lmendev/patlabor-api?include_prereleases">
</p>

## About Patlabor API

This project aims to provide information and images of the anime Mobile Police Patlabor.

It is built with [Hono](https://hono.dev/) and runs on [Cloudflare Workers](https://workers.cloudflare.com/).

## What is an API?

An API (Application Programming Interface) is a contract that allow developers to interact with an application through a set of interfaces. In this case, the application is a database with patlabor-anime information, and the interfaces are URL links. A RESTful API is an API that conforms to a set of loose conventions based on HTTP verbs, errors, and hyperlinks.

## Try the project

Get Character 1 information:

https://patlabor-api.lmendev.workers.dev/api/v1/characters/1

Result:

```json
{
  "id": 1,
  "name": "Noa Izumi",
  "age": null,
  "birthplace": "Tomakomai, Hokkaido, Japan",
  "nationality": "Japanese",
  "gender": "female",
  "occupation": "labors pilot",
  "rank": "officer",
  "affiliation": "Section 2 Division 2 Team 1",
  "image": "https://patlabor-api.lmendev.workers.dev/images/characters/1.jpg",
  "description": "Noa is somewhat impulsive, albeit not nearly as much as Ohta... "
}
```

## Routes

| END POINT               | HTTP METHOD GET     |
| ----------------------- | ------------------- |
| /api/v1                 | List the resources  |
| /api/v1/characters      | List all Characters |
| /api/v1/characters/{id} | Show Character      |
| /api/v1/labors          | List all Labors     |
| /api/v1/labors/{id}     | Show Labor          |

If the id does not exist, the API answers with status 404 and `{"error": "Resource not found"}`.

The root URL redirects to `/api/v1`.

## Usage

The API accepts requests from any website, so you can call it from the browser:

```js
const response = await fetch('https://patlabor-api.lmendev.workers.dev/api/v1/labors/1')
const labor = await response.json()

console.log(labor.name) // Ingram AV-98
```

## Contact me
Let me know about the cool projects you develop with Patlabor API 😄

- Follow me on Twitter, I usually share development stuff <img alt="Twitter Follow" src="https://img.shields.io/twitter/follow/Lmendev?style=social"> 
- Did you use or see the project? Share with me your feedback! <a href="https://twitter.com/intent/tweet?text=Hi! @Lmendev I just saw your project &url=https%3A%2F%2Fgithub.com%2FLmendev%2FPatlabor-api"><img alt="Twitter" src="https://img.shields.io/twitter/url?style=social&url=https%3A%2F%2Ftwitter.com%2FLmendev"></a>

## Contributing

Thank you for considering contributing to Patlabor API

- You can contribute by sending information about characters or labors that have not yet been added.
- You can also contribute by suggesting improvements to the project, code, endpoints, etc.
- Reporting bugs 

In any case, feel free to create [a new issue](https://github.com/lmendev/patlabor-api/issues) with detailed explanation please!

### Adding a character or a labor

The data lives in two files: `src/data/characters.json` and `src/data/labors.json`.

1. Add a new object at the end of the file, with the next `id` and the same fields as the others. Use `null` for anything you don't know.
2. Save its image as `public/images/characters/{id}.jpg` (or `public/images/labors/{id}.jpg`) and set `"image"` to the same path without `public`, for example `"/images/characters/13.jpg"`.
3. Start the project and check the new item at http://localhost:8787/api/v1/characters/13.

## Software requirements

- Git
- Node.js 22.13 or later
- [pnpm](https://pnpm.io/installation)

## Installation

* `git clone https://github.com/lmendev/patlabor-api`
* `cd patlabor-api`
* `pnpm install`
* `pnpm run dev` to start the app on http://localhost:8787/
* Check everything is OK accessing on http://localhost:8787/api/v1/characters/1

## Deploy

`pnpm run deploy` publishes the API to Cloudflare Workers. The first time, it asks you to log in to your Cloudflare account. Keep the `run`: `pnpm deploy` is a different, built-in pnpm command.

## Sources
Information gathered from various resources:

- [Anidb](https://anidb.net)
- [Wikipedia Japan](https://ja.wikipedia.org/wiki/%E6%A9%9F%E5%8B%95%E8%AD%A6%E5%AF%9F%E3%83%91%E3%83%88%E3%83%AC%E3%82%A4%E3%83%90%E3%83%BC%E3%81%AE%E7%99%BB%E5%A0%B4%E4%BA%BA%E7%89%A9#.E7.89.B9.E8.BB.8A.E4.BA.8C.E8.AA.B2_.E7.AC.AC.E4.BA.8C.E5.B0.8F.E9.9A.8A) 
- [Wikipedia USA](https://en.wikipedia.org/wiki/List_of_Patlabor_characters#Section_2_Division_2)
- [patlabormechanime.fandom](https://patlabormechanime.fandom.com/es/wiki/Mikiyasu_Shinshi)
- [patlabor.fandom](https://patlabor.fandom.com/)
- [myanimelist](https://myanimelist.net/)
- [patlabor.info](http://www.patlabor.info/)
- [animenewsnetwork](http://www.animenewsnetwork.com/search?q=patlabor)

## License

The story of Patlabor, images and designs are copyrighted material. This is a fan made project and is not intended to infringe on any copyrighted material. Images and synopses of Patlabor material is intended to be used for information, review and research purposes only for other fans and is in no way used for profit.

All images are copyright of their respective owners. ©1988 - 1994, 2002, 2014 - 2016 Headgear/Emotion/Bandai Visual/TFC/Shogakukan/NTV/Production I.G./Akemi Takada/Masami Yuuki/The Next Generation - Patlabor - Production Committee/Khara. All other logos/trademarks are copyright of their respective owners/companies. Images on this project are used for review and illustration purposes only.

Patlabor API is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
