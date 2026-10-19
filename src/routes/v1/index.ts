import { Hono } from 'hono'
import { originOf } from '../../lib/url'
import characters from './characters'
import labors from './labors'

const v1 = new Hono()
  // Lists the resources, so people who open the API without context know where to go.
  .get('/', (c) => {
    const base = originOf(c.req.url) + '/api/v1'
    return c.json({
      characters: `${base}/characters`,
      labors: `${base}/labors`,
      documentation: 'https://github.com/Lmendev/patlabor-api#readme',
    })
  })
  .route('/characters', characters)
  .route('/labors', labors)

export default v1
