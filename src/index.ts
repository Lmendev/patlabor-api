import { Hono } from 'hono'
import { cors } from 'hono/cors'
import { secureHeaders } from 'hono/secure-headers'
import { trimTrailingSlash } from 'hono/trailing-slash'
import v1 from './routes/v1'

const publicApiSecureHeaders = { crossOriginResourcePolicy: 'cross-origin' }

const app = new Hono()

app.use(secureHeaders(publicApiSecureHeaders))

// Lets any website call the API from the browser.
app.use('/api/*', cors())

// Redirects /api/v1/characters/ to /api/v1/characters.
app.use(trimTrailingSlash())

// The root has no page of its own; it points to the current version's index.
app.get('/', (c) => c.redirect('/api/v1'))

app.route('/api/v1', v1)

// Unknown routes and ids get the same answer as in the Laravel version.
app.notFound((c) => c.json({ error: 'Resource not found' }, 404))

app.onError((err, c) => {
  console.error(err)
  return c.json({ error: 'Internal server error' }, 500)
})

export default app
