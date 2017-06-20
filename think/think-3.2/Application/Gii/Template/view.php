<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $title ?>详情页</title>
    <include file="Public:import" />
</head>
<body>
    <div class="mybreadcrumb">
        <ol class="breadcrumb">
            <li><a href="__MODULE__" target="_top"><i class="icon-home"></i>主页</a></li>
            <li><a href="__URL__/index"><?php echo $title ?>管理</a></li>
            <li class="active">详细</li>
        </ol>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading"><?php echo $title ?>的详细页-{$data.name}<a href="javascript:history.back()" class="pull-right">返回</a></div>
        <div class="panel-body">
            <div class="box_header">
                <div class="btn-group pull-left"> 
                    <a href="__URL__/add" class="btn btn-success"><i class="icon-plus"></i>添加</a>
                    <a href="__URL__/remove/id/{$data.id}" onclick="return confirm('确定删除?');" class="btn btn-default"><i class="icon-remove"></i>删除</a>
                </div>
                <div class="pull-right">
                    <a href="__APP__/Home/index" target="_black" class="btn btn-default"><i class="icon-globe"></i>页面查看</a>
                </div>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th width="10%" class="text-right">名称</th>
                        <th>内容</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($fields as $k => $v) { ?>                     
                        <?php if ($k == 'photo') { ?>
                            <tr>                    
                                <td class="text-right"><?php echo $v ?>：</td>
                                <td><img src="{$data.<?php echo $k ?>}" height="100"/></td>                    
                            </tr>
                        <?php } elseif ($k == 'picture') { ?>
                            <tr>                    
                                <td class="text-right"><?php echo $v ?>：</td>
                                <td><volist name="explode(',',$data.picture)" id="vo" ><img src="{$vo}" height="100"/>&nbsp;&nbsp;</volist></td>                    
                        </tr>                     
                    <?php } elseif (strpos($key, 'id')) { ?>
                        <tr>                    
                            <td class="text-right"><?php echo $v ?>：</td>
                            <td>{$key[$data['<?php echo $k ?>']]}</td>           
                        </tr>
                    <?php } else { ?>
                        <tr>                    
                            <td class="text-right"><?php echo $v ?>：</td>
                            <td>{$data.<?php echo $k ?>}</td>    
                        </tr>
                    <?php } ?>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
<include file="Public:footer" />
</body>
</html>
