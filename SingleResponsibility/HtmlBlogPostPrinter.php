<?php
declare(strict_types =1);

// use Sor\BlogPost;

class HtmlBlogPostPrinter implements PrintableBlogPost
{
    public function print(BlogPost $blogPost) {
        
        var_dump($blogPost);
                
    }
}

