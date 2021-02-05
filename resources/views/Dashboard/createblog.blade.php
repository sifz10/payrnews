@extends('layouts.dashboardLayout')

@section('content')
<style>
  .bootstrap-select .btn{display: none !important;}
  .bootstrap-select{border: none;}
  div.btn-group{padding: 0 !important;}
  option{color: #9A9A9A !important;}
  select{color: #9A9A9A !important;}
  .cke_editable{color: #9A9A9A !important;}
</style>
  <form action="{{ route('send.post.request') }}" method="post" enctype="multipart/form-data">
     @csrf
    <div class="card">
        <div class="body">
          <h5 class="text-center" style="color: #F96332;">Create Post</h5>
          <h4 class="text-center" style="color: #F96332;" id="message">{{ Session::get('message') }}</h4>
            <div class="form-group">
                <input type="text" class="form-control" name="postTitle" placeholder="Post Title" />
                <input type="text" hidden name="user_id" value="{{ Auth::id() }}"/>
            </div>
            <div class="form-group">
                <select class="form-control" name="category">
                  @foreach ($categories as $category)
                    <option value="{{ $category->categoryname_bn }}">{{ $category->categoryname_bn }}</option>
                  @endforeach

                </select>
            </div>
            <div class="form-group" style="margin-bottom: 30px;">
                <textarea type="text" id="editor" class="form-control editor1" rows="5" name="postDes"></textarea>
            </div>
            <div class="custom-file mb-3">
              <input type="file" class="custom-file-input" id="customFile" name="avatar" accept="image/*" >
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            <button type="submit" class="btn btn-primary btn-round waves-effect m-t-20">Submit</button>
        </div>
    </div>
  </form>
<!-- jquery js -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

<!-- ckeditor js-->
<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
<script>
ClassicEditor
       .create( document.querySelector( '#editor' ) )
       .then( editor => {
               console.log( editor );
       } )
       .catch( error => {
               console.error( error );
       } );
</script>
@if (Session::has('status'))
  <div class="alert alert-success">
      <strong>Well done!</strong> Your is under rewview. Please wait for the approval.
  </div>
@endif
@endsection
