@extends('Layouts.app')

@section('content')
    <form action="{{ route('student.store') }}" method="POST"> 
        @csrf
   <label for="name"> Name</label> 
   <br/>
    <input type="text" name="name"
    placeholder="Enter your name" ><br/>
    <label for="address">Address</label> 
   <br/>
    <input type="text" name="address" placeholder="Your Address" ><br/>
    <label for="email"> Email</label> 
    <br/>
    <input type="text" id="email" name="email" placeholder="Enter your email"><br/>
    <button type="submit">Save</button>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#email").blur(function () { 
                let email = $(this).val();
                checkname(email);
            });

            function checkname(email) {
                
                $('#email-check').remove(); 
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{ route("student.email.validate") }}',
                    data: {
                        email: email
                       
                    },
                    success: function(data)
                    {
                        if(data.success == false){
                            $(".email-validate").after("<div id='email-check' class='text-danger'>"+data.message+"</div>");
                        }
                        else{
                            $(".email-validate").after("<div id='email-check' class='text-success'>"+data.message+"</div>");
                        }
                    }
                });
            }
        });
    </script>

@endsection