

    
@extends('layouts.appclient')


@section('content')

@if (session()->has('success'))

{{-- <strong>{{session('success')}}</strong>
<div class="alert alert-success alert-dismissible fade show" role="alert">



  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div> --}}

<div class="flex justify-between text-green-200 shadow-inner rounded p-3 bg-green-600">
    <p class="self-center">
      <strong>Success </strong>{{session('success')}}.
    </p>
    <strong class="text-xl align-center cursor-pointer alert-del"
      >&times;</strong
    >
  </div>

@endif 



<br>
<form method='POST' action="{{ route('jobs.store') }}" id="formulaire" class="w-full max-w-lg " enctype="multipart/form-data"  >
    @csrf
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
          Title
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="title"  name="title"  type="text"placeholder="Titre" required >
        <input type="hidden" class="w3-input" name="id" id="id">
        <input type="hidden" name="user_id" id="user_id" value="{{Auth()->user()->id}}">
        
      </div>
      <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
          Description
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="description" name="description" type="text" placeholder="Description" required>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
          Attachment
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="attachment" name="attachment" type="file"  placeholder="Attachment" required>
       
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-2">
      <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
          Price
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="price" name="price" type="text" placeholder="Price en $" required >
        {{-- @error('price')
        <span class="text-red-400 text-sm">
            <span>{{ $message }}</span>
        </span>
    @enderror --}}

   
    </div>
      <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
          Status
        </label>
        <div class="relative">
          <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="status" name="status">
            <option value="1">Enable</option>
            <option value="0">Disable</option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
          </div>
        </div>
      </div>
    </div>
    <button type="submit" class="bg-green-500 text-white hover:bg-green-700 transition ease-in-out duration-500 rounded-md shadow-md w-full block px-4 py-2 mt-3" id="boutton">Enregister</button>
    @if($errors->any())
    @foreach ($errors->all() as $error )
    <span class="text-red-400 text-sm">
        <span>{{ $error }}</span>
    </span>
    @endforeach
@endif
  </form>
  <br><br>


 
    
    <div class="container mx-auto">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="p-8 border-b border-gray-200 shadow">
                    <table class="divide-y divide-gray-300" id="myTable">
                        <thead class="bg-black">
                            <tr>
                                <th class="px-6 py-2 text-xs text-white">
                                    Titre
                                </th>
                                <th class="px-6 py-2 text-xs text-white">
                                    Description
                                </th>
                                <th class="px-6 py-2 text-xs text-white">
                                    Status
                                </th>
                                <th class="px-6 py-2 text-xs text-white">
                                    Attachement
                                </th>
                                <th class="px-6 py-2 text-xs text-white">
                                    Price
                                </th>

                                <th class="px-6 py-2 text-xs text-white">
                                    Edit
                                </th>

                                <th class="px-6 py-2 text-xs text-white">
                                    Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-300">

                            @foreach($job as $jobs)
                            <tr  class="whitespace-nowrap">
                            
                                <td class="px-6 py-4 text-center">{{$jobs->title}}</td>
                                <td class="px-6 py-4 text-center">{{$jobs->description}}</td>
                                @if ($jobs->status===1)
                                <td class="px-6 py-4 text-center"> Activer</td>
                                @else
                                <td class="px-6 py-4 text-center"> Desactiver</td>
                                @endif
                                
                                <td class="px-6 py-4 text-center">{{$jobs->attachment}}</td>
                                <td class="px-6 py-4 text-center">{{$jobs->price.'$'}}</td>
                                {{-- <td><a href="{{ route('games.edit', $game->id)}}" class="btn btn-primary">Edit</a></td> --}}
                                <td class="px-6 py-4">
                                    <a href="{{ route('jobs.edit', $jobs->id)}}" class="inline-block text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a>
                                </td>

                                <td class="px-6 py-4">

                                  
                                      
                                    <a href="{{ route('supprimer_jobs', $jobs->id)}}" class="inline-block text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </a>



                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-12">
                            {{ $job->links('pagination::tailwind') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection


{{-- @section('script')
    <script>
        var table;
        // jQuery DOM Selectors: var myElement = $("#id01");
        $(document).ready(function(){
            table = $("#myTable").DataTable({
                "ajax" : {
                    "url" : '{{ route("lister_jobs") }}',
                    "dataSrc" : "data",
                },
                "columns" : [
                    {data:"title"},
                    {data:"description"},
                    {data:"status"},
                    {data:"attachment"},
                    {data:"price"},
                    {data:"user_id"},
                    {data:"action"}
                ]
            });
        });

        
       





        function modifier(id){
            
            if(id){
                $.ajax({
                    url : '{{ route("getJobsById") }}',
                    type : 'post',
                    dataType : 'json',
                    data : {
                        _token : '{{ csrf_token() }}',
                        id : id
                    },
                    success : function(response){
                        $("#id").val(id);
                        $("#title").val(response.title);
                        $("#description").val(response.description);
                        $("#status").val(response.status);
                        $("#attachment").val(response.attachment);
                        $("#price").val(response.price);
                        $("#user_id").val(response.user_id);
                        $("#boutton").text("Modifier");
                    }
                });
            }
        }

        function supprimer(id){
            if(id){
                //sweet alert qui apparait
                Swal.fire({
                    text: "Etes-vous sur de le supprimer?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Confirmer',
                    cancelButtonText: 'Annuler',
                    }).then((result) => {


                    if (result.isConfirmed) {
                        $.ajax({
                            url : '{{ route("supprimer_jobs") }}',
                            type : 'post',
                            dataType : 'json',
                            data : {
                                _token : '{{ csrf_token() }}',
                                id : id
                            },
                            success : function (response) {
                                table.ajax.reload();
                            }
                        });
                    }
                })
            }
        }

        // $('#boutton').clik(function(e){
        //     e.preventDefault();
        //     $.ajaxSetup({

        //         headers:{
        //             'X-CSRF-TOKEN':
        //              $('meta[name="csrf-token"]').attr('content') 
        //         } 
        //     });
            
        //     $.ajax({
        //         url: "{{route('jobs.store')}}",
        //         method:'post',
        //         data:{
                 
        //          id : $("#id").val(),
        //          title : $("#title").val(),
        //          description : $("#description").val(),
        //          status : $("#status").val(),
        //          attachment : $("#attachment").val(),
        //          price : $("#price").val(),
        //          user_id : $("#user_id").val(),

        //         },
        //         success:function(result){
        //             table.ajax.reload();
        //         }
        //     })

        // });

        $("#formulaire").unbind('submit').bind('submit', function () {
           
            var data = new Formdata();
            jQuery.each(jQuery('#attachment'))[0].files, function(i,attachment){
                data.append('attachment'+i,attachment)

            }
            var form = $(this);
            var title = $("#title").val();
            var description = $("#description").val();
            var status = $("#status").val();
            // var attachment = $("#attachment").val();
            var price = $("#price").val();
            var user_id = $("#user_id").val();
        
            var url = ($("#boutton").text() == "Modifier") ? '{{ route("modifier_Jobs") }}' : '{{ route("jobs.store") }}';
            
            
                $.ajax({
                    url : url,
                    type : 'post',
                    dataType : 'json',
                    data:data,
                    cache:false,
                    contentType:false,
                    processData:false,
                    
                    data : form.serialize(),
                    success : function(response){
                        table.ajax.reload();
                        form[0].reset();
                        $("#boutton").text("Enregistrer");
                    }
                });
            
            return false;
        });
    </script>







@endsection --}}





    

