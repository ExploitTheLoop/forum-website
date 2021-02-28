

<!-- Modal -->
<div class="modal fade" id="Threadmodal" tabindex="-1" aria-labelledby="ThreadmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ThreadmodalLabel">Thread here</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/phpmyproject/forum/partials/threadhandler.php" method="post">
      <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Title</label>
  <input type="text" class="form-control" id="title" name="title" placeholder="Title">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea class="form-control" id="des" name="des" rows="3"></textarea>
</div>
<div class="mb-3">
       <button type="submit" class="btn btn-primary">Submit</button>
      </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>