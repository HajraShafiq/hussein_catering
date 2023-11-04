
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
                                    <a
                                        class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600"
                                        href="javascript:;"
                                        @click="toggleCode('code9')"
                                    >
                                        <span class="flex items-center">
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5 ltr:mr-2 rtl:ml-2"
                                            >
                                                <path
                                                    d="M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                />
                                                <path
                                                    opacity="0.5"
                                                    d="M13.9868 5L10.0132 19.8297"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                />
                                                <path
                                                    d="M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                />
                                            </svg>
                                            Code
                                        </span>
                                    </a>
                                </div>
                                <div class="mb-5">
                                    <form class="space-y-5" method="post">
                                    @csrf
                                        <div>
                                            <label >Name</label>
                                            <input type="text" placeholder="Product Name" class="form-input" name="name" required />
                                        </div>
                                        <div>
                                            <label for="ctnSelect1">Categories selection</label>
                                            <select id="ctnSelect1" name="cate_id" class="form-select text-white-dark" required>
                                                <option value="1">Open this select menu</option>
                                                <option  value="1">One</option>
                                                <option  value="1">Two</option>
                                                <option  value="1">Three</option>
                                            </select>
                                        </div>
                                       
                                        <div>
                                            <label >Price</label>
                                            <input type="number" id="ctnTextarea" name="price" class="form-textarea" placeholder="Enter Price" required>
                                        </div>

                                        <div>
                                            <label >Product Information</label>
                                            <textarea  rows="3" name="description" class="form-input" placeholder="Description" required></textarea>
                                        </div>

                                        <div>
                                            <label for="ctnFile">Media File</label>
                                            <input
                                                id="ctnFile"
                                                type="file"
                                                name="media_file"
                                                class="rtl:file-ml-5 form-input p-0 file:border-0 file:bg-primary/90 file:py-2 file:px-4 file:font-semibold file:text-white file:hover:bg-primary ltr:file:mr-5"
                                                required
                                            />
                                        </div>
                                        <button type="submit" class="btn btn-primary !mt-6">Submit</button>
                                    </form>
                                </div>
                               
                            </div>

                        
                       
                  
                         
                         
                        

                          
                        </div>
                    </div>
                    <!-- end main content section -->

                </div>

                @endsection