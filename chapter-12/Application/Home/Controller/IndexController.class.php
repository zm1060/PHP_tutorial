<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function comment($id)
    {
        $model = new Model('Article');
        $article = $model->find(array('articleId'=>$id));
        if(empty($article))
        {
            $this->error('文章不存在');
        }
        $key = get_client_ip() . '-view-article-' .$id;
        $cache = S($key);

        if(!empty($cache))
        {
            $this->error('评论间隔必须大于1分钟');
        }
        $nickname = I('nickname');
        $content  = I('content');
        if(empty($nickname))
        {
            $this->error('昵称不能为空');
        }
        if(empty($content))
        {
            $this->error('评论的内容不能为空');
        }

        $data = array(
            'nickname' => $nickname,
            'content' => $content,
            'createdAt' => time(),
            'createIp' => get_client_ip(),
            'articleId' => $id
        );

        $commentModel = new Model('Comment');
        if(!$commentModel->data($data)->add())
        {
            $this->error('评论失败');
        }
        S($key, 1, 60);
        $data['createdAt'] = data('m-d H:i',$data['createdAt']);
        $this->ajaxReturn($data);




    }

}