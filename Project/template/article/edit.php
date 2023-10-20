<?php require(dirname(__DIR__ ).'.../header.html')?>
<form action="/Frame/Project/www/article/update/<?=$article->getId()?>" method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Title</label>
    <input type="name" class="form-control" id="name" name="name" value="<?=$article->getTitle();?>">
  </div>
  <div class="mb-3">
    <label for="text" class="form-label">Text</label>
    <input type="text" class="form-control" id="text" name="text" value="<?=$article->getText();?>">
  </div>
  <div class="form-group">
    <label for="author" >Author</label>
  <select class="form-control" name="author" id="author">
    <option value="<?=$article->getAuthorId()->getId();?>"><?=$article->getAuthorId()->getName();?></option>
    <?php foreach($users as $user):?>
    <option value="<?=$user->getId();?>"><?=$user->getName();?></option>
    <?php endforeach;?>
  </select>
</div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php require(dirname(__DIR__ ).'.../footer.html')?>
