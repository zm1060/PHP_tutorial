<?php


namespace Admin\Controller;
use Think\Controller;
use Think\Upload;

class IndexController extends Controller
{
    public function upload(){
        $upload = new Upload();
        $upload->maxSize = 1024*1024*2;
        $upload->exts = array('jpg','gif','png','jpeg');
        $upload->rootPath = __DIR__ .'/../../../upload/';
        $upload->savePath = '';

        $info = $upload->upload();
        if(!$info){
            $this->ajaxReturn(array(
                'error' => $upload->getError()
            ));

        }
        else{
            $path = $upload->rootPath . $info['file']['savepath'].$info['file']['savename'];
            $image = new Image();
            $image->open($path);
            $image->thumb(200,200,Image::IMAGE_THUMB_CENTER)->save($path);
            $this->ajaxReturn(array(
                'url' => U('/','',false,true) .'upload/'.$info['file']['savepath'].$info['file']['savename']
            ));
        }

    }

}