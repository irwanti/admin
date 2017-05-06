<!-- <div class="modal fade" tabindex="-1" id="myModal" role="dialog"> -->
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"> Details Gambar </h4>
      </div>
      <div class="modal-body">

      <div id="carousel-modal" class="carousel slide" data-ride="carousel">

          <?php
            if(isset($gambar) && is_array($gambar) && count($gambar)): $i=1;
            foreach ($gambar as $row => $data) { 
          ?>

        <div class="carousel-inner">

           
          <div class="item active"> 
            <img style="width: 100%; display: block;" src="<?php echo base_url();?>assets/upload/<?php echo $data['namafile']; ?>" alt="image"/>
            <br>
            <?php echo $data['ket']; ?> 
          </div>
                 
        </div>

          <?php 
            } endif;  
          ?>
          
        <!-- Next / Previous controls here -->
        <a class="left carousel-control" href="#carousel-modal" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-modal" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a> 

      </div>
   
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  
  $('a[data-slide="prev"]').click(function() {
    $('#carousel-modal').carousel('prev');
  });

  $('a[data-slide="next"]').click(function() {
    $('#carousel-modal').carousel('next');
  });

</script>

