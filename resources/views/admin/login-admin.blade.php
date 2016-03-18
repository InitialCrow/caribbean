@extends('layouts.master')

@section('content')
    @parent
            <section class="event-login">
                <form action="#" method="post">
                    <div>
                        <label for="name">Identifiant:</label>
                        <input type="text" name="name" id="name" value="" tabindex="1" />
                    </div>
                    <div>
                        <label for="name">Mot de passe:</label>
                        <input type="password" name="password" id="password" value="" tabindex="1" />
                    </div>
                    <div>
                        <input type="submit" value="Submit" />
                    </div>
                    {{@crsf_field()}}
                </form>
            </section>
        </div>
    </section>
@stop

