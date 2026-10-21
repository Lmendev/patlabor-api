import { Hono } from 'hono'
import characters from './characters'
import labors from './labors'

const v1 = new Hono()
  // Lists the resources, so people who open the API without context know where to go.
  .get('/', (c) =>
    c.json({
      characters: new URL('/api/v1/characters', c.req.url).href,
      labors: new URL('/api/v1/labors', c.req.url).href,
      documentation: 'https://github.com/Lmendev/patlabor-api#readme',
    }),
  )
  .route('/characters', characters)
  .route('/labors', labors)

export default v1
