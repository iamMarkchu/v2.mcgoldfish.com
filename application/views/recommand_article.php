<ul class="article-list in-home">
  <?php foreach($recommand_list as $article): ?>
  <li class="panel panel-test">
    <div class="panel-heading">
      <?php if(is_array($article['tag_info']) && count($article['tag_info'])>0):?>
      <ul class="ar-label">
        <?php foreach($article['tag_info'] as $k => $v):?>
        <li class="ar-label-<?php echo $k+1;?>">
          <a href="<?php echo base_url('/tag/'.$v['id']);?>" title="">
            <?php echo $v['displayname'];?>
          </a>
        </li>
        <?php endforeach;?>
      </ul>
      <?php endif;?>
      <a href="<?php echo base_url('/article/'.$article['id']);?>" class="ar-cover">
        <img src="http://img.mcgoldfish.com<?php echo $article['image'];?>" alt="" width="250" height="250" />
      </a>
    </div>
    <div class="panel-body">
      <h2>
        <a href="<?php echo base_url('/article/'.$article['id']);?>" class="data-article-url">
          <?php echo $article['title']?>
        </a>
      </h2>
    </div>
    <div class="panel-footer">
      <ul class="pull-left user-info">
        <li>
          <i class="fa fa-user-circle" aria-hidden="true"></i>
          <span>
            <?php echo $article['addeditor'];?>
          </span>
        </li>
        <li>
          <i class="fa fa-clock-o" aria-hidden="true"></i>
          <span><?php echo date('m-d', strtotime($article['addtime'])); ?></span>
        </li>
      </ul>
      <ul class="pull-right user-info">
        <li class="hot-comment">
          <i class="fa fa-commenting" aria-hidden="true"></i>
          <span class="mes"><?php echo $article['commentcount'];?></span>
        </li>
        <li class="good-vote" data-id="<?php echo $article['id']?>">
          <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
          <span class="vote"><?php echo $article['votecount'] ?></span>   
        </li>
      </ul>               
      <div class="clear-fix"></div>
    </div>
  </li>
  <?php endforeach; ?>
</ul>