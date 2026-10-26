import { Hono } from 'hono'
import { cors } from 'hono/cors'
import { secureHeaders } from 'hono/secure-headers'
import { trimTrailingSlash } from 'hono/trailing-slash'
import v1 from './routes/v1'

const publicApiSecureHeaders = { crossOriginResourcePolicy: 'cross-origin' }

const app = new Hono()

app.use(secureHeaders(publicApiSecureHeaders))

app.use('/api/*', cors())

app.use(trimTrailingSlash())

app.get('/', (c) => c.redirect('/api/v1'))

app.route('/api/v1', v1)

app.notFound((c) => c.json({ error: 'Resource not found' }, 404))

app.onError((err, c) => {
  console.error(err)
  return c.json({ error: 'Internal server error' }, 500)
})

export default app
