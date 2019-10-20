@extends('layouts.app')
@section ('usecss')

<link rel="stylesheet" href="{{ asset('/css/profile.css') }}"/>
@endsection
@section('content')


<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile ">
            <form method="post">
                <div class="row h-75">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    
                        <div class="profile-head md-6">
                                    <h3>
                                        Kshiti Ghelani/*Here goes the user->id */
                                    </h3>
                                    <h4 style="color:blue;">
                                        Web Developer and Designer/*here goes department*/
                                    </h4>
                        </div>
                        <div class="w-75 p-3 ml-5"  style = "margin-left:100px">
                            <ul class="nav nav-tabs col inline" id="myTab" role="tablist">
                                <li class="nav-item" style = "margin-left:25px">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                                <p style = "font-size:15px; margin-left:150px; margin-top:50px">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32</p>
                            </ul>
                        
                    </div>
                   
                </div>
            </form>           
     </div>


@endsection
