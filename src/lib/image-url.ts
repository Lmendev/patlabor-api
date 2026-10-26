export function withImageUrl<T extends { image: string | null }>(item: T, requestUrl: string): T {
  if (!item.image) return item
  return { ...item, image: new URL(item.image, requestUrl).href }
}
