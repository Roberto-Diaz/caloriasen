<x-app-layout>
    <div class="card w-full lg:w-1/2">        
      <div class="card-header">
          <h1>Agregar Publicación</h1>
      </div>      
      <div class="card-body">
        <form method="POST" action="{{ route('admin.post.store')}}" enctype="multipart/form-data">    
          @csrf   
          <div class="grid grid-cols-1 gap-2">  
            <div class="form-group">  
              <label for="title" class="form-label">Titulo</label>
              <input type="text" name="title" placeholder="Titulo" class="form-control">
            </div>  
            <div class="form-group">  
              <label for="image" class="form-label">Imagen de Publicación</label> 
              <input type="file" accept="image/*"  name="image" placeholder="Imagen de publicación" class="form-control">
            </div>  
            <div class="form-group">    
              <label for="category_id" class="form-label">Categoría</label>     
              <select type="text" accept="image/*"  name="category_id" class="form-select">
                <option value="0" selected disabled>Selecciona una categoría</option>   
                @isset($categories)   
                  @foreach ($categories as $c)    
                    <option value="{{ $c->id}}">{{ $c->name }}</option>                         
                  @endforeach                                        
                @endisset              
              </select> 
            </div>              
            <div class="form-group">
              <label for="extract" class="form-label">Extracto</label>
              <textarea  type="text" name="extract" placeholder="Extracto" class="form-control" rows="4"></textarea>
            </div>  
            <div class="form-group">
              <label for="title" class="form-label">Contenido</label>
              <textarea  type="text" name="body" id="editor1" placeholder="Titulo" class="form-control" rows="6"></textarea>  
            </div>      
          </div>  
          <div class="form-group">  

            <button type="submit" class="btn btn-primary float-right">Guardar</button>  
          </div>      
      </form> 
      </div>
    </div>  
    @push('scripts')  
    <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
    <script>    
        CKEDITOR.replace( 'editor1' );  
    </script>
    @endpush
  </x-app-layout>
    