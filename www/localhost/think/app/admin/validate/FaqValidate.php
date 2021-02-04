<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-present http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 小夏 < 449134904@qq.com>
// +----------------------------------------------------------------------
namespace app\admin\validate;

use think\Validate;

class FaqValidate extends Validate
{
    protected $rule = [
        'title' => 'require',
        'keywords' => 'require',
        'description'  => 'require',
    ];

    protected $message = [
        'title.require' => '问题不能为空',
        'keywords.require'  => '关键字不能为空',
        'description.require'  => '答案不能为空',
    ];

}
