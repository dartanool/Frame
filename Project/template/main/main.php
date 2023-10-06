<?php require(dirname(__DIR__ ).'.../header.html')?> 
      <table class="table"> 
  <thead> 
    <tr> 
      <th scope="col">#</th> 
      <th scope="col">name</th> 
      <th scope="col">Text</th> 
    </tr> 
  </thead> 
  <tbody> 
    <?php foreach ($article as $article){ 
      echo '<tr> 
            <th scope="row">1</th> 
            <td><a href="article/'.$article['id'].'">'.$article['name'].'</a></td> 
            <td>'.$article['text'].'</td> 
          </tr>'; 
    } 
    ?> 
  </tbody> 
</table> 
<?php require(dirname(__DIR__ ).'.../footer.html')?>