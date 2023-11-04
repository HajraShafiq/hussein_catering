
@extends('layouts.authlayout')

@section('content')

                <div class="animate__animated p-6" :class="[$store.app.animation]">
                    <!-- start main content section -->
                    <div x-data="sorting">
                        <div class="panel flex items-center overflow-x-auto whitespace-nowrap p-3 text-primary">
                            <div class="rounded-full bg-primary p-1.5 text-white ring-2 ring-primary/30 ltr:mr-3 rtl:ml-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5">
                                    <path
                                        d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    />
                                    <path
                                        opacity="0.5"
                                        d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    />
                                </svg>
                            </div>
                            <span class="ltr:mr-3 rtl:ml-3">Documentation: </span>
                            <a href="https://www.npmjs.com/package/simple-datatables" target="_blank" class="block hover:underline">
                                https://www.npmjs.com/package/simple-datatables
                            </a>
                        </div>
                        <div class="panel mt-6">
                            <h5 class="mb-5 text-lg font-semibold dark:text-white-light md:absolute md:top-[25px] md:mb-0">Order Sorting</h5>
                          <br><br>
                            <table id="myTable" class="table-hover whitespace-nowrap">

<thead>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Category</th>
    <th>Price</th>
    <th>Description</th>
    <th>Media File</th>
    <th>Created at</th>
    <th>Action</th>

</tr>
</thead>
<tbody>
                            @foreach($record as $record)
                                        <tr role="row" class="odd">

                                        <td tabindex="0" class="sorting_1">{{ $record->id }}</td>
                                                <td tabindex="0" class="sorting_1">{{ $record->name }}</td>
                                                <td tabindex="0" class="sorting_1">{{ $record->cate_id }}</td>
                                                <td tabindex="0" class="sorting_1">{{ $record->price }}</td>
                                                <td tabindex="0" class="sorting_1">{{ $record->description }}</td>
                                                <td tabindex="0" class="sorting_1">{{ $record->media_file }}</td>
                                                <td tabindex="0" class="sorting_1">{{ $record->created_at }}</td>
                                                
                                                <td tabindex="0" class="sorting_1"><a href={{"deleteproduct/".$record->id}}>Delete</a> | <a href="">Edit</a></td>
                                        
                                       
                                            </tr>
                                            @endforeach
                                 
</tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end main content section -->

                </div>

           @endsection