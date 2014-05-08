
  	

        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="type"><font color='#ffffff'>Typography</font></h1>
            </div>
          </div>
        </div>

        <!-- Headings -->

        <div class="row">
          <div class="col-lg-4">
            	<?PHP foreach($query->result() as $item):?>
                <h3><a href=/index.php/board/view/<?PHP echo $item->ID?>><font color="#0B3861"><?PHP echo $item->SUBJECT?></font></a></h3>
              <?PHP endforeach;?>
          </div>
          <div class="col-lg-4">

          </div>
          <div class="col-lg-4">

          </div>
        </div>




