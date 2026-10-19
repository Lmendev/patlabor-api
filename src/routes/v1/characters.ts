import { Hono } from 'hono'
import characters from '../../data/characters.json'
import { withImageUrl } from '../../lib/url'

const app = new Hono()
  .get('/', (c) => c.json(characters.map((character) => withImageUrl(character, c.req.url))))
  .get('/:id', (c) => {
    const character = characters.find((character) => String(character.id) === c.req.param('id'))
    if (!character) return c.notFound()
    return c.json(withImageUrl(character, c.req.url))
  })

export default app
