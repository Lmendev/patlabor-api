import { Hono } from 'hono'
import characters from '../../data/characters.json'
import labors from '../../data/labors.json'
import { withImageUrl } from '../../lib/image-url'
import { linksTo } from '../../lib/links'

type Character = (typeof characters)[number]

function toCharacterResponse(character: Character, requestUrl: string) {
  const pilotedLaborIds = labors.filter((labor) => labor.pilots?.includes(character.id)).map((labor) => labor.id)
  return withImageUrl({ ...character, labors: linksTo('labors', pilotedLaborIds, requestUrl) }, requestUrl)
}

const app = new Hono()
  .get('/', (c) => c.json(characters.map((character) => toCharacterResponse(character, c.req.url))))
  .get('/:id', (c) => {
    const character = characters.find((character) => String(character.id) === c.req.param('id'))
    if (!character) return c.notFound()
    return c.json(toCharacterResponse(character, c.req.url))
  })

export default app
