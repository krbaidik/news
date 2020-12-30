@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div>
                    <table border="1" width="100%" style="text-align: center;">
                        <tr>
                            <th>Category</th>
                            <th colspan="2">view</th>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td><a href="/category">add</a></td>
                            <td><a href="/viewcategory">View</a></td>
                        </tr>
                        <tr>
                            <td>News</td>
                            <td><a href="/news">add</a></td>
                            <td><a href="/viewnews">View</a></td>
                        </tr>
                    </table>
                    <br>
                    <h2><a href="/trash" style="color: black;"><i class="fa fa-trash"></i> Trash</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
