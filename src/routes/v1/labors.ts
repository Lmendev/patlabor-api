import { Hono } from 'hono'
import labors from '../../data/labors.json'
import { withImageUrl } from '../../lib/image-url'
import { linksTo } from '../../lib/links'

type Labor = (typeof labors)[number]

function toLaborResponse(labor: Labor, requestUrl: string) {
  const pilots = labor.pilots && linksTo('characters', labor.pilots, requestUrl)
  return withImageUrl({ ...labor, pilots }, requestUrl)
}

const app = new Hono()
  .get('/', (c) => c.json(labors.map((labor) => toLaborResponse(labor, c.req.url))))
  .get('/:id', (c) => {
    const labor = labors.find((labor) => String(labor.id) === c.req.param('id'))
    if (!labor) return c.notFound()
    return c.json(toLaborResponse(labor, c.req.url))
  })

export default app
