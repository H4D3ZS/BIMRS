@extends('layouts.apps')
@section('content')

<div class="col-sm-12 text-left ">
   <h1 class="border-bottom border-bot pt-3">Dashboard</h1>
</div>


<div class="row pt-4 pl-4 pr-4">
   <!-- <div class="col-sm-8"> -->
      <div class="table-responsive border">
         <div class="col-sm-12 bg-dark text-white pt-2 pb-2 text-left dashboard-margin" >
            <h3 class="mb-0"><b>Barangay  Current Member</b></h3>
         </div>
         <table class="table table-striped jambo_table bulk_action text-center">
            <thead>
               <tr class="headings">
                  <th class="column-title">Name </th>
                  <th class="column-title">Position </th>
                  <th class="column-title">Year of Services </th>
               </tr>
            </thead>
            <tbody>
       ($brgy_official)
            <tr class="even pointer">
                <td class=" ">{{ $brgy_official->name }}</td>
                <td class=" ">{{ $brgy_official->position }}</td>
                <!-- <td class=" ">{{ $brgy->year_of_service }}</td> -->
            </tr>

</tbody>

         </table>
      </div>
   </div>

   </div>
</div>
@endsection
