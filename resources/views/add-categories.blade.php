
@extends('layouts.authlayout')

@section('content')

                <div class="animate__animated p-6" :class="[$store.app.animation]">
                    <!-- start main content section -->
                    <div x-data="form">
                        <ul class="flex space-x-2 rtl:space-x-reverse">
                            <li>
                                <a href="javascript:;" class="text-primary hover:underline">Forms</a>
                            </li>
                            <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                                <span>Basic</span>
                            </li>
                        </ul>
                        <div class="grid grid-cols-1 gap-6 pt-5 lg:grid-cols-2">
                            <!-- Basic -->
                         
                      

                         
                           

                            <!-- form controls -->
                            <div class="panel lg:col-span-2">
                                <div class="mb-5 flex items-center justify-between">
                                    <h5 class="text-lg font-semibold dark:text-white-light">Form controls</h5>
                                
                                </div>
                                <div class="mb-5">
                                    <form class="space-y-5" method="post">
                                    @csrf
                                        <div>
                                            <label for="Name">Email address</label>
                                            <input id="Name" type="text" placeholder="Type categories" class="form-input" name="name" required />
                                        </div>
                                      
                                     
                                        <button type="submit" name="submit" class="btn btn-primary !mt-6">Submit</button>
                                    </form>
                                </div>
                               
                            </div>

                        
                       
                  
                         
                         
                        

                          
                        </div>
                    </div>
                    <!-- end main content section -->

                </div>

                @endsection