@extends('layouts.default')
@section('content')
    <section>
        <div class="row">

            <div class="large-12 columns">
                <img src="{{asset('images/hero-header.jpg')}}" alt="">
            </div>
        </div>
    </section>

    <section>

        <div class="row">

            <div class="large-12 columns large-centered">

                <div class="large-4 columns">
                    <label>Company
                        <select>
                            <option value="husker">BMW</option>
                            <option value="husker">AUDI</option>
                            <option value="husker">Benzs</option>

                        </select>
                    </label>

                </div>

                <div class="large-3 columns">
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

                <div class="large-3 columns">
                    <fieldset>

                        Private :
                        <input type="radio" name="pokemon" value="Red" id="pokemonRed" required><label for=""></label> <br>
                        Company :

                        <input type="radio" name="pokemon" value="Red" id="pokemonRed" required><label for=""></label>

                    </fieldset>
                </div>
                <div class="large-2 columns">
                    <fieldset class="large-6 columns">


                    </fieldset>
                </div>


            </div>
        </div>
    </section>
@stop