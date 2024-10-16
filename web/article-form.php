<?php
include "templates/header.php";

$code = get_query_string("code","");
$articleExist = 0;
if ($code) {
  $item = settings()->get("code='$code'");
  $articleExist = settings()->count("code='$code'");
}


?>


<style media="screen">
.ck-editor__editable {
  min-height: 500px;
  }
</style>


<div class="card bg-light-info shadow-none position-relative overflow-hidden">
    <div class="card-body px-4 py-3 d-flex">
      
    <button class="btn btn-warning" onclick="history.back()"><i class="bi bi-arrow-left"></i></button>
    </div>
</div>


<form action="process.php?action=settings-save" method="post" enctype="multipart/form-data">

<input type="hidden" name="code" value="<?=$code?>">

<div class="row">
  <div class="col-lg-8 ">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-7">
          <h4 class="card-title">General</h4>

          <button class="navbar-toggler border-0 shadow-none d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <i class="ti ti-menu fs-5 d-flex"></i>
          </button>
        </div>
          <div class="mb-4">
            <label class="form-label">Title <span class="text-danger">*</span>
            </label>
            <input type="text" name="title" id="form-title" class="form-control" placeholder="Name" required>
          </div>
          <div>
            <label class="form-label">Detail</label>
            <textarea name="content" id="editor" required>
            </textarea>
          </div>
      </div>
    </div>


  </div>
  <div class="col-lg-4">
    <div class="offcanvas-md offcanvas-end overflow-auto" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title mb-7">Photo</h4>
          <p class="fs-2 text-center mb-0">
            Click below to change image
          </p>

          <input accept="image/*" style="opacity:0;height:1px;" name="file" type='file' id="imgInp"/>
          <img id="product" src="templates/product-upload.png" onclick="upload_product()" style="width:100%" alt="">


        </div>
      </div>


    </div>
  </div>
</div>

<div class="form-actions mb-5">
  <button type="submit" name="form-type" id="submit-add" value="add" class="btn btn-primary">
    Save changes
  </button>
  <button type="submit" name="form-type" id="submit-edit" value="edit" class="btn btn-primary">
    Save changes
  </button>
  <button  onclick="history.back()" type="button" class="btn bg-danger-subtle text-danger ms-6">
    Cancel
  </button>
</div>

</form>

<?php include "templates/footer.php"; ?>

<script type="text/javascript">

// Upload product image ==========================================================
imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    product.src = URL.createObjectURL(file)
  }
}


function upload_product(){
  imgInp.click(function () {
      fileupload.click();
  });
}


// Text area text editor =======================================================
ClassicEditor
  .create(document.querySelector('#editor'), {

    toolbar: ['heading', '|', 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote']
  })
  .then(editor => {
    theEditor = editor;

  })
  .catch(error => {
    console.error(error);
  });


// Modify product ===============================================================
<?php if ($articleExist): ?>
  $('#submit-add').hide();
  $('#submit-edit').show();


  $('#form-title').val("<?=$item->title?>");
  
  $('#editor').val("<?=htmlspecialchars_decode($item->content)?>");

  product.src = "<?=media_link($item->file);?>";
<?php else: ?>

// Add product ===============================================================
  $('#submit-add').show();
  $('#submit-edit').hide();
<?php endif; ?>

</script>
