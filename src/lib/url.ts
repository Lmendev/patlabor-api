// The JSON files save images as paths ("/images/labors/1.jpg"), so they work on
// any domain. Responses turn them into full links, as the API always did.
export function withImageUrl<T extends { image: string | null }>(item: T, requestUrl: string): T {
  if (!item.image) return item
  return { ...item, image: new URL(item.image, requestUrl).href }
}
