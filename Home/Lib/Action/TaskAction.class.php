<?php
class TaskAction extends Action
{
    function Mine()
    {
        $this->assign("title","我的任务");
        $this->display();
    }
    function Info()
    {
    	$this->display();
    }
}