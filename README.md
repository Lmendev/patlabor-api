<h1 align="center">Patlabor API</h1>

<p align="center">
API with information about Mobile Police Patlabor 🤖
<img src=".assets/patlabor_banner.webp" alt="Patlabor banner">
</p>

Built with [Hono](https://hono.dev/) and running on [Cloudflare Workers](https://workers.cloudflare.com/).

## Usage

The API lives at https://patlabor-api.lmendev.workers.dev/api/v1 and accepts requests from any website, so you can call it from the browser:

```js
const response = await fetch('https://patlabor-api.lmendev.workers.dev/api/v1/characters/1')
const character = await response.json()
```

Result:

```json
{
  "id": 1,
  "name": "Noa Izumi",
  "japanese_name": "泉 野明",
  "age": 20,
  "birth_date": "1978-12-17",
  "birthplace": "Tomakomai, Hokkaido, Japan",
  "nationality": "Japanese",
  "gender": "female",
  "occupation": "Unit 1 pilot",
  "rank": "officer",
  "affiliation": "Section 2 Division 2 Team 1",
  "voice_actor": "Miina Tominaga",
  "image": "https://patlabor-api.lmendev.workers.dev/images/characters/1.jpg",
  "description": "Noa is somewhat impulsive, albeit not nearly as much as Ohta... ",
  "labors": [
    "https://patlabor-api.lmendev.workers.dev/api/v1/labors/1"
  ]
}
```

## Routes

| Endpoint                | Description         |
| ----------------------- | ------------------- |
| /api/v1                 | List the resources  |
| /api/v1/characters      | List all characters |
| /api/v1/characters/{id} | Show a character    |
| /api/v1/labors          | List all labors     |
| /api/v1/labors/{id}     | Show a labor        |

All endpoints use GET. If the id does not exist, the API answers with status 404 and `{"error": "Resource not found"}`.

## Contributing

Want to add a character, a labor or an improvement? Read the [contributing guide](CONTRIBUTING.md).

## Sources
Information gathered from various resources:

- [AniDB](https://anidb.net)
- [Wikipedia (Japanese)](https://ja.wikipedia.org/wiki/%E6%A9%9F%E5%8B%95%E8%AD%A6%E5%AF%9F%E3%83%91%E3%83%88%E3%83%AC%E3%82%A4%E3%83%90%E3%83%BC%E3%81%AE%E7%99%BB%E5%A0%B4%E4%BA%BA%E7%89%A9)
- [Wikipedia (English)](https://en.wikipedia.org/wiki/List_of_Patlabor_characters)
- [patlabormechanime.fandom](https://patlabormechanime.fandom.com/es)
- [patlabor.fandom](https://patlabor.fandom.com/)
- [MyAnimeList](https://myanimelist.net/)
- [Anime News Network](https://www.animenewsnetwork.com/)

## License

The story of Patlabor, images and designs are copyrighted material. This is a fan-made project and is not intended to infringe on any copyrighted material. Images and synopses of Patlabor material are intended to be used for information, review and research purposes only for other fans and are in no way used for profit.

All images are copyright of their respective owners. ©1988 - 1994, 2002, 2014 - 2016 Headgear/Emotion/Bandai Visual/TFC/Shogakukan/NTV/Production I.G./Akemi Takada/Masami Yuuki/The Next Generation - Patlabor - Production Committee/Khara. All other logos/trademarks are copyright of their respective owners/companies. Images on this project are used for review and illustration purposes only.

The code is licensed under the [MIT license](LICENSE).
