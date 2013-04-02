<?php
class GroupAction extends Action
{
    function Manage()
    {
        $this->assign("title","我的团队");
        $this->display();
    }
}
