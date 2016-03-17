@extends('layouts.master')

@section('content')
    @parent
    <section class="">
        <div class="wrapper">
            <form action="#" method="post">
            <table>
                <thead>
                <tr>
                    <th><label for="name">Identifiant</label></th>
                    <th><label for="password">Mot de passe</label></th>
                    <th><label for="token">Token</label></th>
                    <th>Fichier</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td> <input type="text" name="name" id="name" value="" tabindex="1" /></td>
                    <td> <input type="password" name="password" id="password" value="" tabindex="1" /></td>
                    <td> <p>vjdhfkjvghfkjv</p> </td>
                    <td><input type="file" name="nom" /></td>
                    <td><input type="submit" value="Enregistrer" /></td>
                    <td><input type="button" value="supprimer"/></td>
                </tr>

                </tbody>
            </table>
            </form>
        </div>
    </section>

@stop
@section('content')
@stop