<?php require(dirname(__DIR__).'.../header.html')?>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?=$article->getTitle();?></h5>
    <p class="card-text"><?=$article->getText();?></p>
    <p class="card-text"><?=$user->getName()?></p>
    <a href="/Frame/Project/www/article/edit/<?=$article->getId();?>" class="card-link">Update Article</a>
    <a href="/Frame/Project/www/article/delete/<?=$article->getId()?>" class="card-link">Delete Article</a> 
  </div>
</div>

<form action="/Frame/Project/www/article/<?=$article->getId();?>/store" method="post">

  <div class="mb-3">
    <label for="textComm" class="form-label">Text</label>
    <input type="text" class="form-control" name="textComm">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<table class="table"> 
  <thead> 
    <tr> 
      <th scope="col">#</th> 
      <th scope="col">Text</th> 
      <th scope="col">Time</th> 
      <th scope="col">Edit</th> 
    </tr> 
  </thead> 
  <tbody> 
    <?php foreach ($comment as $comment){ 
      echo '<tr> 
            <th scope="row">-----</th> 
            <td>'.$comment->getTextComm().'</a></td>
            <td>'.$comment->getCreatedAt().'</td> <td><a href="/Frame/Project/www/article/edit/'.$comment->getId().'">Edit Comment</a></td>
          </tr>'; 
    } 
    ?> 
  </tbody> 
</table> 




<?php require(dirname(__DIR__).'.../footer.html')?>