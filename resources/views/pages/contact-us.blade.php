@extends('layouts.default')

@section('content')

    <section>

        <div class="row">

            <div class="large-8 columns text-center large-centered" >
                <h1 class="text-color">Get in Touch with Us</h1>
                <p class="text-light">Got Questions? Please fill in the following form. We will reply within 24 hours. If you need help
                    faster, please feel free to contact our chat or phone support.

                <hr class="gap20">
            </div>



        </div>

       <section>
           <div class="row">

               <div class="large-10 columns large-centered">

                   <div class="large-8 columns">
                       <h4 class="text-light"><strong>Enquiry Form
                           </strong></h4>


                       </p>
                       <form>
                           <label>Name :
                               <input type="text" placeholder="" aria-describedby="">
                           </label>

                           <label>Email :
                               <input type="text" placeholder="" aria-describedby="">
                           </label>

                           <label>Phone :
                               <input type="text" placeholder="" aria-describedby="">
                           </label>


                           <label>
                               Message
                               <textarea placeholder="None" rows="8"></textarea>
                           </label>


                           <a class=" button large">Submit</a>

                       </form>
                   </div>


                   <div class="large-4 columns">
                       <h4 class="text-light"><strong>Address</strong></h4>

                       <h5>Creditcar24</h5>
                       <p>Address 1, <br>
                           Address 2, <br>
                           City, Zip - 0000 <br>
                       </p>
                   </div>


               </div>


           </div>
       </section>


    </section>
@stop