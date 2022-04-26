<?php
declare(strict_types =1);
// namespace Sor;
class BlogPost
{
    private string $author;
    private string $title;
    private string $content;
    private string $date;
 
    // ..
 
    public function __construct(string $author, string $title, string $content, string $date)
    {
            $this->author=$author;
            $this->title=$title;
            $this->content=$content;
            $this->date=$date;

    }

    public function getData(): array
    {
        return [
            'author' => $this->author,
            'title' => $this->title,
            'content' => $this->content,
            'date' => $this->date
        ];
    }
}



