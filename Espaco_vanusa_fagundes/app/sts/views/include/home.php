<?php 

if(!defined('URL')){
	header("Location: ./");
	extit();
}

$carousel = $this->data['carousel'];
$cards = $this->data['cards-fire'];
$videos = $this->data['sts_videos'];

?>

<div class="pulse-button">
  <a href="#" id="draggable" target="__blank">
    <img src="<?= URL.'assets/img/robot/whats.png' ?>" id="pulse-button-img" class="pulse-button-img animated infinite bounce delay-5s">
  </a>
</div>


<main id="carousel" class="anim_right mt-5 mb-2">
<div id="carouselMain" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselMain" data-slide-to="0" class="active"></li>
    <?php for($i = 1; $i < count($carousel); $i++){ ?>
    <li data-target="#carouselMain" data-slide-to="<?= $i ?>"></li>
    <?php } ?>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= URL.'assets/img/carousel/'. $carousel[0]['file'] . '.'. $carousel[0]['ext'] ?>" class="img-fluid d-block w-100" style="max-height:500; position: relative;">
    </div>
    <?php unset($carousel[0]); foreach ($carousel as $value) { extract($value); ?>
    	 <div class="carousel-item">
	      <img src="<?= URL.'assets/img/carousel/'. $file . '.'. $ext ?>" class="img-fluid d-block w-100" style="max-height: 500; position: relative;">
	    </div>
    <?php } ?>
  </div>
  <a class="carousel-control-prev" href="#carouselMain" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselMain" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</main>

<main class="mt-2 mb-2 anim_bottom">
	<?php extract($this->data['sts_videos'][0]); ?>
    <div class="jumbotron video anim_right">
        <div class="container">
            <h2 class="display-4 text-center anim_left" style="margin-bottom: 40px;"><?php echo $titulo; ?></h2>
            <p class="lead text-center anim_right"><?php echo $descricao; ?></p>
            <div class="row justify-content-md-center anim_bottom">

                <div class="col-12 col-md-8">
                    <div class="embed-responsive embed-responsive-16by9">
                        <?php echo $video; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<main class="container mt-5 mb-2 text-center">
<div class="card-deck">
<?php foreach ($cards as $value) { extract($value); ?>

<div class="card anim_bottom">
  <img src="<?= URL.'assets/img/fire-cards/'.$id.'/'.$img ?>" class="card-img-top" alt="<?= $title ?>">
	<div class="card-body">
	    <h5 class="card-title"><?= utf8_encode($title) ?></h5>
	    <p class="card-text"><?= utf8_encode($description) ?></p>
	    <a href="#" class="btn btn<?= $class ?>"><?= utf8_encode($button) ?></a>
	</div>
</div>
<?php } ?>
</div>
</main>

<script type="text/javascript">
  
    let whats = document.getElementById('pulse-button-img');
    
    whats.addEventListener('mouseover', () => {
      whats.className = "pulse-button-img";
    });

    whats.addEventListener('mouseleave', () => {
      whats.className = "pulse-button-img animated infinite bounce delay-1s";
    });


</script>