<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-23
 * Time: 下午3:50
 */

class indexController{
     public function index(){
         $news = M("news");
         $count = $news->count();
         VIEW::assign(array('count'=>$count));
         VIEW::display("admin/index.html");
     }

    public function newsadd(){
        if($_POST){
            $this->newssubmit();
        }else{
            if($_GET['id']>0){
                $news = M('news');
                $result = $news->getNewInfo($_GET['id']);
                VIEW::assign(array('data'=>$result));
            }
            VIEW::display("admin/newsadd.html");
        }

    }

    public function newssubmit(){
        if(empty($_POST['title'])||empty($_POST['content'])){
            $this->showMessage("请将标题或内容填写完整","admin.php?controller=index&method=newsadd");
        }else{
            $news = M('news');
            $title = $_POST['title'];
            $content = $_POST['content'];
            $author = $_POST['author'];
            $from = $_POST['from'];
            $dateline = time();

            $data = array(
                'title'=>$title,
                'content'=>$content,
                'author'=>$author,
                'from'=>$from,
                'dateline'=>$dateline
            );
            if($_POST['id']!=""){
                $news->update($data,$_POST['id']);
                $this->showMessage("编辑成功","admin.php?controller=index&method=newslist");
            }else{
                $res = $news->insert($data);
                if($res>0){
                    $this->showMessage("添加成功","admin.php?controller=index&method=newslist");
                }else{
                    $this->showMessage("添加失败","admin.php?controller=index&method=newsadd");
                }
            }




        }
    }

    public function newslist(){
        $news = M("news");
        $data = $news->getNewsInfo();
        VIEW::assign(array('data'=>$data));
        VIEW::display("admin/newslist.html");
    }

    public function newsdel(){
        $news = M("news");
        $news->delNew($_GET['id']);
        $this->showMessage("删除成功","admin.php?controller=index&method=newslist");
    }
    public function logout(){
        echo "<script>window.location.href='admin.php?controller=admin&method=login'</script>";
    }

    public function showMessage($info,$url){
        echo "<script>alert('$info');window.location.href='$url'</script>";
    }
}