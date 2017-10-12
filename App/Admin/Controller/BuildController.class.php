<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends BaseController {
	protected $dao;
    public function _initialize(){
        parent::_initialize();
        $this->dao=D('Product');
    }
    public function index(){
    	$this->display();
    }
    public function add(){
    	$this->display();
    }
    public function update(){
    	$this->display();
    }
    public function del(){
    }



}