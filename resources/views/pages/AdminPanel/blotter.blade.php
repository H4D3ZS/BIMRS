@extends('layouts.apps')

@section('content')
    <div class="col-sm-12 text-left ">
    <h1 class="border-bottom border-bot pt-3">Blotters Record</h1>
    </div>
    <div class="main-wrapper col-sm-12 text-left h-100  pr-0 pl-0 " >
        <div class="col-sm-12 pl-0 pr-0 search-bars" >

 <!----------------
    EDIT HERE
 ---------------->


        <div class="topnav navbar navbar">
  <button class="btn btn-success text-white " href="#home" data-toggle="modal" data-target="#blottermodal" id="createNewBlotter">New Blotter Record <i class="fa fa-plus"></i></button>


<!-- New Codes Here -->
<div class="modal fade" id="blottermodal" name="blottermodal" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="modelHeading">Blotter Information</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <div class="modal-body">

            <ul class="nav nav-tabs" style="background: rgb(67, 0, 155);">
               <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#complainants">Complainants</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#respondents">Respondents</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#incident-detail">Incident Detail and Narrative</a>
               </li>
            </ul>

            <div class="tab-content mt-3">
               <!-- Complainants Tab -->
               <div id="complainants" class="tab-pane fade show active">
                  <h5 class="text-info">Adding Complainants</h5>


                     <form action="/blotters" method="POST" id="complainantForm">
   @csrf
   <!-- Your existing form fields with name attributes -->
   <div class="form-row">
                        <div class="form-group col-md-4">
                           <label for="complainant_first_name">First Name</label>
                           <input type="text" id="complainant_firstname" class="form-control">
                        </div>

                        <div class="form-group col-md-4">
                           <label for="complainant_middle_name">Middle Name</label>
                           <input type="text" id="complainant_middlename" class="form-control">
                        </div>

                        <div class="form-group col-md-4">
                           <label for="complainant_last_name">Last Name</label>
                           <input type="text" id="complainant_lastname" class="form-control">
                        </div>
                     </div>


                     <div class="form-group">
                        <label for="birthdate">Birthdate</label>
                        <input type="date" id="complainant_birthdate" class="form-control">
                     </div>

                     <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="complainant_address" class="form-control">
                     </div>

                     <div class="form-group">
                        <label for="contact_number">Contact Number</label>
                        <input type="text" id="complainant_contact_number" class="form-control">
                     </div>
   <button type="type" id="createblotterBtn" class="btn btn-success">Next</button>
</form>




                  <span class="text-danger error-text Complainant_error"></span>
               </div>

               <!-- Respondents Tab -->
               <div id="respondents" class="tab-pane fade">
                  <h5 class="text-info">Adding Respondents</h5>
                  <form>

                  <div class="form-row">
                        <div class="form-group col-md-4">
                           <label for="respondent_first_name">First Name</label>
                           <input type="text" id="respondent_first_name" class="form-control">
                        </div>

                        <div class="form-group col-md-4">
                           <label for="respondent_middle_name">Middle Name</label>
                           <input type="text" id="respondent_middle_name" class="form-control">
                        </div>

                        <div class="form-group col-md-4">
                           <label for="respondent_last_name">Last Name</label>
                           <input type="text" id="respondent_last_name" class="form-control">
                        </div>
                     </div>


                     <div class="form-group">
                        <label for="birthdate">Birthdate</label>
                        <input type="date" id="birthdate" class="form-control">
                     </div>

                     <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" class="form-control">
                     </div>

                     <div class="form-group">
                        <label for="contact_number">Contact Number</label>
                        <input type="text" id="contact_number" class="form-control">
                     </div>



                     <button type="submit" id="saveBtn" class="btn btn-success">Add New Blotter</button>
                  </form>
                  <span class="text-danger error-text Respondent_error"></span>
               </div>

               <!-- Incident Detail Tab -->
               <div id="incident-detail" class="tab-pane fade">
                  <h5 class="text-info">Incident Detail and Narrative</h5>
                  <form action='idnblotter' method="POST">
                     @csrf
                     <div class="form-group">
                        <label for="incident_location">Incident Location</label>
                        <input type="text" name="incident_location" id="incident_location" class="form-control" required>
                        <span class="text-danger error-text incident_location_error"></span>
                     </div>

                     <div class="form-group">
                        <label for="incident_type">Incident Type</label>
                        <input type="text" name="incident_type" id="incident_type" class="form-control" required>
                        <span class="text-danger error-text incident_type_error"></span>
                     </div>

                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label for="date_incident">Date of Incident</label>
                           <input type="date" name="date_incident" id="date_incident" class="form-control" required>
                           <span class="text-danger error-text date_incident_error"></span>
                        </div>

                        <div class="form-group col-md-6">
                           <label for="time_incident">Time of Incident</label>
                           <input type="time" name="time_incident" id="time_incident" class="form-control" required>
                           <span class="text-danger error-text time_incident_error"></span>
                        </div>
                     </div>

                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label for="date_reported">Date Reported</label>
                           <input type="date" name="date_reported" id="date_reported" class="form-control" required>
                           <span class="text-danger error-text date_reported_error"></span>
                        </div>

                        <div class="form-group col-md-6">
                           <label for="time_reported">Time Reported</label>
                           <input type="time" name="time_reported" id="time_reported" class="form-control" required>
                           <span class="text-danger error-text time_reported_error"></span>
                        </div>
                     </div>

                     <div class="form-group">
                        <label for="schedule_date">Date Schedule</label>
                        <input type="date" id="schedule_date" name="schedule_date" class="form-control" required>
                        <input type="text" id="schedule" name="schedule" hidden>
                     </div>

                     <div class="form-group">
                        <label>Status</label><br>
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="status" id="status_ongoing" value="Ongoing">
                           <label class="form-check-label" for="status_ongoing">Ongoing</label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="status" id="status_settled" value="Settled">
                           <label class="form-check-label" for="status_settled">Settled</label>
                        </div>
                        <span class="text-danger error-text status_error"></span>
                     </div>

                     <div class="form-group">
                        <label for="incident_narrative">Incident Narrative</label>
                        <textarea name="incident_narrative" id="incident_narrative" rows="5" class="form-control"></textarea>
                        <span class="text-danger error-text incident_narrative_error"></span>
                     </div>

                     <button type="submit" class="btn btn-success">Save Blotter</button>
                  </form>
               </div>
            </div>

         </div>

         <div class="modal-footer text-white">
         </div>
      </div>
   </div>
</div>


<!-- End -->



<div class="modal fade" id="viewblottermodal" name="viewblottermodal" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="viewmodelHeading"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <div class="topnav navbar navbar">
  <button class="btn btn-success text-white " href="#home" data-toggle="modal" data-target="#blottermodal" id="createNewBlotter">New Blotter Record <i class="fa fa-plus"></i></button>

         <div class="modal-body">
            <table  class="bulk_action dataTables_info table datatable-element table-striped jambo_table bulk_action text-center border no-footer">
               <thead>
                  <tr class="headings">
                     <th class="column-title">Blotter Id</th>
                     <th class="column-title">Status</th>
                     <th class="column-title">Incident Location</th>
                     <th class="column-title">Incident Type</th>
                     <th class="column-title">Incident Date</th>
                     <th class="column-title">Incident Time</th>
                     <th class="column-title">Schedule Date</th>
                     {{-- <th class="column-title">Schedule Time</th> --}}
                  </tr>
               </thead>


               <div class="modal-body">
            <table  class="bulk_action dataTables_info table datatable-element table-striped jambo_table bulk_action text-center border no-footer">
               <thead>
                  <tr class="headings">
                     <th class="column-title">Blotter Id</th>
                     <th class="column-title">Status</th>
                     <th class="column-title">Incident Location</th>
                     <th class="column-title">Incident Type</th>
                     <th class="column-title">Incident Date</th>
                     <th class="column-title">Incident Time</th>
                     <th class="column-title">Schedule Date</th>
                     {{-- <th class="column-title">Schedule Time</th> --}}
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td id="viewblotter_id"></td>
                     <td id="status"></td>
                     <td id="viewincident_location"></td>
                     <td id="viewincident_type"></td>
                     <td id="viewdate_incident"></td>
                     <td id="viewtimeof_incident"></td>
                     <td id="viewschedule_date"></td>
                     {{-- <td id="viewschedule_time"></td> --}}
                  </tr>
               </tbody>
            </table>
            <hr>

            <h5>List of Person Involves</h5>

            <table id="blotter_list-table" class="bulk_action dataTables_info table datatable-element table-striped jambo_table bulk_action text-center border no-footer">
               <thead>
                  <tr class="headings">
                     <th class="column-title">Resident Id</th>
                     <th class="column-title">FullName</th>
                     <th class="column-title">Involvement Type</th>
                     <th class="bulk-actions" hidden colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                     </th>
                  </tr>
               </thead>
               <tbody class="blotter-list-data">


               </tbody>
            </table>
            <h4>Incident Narrative</h4>
            <textarea name="viewincident_narrative" id="viewincident_narrative" rows="10" style="width: 100%; border:none;" disabled></textarea>
            {{-- <form id="blotterform"  name="blotterform" class="modal-input">
            </form> --}}
         </div>



         <div class="modal-footer text-white">
         </div>
      </div>
   </div>
</div>



  <div class="search-container">
    {{-- <form action="/action_page.php"> --}}
      <input class="global_filter" type="text" id="global_filter" placeholder="Search..." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    {{-- </form> --}}
  </div>
</div>


<div class=" col-sm-12 text-left h-100  pr-0 pl-0 pt-2 pb-2 text-white" >
   <div class="row pl-4 pr-4   ">
      <div class="col-sm-12 border border-bot ">
      </div>
   </div>
   <div class="row pt-4 pl-4 pr-4">
      <div class="col-sm-12 overflow-auto display-nones ">




  <table id="blotter-table" class="bulk_action dataTables_info table datatable-element resident table-striped jambo_table bulk_action text-center border dataTable no-footer data-table">
            <thead>
               <tr class="headings">
                  <th class="column-title">Blotter Id </th>
                  <th class="column-title">Blotter Status </th>
                  <th class="column-title">Date Recorded </th>
                  <th class="column-title">Time Recorded  </th>
                  <th class="column-title">Incident Type </th>
                  <th class="column-title">Incident Date </th>
                  <th class="column-title">Incident Time</th>
                  <th class="bulk-actions" hidden colspan="7">
                     <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                  </th>
               </tr>
            </thead>
            <tbody>
               @foreach ($blotter as $blot)
               <tr>
                  <td>{{$blot->blotter_id}}</td>
                  <td>{{$blot->status}}</td>
                  <td>{{$blot->date_reported}}</td>
                  <td>{{$blot->time_reported}}</td>
                  <td>{{$blot->incident_type}}</td>
                  <td>{{$blot->date_incident}}</td>
                  <td>{{$blot->time_incident}}</td>
               </tr>
               @endforeach
            </tbody>
   </table>
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

         <script type="text/javascript">

            $(function () {
                  $.ajaxSetup({
                     headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     }
               });


            // PersonInvolves

            // Adding Complainants
            var complainants_table = $('.complainants-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('personinvolves.index') }}",
                columns: [
                  {data: 'add_complainant', name: 'add_complainant', orderable: false, searchable: false},
                  { data: 'complainant_first_name', name: 'firstname', visible: false},
                  { data: 'complainant_middle_name', name: 'middlename', visible: false},
                  { data: 'complainant_last_name', name: 'lastname', visible: false},

                  {data: 'complainant_birthdate', name: 'birthday', orderable: false, searchable: true},
                  { data: 'complainant_contact_number', name: 'contact'},

                ]

            });

            $('body').on('click', '.addComplainant', function(){
               var resident_id = $(this).data('id');
               $.get("{{ route('personinvolves.index') }}" +'/' + resident_id +'/edit', function (data) {
                  $('.addComplainant' + data.resident_id).trigger('click');
               })
             });

            // Adding Complainants End

            // Adding Respondents
            var respondents_table = $('.respondents-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('personinvolves.index') }}",
                columns: [
                {data: 'add_complainant', name: 'add_respondent', orderable: false, searchable: false},
                  { data: 'respondent_first_name', name: 'firstname', visible: false},
                  { data: 'respondent_middle_name', name: 'middlename', visible: false},
                  { data: 'respondent_last_name', name: 'lastname', visible: false},
                  {data: 'respondent_birthdate', name: 'birthday', orderable: false, searchable: true},
                  { data: 'respondent_contact_number', name: 'contact'},
                ]

            });

            $('body').on('click', '.addRespondent', function(){
               var resident_id = $(this).data('id');
               $.get("{{ route('personinvolves.index') }}" +'/' + resident_id +'/edit', function (data) {
                  $('.addRespondent' + data.resident_id).trigger('click');
               })
             });


            // Blotter and Narrative Report
            var table = $('.data-table').DataTable({
                processing: true,
                dom: 'lrtip',
                serverSide: true,
                ajax: "{{ route('blotters.index') }}",
                columns: [
                  {data: 'action', name: 'action', orderable: false, searchable: false},
                    {data: 'blotter_id', name: 'blotter_id'},
                    {data: 'status', name: 'status'},
                    {   data: 'date_reported', name: 'date_reported'},
                    {  data: 'time_reported', name: 'time_reported'},
                    {   data: 'incident_type', name: 'incident_type'},
                    {     data: 'date_incident', name: 'date_incident'},
                    { data: 'time_incident', name: 'time_incident'}
                ]

            });


            $('#createNewBlotterUser').click(function () {
               $("#saveBtn").attr("enable", false);
                 $('#saveBtn').val("create-blotter");
                 $('#blotter_id').val('');
                 $('#blotterform').trigger("reset");
                 $('#modelHeading').html("Create New Blotter");
                 $(document).find('span.error-text').text('');
                 $('#blottermodal').modal('show');
             });

             $('#createNewBlotter').click(function () {
               $("#saveBtn").attr("disabled", false);
                 $('#saveBtn').val("create-blotter");
                 $('#blotter_id').val('');
                 $('#blotterform').trigger("reset");
                 $('#modelHeading').html("Create New Blotter");
                 $(document).find('span.error-text').text('');
                 $('#blottermodal').modal('show');
             });

             $('body').on('click', '.viewBlotter', function(){
               var blotter_id = $(this).data('id');
               $.get("{{ route('blotters.index') }}" +'/' + blotter_id +'/edit', function (data) {
                  $('#viewmodelHeading').html("View BLotter");
                  $('#status').html(data[0].status);
                  $('#viewblottermodal').modal('show');
                  $('#viewblotter_id').html(data[0].blotter_id);
                  $('#viewincident_location').html(data[0].incident_location);
                  $('#viewincident_type').html(data[0].incident_type);
                  $('#viewdate_incident').html(data[0].date_incident);
                  $('#viewtimeof_incident').html(data[0].time_incident);


                  $('#viewschedule_date').html(data[0].schedule_date);
                  // $('#viewschedule_time').html(data[0].schedule_time);
                  $('#viewincident_narrative').val(data[0].incident_narrative);

                  var len = data[1].length;
                  var tbody = ' <tbody class="blotter-list-data"></tbody>';
                  if(len > 0){
                     $('.blotter-list-data').remove();
                     $('#blotter_list-table').append(tbody);
                     for(var i = 0; i <len;i++){
                        var resident_id = data[1][i].resident_id;
                        var person_involve = data[1][i].person_involve;
                        var involvement_type = data[1][i].involvement_type;
                        var tr = '<tr>'
                        +'<td>'+ resident_id +'</td>'+
                        '<td>'+ person_involve +'</td>'+
                        '<td>'+ involvement_type +'</td>'+
                        '</tr>'
                     $('.blotter-list-data').append(tr);
                     }
                  }
                  else{
                     console.log("No BLotter Data Available");
                  }
               })
             });

             $('body').on('click', '.editBlotter', function () {
               var blotter_id = $(this).data('id');
               $(document).find('span.error-text').text('');
               $("#saveBtn").attr("enable", false);
               $('#blotterform').trigger("reset");
               $.get("{{ route('blotters.index') }}" +'/' + blotter_id +'/edit', function (data) {
                  $('#modelHeading').html("Edit Blotter");
                  $('#saveBtn').val("edit-blotter");
                  $('#blottermodal').modal('show');
                  $('#blotter_id').val(data[0].blotter_id);
                  $('#incident_location').val(data[0].incident_location);
                  $('#incident_type').val(data[0].incident_type);
                  $('#date_incident').val(data[0].date_incident);
                  $('#time_incident').val(data[0].time_incident);
                  $('#date_reported').val(data[0].date_reported);
                  $('#time_reported').val(data[0].time_reported);
                  $('#schedule_date').val(data[0].schedule_date);
                  // $('#schedule_time').val(data.schedule_time);
                  $('input[name^="status"][value="'+data[0].status+'"').prop('checked',true);
                  $('#incident_narrative').val(data[0].incident_narrative);


                  var complainantLen = data[1].length;
                  for(var i=0;i<complainantLen; i++){
                     if(data[1][i].involvement_type == "Complainant" ){
                        $('.addComplainantp' + data[1][i].resident_id).prop('checked',true);
                        $('.addComplainant' + data[1][i].resident_id).prop('checked',true);
                     }
                  }

                  var respondentLen = data[1].length;
                  for(var i=0;i<respondentLen; i++){
                     if(data[1][i].involvement_type == "Respondent" ){
                        $('.addRespondentp' + data[1][i].resident_id).prop('checked',true);
                        $('.addRespondent' + data[1][i].resident_id).prop('checked',true);
                     }

                  }


               })
            });

         $('#saveBtn').on("click", function (e) {


                e.preventDefault();
                $(this).attr("disabled", true);
                $.ajax({
                  data: $('#blotterform').serialize(),
                  url: "{{ route('blotters.store') }}",
                  type: "POST",
                  dataType: 'json',
                  beforeSend:function(){
                     $(document).find('span.error-text').text('');
                  },
                  success: function (data) {
                     if(data.status == 0){
                        // $('.incident_location_error').html("The incident location is required.");
                        $.each(data.error, function(prefix, val){
                           $('span.'+prefix+'_error').text(val[0]);
                        });
                        $('#saveBtn').attr("enable", false);
                     }
                     else{
                     $(document).find('span.error-text').text('');
                     $('#blotterform').trigger("reset");
                      $('#blottermodal').modal('hide');
                      $('.error-msgg').html("");
                      table.draw();
                     }
                  },
                  error: function (data) {
                      console.log('Error:', data);
                      $('#saveBtn').html('Save Changes');
                  }
              });
            });

            $('body').on('click', '.deleteBlotter', function () {

            var blotter_id = $(this).data("id");
            if(confirm("Are You sure want to delete !")){
               $.ajax({
                  type: "DELETE",
                  url: "{{ route('blotters.store') }}"+'/'+blotter_id,
                  success: function (data) {
                     table.draw();
                  },
                  error: function (data) {
                     console.log('Error:', data);
                  }
            });
            }


         });
               // Blotter and Narrative Report End




         //New Blotter Functions

$('#createblotterBtn').click(function () {
   var formData = $('#complainantForm').serialize();
   $.ajax({
      type: "POST",
      url: "/blotter/complainant",
      data: formData,
      success: function (response) {
         console.log(response);
         // You can handle the success response here
      },
   });
});



         </script>







      </div>
   </div>
</div>













    </div>

@endsection


