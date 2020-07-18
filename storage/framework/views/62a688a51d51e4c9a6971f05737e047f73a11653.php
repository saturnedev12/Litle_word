<!--button ajout-->
<!-- Button trigger modal -->
<button type="button" class=" add btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  <i class="fa fa-plus" aria-hidden="true"></i>
</button>

<!-- Modal -->
<form action="/" method="post" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <?php echo e(csrf_field()); ?>

<div class="modal-dialog" role="document">
 <div class="modal-content">
   <div class="modal-header" style="border:none;">
     <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>
   <div class="modal-body">
    <input type="hidden" name="owner" value="Saturne">
    <input class="inp_title" type="text" name="title"  placeholder="titre" value="">
    <textarea class="inp_texte" type="text" name="content" placeholder="petit mot" value=""></textarea>


   </div>
   <div class="modal-footer">
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     <input type="submit" class="btn btn-primary" value="poster"  >

   </div>
 </div>
</div>
</form>
<!--fin button ajout-->
<?php /**PATH /home/saturnin/Documents/demo/resources/views//partials/_add.blade.php ENDPATH**/ ?>