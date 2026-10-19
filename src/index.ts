import { Hono } from 'hono'
import { cors } from 'hono/cors'
import { trimTrailingSlash } from 'hono/trailing-slash'
import v1 from './routes/v1'

const app = new Hono()

// Lets any website call the API from the browser.
app.use('/api/*', cors())

// Redirects /api/v1/characters/ to /api/v1/characters.
app.use(trimTrailingSlash())

app.route('/api/v1', v1)

// Unknown routes and ids get the same answer as in the Laravel version.
app.notFound((c) => c.json({ error: 'Resource not found' }, 404))

export default app
