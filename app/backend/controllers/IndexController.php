<?php

/**
 *
 * @category PhalconCMS
 * @copyright Copyright (c) 2016 PhalconCMS team (http://www.marser.cn)
 * @license GNU General Public License 2.0
 * @link www.marser.cn
 */
namespace Marser\App\Backend\Controllers;

use \Marser\App\Backend\Controllers\BaseController;

class IndexController extends BaseController{

    /**
     * 控制面板
     */
    public function indexAction(){
        return $this -> redirect('dashboard/index');
    }

    /**
     * 404页面
     */
    public function notfoundAction(){
        return $this -> response -> setHeader('status', '404 Not Found');
    }
    public function getMenuDataAction(){
        try{
            if(!$this -> request -> isAjax() || !$this -> request -> isPost()){
                throw new \Exception('非法请求');
            }
            $uid = intval($this -> request -> getPost('uid', 'trim'));
            $data = array(
                array(
                    'type'=>'link',
                    'url'=>'index/index',
                    'name'=>'首页',
                    'icon'=>'icon-dashboard',
                    'sub'=>array()
                ),
                array(
                    'type'=>'sub',
                    'url'=>'index/index',
                    'name'=>'系统管理',
                    'icon'=>'icon-laptop',
                    'sub'=>array(
                        array(
                            'type'=>'link',
                            'url'=>'index/index',
                            'name'=>'系统日志',
                            'icon'=>'',
                            'sub'=>array()
                        ),
                        array(
                            'type'=>'link',
                            'url'=>'index/index',
                            'name'=>'访问日志',
                            'icon'=>'',
                            'sub'=>array()
                        ),
                        array(
                            'type'=>'link',
                            'url'=>'index/index',
                            'name'=>'菜单管理',
                            'icon'=>'',
                            'sub'=>array()
                        ),
                    )
                ),
            );
            $this->ajax_return('获取菜单成功',0,$data);
        }catch(\Exception $e){
            $this -> write_exception_log($e);
            $this -> flashSession -> error($e -> getMessage());
            $url = 'menu/write';
            !empty($mid) && $url .= "?mid={$mid}";
            return $this -> redirect($url);
        }
    }
}