@extends('layouts.default')

@section('content')

    <section>

        <div class="box">
            <div class="row">

                <div class="large-12 columns large-centered">

                    <div class="large-4 columns">
                        <label>Company
                            <select>
                                <option value="husker">BMW</option>
                                <option value="husker">AUDI</option>
                                <option value="husker">Benzs</option>
                                <option value="husker">Toyota</option>
                                <option value="husker">Ford</option>

                            </select>
                        </label>

                    </div>

                    <div class="large-4 columns">
                        <label>Model
                            <select>
                                <option value="husker">Model A</option>
                                <option value="husker">Model B</option>
                                <option value="husker">Model C</option>
                                <option value="husker">Model d</option>
                                >
                            </select>
                        </label>

                    </div>

                    <div class="large-2 columns middle">

                        <fieldset class="gap10">
                            <input id="checkbox1" type="checkbox"><label for="checkbox1">Private </label> <br>
                            <input id="checkbox2" type="checkbox" required><label for="checkbox2">Commercial</label>
                        </fieldset>


                    </div>
                    <div class="large-2 columns">
                        <fieldset class="gap10">

                            <div class="button large">Submit now</div>

                        </fieldset>
                    </div>


                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="row ">

            <div class="large-12 columns">
                <div class=" large-3 columns ">
                    <div class="box-filter">
                        <h5><strong>Search by Filter</strong></h5>
                        <fieldset class="">
                            <div class="large-8 columns">
                                <label for="checkbox1">Lease </label>
                            </div>
                            <div class="large-4 columns">
                                <input id="checkbox1" type="checkbox">
                            </div>

                            <div class="large-8 columns">
                                <label for="checkbox1">Finance </label>
                            </div>
                            <div class="large-4 columns">
                                <input id="checkbox1" type="checkbox">
                            </div>

                            <div class="large-8 columns">
                                <label for="checkbox1">Buy a Car </label>
                            </div>
                            <div class="large-4 columns">
                                <input id="checkbox1" type="checkbox">
                            </div>

                            <hr>
                            <h5><strong>Price</strong></h5>

                            <div class="slider" data-slider data-initial-start='50' data-end='200'>
                                <span class="slider-handle" data-slider-handle role="slider" tabindex="1"></span>
                                <span class="slider-fill" data-slider-fill></span>
                                <input type="hidden">
                            </div>

                            <hr>

                            <h5><strong>Fuel</strong></h5>

                            <ul class="vertical menu">
                                <li>Petrol</li>
                                <li>Diseal</li>
                                <li>Hybrid (Petrol/Electric)</li>
                                <li>Autogas</li>
                                <li>Electric</li>
                            </ul>


                        </fieldset>


                    </div>
                </div>

                <div class="large-9 columns">
                    <div class="box-filter">

                        <div class="media-object">
                            <div class="media-object-section">
                                <img src="{{asset('images/product-1.jpg')}}" alt="">
                            </div>
                            <div class="media-object-section">
                                <p><strong>Lorem ipsum dolor sit.</strong></p>
                                <p><strong>Benze</strong>, <strong>Berlin</strong>,<strong>+49 5458545</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto autem
                                    consequuntur ea excepturi id ipsa!</p>
                            </div>

                            <div class="button ">Submit now</div>
                        </div>



                    </div>


                </div>
            </div>
        </div>
    </section>

@stop