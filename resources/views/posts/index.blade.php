<x-app-layout>
    <div class="py-12 container bg-transparent">    
      <div class="overflow-x-auto shadow-lg border-gray-500">  
        <table class="table-fixed rounded">          
            <thead class="bg-gray-500 text-white uppercase">     
              <tr>            
                <th class="p-2">Categoría</th>    
                <th class="p-2">Titulo</th>     
                <th class="p-2">Estatus</th>      
                <th class="p-2">Extracto</th>
                <th class="p-2">Acciones</th>
              </tr>
            </thead>    
            <tbody class=" divide-y divide-gray-300">
              @forelse ($posts as $post)
                <tr>    
                  <td class="p-2">{{ $post->category->name}}</td>
                  <td class="p-2">{{ $post->title}}</td>
                  <td class="p-2">
                    @if ($post->status ==1)
                      <span class="bg-green-300 rounded-full px-2">Activo</span>
                    @else   
                      <span class="bg-red-300 rounded-full px-2">Inactivo</span>
                    @endif  
                  </td>
                  <td class="p-2 text-justify">{{ $post->extract}}</td>     
                  <td class="p-2">          
                    <div class="flex space-x-2 p-2">
                      <button type="button" class="btn btn-info">Detalle</button>     
                      <button type="button" class="btn btn-primary">Editar</button> 
                      <button type="button" class="btn btn-danger">Eliminar</button>  
                    </div>
                  </td>   
                </tr>  
              @empty  
                  <tr>
                    <td colspan="5">Sin registros</td>
                  </tr>         
              @endforelse     
            </tbody>
          </table>                 
      </div> 
    </div>               
  </x-app-layout>
    