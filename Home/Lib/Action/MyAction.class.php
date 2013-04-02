<?php
class MyAction extends Action
{
    function Information()
    {
        $this->assign("title","我的信息");
        $this->display();
    }
}
