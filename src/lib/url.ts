// "https://host/api/v1/labors/1" → "https://host". Done by hand because the
// project has no Workers runtime types, so `URL` is not typed.
export function originOf(requestUrl: string): string {
  return requestUrl.slice(0, requestUrl.indexOf('/', requestUrl.indexOf('//') + 2))
}

// The JSON files save images as paths ("/images/labors/1.jpg"), so they work on
// any domain. Responses turn them into full links, as the API always did.
export function withImageUrl<T extends { image: string | null }>(item: T, requestUrl: string): T {
  if (!item.image?.startsWith('/')) return item
  return { ...item, image: originOf(requestUrl) + item.image }
}
