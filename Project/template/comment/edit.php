<?php require(dirname(__DIR__ ).'.../header.html')?>
<form action="/Frame/Project/www/article/update/<?=$comment->getId()?>" method="post">
  <div class="mb-3">
    <label for="textComm" class="form-label">Text</label>
    <input type="text" class="form-control"  name="textComm" value="<?=$comment->getTextComm();?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php require(dirname(__DIR__ ).'.../footer.html')?>
