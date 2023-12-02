export interface Post {
  id: number;
  slug: string;
  title: string;
  subtitle: string;
  content_raw?: string;
  content_html?: string;
  post_image?: string;
  meta_description: string;
  layout?: string;
}
