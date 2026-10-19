import { Hono } from 'hono'
import characters from './characters'
import labors from './labors'

const v1 = new Hono()
  .route('/characters', characters)
  .route('/labors', labors)

export default v1
