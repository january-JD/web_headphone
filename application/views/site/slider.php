 <section>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php $i=0; ?>
          <?php foreach ($slide_list as $row ) :?>

          <li data-target="#carouselExampleIndicators" data-slide-to="$i" 
           <?php if($i==0):?>
          class="active"
            <?php endif;?>
           
           ></li>
          <?php $i++; ?>
        <?php endforeach; ?>
        </ol>
        <div class="carousel-inner" data-interval="1000">
          <?php $i=0; ?>
          <?php foreach ($slide_list as $row):?>
          <div 
          <?php if($i==0): ?>
          class="carousel-item active"
          <?php else: ?>
           class ="carousel-item"
          <?php endif; ?>
          >
          <?php $i++; ?>
            <img class="d-block w-100" src="<?php echo base_url('upload/slide/'.$row->image) ?>" alt="First slide">
          </div>
         <?php endforeach; ?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

