export function linksTo(resource: string, ids: number[], requestUrl: string): string[] {
  return ids.map((id) => new URL(`/api/v1/${resource}/${id}`, requestUrl).href)
}
