@extends('backend.app')
@section('page')

<script type="text/javascript" src="{{asset('backend/tinymce/js/tinymce/tinymce.min.js')}}">
</script>

<script type="text/javascript">
	tinymce.init({
    entity_encoding : "raw",
		selector: "textarea",
		theme: "modern",
		plugins: [
		"advlist autolink lists link image charmap print preview hr anchor pagebreak",
		"searchreplace wordcount visualblocks visualchars code fullscreen",
		"insertdatetime media nonbreaking save table contextmenu directionality",
		"emoticons template paste textcolor colorpicker textpattern imagetools"
		],
		toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
		toolbar2: "print preview media | forecolor backcolor emoticons | ltr rtl",
		image_advtab: true,
		templates: [
		{ title: 'Test template 1', content: 'Test 1' },
		{ title: 'Test template 2', content: 'Test 2' }
		],

	});
</script>

        <!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">

            	<!-- row -->

            	<div class="container">
            		<div class="row">
            			<div class="col-12">
            				<h3 class="content-heading mt-2">Məqalə Əlavə</h3>
            			</div>
            			<div class="col-xl-12 col-xxl-12">
            				<div class="card">
            					<div class="card-body">
            						<h4 class="card-title"></h4>



            						<div class="basic-form">
            							<form method="POST" action="{{route('meqale.insert.save')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                                                         <div class="basic-form custom_file_input">

                                                          <div class="input-group mb-3">
                                                            <div class="custom-file">
                                                                <input name="sekil" type="file" class="custom-file-input">
                                                                <label class="custom-file-label">Şəkil Seç</label>
                                                          </div>
                                                          <div class="input-group-append">
                                                          </div>
                                                    </div>   

                                              </div>
                                              <h4 class="card-title">Başlıq</h4>
                                              <span style="color:red">{{$errors->first('basliq')}}</span>
                                              <div class="form-group">
                                                   <input type="text" name="basliq" placeholder="Məqalənin başlığını daxil edin..." class="form-control input-rounded" />
                                             </div>
                                               

                                               <h4 class="card-title">Muəllif</h4>
                                              <div class="form-group">
                                                   <input type="text" name="muellif" placeholder="Məqalənin başlığını daxil edin..." class="form-control input-rounded" />
                                             </div>
                                                <h4 class="card-title">Adress</h4>
                                              <div class="form-group">
                                                   <input type="text" name="adres" placeholder="Məqalənin başlığını daxil edin..." class="form-control input-rounded" />
                                             </div>
                                             <h4 class="card-title">Məzmun</h4>
                                             <div class="form-group">
                                                   <textarea class="form-control" rows="15" name="mezmun" placeholder="Məzmun daxil edin..."></textarea>
                                             </div>
                                              <h4 class="card-title">Tarix</h4>
                                              <div class="form-group">
                                                   <input type="date" name="vaxt" class="form-control input-rounded" />
                                             </div>
                                             <button type="submit" class="btn btn-primary btn-block">Əlavə Et</button>

                                       </form>
                                 </div>

                           </div>
                     </div>
               </div>
         </div>
   </div>
</div>

@endsection()
@section('css')
@endsection()
@section('js')
@endsection()