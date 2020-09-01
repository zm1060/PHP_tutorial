<?php
namespace Home\Controller;
use Think\Controller;
use Think\Image;

class IndexController extends Controller
{
    public function index()
    {

    }

    public function imginfo()
    {
        $path = './Public/images/demo.jpg';
        $image = new Image(Image::IMAGE_GD, $path);
        dump([
            'width' => $image->width(),
            'height' => $image->height(),
            'mime' => $image->mime(),
            'type' => $image->type()
        ]);
    }

    public function crop()
    {
        $path = './Public/images/demo.jpg';
        $image = new Image(Image::IMAGE_GD, $path);
        $image->crop(200, 200)->save('./Public/images/demo-crop-200x200.jpg');
    }

    public function thumb()
    {
        $path = './Public/images/demo.jpg';
        $image = new Image(Image::IMAGE_GD, $path);
        $image->thumb(200, 200)->save('./Public/images/demo-thumb-200x200.jpg');

    }

    public function water()
    {
        $path = './Public/images/demo.jpg';
        $water = './Public/images/logo.jpg';
        $image = new Image(Image::IMAGE_GD, $path);
        $image->water($water)->save('./Public/images/demo-water.jpg');
    }




}
