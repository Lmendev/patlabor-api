import { Hono } from 'hono'
import labors from '../../data/labors.json'
import { withImageUrl } from '../../lib/url'

const app = new Hono()
  .get('/', (c) => c.json(labors.map((labor) => withImageUrl(labor, c.req.url))))
  .get('/:id', (c) => {
    const labor = labors.find((labor) => String(labor.id) === c.req.param('id'))
    if (!labor) return c.notFound()
    return c.json(withImageUrl(labor, c.req.url))
  })

export default app
