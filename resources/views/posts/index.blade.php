<x-app-layout>
    <div class="py-12 container bg-transparent">   
      <div class="shadow-lg border-indigo-200">
        <table class="table-fixed rounded">          
            <thead class="bg-indigo-300 text-gray-700 uppercase">     
              <tr>           
                <th class="p-2">Categoria</th>  
                <th class="p-2">Titulo</th>     
                <th class="p-2">Estatus</th>      
                <th class="p-2">Extracto</th>
                <th class="p-2">Acciones</th>
              </tr>
            </thead>    
            <tbody class=" divide-y divide-gray-300">
              @foreach ($posts as $post)
                <tr>  
                  <td class="p-2">{{ $post->category->name}}</td>
                  <td class="p-2">{{ $post->title}}</td>
                  <td class="p-2">{{ $post->status}}</td>
                  <td class="p-2">{{ $post->extract}}</td>  
                  <td>
                    funciones
                  </td>
                </tr>                   
              @endforeach     
            </tbody>
          </table>                 
      </div> 
    </div>               
  </x-app-layout>
    