<?php
declare(strict_types =1);
// use Sor\BlogPost;
class JsonBlogPostPrinter implements PrintableBlogPost
{
    public function print(BlogPost $blogPost) {
        return json_encode($blogPost->getData());
    }
    
}