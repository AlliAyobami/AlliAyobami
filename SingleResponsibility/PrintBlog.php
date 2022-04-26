<?php
include 'Autoload.php';
class PrintBlog
{
    public function print(PrintableBlogPost $print){
        var_dump($print);
    }
}

$date=date('y');
$datas = new BlogPost('Bola', 'The Golden Egg', 'The golden Egg belongs to Tunde', $date);
$printHTML=new HtmlBlogPostPrinter;
$printHTML->print($datas);


$date=date('y');
$data2 = new BlogPost('Bola', 'The Golden Egg', 'The golden Egg belongs to Tunde', $date);
$data=$data2->getData();
$printJson=new JsonBlogPostPrinter;
$printJson->print($data);